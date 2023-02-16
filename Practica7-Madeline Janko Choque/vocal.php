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
    if(isset($_POST["p"]) && isset($_POST["btn"])){
    $p=$_POST["p"];
    $vocalesEncontradas=0;
    $p=strtolower($p);
    $longitud = strlen($p);
    echo "'{$p}'";
    for ($i = 0; $i < $longitud; $i++) { 
        if (in_array($p[$i], ["a", "e", "i", "o", "u"])) 
			$vocalesEncontradas=$vocalesEncontradas+1;
    }
    echo "<br> La cantidad de vocales encontradas es: {$vocalesEncontradas}";
    echo "<br> Click <a href='ejercicio3.php'>Aquí</a> para hacer otro cálculo";
    echo "<br> Click <a href='index.php'>Aquí</a> para volver al menú principal";
}
?>
</body>
</html>