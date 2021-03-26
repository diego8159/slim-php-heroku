<?php 

/*
España Hernán Diego
Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.
*/
echo "<br>EJERCICIO 10<br><br>";

//---------------------------------------------
$arrayAsociativo= array( 

'Array 1' => array('Bolígrafo Azul' => array('Color' => 'blue', 'Marca' => 'Zanst Kort', 'Trazo' => 2, 'Precio' => 76),
'Bolígrafo Rojo'=> array('Color' => 'red', 'Marca' => 'Bic', 'Trazo' => 3, 'Precio' => 110),
'Bolígrafo Amarillo' => array('Color' => 'yellow', 'Marca' => 'Fabel Castel', 'Trazo' => 4, 'Precio' => 134)
),
'Array 2' => array('Bolígrafo Azul' => array('Color' => 'blue', 'Marca' => 'Zanst Kort', 'Trazo' => 2, 'Precio' => 76),
'Bolígrafo Rojo'=> array('Color' => 'red', 'Marca' => 'Bic', 'Trazo' => 3, 'Precio' => 110),
'Bolígrafo Amarillo' => array('Color' => 'yellow', 'Marca' => 'Fabel Castel', 'Trazo' => 4, 'Precio' => 134)
),
'Array 3' => array('Bolígrafo Azul' => array('Color' => 'blue', 'Marca' => 'Zanst Kort', 'Trazo' => 2, 'Precio' => 76),
'Bolígrafo Rojo'=> array('Color' => 'red', 'Marca' => 'Bic', 'Trazo' => 3, 'Precio' => 110),
'Bolígrafo Amarillo' => array('Color' => 'yellow', 'Marca' => 'Fabel Castel', 'Trazo' => 4, 'Precio' => 134)
),

);
//---------------------------------------------
//---------------------------------------------
	echo "<h1> ARRAY ASOCIATIVO </h1>";
	foreach($arrayAsociativo as $arraynumero => $array2)
	{
		echo "<h2> $arraynumero </h2>";
	 
		foreach($array2 as $boligrafo => $array3)
		{
			echo "<h4> $boligrafo </h4>";
			foreach($array3 as $caracteristica => $detalle)
			{
				echo "$caracteristica = $detalle / ";
			}
		}
	}
//---------------------FIN ASOCIATIVO------------------------
$arrayIndexado= array( 

	'Array 1' => array('Bolígrafo Azul' => array('Color' => 'blue', 'Marca' => 'Zanst Kort', 'Trazo' => 2, 'Precio' => 76),
	'Bolígrafo Rojo'=> array('Color' => 'red', 'Marca' => 'Bic', 'Trazo' => 3, 'Precio' => 110),
	'Bolígrafo Amarillo' => array('Color' => 'yellow', 'Marca' => 'Fabel Castel', 'Trazo' => 4, 'Precio' => 134)
	),
	'Array 2' => array('Bolígrafo Azul' => array('Color' => 'blue', 'Marca' => 'Zanst Kort', 'Trazo' => 2, 'Precio' => 76),
	'Bolígrafo Rojo'=> array('Color' => 'red', 'Marca' => 'Bic', 'Trazo' => 3, 'Precio' => 110),
	'Bolígrafo Amarillo' => array('Color' => 'yellow', 'Marca' => 'Fabel Castel', 'Trazo' => 4, 'Precio' => 134)
	),
	'Array 3' => array('Bolígrafo Azul' => array('Color' => 'blue', 'Marca' => 'Zanst Kort', 'Trazo' => 2, 'Precio' => 76),
	'Bolígrafo Rojo'=> array('Color' => 'red', 'Marca' => 'Bic', 'Trazo' => 3, 'Precio' => 110),
	'Bolígrafo Amarillo' => array('Color' => 'yellow', 'Marca' => 'Fabel Castel', 'Trazo' => 4, 'Precio' => 134)
	),
	
);
//---------------------------------------------
echo "<h1> ARRAY INDEXADO </h1>";
$i= 0;
$j= 0;
foreach($arrayIndexado as $arraynumero => $array2)
{
	echo "<h2> $arraynumero </h2>";
 
	foreach($array2 as $boligrafo => $array3)
	{
		echo "<h4> $boligrafo </h4>";
		foreach($array3 as $caracteristica[$i] => $detalle)
		{
			echo " / ".$caracteristica[$i]." = ".$detalle;
		}
	}
	
	$i++;
	$j++;
}
	
//---------------------------------------------

?>