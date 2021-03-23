<?php 
/*
España Hernán Diego
Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.
*/
echo "<br>EJERCICIO 1<br><br>";
$numero= 0;
$acumulador= 0;

for ($numero= 1; $acumulador <= 1000; $numero++) { 
    
    $acumulador += $numero;
}

$acumulador= $acumulador - $numero;
print "Total:  $acumulador";

?>