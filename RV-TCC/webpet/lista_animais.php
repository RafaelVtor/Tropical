<?php 
	include("conexao.php");
	$consulta = "SELECT * FROM animal";
	$con = $mysqli->query($consulta) or die($mysqli->error);
	 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Animais</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

  	<link rel="stylesheet" href="css/theme.css" type="text/css">
  	<link rel="stylesheet" href="css/estilo.css" type="text/css">

  	<style>
		table {
		    border-collapse: collapse;
		    width: 100%;
		}

		th, td {
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {background-color: #f2f2f2;}
	</style>



</head>
<body>
	<nav class="navbar navbar-expand-md bg-primary navbar-dark" id="barra_superior">
	    <div class="container-fluid" id="navbar-brand">
	      <a href="inicio.php"><img class="img-fluid d-block" src="img/home.png" width="50px"></a>
	      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
	      	<span class="navbar-toggler-icon"> </span> 
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
	        <a class="btn navbar-btn btn-primary ml-2 text-white" href="login.php"><i class="fa d-inline fa-lg fa-user-circle-o">
	        </i> login</a>
	      </div>
	    </div>
	</nav> 

	<div id="div_bloco_pesquisa" >
		<div id="div_lista_nome"><h2>Animais disponiveis para adoção</h2></div>
		<p>Aqui você poderar pesquisar o animais disponiveis, por idade ou raça:</p>
		
		
		<form method="POST">Selecione pelo tipo de animal:
		<select name = tipo_animal>
			<option></option>
			<option value="cao">Cão</option>
			<option value="gato">Gato</option>
			<option value="outro">Outro</option>
		</select></p>
		<input type="hidden" name="acao" value="enviado">			
		<input type="submit" value="pesquisar">
		</form>

		<?php

		if (isset($_POST['acao']) && $_POST['acao'] =='enviado') {
	
		$pesquisar = $_POST['tipo_animal'];	

		
		$result_busca = "SELECT * FROM animal WHERE tipo = '$pesquisar' ";	
		$query_id = mysqli_query($mysqli, $result_busca);
		$num_de_animais = mysqli_num_rows($query_id);

		$consulta = "SELECT * FROM animal WHERE tipo = '$pesquisar'";
		$con = $mysqli->query($consulta) or die($mysqli->error);
		
		
		echo "Total de animais :" . $num_de_animais;
		?>	
		<div id="div_lista">
			<table id="table_lista">
			  <tr>
			  	<th>Foto</th>
			    <th>Nome</th>
			    <th>Idade</th>
			    <th>idade</th>
			  </tr>
			  	<?php while ($dado = $con->fetch_array()) { ?>
			      <tr>
			      	<td><a href="#"><img src="img/gato.jpg" width="50px"></a></td>
			        <td><?php echo $dado["nome"]; ?></td>
			        <td><?php echo $dado["tipo"]; ?></td>
			        <td><?php echo $dado["idade"];?></td>
			      </tr>      
      			<?php } }?>
		</div>
	</div>

</body>
</html>