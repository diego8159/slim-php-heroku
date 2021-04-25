<?php
//include_once "archivos.php";

class Venta
{
    public $_idUsuario;
    public $_codigoDeBarras;
    public $_cantDeItems;
    public $_fecha;

    public function __construct($_idUsuario, $_codigoDeBarras, $_cantDeItems)
    {
        $this->_idUsuario = $_idUsuario;
        $this->_codigoDeBarras = $_codigoDeBarras;
        $this->_cantDeItems = $_cantDeItems;
        $this->_fecha = date("Y-m-d");
        //$this->_idUsuario = rand(1, 10000);
    }
}

?>