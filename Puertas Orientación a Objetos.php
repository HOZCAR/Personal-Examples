<?php
abstract class Persona
{
	abstract function responder($param);
	abstract function revelar();
}
class Mentiroso extends Persona
{
	
	function responder($param)
	{
		return !$param;
	}
	function revelar()
	{
		return "Mentiroso";
	}
}
/**
* 
*/
class Honest extends Persona
{
	
	function responder($param)
	{
		return($param);
	}
	function revelar()
	{
		return "Honest";
	}
}
$Puerta1 = null;
$Puerta2 = null;
$Persona1 = null;
$Persona2 = null;
if (rand(1,100)%2) {
	$Puerta1 = true;
	$Puerta2 = false;
}
else
{
	$Puerta1 = false;
	$Puerta2 = true;
}
if (rand(1,100)%2)
{
	$Persona1 = new Honest();
	$Persona2 = new Mentiroso();
}
else
{
	$Persona1 = new Mentiroso();
	$Persona2 = new Honest();
}
if ($Persona2->responder($Persona1->responder($Puerta1)) && $Persona1->responder($Persona2->responder($Puerta1))) {
	echo "Salga Puerta 2 \n";
}else
{
	echo "Salga Puerta 1 \n";
}

echo "\nRevelando cosas:";
	echo "\npuerta 1: ";
	echo ($Puerta1) ? "Vida" : "Muerte";
	echo "\npuerta 2: ";
	echo ($Puerta2) ? "Vida" : "Muerte";
	echo "\nPersona 1: ", $Persona1->revelar();
	echo "\nPersona 2: ", $Persona2->revelar();
	echo "\n";
?>