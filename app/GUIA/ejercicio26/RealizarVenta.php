<?php
/*
    España Hernás Diego
    Aplicación No 26 (RealizarVenta)
    Archivo: RealizarVenta.php
    método:POST
    Recibe los datos del producto(código de barra), del usuario (el id )y la cantidad de ítems ,por
    POST .
    Verificar que el usuario y el producto exista y tenga stock.
    crea un ID autoincremental(emulado, puede ser un random de 1 a 10.000).
    carga los datos necesarios para guardar la venta en un nuevo renglón.
    Retorna un :
    “venta realizada”Se hizo una venta
    “no se pudo hacer“si no se pudo hacer
    Hacer los métodos necesarios en las clases
*/
include_once("usuario.php");
include_once("Producto.php");
include_once("venta.php");

if (isset($_POST["codDeBarra"]) && isset($_POST["idUsuario"]) && isset($_POST["cantDeItems"])){
    $usuario = Usuario::BuscarPorId($_POST["idUsuario"]);
    $producto = Producto::BuscarPorCodDeBarra($_POST["codDeBarra"]);
    $cant = $_POST["cantDeItems"];
    if(!isset($usuario)){
        echo "Usuario incorrecto<br>";              
    }
    if(!isset($producto)){
        echo "Producto incorrecto<br>"; 
    }
    if($producto->_stock < $cant){
        echo "Solo se puede comprar un maxima de $producto->_stock unidades del producto<br>";
    }
    else{
        $producto->_stock = ($cant * -1);        
        $producto->AgregarStock($_POST["idUsuario"], $producto->_stock);
        $nuevaVenta = new Venta($_POST["idUsuario"], $_POST["codDeBarra"], $_POST["cantDeItems"]);
        if ($nuevaVenta) {
            echo Archivo::Guardar_Json($nuevaVenta, "Ventas/ventas.json");
            echo "venta realizada<br>";
        }else {
            echo "no se pudo hacer<br>";
        }
    }


    
}
else{
    echo "Faltan Datos";
}

?>