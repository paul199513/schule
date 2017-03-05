<html>
	<head>
		<title> Aufgabe 2 </title>
	</head>

			<body>
				<form action="a2.php" method="POST">
					<input type="text" name="zahl">
					<input type="submit" name="submit" value="Absenden">
				</form>
			</body>


<?php 

$tarif = $_POST["zahl"];
$verbrauch = 18000;

if (isset ($_POST["submit"]) == true ){

	if($tarif == 1) {

		$preis = 12*9.95+0.1507*$verbrauch; 
	}else {
	
		$preis = 12*14.95+0.1389*$verbrauch;
	}
}		
	
	echo "Der Preis für <b>$verbrauch</b> beträgt <b>$preis</b> Euro.";

?>
