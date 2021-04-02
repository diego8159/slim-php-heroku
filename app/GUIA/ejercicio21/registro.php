<?php
/*
    España Hernán Diego
    Aplicación No 21 ( Listado CSV y array de usuarios)
    Archivo: listado.php
    método:GET
    Recibe qué listado va a retornar(ej:usuarios,productos,vehículos,...etc),por ahora solo tenemos
    usuarios).
    En el caso de usuarios carga los datos del archivo usuarios.csv.
    se deben cargar los datos en un array de usuarios.
    Retorna los datos que contiene ese array en una lista
    <ul>
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>s
    </ul>
    Hacer los métodos necesarios en la clase usuario
*/
include "./usuario.php";

    if (isset($_GET["listado"])) {
        $listadoIngresado = $_GET["listado"];
        switch ($listadoIngresado) {
            case 'usuarios':
                echo "<br><h2>----- Listado de usuarios -----<h2/><br>";
                $arrayUsuarios = Usuario::RetornarArrayDelCSV("./usuario.csv");//Leer archivos del CSV generado anteriormente.
                Usuario::DibujarListado($arrayUsuarios);//Leer usuarios del archivo.
                break;
            
            default:
                echo "<br>Listado incorrecto.";
                break;
        }
    }else {
        echo "<br>Error con el listado.";
    }

?>