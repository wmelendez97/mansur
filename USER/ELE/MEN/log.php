<?php
  
  include "../RECU/ELE/BD.php";
  session_start();

	if (isset($_POST['login'])) {
	  
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];
	$sql = ("SELECT user_id, pass FROM usuario WHERE correo = '$correo'");
	
	$sql = $con->query("SELECT user_id, pass FROM usuario WHERE correo = '$correo'");

	if ($sql->num_rows > 0) {
		$data = $sql->fetch_array();
		if (password_verify($contraseña, $data['pass'])) {
			$_SESSION['user_id'] = $uid;
			$_SESSION['username'] = $usuario;
			$_SESSION['rango'] = $rango;
			header("location: ../index.php");
		} else {
			echo "Algo anda mal con los datos que estas usando.";
		}
	} else {
		echo "Algo anda mal con los datos que estas usando.";
	}
}