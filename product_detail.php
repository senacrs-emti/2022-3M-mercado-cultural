<?php
// includes basicos
include_once './includes/conexao.php';
include_once './includes/head.php';
include_once './includes/header.php';
?>

<body>
    <div class="container2">
        <div class="product">
            <div class="img-product">

                <img src="images/Prod/<?php echo "p_alm_1.png";?>" alt="">

            </div>

            <div class="detail-prod">
                <div class="detail">
                    <h3><?php echo "Nome do produto"?></h3>
                    <?php echo "Mix de Frutas"?>
                </div>

                <div class="btn_container">
                    <a href="">Buy Now</a>
                    
                </div>

            </div>

        </div>
    </div>

    <style>
        .container2 {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        position: static;
        border: 10px;
        }

        .img-product{
            display: flex;
            flex-direction: row;
            align-items: left;
        }
 

    </style>


    <?php
    
    
    
    
    
    
    
    
    
    ?>















</body>