<?php

/**
 * @author Anne Dresen
 * @copyright 2009
 */

$verbrauch=18000;
$tarif = 3;

switch ($tarif)
{
  case 1:
    {
	   $preis = 12*9.95+0.1597*$verbrauch;
	    break;
	}
  case 2:
    {
    	$preis=12*14.95+0.1389*$verbrauch;
      	break;
     }
  case 3:     
     {
    	$preis=12*2.97+0.1163*$verbrauch;
      	break;
     }
 }    
echo "Jahreskosten $preis Euro";
?>