<?php
/*ejemplo de auth de usuarios usando sesiones*/
session_start();
if(isset($_SESSION['TOKEN']))
{
    echo("<h2>Zona privado</h2>");
    echo("<a href='añadirregistro.php'>Añadir registro</a>");
}
else{
    header('location:../auth/login.php');
}

