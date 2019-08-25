<?php
$sql = "DELETE FROM articulo WHERE art_id = '$id'";

if ($con->query($sql) === TRUE) {
    header("location: ../index.php");
} else {
    echo "No se ha podido eliminar: " . $conn->error;
}
?>