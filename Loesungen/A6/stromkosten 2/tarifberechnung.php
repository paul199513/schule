<?php

/**
 * @author Anne Dresen
 * @copyright 2009
 */

if (isset($_POST["Bt_gesendet"]))
{  $tarifnr = $_POST["tarif"];
   $verbrauch=$_POST["verbrauch"];

   if ($tarifnr==1)
   {$preis = 12*9.95+0.1597*$verbrauch;
   }
   else
   {$preis=12*14.95+0.1389*$verbrauch;
   }

   echo "Jahreskosten $preis Euro";
 }
 
 else
 { echo "<html>

    <head>
	

	<title>Stromtarif</title>
   </head>

    <body>

    <form action = \"tarifberechnung.php\" method = \"post\" >
    <input type = \"text\" name = \"TX_Verbrauch\">Verbrauch in KWh<br />
    <input type = \"radio\" name =\"RB_Tarif\" value = \"1\" >Tarif I <br />
     <input type = \"radio\" name =\"RB_Tarif\" value = \"1\"  >TarifII <br />
    <input type = \"submit\" name= \"BT_gesendet\" value =\"senden\"><br />

</body>
</html>";
}
?>