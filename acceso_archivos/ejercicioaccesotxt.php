<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Consultar y enviar sugerencias</h2>
    <p>Diseñar formulario que permita escribir un comentario</p>
    <p>Al pulsar el botón enviar, se guarda el comentario en un archivo de texto</p>
    <p>Automáticamente se muestra el contenido del archivo de comentarios</p>
    <p>Añadir en cada nuevo comentario, la fecha y la hora</p>
    <form action="" method="post">
        <input type="text" name="text" placeholder="Escribe texto aquí">
        <input type="submit" value="Enviar">
    </form>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
        $text=$_POST["text"];
        date_default_timezone_set('Europe/Madrid');

        $fechaActual = date("d-M-Y");
        $horaActual = date("h:i:s");
        $texto_guardado=$text."  (".$fechaActual.":".$horaActual.")\n";
        $file=fopen("archivos/file.txt","a");
        fwrite($file,$texto_guardado);
        fclose($file);
        echo("<h2>Comentarios:</h2>");
        $read_file=fopen("archivos/file.txt","r");
        $contenido="";
        while($lectura=fgets($read_file)){
            $contenido.="<br>".$lectura."<br>";
        }
        echo($contenido);
    }

        
        
    ?>
</body>
</html>