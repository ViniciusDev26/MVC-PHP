<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

require __DIR__ . '/../../vendor/autoload.php';

class ListarCursos extends ControllerHtml implements InterfaceRequest
{
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }
    public function processaRequisicao(): void
    {
        echo $this->renderizarHtml('cursos/list.php', [
            "titulo" => "Lista de cursos",
            "cursos" => $this->repositorioDeCursos->findAll()
        ]);
    }
}