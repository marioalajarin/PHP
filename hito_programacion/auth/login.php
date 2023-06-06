<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/homestyles.css" type="text/css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="../public/home.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="../view/form.php" class="nav-link px-2 text-white">Postea algo!</a></li>
          <li><a href="../view/viewposts.php" class="nav-link px-2 text-white">Ver posts</a></li>
          <li><a href="../private/updateposts.php" class="nav-link px-2 text-white">Edita los posts</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2"><a href="../auth/login.php">Login</a></button>
          <button type="button" class="btn btn-warning"><a href="../auth/register.php">Sign-up</a></button>
        </div>
      </div>
    </div>
    </header>
    <div class="contenidoraizforms">
    <h1>Login</h1>
        <form action="" method="post" class="formulario">
            <div class="form-group">
                <label for="username" class="">Nombre de usuario:</label>
                <div class="form-group">
                    <input type="text" name="username" placeholder="Nombre de usuario" required class="form-control">
                </div>
                <label for="password" class="">Contraseña:</label>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Contraseña" required class="form-control">
                </div>
                <div class="for-group">
                    <div class="form-group">
                        <input type="submit" value="Log in" name="send_data" class="btn btn-primary mb-2">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php 
    if (isset($_POST["send_data"])){
        require_once("../config/conn.php");
        $password=$_POST["password"];
        $username=$_POST["username"];

        $sql="SELECT * FROM users WHERE username=:username;";
        $sql=$conn->prepare($sql);
        $sql->bindParam("username",$username,PDO::PARAM_STR);
        $sql->execute();

        $select=$sql->fetch(PDO::FETCH_ASSOC);

        if(!$select){
            echo("<p>El nombre de usuario y la contraseña no coinciden</p>");
        }else{
            if (password_verify($password, $select["password"])){
                session_start();
                $_SESSION["TOKEN"]=session_id();
                echo("<p>Login hecho</p>");
                //echo("<a href='../private/updateposts.php'>Ir a updateposts</a>");
            }else{
                echo("<p>El nombre de usuario y la contraseña no coinciden</p>");
            }
        }

    } 
    
    ?>
    

</body>
</html>