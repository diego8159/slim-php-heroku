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
require "./usuario.php";

    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $mail = $_POST["mail"];

    $nuevoUsuario = new Usuario($nombre, $clave, $mail);
    if (Usuario::_validarUsuario()) {
        if ($nuevoUsuario->GuardarEnCSV()) {
            echo "Se pudo agregar el usuario nuevo<br>";
        }else {
            echo "NO se pudo agregar el usuario nuevo<br>";
        }
    }else {
        echo "Alguno de los datos no esta completo. Porfavor complete todos los datos.<br>";
    }
    

/*
$nuevoUsuario = new Usuario();
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$mail = $_POST["mail"];

if (Usuario::_validarUsuario($nuevoUsuario)) {
    echo "Se pudo agregar correctamente al archivo";
}else {
    echo "No se pudo agregar al archivo";
}
*/

?>