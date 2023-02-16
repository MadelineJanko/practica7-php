<?php
    if(isset($_GET["n1"]) && isset($_GET["n2"])){
    $n1=$_GET["n1"];
    $n2=$_GET["n2"];
    $cociente=0;
    while($n1>=$n2){
    $n1= $n1 - $n2;
    $cociente+=1;}
    echo "El Cociente es: {$cociente}";
    echo "<br> El residuo es: {$n1}";
    echo "<br> Click <a href='ejercicio5.php'>Aquí</a> para hacer otro cálculo";
    echo "<br> Click <a href='index.php'>Aquí</a> para volver al menú principal";
}
else
    echo "La variable no existe <a href='ejercicio4.php.php'>Retornar</a>";
?>