<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="salvar_usuario.php" method="POST">
            <div class="form_group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Digit aqui seu noome">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite aqui seu email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="senha" id="senha" name="senha" placeholder="Digite aqui sua senha">
            </div>
            <button class="btn btn-block">Cadastrar</button>
        </form>
        <div class="nav-links">
            <p>Ja tem conta? <a href="index.php"></a></p>
        </div>
        <div class="dica-navegaçao">
            <strong>Flux</strong>
        </div>
    </div>
</body>

</html>