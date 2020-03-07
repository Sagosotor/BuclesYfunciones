<?php

include("funciones.php");
echo("Clase 4 bucles, Arreglos y funciones");

//Array indexado
//En PHP los arreglos indexados son los arreglos  cuya "caja" no tiene ninguna clave dada  por el programador y presentan las siguentes sintaxis: 

$arreglo=array("Juliana","Santiago","Lorena","Cesar");

echo("<br>");

print_r($arreglo);
echo("<br>.................................");

//Arreglos asociativos en PHP 
// PHP nos permite modificar el nombre del indice o "caja contenedora" de nuestro arreglo asociado el valor almacenado  a una clave  en especifico. 
echo("<br>");
$arreglo=array('usuario1'=>"Juliana",'usuario2'=>"Santiago",'usuario3'=>"Lorena",'usuario4'=>"Cesar");
print_r($arreglo);
echo("<br>");
echo("<br>.................................");

// tamaño de arreglo
$tamano=count($arreglo);
echo("<br>");
print_r ("El tamaño de nuestro arreglo es:".$tamano);
echo("<br>");
echo("<br>.................................");


// BUCLES EN PHP (for)
echo("<br>");
for($centinela=1; $centinela<=10; $centinela++) {
    print("<br>El valor de centinela es:".$centinela."<br>");
}

// Bucle for para reocorrer arreglos
echo("<br>.................................");
$arreglo=array("Juliana","Santiago","Lorena","Cesar");
for($centinela=0;$centinela<count($arreglo);$centinela++){
    echo("<br>".$arreglo[$centinela]."<br>");

}

// Bucle foreach para recorrer arreglos
echo("<br>.................................");
$arreglo=array('usuario1'=>"Juliana",'usuario2'=>"Santiago",'usuario3'=>"Lorena",'usuario4'=>"Cesar");
foreach($arreglo as $clave=>$valor){
    echo "<br>"."La clave es: ".$clave."<br>";
    echo "<br>".($valor."<br>");

}

// Bucle foreach para arreglo indexado 
echo("<br>.................................");
$arreglo=array("Juliana","Santiago","Lorena","Cesar");
foreach($arreglo as $clave=>$valor){
    echo "<br> El valor del cajon es: ".$clave;
    echo "<br> El valor del cajon es: ".$valor;
}

// arreglo multidimensional (arreglo de arreglos)
echo("<br>.................................");
$usuario=array(
'usuario1'=>array('nombre'=>"juan",'edad'=>20,'genero'=>"M"),
'usuario2'=>array('nombre'=>"matilde",'edad'=>30,'genero'=>"F"),
'usuario3'=>array('nombre'=>"simon",'edad'=>32,'genero'=>"M"),
'usuario4'=>array('nombre'=>"alejandro",'edad'=>25,'genero'=>"M"),
'usuario5'=>array('nombre'=>"maria",'edad'=>40,'genero'=>"F")

);
foreach($arreglo as $clave=>$usuario){
    
}

echo("<br>.................................");

//Funciones
//Calcular la edad de dos personas
//para llamar la funcion
//funcion con un parametro fijo en la misma funcion, donde solo ingreso un argumento

calcularedad(1996);



echo("<br><br>................................<br><br>");

//funcion donde se ingresan dos o mas argumentos

calcularedad2(1996,2020);

echo("<br><br>................................<br><br>");

$edad3=calcularedad3(1996,2020);
echo("La edad de la persona es: ".$edad3);

echo("<br><br>................................<br><br>");

// arreglos que se llena con una funcion 
$edades=array('edad1'=>calcularEdad3(1990,2020),'edad2'=>calcularEdad3(1991,2020));
print_r($edades);














?>