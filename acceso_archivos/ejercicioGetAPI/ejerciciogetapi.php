<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <h2>Ejercicio consumir API</h2>

    <?php 
    
    //API = https://jsonplaceholder.typicode.com/photos

    $json="https://jsonplaceholder.typicode.com/photos";

    $datos=file_get_contents($json);

    $datos_json=json_decode($datos,true);

    foreach($datos_json as $dato_json){
        echo("<p>ID:".$dato_json["id"]."  |  Título: ".$dato_json["title"]."</p>");
        echo("<img src='".$dato_json["thumbnailUrl"]."'</img>");
    }

    ?>
</body>
</html>