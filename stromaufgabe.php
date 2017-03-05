<html>
	<head>
		<title> Aufgabe 5 </title>
	</head>

			<body>
				<form action="stromaufgabe.php" method="POST">
				Strommenge <input type="text" name="strom" required > <br />
				Tarif 1	<input type="radio" name="tarif" value=1> <br />
				Tarif 2	<input type="radio" name="tarif" value=2> <br />
				<input type="submit" name="submit">
				</form>
			</body>
</html>

<?php


if(isset($_POST["submit"]) == true){

$menge = $_POST["strom"];
$tarif = $_POST["tarif"];

	if($tarif == 1) {
		$preis = $menge*0.15;
	} else {
		$preis = $menge*0.25;
	}

		echo "Ihr Preis für den ausgewählten Tarif <b> $tarif </b> beträgt <b> $preis </b> Euro.";

}


	
