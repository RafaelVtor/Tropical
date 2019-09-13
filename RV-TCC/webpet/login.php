<?php 
session_start() ?>
<!DOCTYPE html>
<html>
<head>
  <title>Inicio</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/theme.css">

</head>
<body id="body_login">

  <nav class="navbar navbar-expand-md bg-primary navbar-dark" id="barra_superior">
    <div class="container-fluid" id="navbar-brand">
      <img class="img-fluid d-block" src="img/home.png" width="50px">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"> </span> 
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa d-inline fa-lg fa-bookmark-o"></i> Informações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa d-inline fa-lg fa-envelope-o"></i> Contacts</a>
          </li>
        </ul>
        <a class="btn navbar-btn btn-primary ml-2 text-white" href="login.php"><i class="fa d-inline fa-lg fa-user-circle-o"></i> login</a>
      </div>
    </div>
  </nav>



<?php 
  if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
  }
 ?>


<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-70 p-b-15">
        <form class="login100-form validate-form" method="POST" action="validar_login.php">
          <span class="login100-form-title p-b-60">
            Bem Vindo
          </span>
          <span class="login100-form-avatar">
            <img src="http://boshkids.co.uk/static/img/login-avatar.png" alt="AVATAR">
          </span>

          <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
            <input class="input100" type="text" name="usuario">
            <span class="focus-input100" data-placeholder="nome"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
            <input class="input100" type="password" name="senha">
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>

          <div class="container-login100-form-btn">
           <input type="submit" name="enviar" value="Entrar" class="login100-form-btn">
          </div>

          <ul class="login-more p-t-50">
            <li class="m-b-8">
              <span class="txt1">
                Esqueceu 
              </span>

              <a href="#" class="txt2">
                login / senha?
              </a>
            </li>

            <li>
              <span class="txt1">
                Não é cadastrado ainda?
              </span>

              <a href="cadastro_usuario.php" class="txt2">
                Cadastre-se
              </a>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </div>





</body>
</html>