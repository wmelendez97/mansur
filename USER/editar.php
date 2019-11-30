<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Mansur: Editar articulo</title>
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
<?php
    include "../RECU/ELE/BD.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM articulo WHERE art_id = '$id'";
    
    $result = mysqli_query($con,$sql);

    while($mostrar=mysqli_fetch_assoc($result)){
      $cat_id = $mostrar['cat_id'];  
      $ge_id = $mostrar['ge_id'];       
        ?>
    
<div class="RE">
     <h1>EDITAR ARTICULO</h1>
     <ul class="na">
          <form method="POST" action="" enctype="multipart/form-data">
          <li><a href="<?php echo $eliminar?>"><span class="icon-eliminar"></span>ELiminar</a></li>
          <li><h3>Nombre del articulo:</h3>
          <input name="nombre" value="<?php echo $mostrar['nombre']?>"></li>
          <li><h3>Marca del articulo:</h3>
          <input name="marca" value="<?php echo $mostrar['marca']?>"></li>
          <li><h3>Agregar fecha actual:</h3>
          <input class="din" name="fecha" type="date"value="<?php echo $mostrar['fecha']?>"></li>
          <li><h3>Precio del articulo:</h3>
          <input class="din" name="precio" type="number" step="any" min="0" value="<?php echo $mostrar['precio']?>"></li>
          <li><h3>Descuento a aplicar:</h3>
          <input class="din" name="descuento" type="number" step="int" min="0" value="<?php echo $mostrar['descuento']?>"></li>
          <li><h3>Cantidad de articulos:</h3>
          <input class="din" name="cantidad" type="number" min="0" value="<?php echo $mostrar['cantidad']?>"></li>
          <li><h3>Descripción del articulo:</h3>
          <textarea name="descripcion"><?php echo $mostrar['descripcion']?></textarea></li>
          <li><h3>Categoria:</h3>
            <select name="categoria">
            <option value="<?php echo $cat_id?>">--Selecciona una categoría--</option> 
              <?php 
              $sql1 = "SELECT * FROM categoria";
              $categoria = mysqli_query($con,$sql1);
              while($cat=mysqli_fetch_assoc($categoria)){?>
                <option value="<?php echo $cat['cat_id']?>"><?php echo $cat['categoria']?></option>
              <?php } ?>
          </select></li>
          <li><h3>Genero:</h3>
            <select name="genero">
            <option value="<?php echo $ge_id?>">--Selecciona un genero--</option> 
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
          <li><a href="editarimg.php?id=<?php echo $id?>">Editar imagen</a></li>
          <li><button class="añ-di" name="subir">Actualizar Articulo</button></li>
          <?php include("ELE/edit.php"); ?>
          </form>
      </ul>
  </div>
<?php } ?>
</div>
<?php if($msg != "") echo $msg . ""; ?>
<?php include("../RECU/ELE/footerU.php"); ?>