<?php
// includes basicos
include_once './includes/conexao.php';
include_once './includes/head.php';
include_once './includes/header.php';
?>

<body>

    <?php
    $produto_id = $_GET['produto'];
    $sql = "SELECT * FROM produtos AS p INNER JOIN paises AS pa ON p.pais_id = pa.PaisID WHERE p.produto_ID = {$produto_id}";
    $result = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_assoc($result);
    $produto = $_GET['produto'];
    $sql = "SELECT * FROM `produtos` AS p INNER JOIN paises AS pa ON p.pais_ID = pa.PaisID WHERE produto_ID = {$produto}";
    $res = mysqli_query ($conn, $sql);
    $reg = mysqli_fetch_assoc($res);

    echo '<pre>';
    print_r($reg);
    echo '</pre>';
    
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
    
                        <h6><?php echo 'R$ '.$dados['produto_valor'].',00'?></h6>
                        <h6><?php echo $dados['pais_ID'].$dados['Nome']?></h6>
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
        padding: 10px 0px 0px 90px;
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
            align-items: center;
            position: relative;
            display:static;
        }

        .detail-prod{
            float: right;
            font-size: 1.2em;
            border: 1px;
            margin-bottom: 1em;
            padding: 0.2em 0.6em;
            position:relative;
            display:static;
        }

        h6{
            color: #696969;
            
        }
        h5{

           

        }
        .btn_container{
            margin: 50px 0px 0px 0px;
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