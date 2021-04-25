<?php
//error_reporting(E_ALL); 
//ini_set('display_errors','1'); 
// Notificar todos los errores de PHP (ver el registro de cambios)
error_reporting(E_ALL);
// Lo mismo que error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

class Archivo
{

    static function guardar_CSV($path, $dato)
    {
        $archivoAux = fopen($path, 'a');
        fwrite($archivoAux, "$dato->_nombre,$dato->_mail,$dato->_clave" . PHP_EOL);
        fclose($archivoAux);
    }

    static function leer_CSV($archivoCSV)
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

    static function Leer_Json($path)
        {
            $array = [];
            if(file_exists($path) && filesize($path) > 0)
            {
                $archivo = fopen($path, 'r');// or die("Error. imposible abrir el archivo.");
                $arrayleido = fread($archivo, filesize($path));// or die("Error. imposible leer el archivo.");
                $array = json_decode($arrayleido);// or die("Error. imposible traducir el archivo.");
                fclose($archivo);// or die("Error. imposible cerrar el archivo.");
            }
            return $array;

        }

    static function Guardar_Json($dato, $path)
    {
        $retorna = false;
        $aux= [];
        $array= [];
        //*
        $array= Archivo::Leer_Json($path);// or die("Error. imposible leer la ruta.");
        array_push($array, $dato);// or die("Error. imposible añadir dato al array.");
        $aux = json_encode($array, true);// or die("Error. imposible convertir el archivo.");
        $archivo = fopen($path, 'w');// or die("Error. imposible abrir el archivo para modificarlo.");
        if (fwrite($archivo, $aux)) {
            $retorna = true;
        }
        fclose($archivo);// or die("Error. imposible cerrar el archivo.");

        return $retorna;
    }

    static function Reescribir_Json($dato, $path)
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
}

?>