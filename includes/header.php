<header class="header_section">
<div class="container">
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="./index.php">
            <img src="images/logo.png.png" alt="">
            <span>
              MCultural
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> Empresa </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="promocao.php"> Promoções</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buy.php"> Produtos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news.php"> Novidades </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contato</a>
                </li>
              </ul>

              <form class="form-inline" method="POST" action="conexao.php">
                <input type="text" name="pesquisar" placeholder="PESQUISAR">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
              <!-- <form class="form-inline ">
                <input type="search" placeholder="Pesquisar">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form> -->

            <!--<h1>Pesquisar Cursos</h1>
<form method="POST" action="pesquisar.php">
    Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
    <input type="submit" value="ENVIAR">
</form> -->

              <div class="login_btn-contanier ml-0 ml-lg-5">
                <a href="login_empresa.php">
                  <img src="images/user.png" alt="">
                  <span>
                    Login
                  </span>
                </a>
              </div>
            </div>
          </div>

        </nav>
      </div>
    </header>