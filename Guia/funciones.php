<?php 

function potencia()
{
    for ($i=1; $i <5; $i++) { 
		echo pow($i,2)." ";
		echo "<br>";
	}
}

/*function invertirArray($array)
{
	foreach ($variable as $value) {
		
	}

}*/

function validacionPalabras($palabra,$max)
{
	$retorno = 0;
	if(strlen($palabra) > $max || $palabra == "Recuperatorio" || $palabra == "Parcial" || $palabra == "Programacion") //strcmp($palabra, "Recuperatorio") != 0)
		$retorno = 1;
	return $retorno;
}

 ?>