<html>
	<head>
		<title> Aufgabe 1 </title>
	</head>

		<body>
		</body>


<?php

	$verbrauch = 18000; // Verbrauch in kWh
	$preis = 15.07 / 100; // Preis in Euro
	$monatspreis = 9.95; //Preis in Euro
	$grundpreis = $monatspreis * 12;
	$mwst = 0.19;
	

	$berechnung = $verbrauch * $preis;
	$insgesamt = $grundpreis + $berechnung;
	$ohnemwst = $insgesamt * 0.81;

	echo "Der Gesamtpreis für <b>$verbrauch</b> KWh lautet: <b>$insgesamt</b> Euro. <br />";
	echo "Der Preis ohne Mehrwertsteuer für <b>$verbrauch</b> KWh lautet: <b>$ohnemwst</b> Euro.";
