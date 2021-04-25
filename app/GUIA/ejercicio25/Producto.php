<?php
include_once "archivos.php";


class Producto
{
    public $_id;
    public $_codigoDeBarras;
    public $_nombre;
    public $_tipo;
    public $_stock;
    public $_precio;

    public function __construct($_nombre, $_tipo, $_stock, $_precio, $_codigoDeBarras)
    {
        $this->_nombre = $_nombre;
        $this->_tipo = $_tipo;
        $this->_stock = $_stock;
        $this->_id = rand(1, 10000);
        $this->_precio = $_precio;
        $this->_codigoDeBarras = $_codigoDeBarras;
    }

    public function altaProducto($path)
    {
       $ret = "";
        $listaProd= Leer_Json($path);
        $flag= true;
                
                foreach ($listaProd as $auxProd) 
                {
                    //var_dump($auxProd->_id);
                    if ($this->_id == $auxProd->_id) 
                    {
                        Producto::AgregarStock($auxProd->_id, $this->_stock) or die("no se pudo hacer");   
                        $ret = "Actualizado";
                        $flag= false;
                    }
                }
                if ($flag) {
                    Guardar_Json($this, "productos.json") or die("no se pudo hacer");   
                    $ret = "Ingresado";
                }        
        return $ret;
    }

   public static function AgregarStock($id, $cantidad)
    {

        $productos= Leer_Json("productos.json");

            for ($i = 0; $i < sizeof($productos); $i++) {

                if ($id == $productos[$i]->_id) {

                    $productos[$i]->_stock += $cantidad;

                    Reescribir_Json($productos, 'productos.json');
                    return true;
                }
            }
        return false;
    }
}