<?php
$contador = 1;
$contador_positivo = 0;

while($contador <= 5) {
    echo "Digite o {$contador} número" ;
    $numero = trim(fgets(STDIN));

if($numero > 0) {
    $contador_positivo++;
}

$contador++;
}
echo "Quantidade de número positivos" . $contador_positivo . ".\n";
?>