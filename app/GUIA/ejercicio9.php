<?php 
/*
España Hernán Diego
Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.
*/
echo "<br>EJERCICIO 9<br><br>";

$arrayAsociativo= array('Bolígrafo Azul' => array('Color' => 'blue', 'Marca' => 'Zanst Kort', 'Trazo' => 2, 'Precio' => 76),
'Bolígrafo Rojo'=> array('Color' => 'red', 'Marca' => 'Bic', 'Trazo' => 3, 'Precio' => 110),
'Bolígrafo Amarillo' => array('Color' => 'yellow', 'Marca' => 'Fabel Castel', 'Trazo' => 4, 'Precio' => 134)
);

/*
	foreach($arrayAsociativo as $boligrafos => $detalle)
		{
			echo "$boligrafos:<br>";
			while (list($clave, $valor) = each($detalle) ) {
				echo "$clave= $valor<br>";
			}
			echo "<br>";
		}
*/
	foreach($arrayAsociativo as $boligrafo => $array2)
	{
		echo "<h1> $boligrafo </h1>";
	 
		foreach($array2 as $caracteristica => $detalle)
		{
			echo "$caracteristica = $detalle<br>";
		}
	}

?>