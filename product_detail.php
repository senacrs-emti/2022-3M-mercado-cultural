<?php
// includes basicos
include_once './includes/conexao.php';
include_once './includes/head.php';
include_once './includes/header.php';
?>

<body>

    <?php
    
    $sql = 'SELECT * FROM produtos, paises';
    $result = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_assoc($result);
    
    ?>

    <div class="container2">
        <div class="product">
            <div class="prod-detail">
                <div class="img-product">
                    <!-- foto do produto  -->
                    <img src="images/Prod/<?php echo $dados['imagem'];?>" alt="">

                </div>
                <!-- detalhes escritos sobre o produto, como o nome, sobre o produto em si, preço, etc. etc.  -->
                <div class="detail-prod">
                    <div class="detail">
                        <h6><?php echo $dados['produto_ID'];?></h6>
                        <h3><?php echo $dados['produto_nome'];?></h3>
                        
                        <h5><?php echo $dados['descricao']?></h5>

                        <h6><?php echo 'R$ '.$dados['produto_valor'].',00';?></h6>
                        <h6><?php echo $dados['pais_ID'];?></h6>
                        
                    </div>
                    <!-- botao para compra do produto  -->
                    <div class="btn_container">
                        <a href="#">Comprar agora</a>
                        
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- style da pagina produto detalhe  -->
    <style>
        .container2 {
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        position: static;
        border: 0;
        padding: 80px 0px 0px 0px;
        }

        .product{
            display: inline-block;
        }

        .img-product{
            float: left;
            font-size: 1.2em;
            border: 1px;
            margin-bottom: 1em;
            padding: 0.2em 0.6em;
            position:relative;
            display:inline;
        }

        .detail-prod{
            float: right;
            font-size: 1.2em;
            border: 1px;
            margin-bottom: 1em;
            padding: 0.2em 0.6em;
            position:relative;
            display:inline;
        }

        h6{
            color: #696969;
            
        }
        h5{

            align-items: center;

        }
        .btn_container{
            margin: 100px 0px 0px 0px;
        }

        .btn_container a{
            margin: 0px 10px 0px 0px;
            padding: 5px;
            background-color: black;
            color: white;
            border: 10px;
        }
 

    </style>


    <?php
    
    
    
    
    
    
    
    
    
    ?>















</body>

<?php
include_once './includes/footer.php';
?>