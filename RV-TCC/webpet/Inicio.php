<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/theme.css" type="text/css"> 
</head>

<body class="justify-content-center w-100" id="img_slide">
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
  <div class="container w-75 h-60">
    <div class="row">
      <div class="col-md-12">
        <div class="carousel slide" data-ride="carousel" id="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="img/Adote_um_amigo_2.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/adote.png">              
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid w-100" src="../../SU18_MarvelArtwork_D23com.jpg">
            <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="lista_animais.php">
            <img class="img-fluid rounded-circle p-3" src="img/gato.jpg">
            <h1 class="">
              <center>Gatos</center>
            </h1>
          </a>
        </div>
        <div class="col-md-4">
          <a href="lista_animais.php">
            <img class="img-fluid rounded-circle p-3 " src="img/cao.jpg">
            <h1 class="">
              <center>Cães</center>
            </h1>
          </a>
        </div>
        <div class="col-md-4">
          <a href="lista_animais.php">
            <img class="img-fluid rounded-circle p-3 d-block pi-draggable" src="img/coelho.jpg">
            <h1 class="">
              <center>Outros</center>
            </h1>
          </a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>

</html>