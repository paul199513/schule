<html>
	<head>
		<title> Augabe 3 </title>
	</head>

			<body>
				<form action="a3.php" method="POST">
					<input type="text" name="eingabe">
					<input type="submit" name ="submit">
				</form>
			</body>

</html>

<?php 


	$verbrauch = 18000;
	$tarif = $_POST["eingabe"];


	if(isset ($_POST["submit"]) == true) {

		switch($tarif) {

			case 1:
			$preis = 12*9.95+0.1507*$verbrauch;
			echo "Der Preis für den Verbrauch <b>$verbrauch</b> beträgt <b> $preis</b> Euro.";
			break;

			case 2:
			$preis = 12*14.95+0.1389*$verbrauch;
			echo "Der Preis für den Verbrauch <b>$verbrauch</b> beträgt <b> $preis</b> Euro.";
			break;

			case 3:
			$preis = 12*2.97+0.1163*$verbrauch;
			echo "Der Preis für den Verbrauch <b>$verbrauch</b> beträgt <b> $preis</b> Euro.";
			break;

		}	 
	
		
	}


?>
