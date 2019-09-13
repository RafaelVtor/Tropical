<?php 
	include("conexao.php"); 
	session_start();
	
	

	if ((isset($_POST['usuario'])) && (isset($_POST['senha']))) {
		$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
		$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
		//$senha = md5($senha);/* está dando erro na hora de verificar, sem ele funciona, mas tem que olhar depois o que tá acontecendo*/

		$sql = "SELECT * FROM usuario WHERE nome = '$usuario' AND senha = '$senha' LIMIT 1";
		$result = mysqli_query($mysqli, $sql);
		$resultado = mysqli_fetch_assoc($result);

		if (empty($resultado)) {
			$_SESSION['loginErro'] = "Usuário ou senha invalida";
			header("Location: login.php");
		}elseif (isset($resultado)) {
			header("Location: principal.php");
		}
	}

 ?>