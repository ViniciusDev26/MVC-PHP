<?php

use Alura\Cursos\Controller\NotFound;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\FormularioAdd;
use Alura\Cursos\Controller\FormularioSalvar;
use Alura\Cursos\Controller\FormularioExcluir;

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioAdd::class,
    '/salvar-curso' => FormularioSalvar::class,
    '/excluir-curso' => FormularioExcluir::Class,
    '/error-404' => NotFound::class
];