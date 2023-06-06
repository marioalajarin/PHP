<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login usuario</h2>
    <form action="" method="post">
        <p>Correo: <input type="email" name="correo" required></p>
        <p>Contraseña: <input type="text" name="password" required></p>
        <p><input type="submit" value="Login" name='dato'></p>
    </form>
    <?php
    if(isset($_POST['dato'])){
        $password=$_POST['password'];
        $correo=$_POST['correo'];
        //guardar las variables   
        //hacer la conexión
        $conn=new PDO("mysql:host=localhost;port=3306;dbname=test","root","");
        $consulta="SELECT * FROM usuarios3";
        $resultado=$conn->query($consulta);
        while($row = $resultado->fetch()){
            if($row["correo"]==$correo and $row["contraseña"]==$password){
                session_start();
                $_SESSION["TOKEN"]=session_id();
                echo("<br>");
                echo("<a href='../privada/index.php'>Ir a privada</a>");
                break;
            }else{
                echo("Usuario no ok");
            }
        }
    }  
    ?>
</body>
</html>