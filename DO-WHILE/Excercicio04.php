<?php 
$n = readline ("Digite um valor para a tabuada");
$contador = 1;
while($contador <= 10){
    $mult = $n * $contador;
    echo "$n x $contador = $mult \n";
    $contador++;
}
?>