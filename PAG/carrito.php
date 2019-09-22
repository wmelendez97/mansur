<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur: Carrito</title>
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/Style.css' media="all">
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/S3.css' media="all">
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/Fonts.css' media="all">
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
<div id="ESC">
   <h1>CARRITO</h1>
    <div class="ARC">
        <ul class="L">
            <li class="P"><h2>Producto</h2></li>
            <li class="O"><h2>Operación</h2></li>
            <li class="C"><h2>Cantidad</h2></li>
            <li class="S"><h2>Precio</h2></li>
        </ul>
        <ul class="A">
            <li><a href="PAG/producto.php"><img src="../RECU/IMG/Grafiti TShirt.png"></a></li>
            <li class="P"><a href="PAG/producto.php"><h2>Blusa "Life is a Dance"</h2></a></li>
            <ul class="O">
                <li class="f"><a href="#home"><h4>Favoritos</h4></a></li>
                <li class="e"><a href="#home"><h4>Eliminar</h4></a></li>
            </ul>
            <li class="C">
                <div class="CAN">
                  <input class="arc" name="cantidad" type="number" min="0">
                </div>
            </li>
            <li class="S"><h3>$25.00</h3></li>
        </ul>
        <ul class="T">
            <li class="C"><h5>$25.00</h5></li>
            <li class="S"><h6>TOTAL:</h6></li>
        </ul>
        <button class="CHE" href="PAG/comprar.php">Realizar Compra</button>
    </div>
</div>
<?php include("../RECU/ELE/footerP.php"); ?>