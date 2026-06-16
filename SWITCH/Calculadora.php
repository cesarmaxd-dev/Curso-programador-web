<?php
$n1 = readline ("Digite o primeiro numero:");
$n2 = readline ("Digite o segundo numero:");

$opcao = readline ("1-Soma\n2-Subtração\n3-Multiplicação\n4-Divisão\n Escolha:");
switch($opcao){
    case 1:
    $soma = $n1 + $n2;
   echo "O resultado da soma: $soma";
   break;
   case 2:
   $subtracao = $n1 - $n2;
   echo "O resultado da subtração foi: $subtracao";
   break;
   case 3:
   $mult = $n1 * $n2;
   echo "O resultado da multiplicação foi: $mult";
   break;
   case 4:
   $div = $n1 / $n2 ;
   echo "O resultado da divisão foi: $div";
   break;
}

?>