<?php
// includes basicos
include_once './includes/conexao.php';
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

          <form action="salvar_mensagem.php" method="POST">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome">
              </div>
              <div class="form-group">
                <label for="telefone">Número de telefone</label>
                <input type="text" class="form-control" name="telefone">
              </div>

              <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" name="email">
              </div>
             
              <div class="form-group">
                <textarea for="mensagem" name="mensagem">Mensagem</textarea>
              </div>
              <button type="submit" name="submit">Enviar</button>
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