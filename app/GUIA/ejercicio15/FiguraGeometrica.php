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

        function SetColor(string $color)
        {
            
            $this->_color = $color;
        }

        function ToString()
        {   return "Color: {$this->GetColor()}<br/> Perimetro: {$this->_perimetro} <br/>Superficie: {$this->_superficie} <br/>"; }
    }
    

?>