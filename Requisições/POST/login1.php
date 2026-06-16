<?php
session_start();
$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];

if($usuario ==  "admin" && $senha === "1234"){
    $_SESSION['usuario'] = $usuario;
    echo "Login realizado com sucesso";
} else{
    echo "Usuario ou senha invalidos";
}
?>