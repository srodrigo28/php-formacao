<?php

echo "<h1> Hello Array php </h1>";

$notas = [
    'Vinicius' => 6,
    'Maria' => 8,
    'Ana' => 7,
    'Bia' => 9
];

// $notas = [
//     'um',
//     'dois',
//     'tres'
// ];

krsort($notas);
var_dump($notas);

if(is_array($notas)){
    echo "Sim é um array " . PHP_EOL;
}

echo "<hr>";

var_dump(array_is_list($notas));