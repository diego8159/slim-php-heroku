<?php 

/*
España Hernán Diego
Aplicación No 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.
*/
echo "<br>EJERCICIO 13<br><br>";

//---------------------------------------------

class converterString
{
        function invertirString($palabra, $max)
        {
            if(strlen($palabra) <= $max) 
            {
                if (strcmp($palabra, "Recuperatorio") == 0) 
                {
                    return 1;
                }
                else if(strcmp($palabra, "Parcial") == 0)
                    { 
                        return 1;
                    }
                    else if(strcmp($palabra, "Programacion") == 0)
                    {
                        return 1;
                    }else{return 0;}
            }
            else{echo "La cadena es demaciada larga.<br><br>";}
        }

}
$palabra= "Programacion";
$max= 15;
$convertir= new converterString();

if ($convertir->invertirString($palabra, $max) == 1) 
{
    echo "La palabra --SI-- pertenece al listado.";
}
else
    {
        echo "La palabra ..NO.. pertenece al listado.";
    }

?>