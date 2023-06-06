<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Gestionar txt</h2>
    <a href="https://guidacode.com/2017/php/crear-leer-archivo-en-php/">Enlace de referencia</a>
    <?php
        $archivo=fopen("archivos/prueba.txt","a");
        $texto="En un lugar de la mancha\n";
        fwrite($archivo,$texto);
        fclose($archivo);

        $archivo=fopen("archivos/prueba.txt","a");
        $texto2 = <<<_END
            Comienza con Linea 1
            Linea 2
            Termina con Linea 3\n
        _END;
        fwrite($archivo,$texto2);
        fclose($archivo);

        $archivo_leer=fopen("archivos/lectura.txt","r");
        $contenido="";
        //$lectura=fgets($archivo_leer);    //con esto solo lees una línea
        while($lectura=fgets($archivo_leer)){
            $contenido.="<br>".$lectura."<br>";
        }
        echo($contenido);
    ?>
</body>
</html>