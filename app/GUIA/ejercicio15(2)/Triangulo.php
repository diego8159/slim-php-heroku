<?php
    /**
     * 
     */
    class Triangulo extends FiguraGeometrica
    {
        private $_altura;
        private $_base;
        
        function __construct($b, $h)
        {
            $this->_altura= $h;
            $this->_base= $b;
            Triangulo::CalcularDatos();
        }

        function CalcularDatos()
        {
            $this->_perimetro= $this->_base * 3;
            $this->_superficie= ($this->_base * $this->_altura)/2;
        }

        function Dibujar()
        {
            $filas= 5;
            $cadena = null;
            echo "<br/>";
            for ($i = 1; $i <= $filas; $i++) 
            {
                for ($h = $i; $h <= $i; $h++) 
                {                    
                    $cadena .= "*";
                }
                //echo $cadena."<br />";
                echo "<font color='red'>$cadena</font>"."<br />";
            }
        }

        function ToString()
        {  return " "; }
    }
    
?>