<?php
// includes basicos
include_once './includes/conexao.php';
include_once './includes/head.php';
include_once './includes/header.php';
?>


              

    


  <!-- health section -->

  <div class="box2">
 <div class="bt2n_container">

  <section class="health_section layout_padding">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        produtos variados 
      </h2>


      <div class="carousel-wrap layout_padding2">
      <div class=" owl-1o">
        
      <?php
                $sql = "SELECT * FROM produtos";
                $result = mysqli_query($conn, $sql);
                $contador =4;
                $linha = 1;
                $situacao = "active";
                while($dados = mysqli_fetch_assoc($result)){
                
                ?>

<div class="img-box">
<div class="col-lg-12 col-md-7">
                      <a href="product_detail.php?produto=<?php echo $dados['produto_ID']?>">
                        <img src="images/Prod/<?php echo $dados['imagem'];?>" alt="<?php echo $dados['produto_nome'];?>">
                      </a>
                    </div>
                    <a href="">
                  Buy Now
                </a>
              </div>
             
          <div class="item" <?php echo $situacao;?>>

              <?php
                
                  ?>
                  <div>
               

                    <?php
                  // soma o contador
                  $contador++;
                
                  
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