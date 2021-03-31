<?php
/*
    España Hernán Diego
    Aplicación No 20 (Registro CSV)
    Archivo: registro.php
    método:POST
    Recibe los datos del usuario(nombre, clave,mail )por POST ,
    crear un objeto y utilizar sus métodos para poder hacer el alta,
    guardando los datos en usuarios.csv.
    retorna si se pudo agregar o no.
    Cada usuario se agrega en un renglón diferente al anterior.
    Hacer los métodos necesarios en la clase usuario
*/
include "./usuario.php";

$nuevoUsuario = new Usuario();
$nuevoUsuario->nombre = $_POST["nombre"];
$nuevoUsuario->clave = $_POST["clave"];
$nuevoUsuario->mail = $_POST["mail"];

if (Usuario::_validarUsuario($nuevoUsuario)) {
    echo "Se pudo agregar correctamente al archivo";
}else {
    echo "No se pudo agregar al archivo";
}

?>