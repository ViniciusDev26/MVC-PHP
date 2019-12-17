<?php

namespace Alura\Cursos\Controller;

class Formularioadd implements InterfaceRequest
{
    public function processaRequisicao(): void
    {
        $titulo = "Adicionar Curso";
        require __DIR__ . "/../../view/cursos/add.php";
    }
}