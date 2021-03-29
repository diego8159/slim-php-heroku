<?php
/*
España Hernán Diego
Aplicación No 15 (Figuras geométricas)
La clase FiguraGeometrica posee: todos sus atributos protegidos, un constructor por defecto,
un método getter y setter para el atributo _color, un método virtual (ToString) y dos
métodos abstractos: Dibujar (público) y CalcularDatos (protegido).
CalcularDatos será invocado en el constructor de la clase derivada que corresponda, su
funcionalidad será la de inicializar los atributos _superficie y _perimetro.
Dibujar, retornará un string (con el color que corresponda) formando la figura geométrica del
objeto que lo invoque (retornar una serie de asteriscos que modele el objeto).
*/
    require "./FiguraGeometrica.php";
    require "./Rectangulo.php";
    require "./Triangulo.php";

    $miTriangulo= new Triangulo(2,3);
    //var_dump($miTriangulo);
    echo "Triangulo: <br>";
    //Triangulo::ToString();
    $miTriangulo->Dibujar();
    echo "Triangulo vs2: <br>";
    Triangulo::Dibujar();

    $miRectangulo= new Rectangulo(1,4);
    //var_dump($miRectangulo);
    echo "Rectangulo: <br>";
    //Rectangulo::ToString();
    $miRectangulo->Dibujar();


?>