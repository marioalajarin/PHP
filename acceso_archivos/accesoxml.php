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
    <a href="https://academy.leewayweb.com/como-recorrer-un-archivo-xml-usando-php/">Enlace</a>

    <?php 

    $archivo_leer=fopen("archivos/customers-total-sales.xml","r");
        $contenido="";
        //$lectura=fgets($archivo_leer); //sólo lees una línea
        while($lectura=fgets($archivo_leer)){
            $contenido.=$lectura;
        }
        fclose($archivo_leer);
        echo($contenido);

    $xml=new SimpleXMLElement($contenido);
    //$xml=new SimpleXMLElement("archivos/customers-total-sales.xml");
    foreach ( $xml->children() as $child ) {
        echo("<p>".$child["full-name"]." | ".$child["spent-money"]."€</p>");
    }
    ?>
</body>
</html>