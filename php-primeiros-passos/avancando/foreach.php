<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Douglas',
        'saldo' => 1600
    ],
    '123.456.789-11' => [
        'titular' => 'Widdian',
        'saldo' => 18000
    ],
    '123.456.789-12' => [
        'titular' => 'Davi',
        'saldo' => 40000
    ]
];

// adicionando mais contas

$contasCorrentes['123.456.789-13'] = [
    'titular' => 'Glaucia',
    'saldo' => 50000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . " " . $conta['saldo'] . PHP_EOL;
}
