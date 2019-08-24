<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur: Compra</title>
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
<div id="DE">
   <h1>DIRECCIÓN DE ENVIÓ</h1>
    <ul class="DIR">
        <li class="no"><h1>William Meléndez</h1></li>
        <li class="de"><h1>San Miguel</h1></li>
        <li class="ci"><h1>San Miguel</h1></li>
        <li class="di"><h1>Residencial Villa Montecarlos Norte, Poligono 14, Casa #29</h1></li>
        <li class="em"><h1>williamjmelendez@hotmail.com</h1></li>
        <li class="ce"><h1>75571938</h1></li>
    </ul>
    <button class="ed-di"><span class="icon-edit"></span>Editar dirección</button>
</div>

<div id="DA">
   <h1>DIRECCIÓN DE ENVIÓ</h1>
    <ul class="DIR">
        <li class="no"><h1>Nombre</h1>
        <input id="no"></li>
        <li class="de"><h1>Departamento</h1>
            <select class="departamento">
                <option value="1">San Miguel</option>
            </select>
        <li class="ci"><h1>Ciudad</h1>
            <select class="ciudad">
                <option value="1">San Miguel</option>
            </select>
        </li>
        <li class="di"><h1>Dirección</h1>
        <textarea id="di"></textarea></li>
        <li class="em"><h1>Correo electrónico</h1>
        <input id="em"></li>
        <li class="ce"><h1>Numero de teléfono</h1>
        <input id="ce"></li>
    </ul>
    <button class="añ-di"><span class="icon-local"></span>Añadir dirección</button>
</div>

<div id="ESC1">
   <h1>CARRITO</h1>
    <div class="ARC">
        <ul class="L">
            <li class="P"><h2>Producto</h2></li>
            <li class="O"><h2>Operación</h2></li>
            <li class="C"><h2>Cantidad</h2></li>
            <li class="S"><h2>Precio</h2></li>
        </ul>
        <ul class="A">
            <li><a href="PAG/ar.html"><img src="../RECU/IMG/Grafiti TShirt.png"></img></a></li>
            <li class="P"><a href="PAG/ar.html"><h2>Blusa "Life is a Dance"</h2></a></li>
            <ul class="O">
                <li class="f"><a href="#home"><h4>Favoritos</h4></a></li>
                <li class="e"><a href="#home"><h4>Eliminar</h4></a></li>
            </ul>
            <li class="C"><h2>1</h2></li>
            <li class="S"><h3>$25.00</h3></li>
        </ul>
        <ul class="e">
            <li class="C"><h2>$5.00</h2></li>
            <li class="S"><h2>Costo de envió:</h2></li>
        </ul>
        <ul class="T">
            <li class="C"><h5>$25.00</h5></li>
            <li class="S"><h6>TOTAL:</h6></li>
        </ul>
        <h2 class="m">Método de pago:</h2>
        <button class="PAY"><span class="icon-paypal"></span>Pagar con Paypal</button>
        <button class="TAR"><span class="icon-tarjeta"></span>Pagar con Tarjeta</button>
    </div>
</div>
<?php include("../RECU/ELE/footerP.php"); ?>