<?php

$peso = 100;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc, você está ";

if ($imc < 18.5) {
    echo "abaixo do peso." . PHP_EOL;
}
else if ($imc >= 18.5 && $imc < 25) {
    echo "com peso normal." . PHP_EOL;
}
else if ($imc >= 25 && $imc < 30) {
    echo "em sobrepeso" . PHP_EOL;
}
else {
    echo "em obesidade." . PHP_EOL;
}