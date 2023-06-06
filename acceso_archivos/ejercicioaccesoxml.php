<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Gestionar XML</h2>
    <p>Dado el siguiente enlace</p>
    <a href="https://gist.github.com/kinlane/4abec529e89e4b87a558a6e15986d8a3">Productos XML</a>
    <p>Muestra el nombre y el precio de cada producto</p>


    <?php 
    $xml = simplexml_load_file('archivos/products.xml');
    $valores = $xml->xpath('/products/product');
    foreach($valores as $valor)
    {
        echo "<p>".$valor->name . " - " . $valor->price . "</p>";
    }
    ?>
</body>
</html>