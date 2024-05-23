<?php

function isValidNumber(string $n): bool {
    return is_numeric($n) && $n >= 0; 
}

$n = readline("Sobre qué número quieres calcular?");
while(!(isValidNumber($n))) {
    echo "Buen intento! Nah, en serio...".PHP_EOL;
    $n = readline("Sobre qué número quieres calcular?");
}

$file = fopen("calculos_".$n.".txt",'w');


?>