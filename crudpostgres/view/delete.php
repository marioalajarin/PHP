<?php
require_once('../config/db.php'); //Dos puntos sirven para ir a la raiz del proyecto
$consult="DELETE from public.usuarios where id=".$_POST['code'].";";
$result=pg_query($conn,$consult);
var_dump($result);