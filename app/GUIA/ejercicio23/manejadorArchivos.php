<?php

 class Archivo 
 {
    public static function GuardarEnCSV()
    {
        //$miArchivo= fopen("usuario.csv", "a") or die("Imposible arbrir el archivo");//con a agrega datos y con w sobrescribe.
        //fwrite($miArchivo, "$usuario->nombre; $usuario->mail; ".date("d/m/Y")."\n");
        //fclose($miArchivo);
        //return $miArchivo;

        //$mensaje = null;
        //$retorno = false;
        //if ($this->_validarUsuario()) {//validar usuario
            
            $miArchivo= fopen("usuario.csv", "a") or die("Imposible abrir el archivo");//con a agrega datos y con w sobrescribe.
            //fwrite($miArchivo, "$usuario->nombre, $usuario->mail, ".date("d/m/Y")."\n");
            //fclose($miArchivo);
            //return $miArchivo;
            if (fwrite($miArchivo, "$this->nombre, $this->mail, ".date("d/m/Y")."\n")) {//fwrite($miarchivo, $mensaje) ---- validar escritura de archivo
                //$retorno = true;
                //echo "fwrite";
                return true;
            }else {
                //echo "fwrite fallido";
                return false;
            }
            fclose($miarchivo);
        //return $miarchivo;
    }

    public static function GuardarEnJSONv1()
    {
        $id = 0;
        $miArchivo= fopen("usuarios.json", "a") or die("Imposible abrir el archivo");
        //fwrite($miArchivo, "$id, $this->nombre, $this->mail, ".date("d/m/Y")."\n");
        $nuevoArray[] = array('id'=> $id,'nombre'=> $this->nombre, 'clave'=> $this->clave, 'mail'=> $this->mail, 'fecha'=> date("d/m/Y"));
        $json_string = json_encode($nuevoArray, JSON_PRETTY_PRINT);  
        $file = 'usuarios.json';
        $archivoJSON = file_put_contents($file, $json_string);   
        if ($archivoJSON) {
                $id++;
                return true;
            }else {
                return false;
            }
            fclose($miarchivo);
        //-----------------------------------------------
        /*
        //Creamos el JSON
        $json_string = json_encode($nuevoArray, JSON_PRETTY_PRINT);

        $file = 'usuarios.json';
        $archivoJSON = file_put_contents($file, $json_string); 

        return $archivoJSON;
        */

    }

    public static function GuardarEnJSONv2($ruta, $objeto)
    {
        //$arrayUsuarioJson= json_encode($arrayUsuario);

        $returnAux=false;
        if(isset($Objeto) && isset($ruta)  && is_string($Objeto)  && is_string($Objeto))
        {
            $archivo=fopen($ruta, "a");
            if(fwrite($archivo,$Objeto)>0)
            {
                echo "Se guardo el registro";
                $returnAux=true;
            }
            else
            {
                echo "Algo salio mal al escribir"; 
            }
            if(isset($archivo))
            {
                if(!fclose($archivo)){
                    echo "Algo salio mal al cerrar";
                }
            }
        }
        return $returnAux;
    }

    public static function traerObjetos($ruta)
    {
        if (file_exists($ruta)) {
            $archivo = fopen($ruta, "r");
            $lista = json_decode(fgets($archivo));
            echo "El archivo fue leido correctamente.";
            fclose($archivo);
            return $lista;
        } else {
            echo "La ruta requerida no existe";
        }
        
    }

    public static function GuardarEnJSONv3($ruta, $objeto)
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
        /*
        También se puede usar exit; y exit(); en reemplazo de: or die("Error! Sucedio algo");
        exit: sirve para interrumpir la ejecución del código PHP.
        Probar cuando tenga mas tiempo!
        https://www.php.net/manual/es/function.die.php
        https://www.w3schools.com/php/php_ref_misc.asp
        */
    }

 }
 

?>