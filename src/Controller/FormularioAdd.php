<?php

namespace Alura\Cursos\Controller;

class Formularioadd extends ControllerHtml implements InterfaceRequest
{
    public function processaRequisicao(): void
    {
        echo $this->renderizarHtml('cursos/add.php', [
            'titulo' => "Adicionar Curso"
        ]);
    }
}