<?php

$nota = readline("Digite a sua nota :");

if ($nota > 0) {
    if ($nota <= 100) {
        if ($nota > 85) {
            echo "Excelente";
        } else if ($nota < 69) {
            echo "Bom";
        } else if ($nota > 50) {
            echo "Suficiente";
        } else {
            echo "insuficiente";
        }
    } else {
        echo "Digite um numero maior que 101";
    }
} else {
    echo "Digite um número maior que 0";
}
