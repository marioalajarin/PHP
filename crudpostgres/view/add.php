<?php
require_once('../config/db.php'); //Dos puntos sirven para ir a la raiz del proyecto

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$fecha=$_POST['fecha'];
$acepto=isset($_POST['acepto']); 

$acepto_ok=($acepto)?'True':'False';   //Condicional ternaria
$consult="INSERT INTO public.usuarios (nombre,precio,fecha,acepto) VALUES('".$nombre."',".$precio.",'".$fecha."',".$acepto_ok.");";
$result=pg_query($conn,$consult);
var_dump($result);