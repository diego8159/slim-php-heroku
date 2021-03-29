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
            parent::__construct();
            $this->_altura= $h;
            $this->_base= $b;
            $this->CalcularDatos();
        }

        function CalcularDatos()
        {
            $this->_perimetro = $this->_base + ($this->_altura * 2);
            $this->_superficie = $this->_base * ($this->_altura / 2);
        }

        function Dibujar()
        {
            //$filas= 5;
            $cadena = null;
            echo "<br/>";
            for ($i=1; $i <= $this->_altura; $i++) 
            {
                for ($h = 1; $h <= $this->_base-$i; $h++) 
                {        
                    //echo "&nbsp"; 
                    //$cadena .= "&nbsp"; 
                    $cadena .= "&nbsp"; 
                    $cadena .= "&nbsp"; 
                }
                //*       
                for ($h = 1; $h<= (2*$i)-1; $h++) 
                {                    
                    $cadena .= "*";
                    //echo "*";
                    //echo "*";
                }
                //echo "<br>";
                $cadena .= "<br>";
                //echo "<font color='red'>$cadena</font>"."<br />";
            }
            return $cadena;
        }

        function ToString()
        { 
            parent::ToString();
        
            echo "
            Base: {$this->_base} <br>
            Altura: {$this->_altura} <br>
            Perimetro: {$this->_perimetro} <br>
            Superficie: {$this->_superficie}
            <p style = 'color: {$this->_color};'>{$this->Dibujar()}</p>
            ";
        }
    }
    
?>