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
           Login
          </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_contaier">
         
          
          <form action="TestLogin.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="e-mail">
              </div>
        
              <div class="form-group">
                 <label for="exampleInputPassword1">Senha</label>
                   <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="senha">
             </div>

            <div id="entrar">
              <button type="submit" name="submit" class="">Entrar</button>
            </div>

            <div id="cadastro">
              <button class=""><a href="cadastro_empresa.php">Cadastra-se</button>
</div>
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