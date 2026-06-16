<?php 
$usuario = $_POST ['usuario'];
$senha = $_POST['senha'];
echo "$usuario";
if($usuario == "admin" && $senha == "1234"){
    $_SESSION ["usuario"] = $usuario;

    header("Location: painel.php");
    exit();
} else {
    echo "Usuario ou senha invalidos";
}
?>