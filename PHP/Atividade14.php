<?php
$nota = readline("Digite a nota do aluno ");
if($nota >= 9){
    echo "Conceito: A";
} elseif($nota >= 7){
    echo "Conceito: B";
}elseif($nota >= 5){
    echo "Conceito: C";
}else{
    echo "Conceito D";
}
?>