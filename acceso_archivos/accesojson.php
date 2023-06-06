<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Gestionar JSON</h2>
    <a href="https://code.tutsplus.com/es/tutorials/how-to-parse-json-in-php--cms-36994">Enlace de referencia</a>

    <?php 
    $archivo_json = file_get_contents('archivos/products.json');
    $decoded_json = json_decode($archivo_json, true);
    $products=$decoded_json["products"];

    foreach ($products as $product){
        echo("<p>".$product["title"]."<p>");
    }

    /*$decoded_json = json_decode($archivo_json, false);
    echo $decoded_json->products;*/
    ?>
</body>
</html>