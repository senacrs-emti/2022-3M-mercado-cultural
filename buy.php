<?php
// includes basicos
include_once './includes/conexao.php';
include_once './includes/head.php';
include_once './includes/header.php';
?>


              

    


  <!-- health section -->

  <section class="health_section layout_padding">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        produtos variados 
      </h2>


      <div class="carousel-wrap layout_padding2">

      <?php
                $sql = "SELECT * FROM produtos";
                $result = mysqli_query($conn, $sql);
                $contador = 1;
                $linha = 1;
                $situacao = "active";
                while($dados = mysqli_fetch_assoc($result)){
                // valida a opcao co item
                if( $contador == 1 ){
                  
                  if( $linha > 1 ){
                    $situacao = "";
                  }
                ?>

        <div class="owl-carousel owl-1o">
          <div class="item" <?php echo $situacao;?>>
            <div class="box2">
              <div class="bt2n_container">
              <?php
                }
                  ?>
                    <div class="img-box">
                      <a href="produtos-lista.php?pais=<?php echo $dados['produto_id']?>">
                        <img src="images/Prod/<?php echo $dados['imagem'];?>" alt="<?php echo $dados['produto_nome'];?>">
                      </a>
                    </div>

                    <?php
                  // soma o contador
                  $contador++;
                  // faz o reset do valor
                  if( $contador > 4 ){
                    $contador = 1;
                    $linha++;
                  }
                  // escreve o contador
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>







          
 

    
  
  </section>

  <?php
// includes basicos
include_once './includes/footer.php';
?>