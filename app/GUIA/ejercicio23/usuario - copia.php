<?php

 class Usuario 
 {
    public $nombre;
    public $clave;
    public $mail;
    public $id;
    public $fechaDeRegistro;
    public $foto;

    function __construct($parametro_nombre, $parametro_clave, $parametro_mail)
        {
            $this->id = rand(1,10000);
            $this->nombre= $parametro_nombre;
            $this->clave= $parametro_clave;
            $this->mail= $parametro_mail;
            $this->fechaDeRegistro = date("d-M-Y");
        }
    //GETERS y SETERS.
        public function GetNombre()
        {
            return $this->nombre;
        }
        public function GetClave()
        {
            return $this->clave;
        }
        public function GetMail()
        {
            return $this->mail;
        }
        public function GetId()
        {
            return $this->id;
        }
        public function GetFoto()
        {
            return $this->foto;
        }
        public function SetFoto($foto)
        {
            if(isset($foto))
            {
                $this->foto = $foto;
            }
        }
        public function GetFechaDeRegistro()
        {
            return $this->fechaDeRegistro;
        }
    static function _validarUsuario(Usuario $usuario)
    {
         $estado = NULL;
        if (isset($usuario->nombre) && isset($usuario->clave) && isset($usuario->mail)) 
        {
            $estado= true;
            //echo "Seteo bien";
        }else {
            $estado= false;
            //echo "Seteo mal";
        }
        return $estado;
    }

    function GuardarEnCSV()
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

    public function GuardarEnJSON()
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

    /**
     * @return devuelve un array con todos los datos del objeto
     */
    private function GetObjeto()
    {
        return array("id"=>$this->GetId(),"nombre"=>$this->GetNombre(),"clave"=>$this->GetClave(),"mail"=>$this->GetMail(),"fechaRegistro"=>$this->GetFechaDeRegistro(),"foto"=>$this->GetFoto());
    }
    /**
     * @return devuelve los datos del objeto en formato JSON
     */
    public function UsuarioToJSON()
    {
        if(isset($this))
        {
            return json_encode($this->GetObjeto())."\r\n";
        }
    }

    public static function GuardarArchivo($ruta, $Objeto)
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

 }
 

?>