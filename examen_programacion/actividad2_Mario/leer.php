<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Página "Leer"</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

<?php 

if(isset($_COOKIE["acepto"])){
    require_once("db.php");
    $sql="SELECT * FROM productos";
    $result = $conn->query($sql);
    echo("<table class='table table-striped table-dark'>");
    echo("<thead>");
    echo("<tr>");
    echo("<th scope='col'>ID</th>");
    echo("<th scope='col'>Producto</th>");
    echo("<th scope='col'>Unidades</th>");
    echo("<th scope='col'>Fecha del pedido</th>");
    echo("</tr>");
    echo("</thead>");

    while ($row=$result->fetch()){
        echo("<tbody>");
        echo("<tr>");
        echo("<td>".$row['id_producto']."</td>");
        echo("<td>".$row['nombre_producto']."</td>");
        echo("<td>".$row['unidades_producto']."</td>");
        echo("<td>".$row['fecha_pedido']."</td>");
        echo("</tr>");
        echo("</tbody>");


    }

    echo("</table>");
}else{
    echo("No es posible mostrar los datos hasta que se acepte la política de privacidad");
}

?>