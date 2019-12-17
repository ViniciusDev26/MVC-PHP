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
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITAZE_STRING);
        $curso = new Curso();
        $curso->setDescricao($_POST["descricao"]);
        $this->entityManager->persist($curso);
        $this->entityManager->flush();
        header('Location:/listar-cursos', false, 302);
    }
}