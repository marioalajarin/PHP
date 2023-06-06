<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Alta  de nuevo usuario</h2>
    <form action="" method="post">
        <p>Correo: <input type="email" name="correo" required></p>
        <p>Contraseña: <input type="text" name="password" required></p>
        <p>Repetir contraseña: <input type="text" name="password2" required></p>
        <p><input type="checkbox" name="cb">Acepto condiciones</p>
        <p><input type="submit" value="Registro" name='dato'></p>
    </form>

    <?php
    if(isset($_POST['dato'])){
        $password=$_POST['password'];
        $password2=$_POST['password2'];
        $correo=$_POST['correo'];
        if ($password==$password2){
            //guardar las variables   
            echo ($correo);
            //hacer la conexión
            $conn=new PDO("mysql:host=localhost;port=3306;dbname=test","root","");
            //ejecutar insert
            //$consulta="INSERT INTO `usuarios3` (`id`, `correo`, `contraseña`, `fecha`)  VALUES (NULL,'".$correo."', '".$password."', NOW());";
            $consulta="call sp_add('".$correo."','".$password."')";
            /*values(NULL,$correo,$password,'2023-02-15 10:03:38');";*/
            //$consulta="INSERT INTO `usuarios` (`id`, `correo`, `password`, `fecha`) 
       
            $conn->query($consulta);
            //redirect a login.php
            header('location:login.php');
            echo("<p>Usuario registrado</p>");
        }else{
            echo("No coinciden las contaseñas");
        }

        
    }
    ?>
</body>
</html>