<?php

namespace Alura\Banco\Service;

class ControladorDeBonificacoes
{
    private int $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(\Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes = 0;
    }
}