<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class FormularioEditar extends ControllerHtml implements InterfaceRequest
{

    private $repositoryCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositoryCursos = $entityManager->getRepository(Curso::class);
    }

    public function processaRequisicao():void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if(is_null($id) || $id === false){
            header('Location: /listar-cursos');
            return;
        }

        echo $this->renderizarHtml("cursos/add.php", [
            "curso" => $this->repositoryCursos->find($id),
            "titulo" => "Alterar Curso"
        ]);
    }
}