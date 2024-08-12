<?php 
	
	session_start();
	
	include('conexion_bd.php');

	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];

	$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena' LIMIT 1");
	
	if(mysqli_num_rows($validar_login) > 0){
		$user = mysqli_fetch_assoc($validar_login);
		$user['contrasena'] = null;
		$user['id_cargo'] = intval($user['id_cargo']);
		$_SESSION['usuario'] = $user;
		header("location: ../index.php");
		exit;
	}else{
		echo ' 
			<script>
				alert("El usuario no existe, por favor verifique los datos introducidos");
				window.location = "../apartados/formulario.php";
			</script>

		';
		exit;
	}

?>