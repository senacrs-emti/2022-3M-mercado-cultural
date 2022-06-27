<?php
// includes basicos
include_once './includes/conexao.php';

if (isset($_POST['submit'])) {
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$result_msg_contato = "INSERT INTO contato(nome,telefone,email,mensagem,created) VALUES ('$nome', '$telefone', '$email', '$mensagem', NOW()";
$resultado_msg_contato = mysqli_query($conn, $result_msg_contato);
}

include_once './includes/head.php';
include_once './includes/header.php';
?>


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2>
           Contato
          </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_contaier">

          <form action="contact.php" method="POST">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
              </div>
              <div class="form-group">
                <label for="telefone">Número de telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone">
              </div>

              <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" name="email" id="email">
              </div>
             
              <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <input type="text" class="form-control" name="mensagem" id="mensagem">
              </div>
              <button name="submit" type="submit">Enviar</button>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- end contact section -->

 

  <!-- footer section -->
 <?php 
 include_once './includes/footer.php';
 ?>