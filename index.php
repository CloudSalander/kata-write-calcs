<?php

function isValidNumber(string $n): bool {
    return is_numeric($n) && $n >= 0; 
}
//Resource type hint no lo tengo claro como va.
function getNewFile(string $n) {
    $file = fopen("calculos_".$n.".txt",'w');
    fwrite($file,"Número: ".$n.PHP_EOL);
    return $file;
}

function writeSquare($file, int $n): void {
    $square = $n**2;
    fwrite($file,"Quadrat: ".$square.PHP_EOL);
}

function writeCube($file, int $n): void {
    $cube = $n**3;
    fwrite($file,"Cube: ".$cube.PHP_EOL);
}

function writeFactorial($file,int $n): void {
    $factorial = getFactorial($n);
    fwrite($file,"Factorial: ".$factorial.PHP_EOL);
}

function getFactorial(int $n): int {
    if($n == 0) return 1;
    else return $n*getFactorial($n-1);
}


$n = readline("Sobre qué número quieres calcular?");
while(!(isValidNumber($n))) {
    echo "Buen intento! Nah, en serio...".PHP_EOL;
    $n = readline("Sobre qué número quieres calcular?");
}

$file = getNewFile($n);

writeSquare($file,(int)$n);
writeCube($file,(int)$n);
writeFactorial($file,(int)$n)


?>