<?php
    session_start();
    //print_r($_SESSION);
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login_empresa.php');
    }else{

    }
    $logado = $_SESSION['email'];

include_once('./includes/conexao.php');
include_once './includes/head.php';
include_once './includes/header.php';
?>   
<nav>
    <h1 class="txt-sistema">Acessou o Sistema</h1>
    <h3 class="txt-sistema">Bem Vindo <u><?php echo $logado;?></u></h3>
    <button><a href="sair.php">Sair</a></button>
</nav>

<?php 
 include_once './includes/footer.php';
 ?>