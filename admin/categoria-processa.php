<?php

include_once '../includes/_dados.php';

$acao = $_REQUEST ['acao'];
$id = $_REQUEST['id'];

switch ($acao){
    case 'excluir':

        $sql="DELETE FROM categorias WHERE Cateria ID=". $id;

        mysqli_query($conexao,$sql);

        header('location:./categoria-lista.php');

        break;


    case 'salvar':
        $nome=$_POST['nome'];
        $descricao = $_POST['descricao'];

        if (!isset($_POST['id']) || empty($_POST['id'])){
           $sql="INSERT INTO `categorias`(´Nome´,'Descricao') VALUES ('".$nome."','".$descricao."')";
        }else{
            $sql = "UPTADE 'categorias' SET 'Nome'='".$nome."','Descricao'='".$descricao."' WHERE 'CategoriaID='".$id."' ";
        }


        mysqli_query($conexao,$sql);

        header('location: ./categoria-lista.php');
        break;

    }

        