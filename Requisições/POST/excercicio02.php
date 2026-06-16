<?php
$login = $_POST['Login'];
$senha = $_POST['senha'];

if ($login == 'admin' && $senha == 1234){
    echo "LOgin realizado com secesso";
} else{
    echo "Usuario ou senha incorreto";
}
?>