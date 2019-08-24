<?php include("ELE/log.php"); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur: Login</title>
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/Style.css' media="all">
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/Fonts.css' media="all">
        <link rel='stylesheet' type='text/css' href='../RECU/CSS/S2.css' media="all">
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
   <div class="LOG">
      <h4>INICIAR SESIÓN</h4>
      <form method="POST" action="">
      <h3>Correo</h3>
      <input type="text" name="correo"/>
      <h3>Contraseña</h3>
      <input type="password" name="contraseña"/>
      <ul>
        <input type="checkbox" name="CH" value="CH"><a class="S">Recordar</a>
        <li><button type="submit" name="login">Entrar</button></li>
        <li><a href="PAG/olvide.php">He olvidado mis datos</a></li>
        <li><a href="PAG/registrar.php">Registrar</a></li>
      </ul>
      <?php include("ELE/log.php"); ?>
      </form>
  </div>
  <div class="LOI">
    <img src="../RECU/IMG/PNG/L2.png">
  </div>
</div>

<?php if($msg != "") echo $msg . ""; ?>

<?php include("../RECU/ELE/footerP.php"); ?>