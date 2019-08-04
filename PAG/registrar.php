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
<?php include("ELE/menu.php"); ?>
<div id="ES1">
  <div class="REG">
      <h4>REGISTRAR</h4>
      <h3>Nombre</h3>
      <input type="text" id="nombre" placeholder="Nombre completo"/>
      <h3>Username</h3>
      <input type="text" id="username" placeholder="Eje: minombre123"/>
      <h3>Correo</h3>
      <input type="text" id="correo"/>
      <h3>Contraseña</h3>
      <input type="password" id="contraseña"/>
      <h3>Numero de teléfono</h3>
      <input type="text" id="telefono"/>
      <ul>
        <li><button type="submit" id="Log">Registrar</button></li>
        <li><a href="login.php">Loguear</a></li>
      </ul>
  </div>
  <div class="LOI">
    <img src="../RECU/IMG/PNG/L2.png">
  </div>
</div>
<?php include("ELE/footer.php"); ?>