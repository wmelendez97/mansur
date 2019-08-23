<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur: Registrar</title>
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/Style.css' media="all">
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/Fonts.css' media="all">
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/S2.css' media="all">
        <link rel="shortcut icon" href="../RECU/CSS/FON/L2.ico">
    </head>
<body>

<?php include("../RECU/ELE/menuP.php"); ?>

<div id="ES1">
  <div class="REG">
      <h4>REGISTRAR</h4>
      <form method="POST" action="">
      <h3>Nombre</h3>
      <input type="text" name="nombre" id="nombre" placeholder="Nombre completo"/>
      <h3>Username</h3>
      <input type="text" name="username" id="username" placeholder="Eje: minombre123"/>
      <h3>Correo</h3>
      <input type="text" name="correo" id="correo"/>
      <h3>Contraseña</h3>
      <input type="password" name="contraseña" id="correo"/>
      <h3>Confirmar contraseña</h3>
      <input type="password" name="rcontraseña" id="correo"/>
      <h3>Numero de teléfono</h3>
      <input type="text" name="telefono" id="correo"/>
      <ul>
        <li><button type="submit" name="registrar" id="Log">Registrar</button></li>
        <li><a href="login.php">Loguear</a></li>
      </ul>
      <?php include("ELE/reg.php"); ?>
      </form>
  </div>
  <div class="LOI">
    <img src="../RECU/IMG/PNG/L2.png">
  </div>
</div>

<?php include("../RECU/ELE/footerP.php"); ?>