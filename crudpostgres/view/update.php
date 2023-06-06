<?php
require_once('../config/db.php'); //Dos puntos sirven para ir a la raiz del proyecto
$update="UPDATE public.usuarios set precio=precio*".$_POST['subidaPrecio']." where id=".$_POST['code'].";";
$result=pg_query($conn,$update);
var_dump($result);
header('location:consult.php');