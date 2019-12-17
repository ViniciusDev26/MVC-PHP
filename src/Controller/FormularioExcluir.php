<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class FormularioExcluir implements InterfaceRequest
{
    private $entityManager;

    public function __construct(){
        $this->entityManager = (new EntityManagerCreator)->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        // $id = $_GET['id'];
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if(is_null($id) || $id === false){
            header('Location: /listar-cursos');
            return;
        }

        $cursosRepository = $this->entityManager->getRepository(Curso::class);
        $curso = $cursosRepository->find($id);

        $this->entityManager->remove($curso);
        $this->entityManager->flush();
        header('Location: /listar-cursos');
    }
}