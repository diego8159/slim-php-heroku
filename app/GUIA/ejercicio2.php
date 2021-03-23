<?php 
/*
España Hernán Diego
Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.
*/
echo "<br>EJERCICIO 2<br><br>";
date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha = date("d.m.y"); 
$mes = date("m"); 

print "Fecha:  $fecha";
print "<br>";
print "Mes:  $mes";

switch ($mes) {
    
    case '01':
        echo "Invierno";
        break;
    case '02':
        echo "Invierno";
        break;
    case '03':
        echo "Primavera";
        break;
    case '04':
        echo "Primavera";
        break;
    case '05':
        echo "Primavera";
        break;
    case '06':
        echo "Verano";
        break;
    case '07':
        echo "Verano";
        break;
    case '08':
        echo "Verano";
        break;
    case '09':
        echo "Otoño";
        break;
    case '10':
        echo "Otoño";
        break;
    case '11':
        echo "Otoño";
        break;
    case '12':
        echo "Invierno";
        break;
    
    default:
        echo "Estación por defecto";
        break;
}

?>