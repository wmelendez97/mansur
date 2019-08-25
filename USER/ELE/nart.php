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
    
    $con->query("INSERT INTO articulo (fecha, nombre, marca, precio, descuento, descripcion, img, cat_id, ge_id, estado, cantidad) VALUES ('$fecha','$nombre', '$marca', '$precio', '$descuento', '$descripcion', '$imagen', '$categoria', '$genero', '$estado', '$cantidad')");
    echo "<p>Nuevo articulo subido con exito</p>";
    }
?>