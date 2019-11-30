<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur: Crear usuario</title>
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/Style.css' media="all">
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/Fonts.css' media="all">
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/S3.css' media="all">
        <link rel="shortcut icon" href="../RECU/CSS/FON/L2.ico">
    </head>
<body>
<?php
session_start();
if(isset($uid)){
	include("ELE/menuL.php");
}else{
	include("ELE/menu.php");
}
?>
<div id="ES1">
<?php include("ELE/panel.php"); ?>
  <div class="RE">
     <h1>AÑADIR USUARIO</h1>
     <ul class="ed">
        <form method="POST" action="">
          <li><h3>Nombre:</h3>
          <input name="nombre" type="text"></li>
          <li><h3>Username:</h3>
          <input name="username" type="text"></li>
          <li><h3>Correo:</h3>
          <input name="correo" type="email"></li>
          <li><h3>Contraseña:</h3>
          <input name="contraseña" type="password"></li>
          <li><h3>Confirmar contraseña:</h3>
          <input name="rcontraseña" type="password"></li>
          <li><h3>Numero de teléfono:</h3>
          <input name="telefono" type="tel"></li>
          <li><h3>Tipo de usuario:</h3>
          <select name="rango">
                  <option value="0">Usuario Final</option>
                  <option value="1">Usuario Administrador</option>
          </select>
          <li><button name="crear">Crear Usuario</button></li>
          <?php include("ELE/reg.php"); ?>
          </form>
      </ul>
  </div>
</div>
<?php if($msg != "") echo $msg . ""; ?>
<?php include("../RECU/ELE/footerU.php"); ?>