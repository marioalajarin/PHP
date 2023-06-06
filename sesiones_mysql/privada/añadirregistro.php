<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Añadir registro</h1>
    <form action="" method="post">
        <p>Ciudad: <input type="text" name="ciudad" required></p>
        <p>Temperatura máxima: <input type="number" name="tmax" required></p>
        <p>Temperatura mínima: <input type="number" name="tmin" required></p>
        <p><input type="submit" value="Enviar" name='nuevoregistro'></p>
    </form>
    <?php
    if(isset($_POST["nuevoregistro"])){
        $ciudad=$_POST['ciudad'];
        $tmax=$_POST['tmax'];
        $tmin=$_POST['tmin'];
        $conn=new PDO("mysql:host=localhost;port=3306;dbname=test","root","");
        $consulta="CALL `addregistro`('".$ciudad."', '".$tmax."', '".$tmin."');";
        $conn->query($consulta);
        header('location:../publica/verregistro.php');
    }
    
    ?>
</body>
</html>