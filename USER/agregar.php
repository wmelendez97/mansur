<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur: Agregar articulo</title>
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
<div id="ES1">
<?php include("ELE/panel.php"); ?>
  <div class="RE">
     <h1>AÑADIR ARTICULO</h1>
     <ul class="na">
        <form method="POST" action="" enctype="multipart/form-data">
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
            <option value="none" selected disabled hidden>--Selecciona una categoría--</option> 
              <?php 
              $sql1 = "SELECT * FROM categoria";
              $categoria = mysqli_query($con,$sql1);
              while($cat=mysqli_fetch_assoc($categoria)){?>
                <option value="<?php echo $cat['cat_id']?>"><?php echo $cat['categoria']?></option>
              <?php } ?>
          </select></li>
          <li><h3>Genero:</h3>
            <select name="genero">
            <option value="none" selected disabled hidden>--Selecciona un genero--</option> 
              <?php 
              $sql2 = "SELECT * FROM genero";
              $genero = mysqli_query($con,$sql2);
              while($gen=mysqli_fetch_assoc($genero)){?>
                <option value="<?php echo $gen['ge_id']?>"><?php echo $gen['genero']?></option>
              <?php } ?>
          </select></li>
          <li><h3>Estado del articulo:</h3>
            <select name="estado">
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
          </select></li>
          <li><h3>Imagen del articulo:</h3>
          <input class="arch" name="imagen" type="file"></li>
          <li><a class="T1">La imagen debe ser de formato JPEG, JPG, PNG o GIF; además de pesar menos de 2MB.</a></li>
          <li><a class="T1">Resolución recomendada: 500x500.</a></li>
          <li><button name="subir">Subir Articulo</button></li>
          <?php include("ELE/nart.php"); ?>
          </form>
      </ul>
  </div>
</div>
<?php if($msg != "") echo $msg . ""; ?>
<?php include("../RECU/ELE/footerU.php"); ?>