<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$curso = $_POST["curso"];
echo "Bem vindo, $nome" . "\n";
echo "Seu email é $email" . "\n";
echo "Sua idade: $idade" . "\n";
if($curso == "web"){
echo "Você se inscreveu nop curso Programador  Web da instituição SENAC PR";
} else if($curso == "sistemas"){
    echo "Você se inscreveu no curso programador de sistemas da instituição SENAC PR";
} else {
    echo "Você se inscreveu no curso de instagram para negocios da instituição SENAC PR";
}
?>