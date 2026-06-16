<?php  
$soma = 0;

do{
    echo "Digite um numero para somar ou 0 para sair : ";
    $numero = trim(fgets(STDIN));
     $numero += $numero;
} while ($numero != 0);
echo "A soma dos valores digitados é:" . $soma . "/n";
?>