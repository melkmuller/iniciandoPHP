<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

// rsort = reverse sort, ordena de forma inversa
rsort($notas);
var_dump($notas);

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

// asort = mantém as chaves
asort($notas);
var_dump($notas);

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

//arsort = reverso e mantendo s chaves
arsort($notas);
var_dump($notas);

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

// ksort = ordena usando as chaves e krsort = chaves e reversa
ksort($notas);
var_dump($notas);

// echo var_dump(is_array($notas));
// echo var_dump(array_is_list($notas));

/*
    foreach ($notas as $aluno => $nota) {
        if ($aluno === 'Vinicius') {
            return true;
            }
    }
*/
// Pode ser substituído por: (verifica se a chave existe no array)
array_key_exists('Vinicius',$notas);

// Verifica se a chave existe dentro do array e verifica se não é nulo o valor
echo "Vinicius fez a prova?" . PHP_EOL;
var_dump(isset($notas['Vinicius']));

// Para saber se algum valor existe dentro do array
echo "Alguém tirou 10?" . PHP_EOL;
var_dump(in_array(10, $notas, true));

// Para saber em qual chave está o valor procurado
echo "Quem tirou 10?" . PHP_EOL;
echo array_search(10, $notas, true);