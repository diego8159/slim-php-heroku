<?php
/*
    España Hernás Diego
    Aplicación No 27 (Registro BD)
    Archivo: registro.php
    método:POST
    Recibe los datos del usuario( nombre,apellido, clave,mail,localidad )por POST ,
    crear un objeto con la fecha de registro y utilizar sus métodos para poder hacer el alta,
    guardando los datos la base de datos
    retorna si se pudo agregar o no.
*/
require_once "Usuario.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$clave = $_POST["clave"];
$mail = $_POST["mail"];
$localidad = $_POST["localidad"];

if (!isset($_POST["nombre"]) || !isset($_POST["apellido"]) || !isset($_POST["clave"]) || !isset($_POST["mail"]) || !isset($_POST["localidad"])) {
    echo "Faltan datos del usuario";
}else {
    $usuario = new Usuario(null, $nombre, $apellido, $clave, $mail, $localidad);

    if ($usuario->InsertarElUsuarioParametros()) {
        echo "Se agrego correctamente";
    }else {
        echo "Error. No se pudo agregar correctamente";
    }
}

?>