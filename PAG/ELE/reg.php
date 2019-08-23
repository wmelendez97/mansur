<?php
  
  include "../RECU/ELE/BD.php";

  if (isset($_POST['registrar'])) {

	$nombre = $con->real_escape_string($_POST['nombre']);
	$username = $con->real_escape_string($_POST['username']);
	$correo = $con->real_escape_string($_POST['correo']);
	$contraseña = $con->real_escape_string($_POST['contraseña']);
	$rcontraseña = $con->real_escape_string($_POST['rcontraseña']);
	$telefono = $con->real_escape_string($_POST['telefono']);
	$nom = "/^[a-zA-Z áéíóúüñÑÁÉÍÓÚÜ]+$/";
	$correoValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$numero = "/^[0-9]+$/";
	$rango = 1;

		if ($contraseña != $rcontraseña) {
			echo "
		<div class='Alerta'>
			<h1>Error</h1>
			<p>Las contraseñas no coinciden.</p>
				</div>
			";
		} else {
			$hash = password_hash($contraseña, PASSWORD_BCRYPT);
			$con->query("INSERT INTO usuario (nombre, username, correo, contraseña, telefono) VALUES ('$nombre', '$username', '$correo', '$hash', '$telefono', '$rango')");
			echo "
			<div class='Alerta'>
			<h1>Registro Completado</h1>
			<p>Se ha registrado satisfactoreamente.</p>
				</div>
			";
		}
	}
?>