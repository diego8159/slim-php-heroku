<?php

 class Usuario 
 {
    public $nombre = NULL;
    public $clave = NULL;
    public $mail = NULL;

    function __construct($parametro_nombre, $parametro_clave, $parametro_mail)//Constructor (inicializa los atributos de la clase).
        {
            $this->nombre= $parametro_nombre;
            $this->clave= $parametro_clave;
            $this->mail= $parametro_mail;
        }

     static function _validarUsuario(Usuario $usuario)//Validar que todos los campos enten seteados.
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

    function GuardarEnCSV()//Guarda usuarios en un archivo CSV.
    {            
            $miArchivo= fopen("usuario.csv", "a") or die("Imposible abrir el archivo");//con a agrega datos y con w sobrescribe.
      
            if(fwrite($miArchivo,$this->UsuarioToCSV())>0) {//fwrite($miarchivo, $mensaje) ---- validar escritura de archivo
                return true;//date("d/m/Y")     
            }else {
                return false;
            }
            fclose($miarchivo);
    }

    private function UsuarioToCsv()//El formato de como se guarda el archivo.
    {
        return $this->nombre . "," .$this->clave. "," .$this->mail."\n";
    }

public static function RetornarArrayDelCSV(string $ruta)//Retornar array leido linea por linea.
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
    public static function DibujarListado($array)//Mostrar en pantalla el listado de usuarios.
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

    public function ToString()//Mostrar en pantalla (En el navegador).
    {
        return "Nombre: " .$this->nombre . " Clave: " .$this->clave. " Mail: " .$this->mail;
    }

    /**
     * @var $array Es el array donde se va a verificar si existe el usuario de instancia
     * @return -1 si el mail no existe, 0 si no coincide la clave y 1 si esta OK
    */
    public Function ValidarUsuario($array)
    //Se le pasa como parametro un array conteniendo la lista de usuarios.
    {
        $returnAux = -1;
        if(isset($array))
        {
            foreach ($array as $value)
            //Se recorre el array completo para buscar el usuario ingresado
            //(en este caso $value seria cada usuario del array), 
            //si la funcion Equals encuentra mismo mail y clave retorna 1 .
            //Luego con el break cortamos el bucle. 
            {
                if(($returnAux = $this->Equals($value)) == 1)
                {
                    break;  
                }
            }
        }
        return $returnAux;
    }

    /**
     * @var $usuario Es el Usuario a validar
     * @return -1 si el mail no existe, 0 si no coincide la clave y 1 si esta OK
    */
    public function Equals(Usuario $usuario)
    {
        $returnAux = -1;
        if(isset($usuario) && is_a($usuario,"Usuario"))
        //Primero validamos que el usuario este seteado.
        //Segundo validamos que el usuario(instancia de objeto) pertenezca o se relacione con la clase.
        {
            if($usuario->mail == $this->mail)
            {
                if($usuario->clave == $this->clave)
                {
                    $returnAux=1;
                }
                else
                {
                    $returnAux=0;
                }
            }
        }
        return $returnAux;
    }

 }
 

?>