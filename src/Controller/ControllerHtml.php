<?php

namespace Alura\Cursos\Controller;

abstract class ControllerHtml
{
    public function renderizarHtml(string $caminhoView, array $dados): string
    {
        extract($dados);
        ob_start();
        include __DIR__ . "/../../view/header-html.php";
        require __DIR__ . "/../../view/" . $caminhoView;
        include __DIR__ . "/../../view/footer-html.php";

        $html = ob_get_clean();

        return $html;
    }
}