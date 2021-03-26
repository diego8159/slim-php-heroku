<?php 

/*
España Hernán Diego
Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
*/
echo "<br>EJERCICIO 12<br><br>";

//---------------------------------------------

    $arrayCaracteres= array("H","O","L","A");

    $arrayInvertido= array_reverse($arrayCaracteres);

    echo "Array de caracteres:<br>";
    foreach ($arrayCaracteres as $caracter) 
    {
        echo "Caracter= $caracter<br>";
    }

    echo "<br>Array invertido:<br>";
    foreach ($arrayInvertido as $caracterInvertido) 
    {
        echo "Caracter= $caracterInvertido<br>";
    }

?>