<?php
    include "../RECU/ELE/BD.php";
    $id = $_GET['id'];
    $sql = "SELECT nombre FROM articulo WHERE art_id = '$id'";
    
    $pr = "";

    $result = mysqli_query($con,$sql);

    while($mostrar=mysqli_fetch_assoc($result)){
    $nombre = $mostrar['nombre'];}?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur: <?php echo $nombre?></title>
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
<?php include("ELE/pro.php");?>
<?php include("../RECU/ELE/footerP.php");?>