<?php 
/*
España Hernán Diego
Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.
*/
echo "<br>EJERCICIO 9<br><br>";

$color = '';
$marca = '';
$trazo = 0;
$precio = 0;

$lapicera[0] = array($color => 'blue', $marca => 'Zanst Kort', $trazo => 2, $precio => 76);

$lapicera[1] = array($color => 'red', $marca => 'Bic', $trazo => 3, $precio => 110);

$lapicera[2] = array($color => 'yellow', $marca => 'Fabel Castel', $trazo => 4, $precio => 134);

$i =0;
foreach($lapicera[$i] as $clave=>$valor)
	{
	echo " " . $clave . " " . $valor . "<br/>";
	}
	$i = $i + 1;

?>