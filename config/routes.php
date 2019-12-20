<?php

use Alura\Cursos\Controller\{
    FormularioLogin,
    RealizarLogin,
    ListarCursos,
    FormularioAdd,
    FormularioSalvar,
    FormularioEditar,
    FormularioExcluir,
    NotFound
};

return [
    '/login' => FormularioLogin::class,
    '/realizar-login' => RealizarLogin::class,
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioAdd::class,
    '/salvar-curso' => FormularioSalvar::class,
    '/editar-curso' => FormularioEditar::class,
    '/excluir-curso' => FormularioExcluir::class,
    '/error-404' => NotFound::class
];