<?php

  require 'ELE/BD.php';

  $rango = 0;
  $message = '';

  if (!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
    $sql = "INSERT INTO usuario (correo, nombre, username, contraseña, telefono, rango) VALUES (:correo, :nombre, :username, :contraseña, :telefono, '$rango')";
    $stmt = $link->prepare($sql);
    $stmt->bindParam(':correo', $_POST['correo']);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':username', $_POST['username']);
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contraseña', $contraseña);
    $stmt->bindParam(':telefono', $_POST['telefono']);
    if ($stmt->execute()) {
      $message = 'Se ha registrado correctamente';
    } else {
      $message = 'Ha habido un problema creando la cuenta';
    }
  }
?>