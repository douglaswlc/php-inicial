<?php

$peso = 115;
$altura = 1.83;
$imc = $peso / $altura ** 2;

if ($imc <=  18.5) {
    echo "Seu IMC é de $imc, você está abaixo do peso ideal!" . PHP_EOL;
} elseif ($imc <= 24.9) {
    echo "Seu IMC é de $imc, você está no peso normal!" . PHP_EOL;
} elseif ($imc <= 29.9) {
    echo "Seu IMC é de $imc, você está acima do peso (sobrepeso)" . PHP_EOL;
} elseif ($imc <= 34.9) {
    echo "Seu IMC é de $imc, você está acima do peso (Obesidade I)" . PHP_EOL;
} elseif ($imc <= 39.9) {
    echo "Seu IMC é de $imc, você está acima do peso (Obesidade II)" . PHP_EOL;
} else {
    echo "Seu IMC é de $imc, você está acima do peso (Obesidade III)" . PHP_EOL;
}
