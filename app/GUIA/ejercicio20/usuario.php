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
            //echo "Seteo bien";
        }else {
            $estado= false;
            //echo "Seteo mal";
        }
        return $estado;
     }

    function GuardarEnCSV()
    {
        $miArchivo= fopen("usuario.csv", "a") or die("Imposible arbrir el archivo");//con a agrega datos y con w sobrescribe.
        fwrite($miArchivo, "$this->nombre; $this->mail; ".date("d/m/Y")."\n");
        fclose($miArchivo);
        return $miArchivo;

        /*
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
        */
    }
 }
 

?>