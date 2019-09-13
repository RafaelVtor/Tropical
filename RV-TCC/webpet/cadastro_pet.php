<!DOCTYPE html>
<?php include("conexao.php"); 

	
?>
<html>
<head>
	<title>Cadastro de Pet</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<link rel="stylesheet" href="css/theme.css" type="text/css">
  	<link rel="stylesheet" href="css/estilo.css" type="text/css">

</head>
<body>

<!-- -------------------------------- -->
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

<!-- -------------------------------- -->


	<?php if (empty($pet_nome) ) {
		# code...
	 ?>
	<div id="div_aleta" class="alert alert-success">
	  <strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
	</div>	
	<?php } ?>
	<div id="div_formulario">
		<form method="POST" enctype="multipart/form-data" >
			Nome:<input type="text" name="pet_nome" ></br></br>
			Tipo: <input type="radio" name="pet_tipo" value="cao">Cão 
				 <input type="radio" name="pet_tipo" value="gato">Gato
				 <input type="radio" name="pet_tipo" value="outro">Outro</br></br>
			Idade:<input type="int" name="pet_idade"></br></br>
			Vacinas:<input type="text" name="pet_vacinas"></br></br>
			Obs:<textarea name="pet_obs"></textarea></br></br>
			Foto::<input type="file" name="pet_foto"><br><br>

			<input type="hidden" name="acao" value="enviado">
			<input type="submit" name="enviar">
		</form>
	</div>


	<?php
	if (isset($_POST['acao']) && $_POST['acao'] =='enviado') {
	
		$pet_nome = $_POST['pet_nome'];
		$pet_tipo = $_POST['pet_tipo'];
		$pet_idade = $_POST['pet_idade'];
		$pet_vacinas = $_POST['pet_vacinas'];
		$pet_obs = $_POST['pet_obs'];



		$pet_enviar = "INSERT INTO animal (nome, tipo, idade, vacinas, obs) VALUES ('$pet_nome', '$pet_tipo', '$pet_idade', '$pet_vacinas', '$pet_obs')";
		$pet_enviado = mysqli_query($mysqli,$pet_enviar);

		//pegando o ID do animal salvo
		

		

		/*  ----------------------------tratando a imagem salva--------------------------*/



	$pet_foto = $_FILES['pet_foto']['nome'];
	//Parta onde a imagem será salvas.
	$_UP['pasta'] = 'foto_pet/';

	//Tamanho da imagem em bytes.
	$_UP['tamanho'] = 1024*1024*100; //5mb

	//Array de extensões permitidas
	$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');

	//renomeiar
	$_UP['renomeiar'] = true;

	//Array de tipos de erros em upload do PHP
	$_UP['erros'] [0] = 'Não houve erro';
	$_UP['erros'] [1] = 'O arquivo é maior que o limite PHP';
	$_UP['erros'] [2] = 'O arquivo é maior que o limite e tamnho especifico HTML';
	$_UP['erros'] [3] = 'O upload foi feito parcialmente';
	$_UP['erros'] [4] = 'Não foi feito o upload do arquivo';

	//Verifica de ouve algum erro de upload
	if ($_FILES[pet_foto]['error'] != 0) {
		die("Não foi possivel fazer o upload da imagem, erro: <br />" . $_UP['erros'] [$_FILES['pet_foto']['error']]);
		exit;
	}
	//Verifica a extensão do arquivo.
	$extensao = strtolower(end(explode('.', $_FILES['pet_foto']['nome'])));
	if (array_search($extensao, $_UP['extensoes']) === false) {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/RV-TCC/sistema/cadastro_pet.php'>
			<script type=\"text/javascript\">
				alert(\" A extensão da imagem é invalida!\");
			</script>
		";
	}
	//verifica se deve trocar o nome do arquivo
	if ($_UP['renomeiar'] == true) {
		//Criar um nome de arquivo baseado no UNIX TIMESTAMP atual e com a extensão .jpg
		$nome_final = time().'.jpg';
	}else{
		//Mantem o nome original
		$nome_final = $_FILES['pet_foto']['nome'];
	}
	//veriica se é possivel salvar o arquivo na pasta escolhida
	if (move_uploaded_file($_FILES['pet_foto']['tmp_name'], $_UP['pasta'] . $nome_final)) {
		//Upload execultado com sucesso
		$query = mysqli_query($mysqli, "INSERT INTO foto_animal (nome, id_animal) VALUES ('$nome_final', '') ");

		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/RV-TCC/sistema/cadastro_pet.php'>
			<script type=\"text/javascript\">
				alert(\" Arquivo salvo com sucesso!\");
			</script>
		";
	}



	}
	/*puxando dados do BD pra ver se estar conectado - teste*/
		$result_busca = "SELECT * FROM animal ";	
		$query_id = mysqli_query($mysqli, $result_busca);
		$num_de_animais = mysqli_num_rows($query_id);
		
		
		echo "Quantidade de animais :" . $num_de_animais;
		
		$dado = $con->fetch_array()

	?>



</body>
</html>

<?php 
	




?>
