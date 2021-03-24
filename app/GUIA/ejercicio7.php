<?php 
/*
España Hernán Diego
Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
Neiner, Maximiliano – Villegas, Octavio PHP- Página 1

salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.
*/
echo "<br>EJERCICIO 7<br><br>";

	// mostrar por pantalla los numeros impares menores que 10
	echo "<br>--------------- WHILE -------------------<br>";
	/*Funciona
			$i = 1;     // contar los números generados
			$n = 10;   // cuantos impares se deben generar
			$impar = 1; // el numero impar generado
			while ( $i <= $n){
				echo "$impar <br />";
				$i = $i + 1;
				$impar = $impar + 2;
			}
	*/
			$i= 1;
			while($i < 20)
			{
				if (($i % 2) != 0) 
				{ 
					echo "$i <br/>"; 
				} 
				$i++;
			}
        	echo "<br>--------------- FOR -------------------<br>";
        	for ($i = 1; $i < 20; $i++) 
        	{ 
				if (($i % 2) != 0) 
				{ 
					echo "$i <br/>"; 
				} 
			} 	
			echo "<br>--------------- FOREACH -------------------<br>";	
			foreach (range(1, 20, 2) as $number) 
			{
			    echo "$number <br/>";
			}            
			        
			        //echo "<br><br>";

?>