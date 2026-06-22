<?php
$valor_compra = readline("Digite aqui o valor da compra: ");
$desconto = (float) 0.1;
if ($valor_compra > 100) {
    $valor_final = $valor_compra - ($valor_compra * $desconto);
    echo "O valor final das sua compra é de : $valor_final \n";
} else {
    echo "O valor da compra não é maior que 100 reais";
}
