<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur: Ubicación</title>
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/Style.css' media="all">
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/S2.css' media="all">
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
<div id="ES1">
   <h1>¿EN DONDE NOS PUEDES ENCONTRAR?</h1>

   <p>Puedes visitarnos en nuestro local y en determinado horario, te dejamos nuestra información.</p>
   <p>Dirección: 6a Calle Poniente #309 local #3 Frente a Plaza Médica San Francisco, San Miguel, El Salvador.</p>
   <p>Horario: Lunes a viernes 9:00am - 5:30pm</p>
   <p>Sábado: 9:00am - 5:00pm</p>
   <p>Domingo: Cerrado</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1153.4840191659448!2d-88.1807335232615!3d13.483812862194698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7b2a6460ee9c19%3A0x29f3aa895ad7aba1!2sMateriales%20El%C3%A9ctricos%20Portillo%2C%206a%20Calle%20Poniente%2C%20San%20Miguel!5e0!3m2!1ses!2ssv!4v1566684752732!5m2!1ses!2ssv" width="93%" height="60%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php include("../RECU/ELE/footerP.php"); ?>