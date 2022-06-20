<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <script language="JavaScript" type="text/javascript" src="cidades-estados-1.4-utf8.js"></script>
    <title>Document</title>
</head>
<body>
    <fieldset class="grupo">
        <div class="campo">
            <form method="POST" action="cadastro.php">
            <label>Nome da Empresa:</label><input type="text" name="empresa" id="login" required><br>
            <label>CNPJ:</label><input type="text" name="cnpj" id="cnpj" required><br>
            
        </div>
    </fieldset>

    <fieldset class="grupo">
        <div class="campo">
            <label>CEP:</label><input type="number" name="cep" id="cep" required><br>
            <label>Endereco:</label><input type="text" name="endereco" id="endereco"><br>
            <label>Bairro:</label><input type="text" name="bairro" id="bairro"><br>
       
            <label>Estado:</label><input type="text" name="estado" id="estado"><br>
            <label>Município:</label><input type="text" name="municipio" id="municipio"><br>

        </div>

    </fieldset>

    <button class="botao" type="submit"><a href= "login_empresa.html">Cadastra-se</a></button>
</body>
</html>