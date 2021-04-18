<?php

include_once ("./manejadorArchivos.php");

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

    public static function ListarUsuarios($array)//Funciona pero la imagen se ve mal
    {
        var_dump($array);
        //$array= new stdClass($array);
        if(isset($array) && is_array($array))
        {
            echo"<ul>";
            foreach ($array as $value) {
                echo "<li>".$value->id."</li>";
                echo "<li>".$value->nombre."</li>";
                echo "<li>".$value->clave."</li>";
                echo "<li>".$value->mail."</li>";
                echo "<li>".$value->fechaDeRegistro."</li>";
                //echo "<li>".$value->foto."</li>";
                echo "<li><img width='50' height='50' src='.$value->foto.'></li>";
            }
            echo"</ul>";
        }
    }

    public static function ListarJSON($array){//Funciona ---> falta poder visualizar las imagenes.
        //$array = LeerArchivoJSON("usuarios.json");
        $mostrar = "<ul>";
        foreach ($array as $value) {
            echo "Mostrando array: ";
            var_dump($array);
            echo "Mostrando value: ";
            $usuario = new Usuario($value->nombre, $value->clave, $value->mail);
            //$path = "Usuarios/Fotos/".$usuario->mail.".png";
            //$foto = base64_encode(file_get_contents($path));
            //$src = 'data:'.mime_content_type($path).';base64,'.$foto; 

            //$mostrar .= "<li>".$usuario."<img width='50' height='50' src=\"$src\">"."</li><br>";
            $mostrar .= "<li>".$usuario->id."</li><br>";
            $mostrar .= "<li>".$usuario->nombre."</li><br>";
            $mostrar .= "<li>".$usuario->clave."</li><br>";
            $mostrar .= "<li>".$usuario->mail."</li><br>";
            $mostrar .= "<li>".$usuario->fechaDeRegistro."</li><br>";
            $mostrar .= "<li>".$usuario->foto."</li><br>";
        }
        $mostrar .= "</ul>";
        return $mostrar;
    }

 }
 

?>