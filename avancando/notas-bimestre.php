<?php

$notasBimestre1 = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6,
    'Mike' => 10
];

$notasBimestre2 = [
    'Ana' => 10,
    'João' => 10,
    'Maria' => 9,
    'Roberto' => 5,
    'Mike' => 9
];

// Pega a diferença do primeiro parâmetro para o segundo, porém usa só os valores para comparação.
var_dump(array_diff($notasBimestre1,$notasBimestre2));

// Dessa forma usa a chave para a operação
var_dump(array_diff_key($notasBimestre1,$notasBimestre2));

// Dessa forma usa as chaves e os valores para comparar
var_dump(array_diff_assoc($notasBimestre1,$notasBimestre2));

// vamos pegar somente os nomes(chaves) doa alunos que faltaram na segunda prova(array)
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
 var_dump(array_keys($alunosFaltantes));

// Inverte as chaves com os valores
var_dump(array_flip($alunosFaltantes));

// Combina dois arrays, um de chaves e outro de valores
$nomesAlunos = array_keys($alunosFaltantes); // chaves
$notasAlunos = array_values($alunosFaltantes); // alunos
var_dump(array_combine($nomesAlunos, $notasAlunos));