<?php 

/*
España Hernán Diego
Aplicación No 14 (Par e impar)
Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función esImpar.
*/
echo "<br>EJERCICIO 14<br><br>";

//---------------------------------------------

class verificarPar
	{
		function esPar($entero)
		{
			if ($entero % 2 == 0) 
			{
				return 1;
			}
			else
				$this->esImpar($entero);
		}
		function esImpar($entero)
		{return 0;}
	}
	$numero= 8;
	$verificar= new verificarPar();

	if ($verificar->esPar($numero))
	{
		echo "TRUE";
	}else
	echo "FALSE";

?>