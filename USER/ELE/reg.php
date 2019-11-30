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
		$msg = "<div class='Alerta'><p>Por favor, complete todas las filas.</p></div>";
		return false; 
	} else {
		if(!preg_match($nom,$nombre)){
		$msg = "<div class='Alerta'><p>Error: El nombre $nombre no es valido.</p></div>";
		return false; 
	}
	if(!preg_match($correoValidation,$correo)){
		$msg = "<div class='Alerta'><p>Error: El correo que intenta digitar no es valido.</p></div>";
		return false; 
	}
	if(strlen($contraseña) < 9 ){
		$msg = "<div class='Alerta'><p>Error: La contraseña es muy debil.</p></div>";
		return false; 
	}
	if(strlen($rcontraseña) < 9 ){
		$msg = "<div class='Alerta'><p>Error: La contraseña es muy debil.</p></div>";
		return false; 
	}
	if($contraseña != $rcontraseña){
		$msg = "<div class='Alerta'><p>Error: Las contraseñas no coinciden.</p></div>";
		return false; 
	}
	if(!preg_match($numero,$telefono)){
		$msg = "<div class='Alerta'><p>Error: El numero $telefono no es valido.</p></div>";
		return false; 
	}
	if(!(strlen($telefono) == 8)){
		$msg = "<div class='Alerta'><p>Error: El numero de telefono consta de 8 digitos.</p></div>";
		return false; 
	}
	$sql = "SELECT user_id FROM usuario WHERE correo = '$correo' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		$msg = "<div class='Alerta'><p>Error: El correo $correo ya esta en uso actualmente.</p></div>";
		return false; 
	} else {
		$hash = password_hash($contraseña, PASSWORD_BCRYPT);
		$con->query("INSERT INTO usuario (nombre, username, correo, pass, telefono, rango) VALUES ('$nombre', '$username', '$correo', '$hash', '$telefono', '$rango')");
		$msg = "<div class='Alerta'><p>Se ha registrado satisfactoreamente.</p></div>";
			}
		}
	}
?>