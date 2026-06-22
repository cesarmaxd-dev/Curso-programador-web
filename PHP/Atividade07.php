<?php
$numero = readline("Digite um numero");

if ($numero > 0) {
    echo "Positivo";
} else if ($numero == 0) {
    echo "Este numero é neutro";
} else {
    echo "Negativo";
}
