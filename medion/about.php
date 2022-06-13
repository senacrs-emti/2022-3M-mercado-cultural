<!DOCTYPE html>
<html>


<?php
include_once '../includes/head.php';
include_once '../includes/header.php';
?>
    <!-- end header section -->
  </div>

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="custom_heading-container ">
        <h2>
         Empresa
        </h2>
      </div>

      <div class="img-box">
        <img src="images/about-medicine.png" alt="">
      </div>
      <div class="detail-box">
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a page when looking
          at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
          opposed to using 'Content here, content here', making it
        </p>
       
      </div>
    </div>
  </section>

  <!-- end about section -->





  <footer class="footer-distributed">

    <div class="footer-left">
    
        <h3>Mercado<span>Cultural</span></h3>
    
        <p class="footer-links">
            <a href="#">Home</a>
            ·
            <a href="#">Contact</a>
        </p>
    
        <p class="footer-company-name">Mercado Cultural &copy; 2022</p>
    </div>
    
    <div class="footer-center">
    
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">mercadocultural@gmail.com
            </a></p>
        </div>
    
    </div>
    
    <div class="footer-right">
    
        <p class="footer-company-about">
            <span>Sobre a Empresa</span>
            Mercado Cultural é uma loja de vendas de produtos culturais para cada país escolhido pelo cliente.
        </p>
    
        <div class="footer-icons">
    
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
    
        </div>
    
    </div>
    
    </footer>  

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(".owl-2").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
</body>

</html>