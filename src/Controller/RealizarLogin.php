<?php
namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;

use Alura\Cursos\Infra\EntityManagerCreator;

class RealizarLogin implements InterfaceRequest
{
    private $usuarioRepository;
    
    public function __construct()
    {
        $entityManager = (new EntityManagerCreator)->getEntityManager();
        $this->usuarioRepository = $entityManager->getRepository(Usuario::class);
    }

    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        if(is_null($email) || $email === false){
            echo "Email inválido";
            return;
        }

        $usuario = $this->usuarioRepository->findOneBy(['email' => $email]);

        if(is_null($usuario) || !$usuario->senhaEstaCorreta($senha)){
            echo "E-mail ou senha Inválidos";
            return;
        }

        header('location:/listar-cursos');
    }
}