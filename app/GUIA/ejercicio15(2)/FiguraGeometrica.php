<?php

    /**
     * 
     */
    abstract class FiguraGeometrica
    {
        
        protected $_color;
        protected $_perimetro;
        protected $_superficie;

        function __construct()
        {}

        protected function CalcularDatos()
        {}

        abstract function Dibujar();

        function GetColor()
        {
            
            return $this->_color;
        }

        function SetColor()
        {
            
            $this->_color = $_color;
        }

        function ToString()
        {   return " ";}
    }
    

?>