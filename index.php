<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur</title>
        <link rel='stylesheet' type='text/css' href='RECU/CSS/Style.css' media="all">
        <link rel='stylesheet' type='text/css' href='RECU/CSS/Slide.css' media="all">
        <link rel='stylesheet' type='text/css' href='RECU/CSS/Fonts.css' media="all">
        <link rel="shortcut icon" href="RECU/CSS/FON/L2.ico">
    </head>
<body>
<?php
if(isset($uid)){
	include("RECU/ELE/menuL.php");
}else{
	include("RECU/ELE/menu.php");
}
?>
<?php 
$g1 = 1;
$link1 = 'genero.php?ge='.$g1;
$g2 = 2;
$link2 = 'genero.php?ge='.$g2;
?>
<div id="SL">
        <ul>
        
            <li class="P"><h5>MANSUR</h5><h6>Ropa y Accesorios</h6><img src="RECU/IMG/PNG/P1.jpg" alt=""></li>
            <li class="F"><h5>MANSUR</h5><h6>Ropa y Accesorios</h6><form action="PAG/<?php echo $link1;?>"><button id="Ella"></form>PARA ELLA</button><img src="RECU/IMG/PNG/P2.jpg" alt=""></li>
            <li class="M"><h5>MANSUR</h5><h6>Ropa y Accesorios</h6><form action="PAG/<?php echo $link2;?>"><button id="El"></form>PARA ÉL</button><img src="RECU/IMG/PNG/P3.jpg" alt=""></li>
            <li class="O"><h5>DESCUENTOS</h5><h6>Productos Seleccionados</h6><form action="PAG/ofertas.php"><button id="Ofe"></form>Ver Ofertas</button><img src="RECU/IMG/PNG/P4.jpg" alt=""></li>
        </ul>
</div>
<div id="ES">
        <h1>NUEVOS PRODUCTOS</h1>
        <?php include("RECU/ELE/nue.php"); ?>
</div>
<div id="ES">
        <h1>ACERCA DE NOSOTROS</h1>
        <div class="COT">
            <h2>MISIÓN</h2>
            <p>Ser una empresa vanguardista orientada en todo momento a la venta de productos de alta calidad, con el objetivo de ser una empresa exponente de la moda en el área de San Miguel. Nos identificamos con ser una tienda amiga que siempre apela
                y esta al servicio de nuestros consumidores.</p>
        </div>
        <div class="CO">
            <img src="RECU/IMG/PNG/L2.png"></img>
        </div>
        <div class="COT">
            <h2>VISIÓN</h2>
            <p>Diseñar y exponer productos novedosos proporcionando a nuestros clientes según sus expectativas, en uso de diversos estándares de alta calidad, variedad de estilos e innovación permanente, creando lujo contemporáneo plasmado en el arte de
                la exclusividad de la moda con identidad; pudiendo ser unos exponentes a nivel nacional.</p>
        </div>
</div>
<?php include("RECU/ELE/footer.php"); ?>		