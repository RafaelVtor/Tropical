<!DOCTYPE html>
<?php include("conexao.php"); 
	
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Pessoas</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>

<body>
	
		<div name="div_barra_top" class="w3-bar w3-green">
		  <a href="home.php" class="w3-bar-item w3-button w3-mobile">Inicio</a>
		  <a href="#" class="w3-bar-item w3-button w3-mobile">Sobre</a>
		  <a href="#" class="w3-bar-item w3-button w3-mobile">Contato</a>
		</div>
	
	
	<div id="div_miolo">
		
		<div class="limiter">
		    <div class="container-login100">
		      <div class="wrap-login100 p-t-70 p-b-15">
		        <form method="POST" class="login100-form validate-form">
		          <span class="login100-form-title p-b-60">
		            Cadastre-se:
		          </span>
		          <span class="login100-form-avatar">
		            <img src="http://boshkids.co.uk/static/img/login-avatar.png" alt="AVATAR">
		          </span>

		          <div class="wrap-input100 validate-input m-t-85 m-b-35">
		            <input class="input100" type="text" name="nome">
		            <span class="focus-input100" data-placeholder="Nome"></span>
		          </div>

		          <div class="wrap-input100 validate-input m-b-50">
		            <input class="input100" type="email" name="email">
		            <span class="focus-input100" data-placeholder="E-mail"></span>
		          </div>

		          <div class="wrap-input100 validate-input m-b-50">
		            <input class="input100" type="int" name="tel">
		            <span class="focus-input100" data-placeholder="Telefone"></span>
		          </div>

		          <div class="wrap-input100 validate-input m-b-50">
		            <input class="input100" type="text" name="ender">
		            <span class="focus-input100" data-placeholder="Endereço"></span>            
		          </div>

		          <div class="wrap-input100 validate-input m-b-50">
		            <input class="input100" type="password" name="senha">
		            <span class="focus-input100" data-placeholder="Senha"></span>
		          </div>

		          <div class="wrap-input100 validate-input m-b-50">
		            <input class="input100" type="password" name="pss2">
		            <span class="focus-input100" data-placeholder="Repita a Senha"></span>
		          </div>


		          <div class="container-login100-form-btn">
		          	<input type="submit" name="Enviar" value="Cadastre-se" class="login100-form-btn">
		            
		          </div>
		          
		        </form>
		      </div>
		    </div>
		</div>
	</div>

	


	
	<?php 

	$acao=$_POST['Enviar'];

/*----------------------------------------------Salvar dados nas variaveis--------------------------------------------------*/
	if ($acao != NULL) {
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$tel = $_POST["tel"];
		$ender = $_POST["ender"];
		$senha = md5($_POST["senha"]);
		
	

		/*puxando dados do BD pra ver se estar conectado*/
	$result_busca = "SELECT * FROM usuario WHERE id = '1'";	
	$result_usuario = mysqli_query($mysqli, $result_busca);
	$row_usuario = mysqli_fetch_assoc($result_usuario);
	
	echo "id: " . $row_usuario['id'];
	echo "id: " . $row_usuario['nome'];
	echo "id: " . $row_usuario['email'];
	echo "id: " . $row_usuario['tel'];
	echo "id: " . $row_usuario['endereco'];
	echo "id: " . $row_usuario['senha'];



	/*Enviar para o banco de dados*/
	$enviar_bd = "INSERT INTO usuario (nome, email, tel, endereco, senha) values ('$nome','$email','$tel', '$ender', '$senha')";
		
	$bd_enviado=mysqli_query($mysqli, $enviar_bd);
	}

	?>


	<div id="barra_menu_lateral">
		<?php
echo "Today is " . date("d/m/Y") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>			
	</div>

</body>
</html>