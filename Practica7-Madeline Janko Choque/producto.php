<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>
<?php
    if(isset($_GET["n1"]) && isset($_GET["n2"])){
    $n1=$_GET["n1"];
    $n2=$_GET["n2"];
    $r=0;
    for($i=0; $i<$n2; $i++)
    $r= $r + $n1;
    echo "El Producto de {$n1} con {$n2} es: {$r}";
    echo "<br> Click <a href='ejercicio4.php'>Aquí</a> para hacer otro cálculo";
    echo "<br> Click <a href='index.php'>Aquí</a> para volver al menú principal";
}
else
    echo "La variable no existe <a href='ejercicio4.php.php'>Retornar</a>";
?>
</body>
</html>
