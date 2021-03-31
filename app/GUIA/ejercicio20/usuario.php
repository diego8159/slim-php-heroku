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
     static function _validarUsuario()
     {
         $estado = NULL;
        if (isset($this->nombre) && isset($this->clave) && isset($this->mail)) 
        {
            $estado= true;
        }else {
            $estado= false;
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
            if (fwrite($miArchivo, "$usuario->nombre, $usuario->mail, ".date("d/m/Y")."\n")) {//fwrite($miarchivo, $mensaje) ---- validar escritura de archivo
                //$retorno = true;
                return true;
            }else {
                return false;
            }
            fclose($miarchivo);
        //return $miarchivo;
    }
 }
 

?>