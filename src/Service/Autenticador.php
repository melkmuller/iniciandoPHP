<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): bool
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Usuário logado no sistema";
            return true;
        } else {
            echo "Senha incorreta";
            return false;
        }
    }
}