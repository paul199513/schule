<?php

/**
 * @author Anne Dresen
 * @copyright 2009
 */

$tarifnr= $_POST["RB_Tarif"];
$verbrauch=$_POST["TX_Verbrauch"];

if ($tarifnr==1)
{$preis = 12*9.95+0.1597*$verbrauch;
}
else
{$preis=12*14.95+0.1389*$verbrauch;
}

echo "Jahreskosten $preis Euro";
?>