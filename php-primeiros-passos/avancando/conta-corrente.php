<?php

$conta1 = [
    'titular' => 'Douglas',
    'saldo' => 1600
];
$conta2 = [
    'titular' => 'Widdian',
    'saldo' => 18000
];
$conta3 = [
    'titular' => 'Davi',
    'saldo' => 40000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
