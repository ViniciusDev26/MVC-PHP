<?php

namespace Alura\Cursos\Controller;

class FormularioLogin extends ControllerHtml implements InterfaceRequest
{
    public function processaRequisicao(): void
    {
        echo $this->renderizarHtml("login/auth.php",[
            "title" => "Sistema - login",
            "titulo" => "Login"
        ]);
    }
}