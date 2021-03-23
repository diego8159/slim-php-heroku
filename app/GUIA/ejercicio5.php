<?php 
/*
España Hernán Diego
Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.
*/
echo "<br>EJERCICIO 5<br><br>";

$numero= 46;

    function unidad($numero)
    {
        switch ($numero)
        {
            case 9:
            {
                $num = "nueve";
                break;
            }
            case 8:
            {
                $num = "ocho";
                break;
            }
            case 7:
            {
                $num = "siete";
                break;
            }
            case 6:
            {
                $num = "seis";
                break;
            }
            case 5:
            {
                $num = "cinco";
                break;
            }
            case 4:
            {
                $num = "cuatro";
                break;
            }
            case 3:
            {
                $num = "tres";
                break;
            }
            case 2:
            {
                $num = "dos";
                break;
            }
            case 1:
            {
                $num = "uno";
                break;
            }
        }
        return $num;
    }

    //----------------------------------------------------------- 
    
    if ($numero >= 20 && $numero <= 29)
    {
        if ($numero == 20)
            $num_letra = "veinte ";
        else
            $num_letra = "veinti".unidad($numero - 20);
    }
    else if ($numero >= 30 && $numero <= 39)
    {
        $num_letra = "treinta ";
 
        if ($numero > 30)
            $num_letra = $num_letra."y ".unidad($numero - 30);
    }
    else if ($numero >= 40 && $numero <= 49)
    {
        $num_letra = "cuarenta ";
 
        if ($numero > 40)
            $num_letra = $num_letra."y ".unidad($numero - 40);
    }
    else if ($numero >= 50 && $numero <= 59)
    {
        $num_letra = "cincuenta ";
 
        if ($numero > 50)
            $num_letra = $num_letra."y ".unidad($numero - 50);
    }
    else if ($numero <= 60)
    {
        $num_letra = "sesenta ";
    }

    echo "El numero es: $numero y convertido es: ".$num_letra;

/*
$num= 32;

$uno= "uno";
$dos= "dos";
$tres= "tres";
$cuatro= "cuatro";
$cinco= "cinco";
$seis= "seis";
$siete= "siete";
$ocho= "ocho";
$nueve= "nueve";
//---
$veinte= "veinte";
$treinta= "treinta";
$cuarenta= "cuarenta";
$cincuenta= "cuarenta";
$sesenta= "cuarenta";
//---
//---
if ($num >= 20 && $num < 30) {
    $resultado= $veinte;
}elseif ($num >= 30 && $num < 40) {
    $resultado= $num - 30;
    for ($i=1; $i == $resultado; $i++) { 
        $resultado= $treinta . " y " . ;
    }
}
elseif ($num >= 40 && $num < 50) {
    $resultado= $cuarenta;
}
elseif ($num >= 50 && $num < 60) {
    $resultado= $cincuenta;
}elseif ($num >= 60 && $num < 70){
    $resultado= $sesenta;
}else {
    echo "<br>Su numero es diferente a los valores indicados.";
}

echo "<br><br>El numero es: $num y, el resultado es: $resultado";
*/

?>