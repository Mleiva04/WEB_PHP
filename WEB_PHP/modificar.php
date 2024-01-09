<?php
require "conexion.php";

$id = $_POST['modificarId'];
$nombre = $_POST['modificarNombre'];
$correo = $_POST['modificarCorreo'];
$dni = $_POST['modificarDni'];

$sql = "UPDATE informacion SET nombre = '".$nombre."', correo = '".$correo."', dni = '".$dni."' WHERE id = '".$id."'";

if ($mysqli->query($sql) === TRUE) {
    echo "Registro modificado. Redirigiendo...";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
  
  $mysqli->close();
  header("Location: ./index_home.html");
  die();