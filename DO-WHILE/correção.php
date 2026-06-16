<?php 
echo "Escolha uma opção:";
$opcao = trim(fgets(STDIN));

if($opcao == 1) {
    echo "Você escolheu CADASTRAR";
} else if($opcao == 2) {
    echo "Você escolheu CONSULTAR";
} else if ($opcao == 3) {
    echo "VocÊ escolheu SAIR";
} else {
    echo "";
}
?>