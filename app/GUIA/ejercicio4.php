<?php 
/*
España Hernán Diego
Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.
*/
echo "<br>EJERCICIO 4<br><br>";
$operador= '/';
$op1= 0;
$op2= 2;

switch ($operador) {
    case '+':
        $resultado= $op1 + $op2;
        echo $resultado;
        break;
    case '-':
        $resultado= $op1 - $op2;
        echo $resultado;
        break;
    case '/':
        if ($op1 != 0) {
            $resultado= $op1 / $op2;
            echo $resultado;
        }else {
            echo "<br>Op1 es igual a 0";
        }
        break;
    case '*':
        $resultado= $op1 * $op2;
        echo $resultado;
        break;
    
    default:
        echo "Error general";
        break;
}

?>