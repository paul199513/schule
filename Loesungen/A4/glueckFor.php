<?php

/**
 * @author Anne Dresen
 * @copyright 2009
 */
$gewinn= 1000;
for ($i=1; $i<=6;$i++)
{
	echo "Gewinnstufe $i : $gewinn</br>";
	$gewinn = $gewinn*1.5;
}




?>