<?php
require "conexion.php";

$nombre = $_POST['crearNombre'];
$correo = $_POST['crearCorreo'];
$dni = $_POST['crearDni'];

$sql = "INSERT INTO informacion(nombre, correo, dni) VALUES ('".$nombre."', '".$correo."', '".$dni."')";

if ($mysqli->query($sql) === TRUE) {
    echo "Registro creado. Redirigiendo...";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
  
  $mysqli->close();
  header("Location: ./index_home.html");
  die();