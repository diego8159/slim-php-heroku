<?php
error_reporting(E_ALL); 
ini_set('display_errors','1'); 

function guardar_CSV($path, $dato)
{
    $archivoAux = fopen($path, 'a');
    fwrite($archivoAux, "$dato->_nombre,$dato->_mail,$dato->_clave" . PHP_EOL);
    fclose($archivoAux);
}

function leer_CSV($archivoCSV)
{

    $arrayUsuarios = array();
    $archivo = fopen($archivoCSV, 'r');

    while (!(feof($archivo))) {
        $linea = fgets($archivo);
        if (!empty($linea)) {
            array_push($arrayUsuarios, explode(",", $linea));
        }
    }
    fclose($archivo);

    return $arrayUsuarios;
}

function Leer_Json($path, &$array)
    {
        $retorno = false;
        if(file_exists($path) && filesize($path) > 0)
        {
            $archivo = fopen($path, 'r') or die("Error. imposible abrir el archivo.");
            echo "Mostrando el array que se recibe: ".$array;
            var_dump($array);
            $array = fread($archivo, filesize($path)) or die("Error. imposible leer el archivo.");
            $cerrar = fclose($archivo) or die("Error. imposible cerrar el archivo.");
            echo "Mostrando el array leido: ".$array;
            var_dump($array);
            $array = json_decode($array, true) or die("Error. imposible traducir el archivo.");
            echo "Mostrando el array des-convertido: ".$array;
            var_dump($array);
            $retorno = true;
        }
        else
        {
            $array = array();
        }
        return $retorno;

    }

function Guardar_Json($dato, $path)
{
    $retorna = false;
    

    if (Leer_Json($path, $array)) 
    {
        array_push($array, $dato) or die("Error. imposible añadir dato al array.");
        $aux = json_encode($array, true) or die("Error. imposible convertir el archivo.");
    } else {
        array_push($array, $dato) or die("Error. imposible añadir dato al array.");
        $aux = json_encode($array, true) or die("Error. imposible convertir el archivo.");
    }

    $archivo = fopen($path, 'w') or die("Error. imposible abrir el archivo para modificarlo.");
    if (fwrite($archivo, $aux)) {
        $retorna = true;
    }
    fclose($archivo) or die("Error. imposible cerrar el archivo.");

    return $retorna;
}

function Reescribir_Json($dato, $path)
    {
        $retorno = false;
        $archivo = fopen($path, 'w');
        if(fwrite($archivo, json_encode($dato, true)))
        {
            $retorno = true;
        }
        fclose($archivo);
        return $retorno;
    }



?>