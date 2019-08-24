<?php
  
  include "../RECU/ELE/BD.php";

  $msg = "";

  if (isset($_POST['registrar'])) {

	$nombre = $_POST['nombre'];
	$username = $_POST['username'];
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];
	$rcontraseña = $_POST['rcontraseña'];
	$telefono = $_POST['telefono'];
	$nom = "/^[a-zA-Z áéíóúüñÑÁÉÍÓÚÜ]+$/";
	$correoValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$numero = "/^[0-9]+$/";
	$rango = 0;

	if(empty($nombre) || empty($username) || empty($correo) || empty($contraseña) || empty($rcontraseña) ||
	empty($telefono)){
		$msg = "<div class='Alerta'><h1>Error</h1><p>Por favor, complete todas las filas.</p></div>";
	} else {
		if(!preg_match($nom,$nombre)){
		$msg = "<div class='Alerta'><h1>Error</h1><p>El nombre $nombre no es valido.</p></div>";
	}
	if(!preg_match($correoValidation,$correo)){
		$msg = "<div class='Alerta'><h1>Error</h1><p>El correo que intenta digitar no es valido.</p></div>";
	}
	if(strlen($contraseña) < 9 ){
		$msg = "<div class='Alerta'><h1>Error</h1><p>La contraseña es muy debil.</p></div>";
	}
	if(strlen($rcontraseña) < 9 ){
		$msg = "<div class='Alerta'><h1>Error</h1><p>La contraseña es muy debil.</p></div>";
	if($contraseña != $rcontraseña){
		$msg = "<div class='Alerta'><h1>Error</h1><p>Las contraseñas no coinciden.</p></div>";
	}
	if(!preg_match($numero,$telefono)){
		$msg = "<div class='Alerta'><h1>Error</h1><p>El numero $telefono no es valido.</p></div>";
	}
	if(!(strlen($telefono) == 8)){
		$msg = "<div class='Alerta'><h1>Error</h1><p>El numero de telefono consta de 8 digitos.</p></div>";
	}
	$sql = "SELECT user_id FROM usuario WHERE correo = '$correo' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		$msg = "<div class='Alerta'><h1>Error</h1><p>El correo $correo ya esta en uso actualmente.</p></div>";
	} else {
		$hash = password_hash($contraseña, PASSWORD_BCRYPT);
		$con->query("INSERT INTO usuario (nombre, username, correo, pass, telefono, rango) VALUES ('$nombre', '$username', '$correo', '$hash', '$telefono', '$rango')");
		$msg = "<div class='Alerta'><h1>Registro Completado</h1><p>Se ha registrado satisfactoreamente.</p></div>";
			}
		}
	}
}