<?php

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


?>