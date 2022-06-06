<?php

//conexão com o banco de dados
include_once '../includes/_dados.php';

// include do head
include_once '../includes/_head.php';

// SQL de consulta
$sql = "SELECT * FROM categorias";
$resultado= mysqli_query($conexao,$sql);
$total-mysql_num_rows($resultado);

//inclui o menu da página
include_once '_menu.php';

?>

<main>

<h2> Administração das categorias</h2>

<a href="categoria-salvar.php">Inserir</a>
<hr>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>


<?php

if($resultado){
    while($dado = mysqli_fetch_array($resultado))  {
        ?>
   <tr>
       <td><?php echo $dado['CategoriaID'];?></td>
       <td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['CategoriaID'];?>"><?php echo $dado['Nome'];?></td>
       <td><a href="categoria-processa.php?acao=excluir&id=<?php echo $dado['CategoriaID'];?>">Excluir</a></td>
    </tr>
    <?php
    }   
}else{
    ?>
    <tr>
        <td colspan="3">Resultados não encontrados </td>
</tr>
<?php
}
?>
<tr>
    <td colspan="3">Total de registros: <?php echo $total;?></td>
</tr>
</table>

</main>

<?php
include_once '_footer.php';

?>