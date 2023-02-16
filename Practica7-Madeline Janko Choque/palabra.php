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
    echo "Hay  ".str_word_count($p, 0). " palabras en la cadena <br>'$p'";
    echo "<br> Click <a href='ejercicio2.php'>Aquí</a> para hacer otro cálculo";
    echo "<br> Click <a href='index.php'>Aquí</a> para volver al menú principal";
}
?>
</body>
</html>