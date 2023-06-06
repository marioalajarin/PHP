<?php

$ciudades=array("madrid","sevilla","valencia");

$clientes=["indra","telefónica","repsol"];  //declaración de array abreviado, se pude hacer de esta forma o de la otra (la de arriba).

echo($ciudades[0]);

$temperaturas=[     //en php se pueden establecer claves con boleanos, números o strings.
    "lunes"=>15.95,
    "martes"=>9.95,
    3=>4.58,
    "miércoles"=>TRUE

];

echo("<p>".$temperaturas[3]."</p>");
echo("<hr>");
for($i=0;$i<=10;$i++)
    echo("<p>".$i."</p>");

echo("<hr>");

foreach($ciudades as $ciudad)
    echo("<p>".$ciudad."</p>");