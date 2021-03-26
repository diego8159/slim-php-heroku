<?php
    /**
     * 
     */
    class Rectangulo extends FiguraGeometrica
    {
        private $_ladoUno;
        private $_ladoDos;
        
        function __construct($l1, $l2)
        {
            $this->_ladoUno= $l1;
            $this->_ladoDos= $l2;
            Rectangulo::CalcularDatos();
        }

        function CalcularDatos()
        {
            $this->_perimetro= ($this->_ladoUno * $this->_ladoDos);
            $this->_superficie= 2*($this->_ladoUno * $this->_ladoDos);
        }

        function Dibujar()
        {
            //$filas= 0;
            $cadena = null;
            
            for ($i = 1; $i <= $this->_ladoUno; $i++) 
            {
            	echo "<br/>";
                for ($h = $i; $h <= $this->_ladoDos; $h++) 
                {                    
                    $cadena = $cadena."*";
                }
                //echo $cadena."<br />";
                echo "<font color='litegreen'>$cadena</font>"."<br />";
            }
        }

        function ToString()
        { return " "; }
    }
    
?>