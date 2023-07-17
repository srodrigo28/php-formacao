<?php

echo "<h1> Hello Array php 4</h1>";

$notas = [
    'Vinicius' => 6,
    'Maria' => 8,
    'Ana' => 7,
    'Bia' => 10
];

foreach ($notas as $acumulador => $item){
    echo " <i>$acumulador <i> em portugês é: <b> $item </b>" . "<hr>";
}

echo "<b>Total: <b>" . count($notas) . PHP_EOL;

echo "<br> <hr>";

echo "Alguém tirou 10? " .

"<br> ";

var_dump(in_array(10, $notas)) . "< /hr>";

// array_key_exists = verifica se a achave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula