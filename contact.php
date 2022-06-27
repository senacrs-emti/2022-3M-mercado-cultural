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

          <form action="contact.php" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
              </div>
              <div class="form-group">
                <label for="exampleInputNumber1">Número de telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" class="form-control" name="email" id="email">
              </div>
             
              <div class="form-group">
                <label for="exampleInputMessage">Mensagem</label>
                <input type="text" class="form-control" name="mensagem" id="mensagem">
              </div>
              <button type="submit" class="">Enviar</button>
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