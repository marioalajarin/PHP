<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Buscar</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <form method="post" action="">
        <p>Nombre del producto: <input type="text" name="nombre_producto" required></p>
        <input type="submit" value="Enviar" name="send">
    </form>
  </body>
</html>

<?php

if(isset($_POST["send"])){
    $nombre_producto=$_POST["nombre_producto"];
    
    $json="https://dummyjson.com/products";
    $data=file_get_contents($json); 
    $data_json = json_decode($data, true);
    $productos=$data_json["products"];

    foreach($productos as $producto){
        if($nombre_producto==$producto["title"]){
            echo("<p>Nombre del producto: ".$producto["title"]."</p>");
            echo("<p>Stock del producto: ".$producto["stock"]."</p>");
            echo("<p>Marca del producto: ".$producto["brand"]."</p>");
            echo("<p>Precio del producto: ".$producto["price"]."</p>");
        }
    }
}

?>