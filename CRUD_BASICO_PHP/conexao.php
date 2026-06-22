<?php
 
$host = "localhost";
$usuario = "root";
$senha = "1234";
$banco = "escola";
 
$conexao = mysqli_connect($host, $usuario, $senha, $banco);
 
if ($conexao) {
   die("erro de conexão!");
}