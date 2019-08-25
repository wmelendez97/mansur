<?php
    include "../RECU/ELE/BD.php";

    if (isset($_POST['subir'])) {

	$nombre = $_POST['nombre'];
	$marca = $_POST['marca'];
	$fecha = $_POST['fecha'];
	$precio = $_POST['precio'];
    $descuento = $_POST['descuento'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];
    $categoria= $_POST['categoria'];
    $genero = $_POST['genero'];
    $estado = $_POST['estado'];
    $imagen = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tamaño = $_FILES['imagen']['size'];

    $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/MANSUR/RECU/IMG/';
    move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$imagen);
    
    $con->query("UPDATE  articulo  SET  fecha ='$fecha', nombre ='$nombre', marca ='$marca', precio ='$precio', descuento ='$descuento', descripcion ='$descripcion', img ='$imagen', cat_id ='$categoria', ge_id ='$genero', estado ='$estado', cantidad ='$cantidad' WHERE art_id='$id'");
    echo "Registro efectuado";
    }
?>