<?php

namespace Alura\Cursos\Controller;

class NotFound implements InterfaceRequest
{
    public function processaRequisicao(): void
    {
        $titulo = "404 Page not found";
        require __DIR__ . "/../../view/error/NotFound.php";
    }
}