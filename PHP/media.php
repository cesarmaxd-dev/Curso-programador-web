<?php
$a = readline("Digite a primeira nota:");
$b = readline("Digite a segunda nota:");

$media = (($a * 3.5) + ($b * 7.5)) / 11;

echo "MEDIA =" . number_format($media, 5, ".", "");
