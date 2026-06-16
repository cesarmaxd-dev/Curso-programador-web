<?php 
$quantidade = 0;
do{
    echo "Digite a nota (-1 para encerrar)";
    $nota = trim(fgets(STDIN));
    if ($nota != -1){
        $soma += $nota;
        $quantidade++;
    }
} while ($nota != -1);
if ($nota > 0) {
    $media = $nota / $quantidade;
    echo "Media das notas:" . $media . ".\n";
} else{
    echo "Nenhuma nota valida foi informada" . ".\n";
}

?>