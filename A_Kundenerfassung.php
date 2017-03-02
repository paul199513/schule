<html>
   <body>
      <?php
      $vorname= $_POST["T_KndVorname"];
      $name= $_POST["T_KndName"];
      $plz= $_POST["T_KndPLZ"];
      $ort= $_POST["T_KndOrt"];
      $strasse= $_POST["T_KndStrasse"];
      $hausnr= $_POST["T_KndHausNr"];
      $passwort= $_POST["P_Password"];
      $kommentar= $_POST["TA_Bemerkung"];
      $stammkunde= $_POST["CB_Stammkunde"];
      $newsletterErwuenscht= $_POST["CB_Newsletter"];
      $familienstand= $_POST["RB_Familienstand"];
      $anrede= $_POST["PD_Anrede"];
      $geheim= $_POST["H_Secret"];
       echo "<h2>Sie haben die folgenden Daten &uuml;bermittelt:</h2>
             <table border=\"1\">
             <tr>
                <td>Vorname</td>
                <td> $vorname </td>
             </tr>
             <tr>
                <td>Nachname</td>
                <td> $name</td>
             </tr>
             <tr>
                <td>PLZ</td>
                <td> $plz </td>
             </tr>
             <tr>
                <td>Ort</td>
                <td> $ort </td>
             </tr>
             <tr>
                <td>Strasse</td>
                <td> $strasse </td>
             </tr>
             <tr>
                <td>Hausnummer</td>
                <td> $hausnr</td>
             </tr>
             <tr>
                <td>Passwort</td>
                <td> $passwort</td>
             </tr>
             <tr>
                <td>Bemerkung</td>
                <td> $kommentar</td>
             </tr>
             <tr>
                <td>Stammkunde</td>
                <td>$stammkunde</td>
             </tr>
             <tr>
                <td>Newsletter</td>
                <td> $newsletterErwuenscht</td>
             </tr>
             <tr>
                <td>Familienstand</td>
                <td> $familienstand</td>
             </tr>
             <tr>
                <td>Anrede</td>
                <td> $anrede </td>
             </tr>
             <tr>
                <td>Geheim</td>
                <td> $geheim </td>
             </tr>
           </table>";
      ?>
   </body>
</html>