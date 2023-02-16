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
    if(isset($_GET["n"])){
    $n=$_GET["n"];
    $aux=1;
    $fib=0;
    echo "La serie es:";
    if($n>0){
        for($i=1;$i<=$n;$i++){
            echo "<br> {$fib}";
            $aux+=$fib;
            $fib=$aux-$fib;
        }
    }
    else
    {
        echo "El numero debe ser mayor a cero";
    }
    
    echo "<br> Click <a href='ejercicio1.php'>Aquí</a> para hacer otro cálculo";
    echo "<br> Click <a href='index.php'>Aquí</a> para volver al menú principal";
}
else
    echo "La variable no existe <a href='ejercicio4.php.php'>Retornar</a>";
?>
</body>
</html>