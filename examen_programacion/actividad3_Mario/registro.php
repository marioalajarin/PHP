<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Registro</h1>
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
    $hashed_password=password_hash($password, PASSWORD_DEFAULT);

    $sql="INSERT INTO usuarios (nombre_usuario,contraseña_usuario,fecha_alta_usuario) VALUES ('$name','$hashed_password',(NOW())); ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo("El registro de ha agregado de manera correcta");
}

?>

