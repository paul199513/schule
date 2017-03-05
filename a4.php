<html>
	<head>
		<title> Aufgabe 4 </title>
	</head>

	<body>

	</body>
</html>



<?php
echo "<b> Lösung mit der For-Schleife </b> <br /> <br / >";
$gewinn= 1000;

	for($i=1; $i<=6; $i++) {

		echo "Ihr Gewinn in der Stufe <b>$i</b> beträgt <b>$gewinn</b> <br />";
		$gewinn=$gewinn*1.5;
	}

	echo "<br /> <br />";
?>


<?php 
echo "<b> Lösung mit der While-Schleife </b> <br /> <br / >";
$gewinn2 = 1000;
$j=0;
	while ($j<=5) {
	$j++;
	echo "Ihr Gewinn in der Stufe <b>$j</b> beträgt <b>$gewinn2</b> <br />";
	$gewinn2 = $gewinn2*1.5;
	}

	echo "<br /> <br />";
?>


<?php 
echo "<b> Lösung mit der Do-While-Schleife </b> <br /> <br / >";
$gewinn3 = 1000;
$k = 0;

	do {
	$k++;
	echo "Ihr Gewinn in der Stufe <b>$k</b> beträgt <b>$gewinn3</b> <br />";
		$gewinn3 = $gewinn3*1.5;
	} while ($k <=5);
?>
	

