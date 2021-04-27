<?php
require_once "AccesoDatos.php";
class Usuario
{
    private $_Id;
    private $_Nombre;
    private $_Apellido;
    private $_Clave;
    private $_Mail;
    private $_FechaDeRegistro;
    private $_Localidad;

    public function __construct($id = null, $nombre, $apellido, $clave, $mail, $localidad)
    {
        $this->_Id = $id;
        $this->_Nombre = $nombre;
        $this->_Apellido = $apellido;
        $this->_Clave = $clave;
        $this->_Mail = $mail;
        $this->_FechaDeRegistro =  date("Y-m-d");//date("y-m-d h:m:s");
        $this->_Localidad = $localidad;
    }

    public function InsertarElUsuarioParametros()
    {
               $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
               $consulta = $objetoAccesoDato->RetornarConsulta("INSERT INTO usuario(nombre, apellido, clave, email, fechaDeRegistro,localidad) 
                VALUES (:nombre,:apellido,:clave,:email,:fecha_de_modificacion,:localidad);");
                $consulta->bindValue(':nombre', $this->_Nombre, PDO::PARAM_STR);
                $consulta->bindValue(':apellido', $this->_Apellido, PDO::PARAM_STR);
                $consulta->bindValue(':clave', $this->_Clave, PDO::PARAM_STR);
                $consulta->bindValue(':email', $this->_Mail, PDO::PARAM_STR);
                $consulta->bindValue(':fecha_de_modificacion', $this->_FechaDeRegistro, PDO::PARAM_STR);
                $consulta->bindValue(':localidad', $this->_Localidad, PDO::PARAM_STR);
               $consulta->execute();		
               return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }
}
?>