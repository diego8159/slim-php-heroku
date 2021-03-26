<?php 

/*
España Hernán Diego
Aplicación No 11 (Potencias de números)
Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función
que las calcule invocando la función pow).
*/
echo "<br>EJERCICIO 11<br><br>";

//---------------------------------------------

	//Ejercicio 11 de la Guia 02.

	for($base=1; $base <= 4; $base++)
    { 
    	 echo "Las potencias del numero $base son:<br>";
         for($exponente=1; $exponente <= 4; $exponente++)
         {
            $potencia= pow($base , $exponente);
            echo $base." a la " . $exponente ." = ". $potencia. "<br/>" ;
         }
         echo "<br/>";
    }

?>