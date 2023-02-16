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
    <form method="get" action="fibonacci.php">
        <label>Ingrese un número entero:</label>
        <input type="number" name="n" pattern="[0-9]+" min="1" max="50">
        <input type="submit" value="Calcular Fibonacci">
    </form>
</body>
</html>
