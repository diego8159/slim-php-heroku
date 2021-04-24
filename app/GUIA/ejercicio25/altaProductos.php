<?php
/*
    España Hernás Diego
    Aplicación No 25 ( AltaProducto)
    Archivo: altaProducto.php
    método:POST
    Recibe los datos del producto(código de barra (6 sifras ),nombre ,tipo, stock, precio )por POST
    ,
    crea un ID autoincremental(emulado, puede ser un random de 1 a 10.000).
    crear un objeto y utilizar sus métodos para poder verificar si es un producto existente,
    si ya existe el producto se le suma el stock , de lo contrario se agrega al documento en un
    nuevo renglón
    Retorna un :
    “Ingresado” si es un producto nuevo
    “Actualizado” si ya existía y se actualiza el stock.
    “no se pudo hacer“si no se pudo hacer
    Hacer los métodos necesarios en la clase
*/

include_once "Producto.php";
include_once "archivos.php";

$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$stock = $_POST["stock"];
$precio = $_POST["precio"];
$codigoDeBarras = $_POST["codigo"];
$id = $_POST["id"];

if ((isset($nombre) == true) &&
    (isset($tipo) == true) &&
    (isset($stock) == true) &&
    (isset($precio) == true) &&
    (isset($codigoDeBarras) == true) &&
    (isset($id) == true)
) {
    $producto = new Producto($nombre, $tipo, $stock, $precio, $codigoDeBarras);
    /*$x=$producto->altaProducto($producto);
    echo $x;*/
    $producto->SetId($id);
    echo $producto->altaProducto($producto, "productos.json");
}