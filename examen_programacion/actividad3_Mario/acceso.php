<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Acceso</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <form action="" method="post">
        <p>Nombre de usuario: <input type="text" name="name" required></p>
        <p>Contraseña: <input type="text" name="password" required></p>
        <input type="Submit" value="Enviar" name="send">
    </form>
  </body>
</html>

<?php 

if(isset($_POST["send"])){
    require_once("db.php");
    $name=$_POST["name"];
    $password=$_POST["password"];

    $sql="SELECT * FROM usuarios WHERE nombre_usuario=:nombre_usuario;";
    $sql = $conn->prepare($sql);
    $sql->bindParam("nombre_usuario",$name,PDO::PARAM_STR);
    $sql->execute();

    $select=$sql->fetch(PDO::FETCH_ASSOC);

    if(!$select){
        echo("<p>El nombre de usuario y la contraseña no coinciden</p>");
    }else{
        if (password_verify($password, $select["contraseña_usuario"])){
            session_start();
            $_SESSION["TOKEN"]=session_id();
            echo("<p>Login hecho</p>");
        }else{
            echo("<p>El nombre de usuario y la contraseña no coinciden</p>");
        }
    }

} 
    

?>