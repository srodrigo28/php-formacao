<?php

echo "<h1> Hello Array php </h1>";

$array = [
    'Vinicius' => 6,
    'Maria' => 8,
    'Ana' => 7,
    'Bia' => 9
];

foreach ($array as $acumulador => $item){
    echo " <i>$acumulador <i> em portugês é: <b> $item </b>" . "<hr>";
}

echo "<b>Total: <b>" . count($array) . PHP_EOL;

echo "<br><hr>";