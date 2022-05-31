<?php


require_once 'funcoes.php';

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

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);
unset($contasCorrentes['123.456.789-12']); // remove account

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 2000);
$contasCorrentes['123.456.789-13'] = sacar($contasCorrentes['123.456.789-13'], 30000);


foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf $titular $saldo");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>

</html>