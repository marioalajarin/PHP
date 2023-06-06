<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Página "Escribir"</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <form method="post" action="">
        <p>Nombre del producto: <input type="text" name="name" required></p>
        <p>Unidades: <input type="number" name="unidades" required></p>
        <p><input type="date" name="date" required></p>
        <input type="submit" name="send" value="Enviar">
    </form>
  </body>
</html>

<?php

if(isset($_POST["send"])){
    require_once("db.php");
    $nombre=$_POST["name"];
    $unidades=$_POST["unidades"];
    $fecha=$_POST["date"];
    
    $sql="INSERT INTO productos (nombre_producto,unidades_producto,fecha_pedido) VALUES ('$nombre','$unidades','$fecha'); ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo("El registro de ha agregado de manera correcta");
}



?>