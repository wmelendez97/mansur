<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur: Dirección de envio</title>
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
    <h1>DIRECCIÓN DE ENVIO</h1>
      <ul class="ld">
          <li><h3>Nombre:</h3></li>
          <li><h5>William Meléndez</h5></li>
          <li><h3>Ciudad:</h3></li>
          <li><h5>San Miguel</h5></li>
          <li><h3>Departamento:</h3></li>
          <li><h5>San Miguel</h5></li>
          <li><h3>Dirección:</h3></li>
          <li><h5>Residencial Villa Montecarlos Norte, Poligono 14, Casa #29</h5></li>
          <li><h3>Correo electronico:</h3></li>
          <li><h5>williamjmelendez@hotmail.com</h5></li>
          <li><h3>Numero de telefono:</h3></li>
          <li><h5>75571938</h5></li>
          <li><button class="ed-di">Editar dirección</button></li>
      </ul>

      <ul class="ed">
          <li><h3>Nombre:</h3>
          <input name="nombre"></li>
          <li><h3>Ciudad:</h3>
              <select name="ciudad">
                  <option value="1">San Miguel</option>
              </select>
          <li><h3>Departamento:</h3>
              <select name="departamento">
                  <option value="1">San Miguel</option>
              </select>
          </li>
          <li><h3>Dirección:</h3>
          <textarea name="direccion"></textarea></li>
          <li><h3>Correo electronico:</h3>
          <input name="correo"></li>
          <li><h3>Numero de telefono:</h3>
          <input name="telefono"></li>
          <li><button class="añ-di">Añadir dirección</button></li>
      </ul>
  </div>
</div>

<?php include("../RECU/ELE/footerU.php"); ?>