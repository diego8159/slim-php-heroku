<?php

 class Usuario 
 {
    public $nombre;
    public $clave;
    public $mail;

     static function _validarUsuario(Usuario $usuario)
     {
         $estado = NULL;
        if (isset($usuario->nombre) && isset($usuario->clave)) 
        {
            if ($usuario->nombre == "Admin" && $usuario->clave == "1234") {
                //echo "OK";
                $estado= "OK";
            }else {
                echo "usuario no registrado";
                $estado= "usuario no registrado";
            }
        }else {
            //echo "<br>Faltan Datos";
            $estado= "<br>Faltan Datos";
        }
        
        $miArchivo= fopen("usuario.csv", "a");//con a agrega datos y con w sobrescribe.
        fwrite($miArchivo, "$usuario->nombre; $usuario->mail; ".date("d/m/Y")."\n");
        fclose($miArchivo);
        return $miArchivo;
     }
 }
 

?>