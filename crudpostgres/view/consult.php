<?php

require_once('../config/db.php'); //Dos puntos sirven para ir a la raiz del proyecto
$consult='SELECT * from public.usuarios;';
$result=pg_query($conn,$consult);
//var_dump($result);

echo("<table border='1px'>");
echo("<tr>");
echo("<td>id</td>");
echo("<td>nombre</td>");
echo("<td>precio</td>");
echo("<td>fecha</td>");
echo("<td>acepto</td>");
echo("</tr>");
while($row=pg_fetch_object($result)){
    echo("<tr>");
    echo("<td>".$row->id."</td>");
    echo("<td>".$row->nombre."</td>");
    echo("<td>".$row->precio."</td>");
    echo("<td>".$row->fecha."</td>");
    echo("<td>".$row->acepto."</td>");
    echo("</tr>");
}

echo("</table>");