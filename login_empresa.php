<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <title>Document</title>
</head>
<body>
    <fieldset class="grupo">
        <div class="campo">
            <form method="POST" action="login.php">
            <label >Login:</label><input type="text" name="login" id="login" required><br>
            <label>Senha:</label><input type="password" name="senha" id="senha"><br>

            </form>

            <div class="botoes">
                <div class="botao_d">
                    <button class="botao_d" type="submit"><a href="cadastro_empresa.php">Cadastre-se</a></button>
                </div>

                <div class="botao_e">
                    <button class="botao_e" type="submit">Entrar</button>
                </div>

            </div>
        </div>
    </fieldset>

</body>
</html>