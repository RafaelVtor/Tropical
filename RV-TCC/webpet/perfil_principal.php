
<?php 
	include("conexao.php");
	$consulta = "SELECT * FROM animal";
	$con = $mysqli->query($consulta) or die($mysqli->error); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	
</head>
<body>

<div>
	<div class="w3-bar w3-green">
 		<a href="login.php" class="w3-bar-item w3-button w3-mobile">Inicio</a>
	  	<a href="#" class="w3-bar-item w3-button w3-mobile">Sobre</a>
	 	<a href="#" class="w3-bar-item w3-button w3-mobile">Contato</a>
	</div>

	<div class="div_imagem_perfil">		
		<img src="img/perfil.png">

		<div class="div_menu_lateral">		
		<ul class="nav nav-pills nav-stacked">
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="#">Editar perfil</a></li>
		  <li><a href="#">Intereces</a></li>
		  <li><a href="#">mensagens</a></li>
		</ul>
	</div>
	</div>
	<div>
		M
	</div>
	
	<div id="div_tabela" class="table-responsive">
	  <table class="table">
	    <thead>
	      <tr>
	        <th>Nome</th>
	        <th>Tipo</th>
	        <th>Idade</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php while ($dado = $con->fetch_array()) { ?>
      <tr>
        <td><?php echo $dado["nome"]; ?></td>
        <td><?php echo $dado["tipo"]; ?></td>
        <td><?php echo $dado["idade"];?></td>
      </tr>      
      		<?php } 

      		?>
    </tbody>
	  </table>
	</div>	
</div>
</body>
</html>