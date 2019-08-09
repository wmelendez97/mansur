<?php
  
  include "BD.php";

  if (isset($_POST['nombre'])) {

	$nombre = $_POST['nombre'];
	$username = $_POST['username'];
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];
	$rcontraseña = $_POST['rcontraseña'];
	$telefono = $_POST['telefono'];
	$nom = "/^[a-zA-Z áéíóúüñÑÁÉÍÓÚÜ]+$/";
	$correoValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$numero = "/^[0-9]+$/";

if(empty($nombre) || empty($username) || empty($correo) || empty($contraseña) || empty($rcontraseña) ||
	empty($telefono)){
		
		echo "
      <div class='Alerta'>
        <h1>Error</h1>
        <p>Por favor, llenar todos los espacios.</p>
			</div>
		";
		exit();
	} else {
		if(!preg_match($nom,$nombre)){
		echo "
			<div class='Alerta'>
      <h1>Error</h1>
      <p>El nombre: $nombre no es valido.</p>
			</div>
		";
		exit();
	}
	if(!preg_match($correoValidation,$correo)){
		echo "
			<div class='Alerta'>
      <h1>Error</h1>
      <p>El correo: $correo no es valido.</p>
			</div>
		";
		exit();
	}
	if(strlen($contraseña) < 8 ){
		echo "
    <div class='Alerta'>
    <h1>Error</h1>
    <p>La contraseña contiene muy pocos dígitos.</p>
    </div>
		";
		exit();
	}
	if(strlen($rcontraseña) < 8 ){
		echo "
    <div class='Alerta'>
    <h1>Error</h1>
    <p>La contraseña contiene muy pocos dígitos.</p>
    </div>
		";
		exit();
	}
	if($contraseña != $rcontraseña){
		echo "
    <div class='Alerta'>
    <h1>Error</h1>
    <p>Las contraseñas no son las mismas.</p>
    </div>
		";
	}
	if(!preg_match($numero,$telefono)){
		echo "
    <div class='Alerta'>
    <h1>Error</h1>
    <p>El numero de teléfono: $telefono no es valido.</p>
    </div>
		";
		exit();
	}
	if(!(strlen($telefono) == 8)){
		echo "
    <div class='Alerta'>
    <h1>Error</h1>
    <p>El numero de teléfono debe contener 8 dígitos.</p>
    </div>
		";
		exit();
	}
	//existing email address in our database
	$sql = "SELECT * FROM usuario WHERE correo = '$correo' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
    <div class='Alerta'>
    <h1>Error</h1>
    <p>El correo electrónico que ha digitado ya esta en uso, intente con uno distinto.</p>
    </div>
		";
		exit();
	} else {
		$contraseña = md5($contraseña);
		$sql = "INSERT INTO `usuario`(`correo`, `nombre`, `username`, `contraseña`, `telefono`) VALUES ('$correo', '$nombre', '$username', '$contraseña', '$telefono')";
    mysqli_query($con,$sql);
    if(mysqli_query($con,$sql)){
			echo "
      <div class='Alerta'>
        <h1>Usuario Creado</h1>
        <p>El usuario se ha creado correctamente, ahora procede a loguearte.</p>
      </div>
      ";
			exit();
		}
    
	  }
  }
}
?>