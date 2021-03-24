<?php 
/*
España Hernán Diego
Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.
*/
echo "<br>EJERCICIO 6<br><br>";
$contador;
$random= rand(20,32);
$array= array();

for($contador=0; $contador < 5; $contador++)
{
    $array[$contador]= $random; 
}

var_dump($array);
/*
foreach($contador=0; $contador < 5; $contador++)
{
    var_dump($array[$contador]);
}
*/
$acumuladorIgual=0;
$acumuladorMenor=0;
$acumuladorMayor=0;

while($contador < 5)
{
    $num= rand(1, 100);

    if ($acumuladorMayor > $num) {
    $acumuladorMayor++;
    } else {
        
    }if ($acumuladorMenor < $num) {
        $acumuladorMenor++;
    } else {
        $acumuladorIgual++;
    }
}
///*
if($menor>$cantidad[$i])
{
 $menor=$cantidad[$i];
}
$i=$i+1;



echo "<br>Hay ".$acumuladorIgual."elementos igual a 6";
echo "<br>Hay ".$acumuladorMenor."elementos menor a 6";
echo "<br>Hay ".$acumuladorMayor."elementos mayor a 6";
//*/  

?>