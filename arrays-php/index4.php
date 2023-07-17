<?php

echo "<h1> Hello Array php 4</h1>";

$notas = [
    'Vinicius' => 6,
    'Maria' => 8,
    'Ana' => 7,
    'Bia' => 9
];

foreach ($notas as $acumulador => $item){
    echo " <i>$acumulador <i> em portugês é: <b> $item </b>" . "<hr>";
}

echo "<b>Total: <b>" . count($notas) . PHP_EOL;

echo "<br> <hr>";

// foreach($notas as $aluno => $nota){
//     if($aluno === "Ana"){
//         return true;
//     }
// }

var_dump(array_is_list($notas));
echo "<br> <hr>";
var_dump(array_key_exists('Ana', $notas));