<?php 
/*
España Hernán Diego
Aplicación No 3 (Obtener el valor del medio)
Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”
*/
echo "<br>EJERCICIO 3<br><br>";
$a= 1;
$b= 5;
$c= 3;

if ($a > $b && $a < $c) {
    echo $a;
}
elseif ($b > $a && $b < $c) {
    echo $b;
}
elseif ($c > $a && $c < $b) {
    echo $c;
}
else {
    echo "<br><br>No hay valor del medio";
}

?>