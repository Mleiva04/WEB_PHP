<?php
require "conexion.php";

$id = $_POST['borrarId'];

$sql = "DELETE FROM informacion WHERE id=".$id;

if ($mysqli->query($sql) === TRUE) {
    echo "Registro borrado. Redirigiendo...";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
  
  $mysqli->close();
  header("Location: ./index_home.html");
  die();