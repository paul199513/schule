<?php

/**
 * @author Anne Dresen
 * @copyright 2009
 */
$gewinn= 1000;
$i=1;
do
{
	echo "Gewinnstufe $i : $gewinn</br>";
	$gewinn = $gewinn*1.5;
	$i++;

}while ($i<=6);




?>