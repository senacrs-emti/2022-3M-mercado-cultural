<?php
include_once('./includes/conexao.php');
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$result_msg_contato = "INSERT INTO contato(nome, telefone, email, mensagem, created) VALUES ('$nome', '$telefone', '$email', '$mensagem', NOW())";
$resultado_msg_contato = mysqli_query($conn, $result_msg_contato);

include_once './includes/head.php';
include_once './includes/header.php';
?>

<p>Mensagem Enviada</p>

<?php
include_once './includes/footer.php';
?>
