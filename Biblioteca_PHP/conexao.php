<?php
$conexao =mysqli_connect(
    "localhost",
    "root",
    "root",
    "biblioteca"
);

if (!$conexao) {
    die ("ERRO NA CONECÇÂO:" .  mysqli_connect_error());
}