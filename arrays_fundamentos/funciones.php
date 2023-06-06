<?php
//funciones definidas por el usuario
function saludar($nombre){ //función que le pasas un argumento
    return "hola, que tal ".$nombre;
}

echo(saludar("juan"));

//funciones definidas en PHP.
$mensaje="En un lugar de la mancha";
echo(strtoupper($mensaje));
echo(str_replace("a","e",$mensaje));
echo("<hr>");

//tienes una variable numérica entera.
//tienes una variable numérica con decimales
//divides la primera por la segunda.
//muestra el resultado. 
//muestra el resultado redondeado a dos decimales
//muestra el resto de la división

$numE=15;
$numD=2.3;
echo("<p>".$numE/$numD."</p>");
echo("<p>".round($numE/$numD, 2)."</p>");
echo("<p>".$numE%$numD."</p>");
echo("<hr>");

//muestra con un bucle los números pares que hay del 0 al 20 incluidos
for ($i=0; $i<=20;$i++)
    if (($i%2)==0)
        echo($i);
echo("<hr>");

//si el número es 14, dejas de mostrar los datos
for ($i=0; $i<=20;$i++)
    if ($i<=14)
        echo($i);
echo("<hr>");

//si el número es 14, NO muestras el 14, pero sigues
for ($i=0; $i<=20;$i++)
    if ($i!=14)
        echo($i);
echo("<hr>");
