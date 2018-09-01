<?php
include "funciones.php"; //warning
include "alumno.php";
//include_once "funciones.php"; //para clases, ya que se define una vez sola
//require "funciones1.php"; //fatal error


//echo Alumno::Saludar(); //llamada a metodo estatico

$alu = new Alumno();
$alu ->legajo = '333';
$alu ->nombre = "Ariel";
echo $alu -> Saludar(); //llamada metodo de instancia













/*

echo "<br>";

$num1 = 2;
$num2 = 2;
foo($num1,$num2);


echo "<br>";
echo "<br>";


//arrays
$array = array("uno","dos","tres");
//echo $array;
//var_dump($array);
echo "<br>";


//foreach ($array as $elementos)

$arrayClaveValor = array("alfa" => 666,"beta" => 555, "delta" => 444); //fijarse como agregar elementos al array
//var_dump($arrayClaveValor);
echo "<br>";

/*
foreach($arrayClaveValor as $key => $value) 
{
    echo $value;
    echo $key;
}

echo "<br>";
echo "<br>";


//crear case
$obj = new stdclass();
$obj->nombre = "Ariel";
echo $obj->nombre;














echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




echo "Hola mundo";

echo "<h1> Hola </h1>"; //html dentro de php

$nombre = "Ariel"; //signo $ para crear variable

echo $nombre;
echo "<br>";  //salto de linea

//Concatenar
echo "Hola" . $nombre;
echo "<br>";
echo "Hola $nombre";
echo "<br>";


var_dump($nombre); //muestra que contiene variable
*/
