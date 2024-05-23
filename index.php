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


$n = readline("Sobre qué número quieres calcular?");
while(!(isValidNumber($n))) {
    echo "Buen intento! Nah, en serio...".PHP_EOL;
    $n = readline("Sobre qué número quieres calcular?");
}

$file = getNewFile($n);

writeSquare($file,(int)$n);



?>