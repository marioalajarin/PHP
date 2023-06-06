<?php

$correo=$_POST["correo"];
$ud=$_POST["unidades"];

if ($ud<10)
    echo("Pedido mínimo de 10 unidades");
else if ($ud>=10)
    echo("Pedido registrado");