<?php
    include "../RECU/ELE/BD.php";

    $msg = "";

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

    if(empty($imagen)){
		$imagen = "PNG/L3.png";
    } else {
        if(($tamaño <= 2000000) && ($tipo  == "image/jpeg" || $tipo  == "image/jpg" || $tipo  == "image/png" || $tipo  == "image/gif")){
            $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/MANSUR/RECU/IMG/';
            move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$imagen);
            } else { 
            $msg = "<div class='Alerta'><p>ERROR: La imagen debe ser de formato JPEG, JPG, PNG o GIF; además de pesar menos de 2MB.</p></div>"; 
            return false;   
            }    
    }
    
    $query = $con->query("INSERT INTO articulo (fecha, nombre, marca, precio, descuento, descripcion, img, cat_id, ge_id, estado, cantidad) VALUES ('$fecha','$nombre', '$marca', '$precio', '$descuento', '$descripcion', '$imagen', '$categoria', '$genero', '$estado', '$cantidad')");
    if($query == false){
        $msg = "<div class='Alerta'><p>ERROR: No se ha podido procesar la inserción</p></div>";
        return false; 
    } else {
		$msg = "<div class='Alerta'><p>El producto se ha creado satisfactoreamente.</p></div>";
		}
    }
?>