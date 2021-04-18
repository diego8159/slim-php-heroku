<?php
/*
    España Hernán Diego
    Aplicación No 24 ( Listado JSON y array de usuarios)
    Archivo: listado.php
    método:GET
    Recibe qué listado va a retornar(ej:usuarios,productos,vehículos,...etc),por ahora solo tenemos
    usuarios).
    En el caso de usuarios carga los datos del archivo usuarios.json.
    se deben cargar los datos en un array de usuarios.
    Retorna los datos que contiene ese array en una lista
    <ul>
    <li>apellido, nombre,foto</li>
    <li>apellido, nombre,foto</li>
    </ul>
    Hacer los métodos necesarios en la clase usuario
*/
include "./usuario.php";
require_once "manejadorArchivos.php";

    if (isset($_GET["listado"])) {
        $listadoIngresado = $_GET["listado"];
        switch ($listadoIngresado) {
            case 'usuarios':
                echo "<br><h2>----- Listado de usuarios -----<h2/><br>";
                $arrayUsuarios = Archivo::traerObjetos("usuarios.json");
                //$arrayUsuarios = Usuario::LeerArchivo("usuarios.json");
                //var_dump($arrayUsuarios);

                echo Usuario::ListarUsuarios($arrayUsuarios);
                break;
            
            default:
                echo "<br>Listado incorrecto.";
                break;
        }
    }else {
        echo "<br>Error con el listado.";
    }
    
?>