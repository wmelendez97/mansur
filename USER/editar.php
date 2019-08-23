<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Mansur</title>
    <link rel="shortcut icon" href="../RECU/CSS/FON/L2.ico">
    <link rel='stylesheet' type='text/css' href='../RECU/CSS/Style.css' media="all">
    <link rel='stylesheet' type='text/css' href='../RECU/CSS/Fonts.css' media="all">
    <link rel='stylesheet' type='text/css' href='../RECU/CSS/S3.css' media="all">
</head>

<body>
   
<?php include("../RECU/ELE/menuU.php"); ?>

<div id="ES1">
<?php include("ELE/panel.php"); ?>
  <div class="RE">
     <h1>AÑADIR ARTICULO</h1>
     <ul class="na">
          <li><h3>Nombre del articulo:</h3>
          <input name="nombre"></li>
          <li><h3>Marca del articulo:</h3>
          <input name="marca"></li>
          <li><h3>Agregar fecha actual:</h3>
          <input class="din" name="fecha" type="date"></li>
          <li><h3>Precio del articulo:</h3>
          <input class="din" name="precio" type="number" step="any" min="0"></li>
          <li><h3>Descuento a aplicar:</h3>
          <input class="din" name="descuento" type="number" step="int" min="0"></li>
          <li><h3>Cantidad de articulos:</h3>
          <input class="din" name="cantidad" type="number" min="0"></li>
          <li><h3>Descripción del articulo:</h3>
          <textarea name="descripcion"></textarea></li>
          <li><h3>Categoria:</h3>
            <select name="categoria">
                  <option value="1">Accesorios</option>
          </select></li>
          <li><h3>Genero:</h3>
            <select name="genero">
                  <option value="1">Femenino</option>
          </select></li>
          <li><h3>Estado del articulo:</h3>
            <select name="estado">
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
          </select></li>
          <li><h3>Imagen del articulo:</h3>
          <input class="arch" name="imagen" type="file"></li>
          <li><button class="añ-di">Subir Articulo</button></li>
      </ul>
  </div>
</div>

<?php include("../RECU/ELE/footerU.php"); ?>