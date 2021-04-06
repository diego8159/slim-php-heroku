<?php
/*
    España Hernán Diego
    Aplicación No 22 ( Login)
    Archivo: Login.php
    método:POST
    Recibe los datos del usuario(clave,mail )por POST ,
    crear un objeto y utilizar sus métodos para poder verificar si es un usuario registrado,
    Retorna un :
    “Verificado” si el usuario existe y coincide la clave también.
    “Error en los datos” si esta mal la clave.
    “Usuario no registrado si no coincide el mail“
    Hacer los métodos necesarios en la clase usuario
*/
include "./usuario.php";

if (isset($_POST['mail']) && isset($_POST['clave'])) {
    $clave = $_POST['clave'];
    $mail = $_POST['mail'];
    $usuario= new Usuario("", $clave, $mail);

    $listadoUsuarios = Usuario::RetornarArrayDelCSV("./usuario.csv");
    //var_dump($listadoUsuarios);
    $usuario->GuardarEnCSV();
    $resultado = $usuario->ValidarUsuario($listadoUsuarios);
    echo "Usuario: ", $usuario->ToString()."\n";
    switch ($resultado) {
        case -1:
            {
                echo "</br>Usuario no registrado\n";
                break;
            }
        case 0:
            {
                echo "</br>Error en los datos\n";
                break;
            }
        default:
            {
                echo "</br>Verificado\n";
                break;
            }
    }
    //var_dump($resultado);
} else {
    echo "</br></br>Algun dato es invalido";
}

?>