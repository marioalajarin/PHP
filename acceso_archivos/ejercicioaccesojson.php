<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Consumir JSON</h2>
    <p>Busca un archivo JSON y descárgalo</p>
    <p>Muestra en la web el contenido del archivo</p>
    <a href="https://jsonplaceholder.typicode.com/photos">Datos JSON</a>
    <p>Muestra el título, el enlace y la foto</p>
    <?php 
    $archivo_json=file_get_contents("archivos/photos.json");
    $decoded_json = json_decode($archivo_json, true);

    foreach ($decoded_json as $photo){
        echo("<h3>".$photo["title"]."</h3>"); 
        echo("<img src='".$photo['thumbnailUrl']."'>"); 
    }
    ?>
</body>
</html>