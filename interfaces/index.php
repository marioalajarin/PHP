<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Interfaces en PHP</h2>
    <?php
   require_once('escritorio.php');
    $escritorio1=new Escritorio("war games");
    echo $escritorio1->verEscritorio();
    echo $escritorio1->llamar("luis lópez");
    ?>
</body>
</html>