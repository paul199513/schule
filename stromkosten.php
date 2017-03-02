<html>
        <head>
                <title>Zweites PHP Programm
                </title>
        </head>
        <body>
                <?php

                        define ("Grundpreis", 24.95); //in Euro
                        define ("PREIS_PRO_KWH", 14.5); //in Cent
                        $verbrauch=16000; //in KWh
                        $grundpreis=24.95;

                        #Berechnung
                        $verbrauchskosten=$verbrauch * PREIS_PRO_KWH / 100; // in Euro
                        $gesamt=$verbrauchskosten+Grundpreis;

                        #Ausgabe
                        echo "<h3>Jahreskosten der Stromversorgung im Serverraum 1 <h3>";
                        echo "Der Verbrauch betrug $verbrauch KWh", "<br>";
                        echo "Der Grundpreis betrug $grundpreis";
                        echo "<table border='1'>
                                        <tr>
                                                <td>Verbraucherkosten</td>
                                                <td align=\"right\"> $verbrauchskosten Euro</td>
                                        </tr>
                                        <tr>
                                                <td><b>Gesamt</b></td>
                                                <td align=\"right\"><b>$gesamt Euro</b></td>
                                        </tr>
                                </table>";
                ?>
        </body>
</html>