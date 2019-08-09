<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur: Genero</title>
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/Style.css' media="all">
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/Fonts.css' media="all">
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/S2.css' media="all">
        <link rel="shortcut icon" href="../RECU/CSS/FON/L2.ico">
    </head>
<body>
<?php include("ELE/menu.php"); ?>
<div id="ART">
  <button type="submit" class="FI" onclick="CAT()"><a href="#Filtros"><span class="icon-fil"></span></a></button>
  <button type="submit" class="FI2"><a href="#Filtros"><span class="icon-fil"></span></a></button>
  <div class="AC">
  <h1>Categoría</h1>
      <ul>
        <li><input type="checkbox" name="AC" value="AC"><a>Accesorios</a></li>
        <li><input type="checkbox" name="SA" value="SA"><a>Camisas</a></li>
        <li><input type="checkbox" name="TC" value="TA"><a>Camisetas</a></li>
        <li><input type="checkbox" name="PA" value="PA"><a>Pantalones</a></li>
        <li><input type="checkbox" name="VE" value="VE"><a>Vestidos</a></li>
        <li><input type="checkbox" name="ZA" value="ZA"><a>Zapatos</a></li>
      </ul>
    <h1>Genero</h1>
      <ul>
        <li><input type="checkbox" name="FE" value="FE"><a>Femenino</a></li>
        <li><input type="checkbox" name="MA" value="MA"><a>Masculino</a></li>
      </ul>
    <button type="submit" id="Log">Aplicar</button>
  </div>
  <div class="AP">
     <h1>PRODUCTOS</h1>
     <?php include("ELE/gen.php"); ?>
    </div>
  </div>
</div>
<?php include("ELE/footer.php"); ?>