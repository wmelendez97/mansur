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
<?php include("../RECU/ELE/menuU.php"); ?>

<div id="ES1">
<?php include("ELE/panel.php"); ?>
  <div class="RE">
     <h1>INFORMACIÓN DE USUARIO</h1>
     <ul class="ld">
          <li><h3>Nombre:</h3></li>
          <li><h5>William Meléndez</h5></li>
          <li><h3>Username:</h3></li>
          <li><h5>Wijomepi</h5></li>
          <li><h3>Correo electronico:</h3></li>
          <li><h5>williamjmelendez@hotmail.com</h5></li>
          <li><h3>Numero de telefono:</h3></li>
          <li><h5>75571938</h5></li>
          <li><button class="ed-di">Editar información</button></li>
          <li><button class="ed-di">Cambiar Contraseña</button></li>
      </ul>

      <ul class="ed">
          <li><h3>Nombre:</h3>
          <input name="nombre"></li>
          <li><h3>Username:</h3>
          <input name="username"></li>
          <li><h3>Correo electronico:</h3>
          <input name="correo"></li>
          <li><h3>Numero de telefono:</h3>
          <input name="telefono"></li>
          <li><button class="añ-di">Actualizar Información</button></li>
      </ul>

      <ul class="ed">
          <li><h3>Contraseña actual:</h3>
          <input name="con" type="password"></li>
          <li><h3>Nueva contraseña:</h3>
          <input name="nuecon" type="password"></li>
          <li><h3>Verifique nueva contraseña:</h3>
          <input name="vercon" type="password"></li>
          <li><button class="añ-di">Actualizar Contraseña</button></li>
      </ul>
  </div>
</div>

<?php include("../RECU/ELE/footerU.php"); ?>