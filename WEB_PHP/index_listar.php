<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <style>
        
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
        margin-top: 20px;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        text-align: center;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 10px;
    }

    th {
        background-color: #f2f2f2;
    }

    </style>
</head>
<body>
    <h2>LISTAR REGISTRO:</h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>DNI</th>
                </tr>
            </thead>
<?php
require "conexion.php";
$sql = "SELECT * FROM informacion";
$result = $mysqli->query($sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr><td>'.$row["id"].'</td><td>'.$row["nombre"].'</td><td>'.$row["correo"].'</td><td>'.$row["dni"].'</td></tr>';
}
$mysqli->close();
?> 
        </table>
</body>
</html>
