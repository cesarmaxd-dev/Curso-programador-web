<?php
$a = readline("Digite a primeira nota:");
$b = readline("Digite a segunda nota:" );

$media = ($a + $b) / 2;

if ($media >= 7){
    echo "Aprovado";
} else{
    echo "Reprovado";
}
?>