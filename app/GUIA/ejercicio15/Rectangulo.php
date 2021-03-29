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
            parent::__construct();
            $this->_ladoUno= $l1;
            $this->_ladoDos= $l2;
            $this->CalcularDatos();
        }

        function CalcularDatos()
        {
            $this->_perimetro= ($this->_ladoUno * $this->_ladoDos);
            $this->_superficie= 2*($this->_ladoUno * $this->_ladoDos);
        }

        function Dibujar()
        {
            //$filas= 0;
            $cadena = " ";
            
            for ($i = 1; $i <= $this->_ladoUno; $i++) 
            {
            	//echo "<br/>";
                for ($h = 1; $h <= $this->_ladoDos; $h++) 
                {                    
                    //$cadena = $cadena."*";
                    //echo "*";
                    $cadena .= "*";
                }
                //echo "<font color='litegreen'>$cadena</font>"."<br />";
                //echo "<br>";
                $cadena .= "<br>";
            }
            return $cadena;
        }

        function ToString()
        { 
            parent::ToString();

            echo "<br>
            Lado Uno: {$this->_ladoUno} <br/>
            Lado Dos: {$this->_ladoDos} <br/>
            Perimetro: {$this->_perimetro} <br/>
            Superficie: {$this->_superficie} <br/>
            ";
            echo "<br>
            <div style='color: {$this->_color};'>{$this->Dibujar()}<div/>
            ";
        }
    }
    
?>