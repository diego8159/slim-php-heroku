<?php

 class Usuario 
 {
    public $nombre = NULL;
    public $clave = NULL;
    public $mail = NULL;

    function __construct($parametro_nombre, $parametro_clave, $parametro_mail)
        {
            $this->nombre= $parametro_nombre;
            $this->clave= $parametro_clave;
            $this->mail= $parametro_mail;
        }
     static function _validarUsuario(Usuario $usuario)
     {
         $estado = NULL;
        if (isset($usuario->nombre) && isset($usuario->clave) && isset($usuario->mail)) 
        {
            $estado= true;
        }else {
            $estado= false;
        }
        return $estado;
     }

    function GuardarEnCSV()
    {            
            $miArchivo= fopen("usuario.csv", "a") or die("Imposible abrir el archivo");//con a agrega datos y con w sobrescribe.
      
            if (fwrite($miArchivo, "$this->nombre, $this->mail, ".date("d/m/Y")."\n")) {//fwrite($miarchivo, $mensaje) ---- validar escritura de archivo
                return true;
            }else {
                return false;
            }
            fclose($miarchivo);
    }

public static function RetornarArrayDelCSV(string $ruta)
    {
        $cadena="";
        $returnArray = array();
        if(isset($ruta))
        {
            if (($archivo=fopen($ruta, "r"))) 
            {
                while (($datosUsuario = fgetcsv($archivo))) 
                {
                    array_push($returnArray,new Usuario($datosUsuario[0],$datosUsuario[1],$datosUsuario[2]));
                }
            }
        }
        return $returnArray;
    }
    public static function DibujarListado($array)
    {
        if(isset($array))
        {
            echo"<ul>";
            foreach ($array as $value) {
                echo "<li>" . $value->ToString()."</li>";
            }
            echo"</ul>";
        }
    }

    public function ToString()
    {
        return "Nombre: " .$this->nombre . " Clave: " .$this->clave. " Mail: " .$this->mail;
    }

 }
 

?>