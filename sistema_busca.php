<?php 
// conexao com o banco de dados
include_once './includes/conexao.php';
//
//$pagina = (isset ($_GET ['pagina']))? $_GET['pagina'] : 1;

$valorpesquisar = $_GET['pesquisar'];

$resultproduto = "SELECT * FROM produtos WHERE produto_nome LIKE '%$valorpesquisar%' ";
$resultadoproduto = mysqli_query($conn, $resultproduto);

$totalproduto = mysqli_num_rows($resultadoproduto);


while( $dados = mysqli_fetch_array($resultadoproduto, MYSQLI_ASSOC)){
    ?>
    <h2><?php echo $dados['produto_nome'];?></h2>
    <p></p>
    <img src="" alt="">
    <?php
    echo '<pre>';
    print_r($dados);
    echo '</pre>';
}
