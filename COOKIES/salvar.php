<?php
$usuario = $_POST ['Ususario'];

setrawcookie("Usuario", $usuario, time() + 3600);

header ("Location: bemvindo.php");
exit();


?>