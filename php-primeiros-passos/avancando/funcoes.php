<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Valor de depósito inválido!");
    }
    return $conta;
}

// o & antes da variável muda o array "original" e não só uma "cópia" dele. Não é tão confiável, só está ai por fins didáticos.
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}
