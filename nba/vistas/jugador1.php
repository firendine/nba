<!DOCTYPE html>
<?php include "menu.php";
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
  //  $conn = new PDO('mysql:host=localhost;dbname=nba', 'silvia', 'silvia');
    $sql="SELECT foto,nombre FROM jugadores WHERE codigo=1";

    foreach ($conn->query($sql) as $row) {
        $imagen= $row['foto'];
        $nombre= $row['nombre'];

    }
?>
<br/><br/><br/>
<img src="<?=ROOT . DT . IMG . $imagen?>" idjugador="1">
<p><?= $nombre?></p>
    
</body>
</html>