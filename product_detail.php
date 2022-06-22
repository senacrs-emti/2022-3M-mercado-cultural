<?php
// includes basicos
include_once './includes/conexao.php';
include_once './includes/head.php';
include_once './includes/header.php';
?>

<body>
    <div class="container2">
        <div class="product">
            <div class="prod-detail">
                <div class="img-product">

                    <img src="images/Prod/<?php echo "p_alm_1.png";?>" alt="">

                </div>

                <div class="detail-prod">
                    <div class="detail">
                        <h3><?php echo "Mixed fruit drops"?></h3>
                        <?php echo "Balas de Mix de Frutas"?>
                    </div>

                    <div class="btn_container">
                        <a href="">Buy Now</a>
                        
                    </div>

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
        border: 0;
        }

        .product{
            display: inline-block;
        }

        .img-product{
            height: 50%;
            float: left;
        }

        .detail-prod{
            height: 50%;
        }
 

    </style>


    <?php
    
    
    
    
    
    
    
    
    
    ?>















</body>

<?php
include_once './includes/footer.php';
?>