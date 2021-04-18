<?php

 class Archivo 
 {

    public static function traerObjetos($ruta)
    {
        if (file_exists($ruta)) {
            $archivo = fopen($ruta, "r");
            $lista = json_decode(fgets($archivo));
            echo "El archivo fue leido correctamente.";
            //array_push($lista, $objeto)or die("Error! Sucedio algo al intentar añadir el objeto a la lista");
            fclose($archivo);
            return $lista;
        } else {
            echo "La ruta requerida no existe";
        }
        
    }

    public static function GuardarEnJSON($ruta, $objeto)
    {
        $lista = Archivo::traerObjetos($ruta);

        $archivo = fopen($ruta, "w")or die("Error! Sucedio algo al intentar abrir el archivo para sobrescribir");
        if (isset($lista)) {
            array_push($lista, $objeto)or die("Error! Sucedio algo al intentar añadir el objeto a la lista");
            echo "El objeto fue añadido correctamente.";
        }else {
            $lista = array($objeto);
            echo "El primer objeto fue añadido correctamente.";
        }
        fwrite($archivo, json_encode($lista))or die("Error! Sucedio algo al intentar escribir el archivo con la lista: $lista");
        fclose($archivo)or die("Error! Sucedio algo al intentar cerrar el archivo");
    }

 }
 

?>