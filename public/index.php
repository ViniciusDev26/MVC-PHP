<?php

require __DIR__ . '/../vendor/autoload.php';

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($caminho, $rotas)){
    $controller = $rotas['/error-404'];
    instanciarObj($controller);
    exit();
}

$controller = $rotas[$caminho];
instanciarObj($controller);

// $controlador = new $controller();
// $controlador->processaRequisicao();

function instanciarObj($obj){
    $controlador = new $obj();
    $controlador->processaRequisicao();
}