<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Consumir API Rest JSON</h2>
    <?php 
    
    //https://dummyjson.com/users
    $end_point="https://dummyjson.com/users";

    $data=file_get_contents($end_point); //Datos en bruto

    //var_dump($data);

    $data_json = json_decode($data, true); //lee como matriz - datos en JSON / Si ponemos false en vez de true, nos lo convierte a objeto y su manipulación es diferente.
    //var_dump($data_json);
    
    $usuarios=$data_json["users"];
    foreach($usuarios as $usuario){
        echo("<p>".$usuario["firstName"]."</p>");
        echo("<img src='".$usuario["image"]."'></img>");
    }
    ?>
</body>
</html>