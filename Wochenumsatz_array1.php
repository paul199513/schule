<html>
	<head>
		<title>Umsatzrechner</title>
		<meta charset = "utf-8">
	</head>
	<body>
		<h1>Umsatzrechner</h1>
			<form action ="Wochenumsatz_array.php" method ="post">
				Montag:  <input type="Text" name="txt_montag" size="5" required><br>
				Dienstag:  <input type="Text" name="txt_dienstag" size="5" required><br>
				Mittwoch:  <input type="Text" name="txt_mittwoch" size="5" required><br>
				Donnerstag:  <input type="Text" name="txt_donnerstag" size="5" required><br>
				Freitag:  <input type="Text" name="txt_freitag" size="5" required><br>
				Samstag:  <input type="Text" name="txt_samstag" size="5" required><br>
				Sonntag:  <input type="Text" name="txt_sonntag" size="5" required><br>
				<input type="submit" value="Rechnen" name="Btn_ok"><br>
			</form>
<?php
if (isset($_POST["Btn_ok"])) {
				$umsatz = array(); // Erzeugen eines leeren Arrays
				$umsatz[0] = $_POST["txt_montag"]; // Füllen des Arrays mit den eingegebenen Werten
				$umsatz[1] = $_POST["txt_dienstag"];
				$umsatz[2] = $_POST["txt_mittwoch"];
				$umsatz[3] = $_POST["txt_donnerstag"];
				$umsatz[4] = $_POST["txt_freitag"];
				$umsatz[5] = $_POST["txt_samstag"];
				$umsatz[6] = $_POST["txt_sonntag"];
				$umsatzGesamt = 0;
				echo "<h2>Berechnung des Wochenumsatzes</h2>";
				
				
				
				for ($a = 0; $a<7; $a++)
				{
					echo "Umsatz an Tag " .($a+1).": $umsatz[$a] €<br/>"; // Ausgabe aller Elemente des Arrays 0-6
					$umsatzGesamt = $umsatzGesamt + $umsatz[$a];
					
					$provision = ($umsatzGesamt*0.10);
					$durchschnitt= round(($umsatzGesamt/7),2);
					$max = max($umsatz);
					$min = min($umsatz);
 				}
				if($umsatz[0] == $max){
					$maxtag = "Montag";
				}else if($umsatz[1] == $max) {
					$maxtag = "Dienstag";
				}else if($umsatz[2] == $max) {
					$maxtag = "Mittwoch";
				}else if($umsatz[3] == $max) {
					$maxtag = "Donnerstag";
				}else if($umsatz[4] == $max) {
					$maxtag = "Freitag";
				}else if($umsatz[5] == $max) {
					$maxtag = "Samstag";
				}else if($umsatz[6] == $max) {
					$maxtag = "Sonntag";
					}
					
					if($umsatz[0] == $max) {$maxtag == "Montag";}
					/* $maxtag muss in ein array gepackt werden */

					
				

				echo "<b>Gesamtumsatz: $umsatzGesamt €</b> <br /> <br />";
				echo "<b> Durchschnittsumsatz: $durchschnitt €</b> <br />";
				echo "<b>Maximal Umsatz: $max € an Tag $maxtag</b><br />";
				echo "<b>Mindestumsatz: $min €</b><br />";
				echo "<b>Provision: $provision €</b>";
				
		
}
?>
</body>
</html>