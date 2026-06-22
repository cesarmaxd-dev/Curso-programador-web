<?php 
$cor = $_GET['cor'];

setcookie("tema", $cor, time() + 3600);

header("location: Branco-preto.php");