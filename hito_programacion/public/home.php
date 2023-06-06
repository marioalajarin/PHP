<?php

    //echo("Tu dirección IP es: {$_SERVER['REMOTE_ADDR']}");
    //https://www.w3schools.com/php/func_network_setcookie.asp

    //echo($mensaje);
    $ip=$_SERVER['REMOTE_ADDR'];
    $current_visit = date("c");


    $cookie=isset($_COOKIE["$ip"]);
    
    setcookie("$ip",$current_visit, (time()+60*60));


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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
    
    
    <div class="contenidoraiz">
      <?php 
        if(isset($_POST["mostrarCookie"])){
          echo("<p>IP: $ip</p>");
          echo("<p>Visita actual: $current_visit</p>");
          echo("<p>Última visita: ".$_COOKIE[$ip]."</p>");
        }
      ?>
      <form action="" method="post" class="vercookie">
        <input type="submit" value="Ver cookie" class="btn btn-primary mb-2" name="mostrarCookie"></input>
      </form>
      <div class="titulo">
        <h1>Diferencias entre lenguajes de programación orientados a objetos, a eventos y lenguajes procedimentales</h1>
        <div class="subtitulo">
          <h3>Lenguajes de programación orientados a objetos</h3>
          <div class="contenido"><p class="texto">Los lenguajes orientados a objetos permiten a los programadores definir clases y objetos que contienen un comportamiento y estado, estos objetos interactúan entre sí para crear un programa (ejemplos: Java, Python, Ruby...).</p></div>
          <img src="../images/Definiendo2Bclase2BMascota2Ben2BPython.png">
        </div>
        <div class="subtitulo">
          <h3>Lenguajes de programación orientados a eventos</h3>
          <div class="contenido"><p class="texto">Los lenguajes de programación dirigida a eventos es un paradigma de programación en el que tanto la estructura como la ejecución de los programas van determinados por los sucesos que ocurran en el sistema, definidos por el usuario o que ellos mismos provoquen (ejemplo: JavaScript).</p></div>
        </div>
        <div class="subtitulo">
          <h3>Lenguajes procedimentales</h3>
          <div class="contenido"><p class="texto">Los lenguajes procedimentales son un paradigma de la programación, también se le llama programación funcional, consiste en basarse en un número muy bajo de expresiones repetidas, englobarlas en un procedimiento y función y llamarlo cada vez que tenga que ejecutarse, esto significa que se puede escribir códgio para realizar una tarea en vez de escribir códgio para responder a un evento (ejemplos: C, Pascal...).</p></div>
          <img src="../images/procedimental.jpg">
        </div>
      </div>
      <div class="titulo">
        <h1>Diferencias</h1>
        <div class="contenido"><p class="texto">Los lenguajes de programación orientados a objetos se enfocan en la manipulación de objetos y clases, mientras que los lenguajes de programación a eventos se enfocan en la interacción entre objetos. Los lenguajes procedimentales, por otro lado, se enfocan en la ejecución de procedimientos. Los lenguajes orientados a objetos tienen un enfoque de programación modular, en el que los programadores pueden reutilizar código, mientras que los lenguajes de programación a eventos tienen un enfoque de programación basado en eventos, en el que los programadores pueden definir acciones y reacciones a eventos específicos. Los lenguajes procedimentales se enfocan en la definición de una secuencia de pasos para realizar una tarea.</p></div>
      </div>
      <h3>Mario Alajarín Escobar 1º DAM</h3>
      

    </div>
    
  </body>
</html>
