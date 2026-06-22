<?php

if (isset($_COOKIE['tema'])) {
    $tema = $_COOKIE['tema'];
} else {
    $tema = "claro";
}

if ($tema == "escuro") {
    $corFundo = "#222";
    $corTexto = "#FFF";
} else {
    $corFundo = "#FFF";
    $corTexto = "#222";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema</title>

    <style>
        body {
            background-color: <?php echo $corFundo; ?>;
            color: <?php echo $corTexto; ?>;
            transition: 0.3s;
        }
    </style>
</head>

<body>

    <h1>Tema Atual: <?php echo $tema; ?></h1>

    <a href="tema.php?cor=claro">Tema Claro</a>

    <br><br>

    <a href="tema.php?cor=escuro">Tema Escuro</a>

</body>

</html>