<?php
$conn=new PDO("mysql:host=localhost;port=3306;dbname=test","root","");
$consulta="SELECT * FROM registros";

echo("<table border='1'>");
echo("<tr>");
echo("<td>ID</td>");
echo("<td>CIUDAD</td>");
echo("<td>TªMAX</td>");
echo("<td>TªMIN</td>");
echo("</tr>");
$resultado=$conn->query($consulta);
while($row=$resultado->fetch()){
    echo("<tr>");
    echo("<td>".$row['id']."</td>");
    echo("<td>".$row['ciudad']."</td>");
    echo("<td>".$row['tempMax']." Cº</td>");
    echo("<td>".$row['tempMin']." Cº</td>");
    echo("</tr>");
}
echo("</table>");
