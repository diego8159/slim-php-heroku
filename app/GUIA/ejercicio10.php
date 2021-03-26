<?php 
/*
España Hernán Diego
Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.
*/
echo "<br>EJERCICIO 10<br><br>";

$color = '';
$marca = '';
$trazo = 0;
$precio = 0;
$lapicera1;
$lapicera2;
$lapicera3;

$arrayIndex= array($lapicera1 => array($color => blue, $marca => 'Zanst Kort', $trazo => 2, $precio => 76), $lapicera2=> array($color => red, $marca => 'Bic', $trazo => 3, $precio => 110), $lapicera3 => array($color => yellow, $marca => 'Fabel Castel', $trazo => 4, $precio => 134));

foreach($arrayIndex as $clave=>$valor)
	{
	//echo " " . $clave . " " . $valor . "<br/>";
	echo "{$clave} => {$valor} ";
	print_r($arrayIndex);
	}

?>