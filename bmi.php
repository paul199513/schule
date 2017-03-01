<html>
	<head>
		<title>BMI-Berechnung</title>
	</head>
		<body>
			<h2>Berechnung des BMI</h2>
			
			
					<form action ="bmi.php" method ="post">
					Größe in cm eingeben:  <input type="Text" name="txt_groesse" size="5"><br>
					<input type="submit" value="Rechnen" name="Btn_ok"><br>
					</form>
		</body>
</html>

<?php


if (isset($_POST["Btn_ok"])){
$i=$_POST["txt_groesse"];

$gewicht=50;

echo '<table>';
	for ($gewicht; $gewicht <=120;) {
		$laenge = $i/100;
		$ins = $gewicht/($laenge*$laenge);
		$round = round($ins ,2 );
		echo '<tr>';
		echo '<td>';
		echo "Gewicht";
		echo '</td>';
		echo '<td>';
		echo "BMI";
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td>';
		echo $gewicht;
		echo '</td>'
		echo '<td>';
		echo $round;
		echo '</td>';
		echo '</tr>';
		$gewicht = $gewicht +10;
	}
}
echo '</table>';
?>






