<?php
$senha_correta = 1234;
$senha = "";

while($senha != $senha_correta){
    echo "Digite a sua senha: ";
    $senha = trim(fgets(STDIN));
    if ($senha != $senha_correta) {
        echo "Senha incorreta! Tente novamente" . "\n";
    }
}
echo "  Senha Correta! Seja bem-vindo ao sistema senac.";
?> 