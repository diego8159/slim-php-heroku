<?php

 class Usuario 
 {
     //Es importante el orden de las variables, ya que también sera el orden en que se guarden los JSON.
    public $id;
    public $nombre;
    public $clave;
    public $mail;
    public $fechaDeRegistro;
    public $foto;

    function __construct($parametro_nombre, $parametro_clave, $parametro_mail)
        {
            $this->id = rand(1,10000);
            $this->nombre= $parametro_nombre;
            $this->clave= $parametro_clave;
            $this->mail= $parametro_mail;
            $this->fechaDeRegistro = date("Y-m-d");//Formato de fecha que reconoce las Bases de Datos.
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

    /**
     * @return devuelve los datos del objeto para luego guardarlo.
     */
    public function GetObjeto()//Antes private
    {
        echo "Id: ".$this->GetId().PHP_EOL."Nombre: ".$this->GetNombre().PHP_EOL."Clave: ".$this->GetClave().PHP_EOL."Mail: ".$this->GetMail().PHP_EOL."FechadeRegistro: ".$this->GetFechaDeRegistro().PHP_EOL."Foto: ".$this->GetFoto();
        //return array("id"=>$this->GetId(),"nombre"=>$this->GetNombre(),"clave"=>$this->GetClave(),"mail"=>$this->GetMail(),"fechaRegistro"=>$this->GetFechaDeRegistro(),"foto"=>$this->GetFoto());
    }

 }
 

?>