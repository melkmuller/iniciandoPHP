<?php

$idade = 16;
$numeroDePessoas = 0;

echo "Você só pode entrar se tiver a partir de 18 anos \nou a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18)
    echo "Você tem $idade anos." . PHP_EOL;

else if ($idade >= 16 && $numeroDePessoas > 1)
    echo "Você tem $idade anos, está companhado(a). Pode acompanhar." . PHP_EOL;

else
    echo "Você só tem $idade anos. Desacompanhado não pode entrar." . PHP_EOL;


