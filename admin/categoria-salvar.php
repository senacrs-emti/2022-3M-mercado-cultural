<?php

//conexão com o banco de dados
include_once '../includes/_dados.php';

// include do head
include_once '../includes/_head.php';

if (isset($_GET['id']) || !empty($_GET['id'])) {

    //captura o id
    $id = $_GET['id'];

    //consulta os dados
    $sql = "SELECT * FROM categorias WHERE CategoriaID = ".$id;
    $resultado = mysqli_fetch_array($conexao,$sql);

    //parametro que converte as colunas em campos
    $dados= mysqli_fetch_array( $resultado ,MYSQLI_ASSOC);

}else{
    $id='';
    $dados['Nome'] = '';
    $dados['Descricao'] = '';
}

include_once '_menu.php';
?>

<main>

<h2>Administraçaão de categorias</h2>
<a href="categoria-lista.php">Listagem</a>
<hr>
<form action="categoria-processa.php" method="post">
     <input type="text" value="salvar" name="acao">
     <input type="text" name="id" value="<?php echo $id;?>"><br>
     <label for="nome">Nome:</label><br>
     <input type="text" id="nome" value="<?php echo $dados['Nome'];?>"><br>
     <label for="descricao">Descrição:</label><br>
     <textarea id="descricao" name="descricao"><?php echo $dados['Descricao'];?></textarea><br>
     <hr>
     <input type="submit" value="Enviar">
</form>

</main>

<?php
include_once '_footer.php';

?>