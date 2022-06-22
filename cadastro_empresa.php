<?php
// includes basicos
include_once './includes/conexao.php';
include_once './includes/head.php';
include_once './includes/header.php';

if (isset($_POST['submit'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $cnpj = $_POST['cnpj'];
  $estado = $_POST['estado'];
  $senha = $_POST['senha'];

$result = mysqli_query($conn, "INSERT INTO empresa(nome,email,cnpj,estado,senha) 
VALUES ('$nome','$email','$cnpj','$estado','$senha')");

header('Location: login_empresa.php');
}
?>


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2>
            Cadastro
          </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_container">

           <form action="cadastro_empresa.php" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">Nome da empresa</label>
                <input type="text" class="form-control" id="exampleInputName1" name="nome" id="nome">


              </div>
              
        
              <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" name="email" id="email" class="form-control" id="exampleInputEmail1">
              </div>

              <div class="form-group">
                <label for="exampleInputName1">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" class="form-control" id="exampleInputName1">
              </div>
              
   
             
              


              <div class="form-group ">
                <label for="inputState">Selecione o estado</label>
               <div id="estados">
<label for="estados">
     <select id="estado" name="estado">
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    <option value="EX">Estrangeiro</option>
</select>
              </div>
              </div>
              </label>
              <div class="form-group">
    <label for="inputAddress">Cidade</label>
    <input type="text" class="form-control" id="cidade">
  </div>      
        
      
              <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" >
  </div>
  
  <div class="form-group">
    <label for="inputAddress2">Bairro</label>
    <input type="text" class="form-control" id="inputAddress2">
  </div>



              <div class="form-group">
                 <label for="exampleInputPassword1">Senha</label>
                   <input type="password" class="form-control" name="senha" id="senha">
             </div>

             
             <div class="form-group">
                 <label for="exampleInputPassword1">Confirme a sua senha</label>
                   <input type="password" class="form-control" name="senha" id="senha">
             </div>
             
              <button type="submit" name="submit" id="submit" class="">Finalizar</button>
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