<?php

// Vamos utilizar o while quando não sabemos quando o loop se encerrará. Quando é uma decisão um pouco mais complexa. 
//Já o for é utilizado quando sabemos o momento de saída do loop. Normalmente, quando temos um caso de uso de variável contadora.

$contador = 1;
while ($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}



// for ($contador = 1; $contador <= 15; $contador++) {
//     echo "#$contador" . PHP_EOL;
// }