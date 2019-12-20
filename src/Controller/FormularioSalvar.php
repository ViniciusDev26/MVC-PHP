<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class FormularioSalvar implements InterfaceRequest
{

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao():void
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

        $curso = new Curso();
        $curso->setDescricao($descricao);


        if(!is_null($id) && $id !== false){
            $curso->setId($id);
            $this->entityManager->merge($curso);
        }else{
            $this->entityManager->persist($curso);
        }
        $this->entityManager->flush();

            
        header('Location:/listar-cursos', false, 302);
        
        
    }
}