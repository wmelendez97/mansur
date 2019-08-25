<?php
  
  include "../RECU/ELE/BD.php";

  $msg = "";

  if (isset($_POST['crear'])) {

	$nombre = $_POST['nombre'];
	$username = $_POST['username'];
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];
	$rcontraseña = $_POST['rcontraseña'];
	$telefono = $_POST['telefono'];
	$nom = "/^[a-zA-Z áéíóúüñÑÁÉÍÓÚÜ]+$/";
	$correoValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$numero = "/^[0-9]+$/";
	$rango = $_POST['rango'];

	if(empty($nombre) || empty($username) || empty($correo) || empty($contraseña) || empty($rcontraseña) ||
	empty($telefono)){
		echo "<p>Por favor, complete todas las filas.</p>";
	} else {
		if(!preg_match($nom,$nombre)){
			echo "<p>El nombre $nombre no es valido.</p>";
	}
	if(!preg_match($correoValidation,$correo)){
		echo "<p>El correo que intenta digitar no es valido.</p>";
	}
	if(strlen($contraseña) < 9 ){
		echo "<p>La contraseña es muy debil.</p>";
	}
	if(strlen($rcontraseña) < 9 ){
		echo "<p>La contraseña es muy debil.</p>";
	if($contraseña != $rcontraseña){
		echo "<p>Las contraseñas no coinciden.</p>";
	}
	if(!preg_match($numero,$telefono)){
		$msg = "<div class='Alerta'><h1>Error</h1><p>El numero $telefono no es valido.</p>";
	}
	if(!(strlen($telefono) == 8)){
		echo "<p>El numero de telefono consta de 8 digitos.</p>";
	}
	$sql = "SELECT user_id FROM usuario WHERE correo = '$correo' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "<p>El correo $correo ya esta en uso actualmente.</p>";
	} else {
		$hash = password_hash($contraseña, PASSWORD_BCRYPT);
		$con->query("INSERT INTO usuario (nombre, username, correo, pass, telefono, rango) VALUES ('$nombre', '$username', '$correo', '$hash', '$telefono', '$rango')");
		echo "<p>Se ha registrado satisfactoreamente.</p>";
			}
		}
	}
}