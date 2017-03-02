<html>
        <head>
                <title>
                </title>
        </head>
        <body>
                <h1>Berechnung der Gesamtnote </h1>
                        <?php
                        $schriftlicheNote = 3;
                        $sonstigeNote = 2;
                        $addition = $schriftlicheNote + $sonstigeNote;
                        $gesamtNote = $addition / 2;
                        echo 'Schriftliche Note : ' .  $schriftlicheNote; ?> <br>
						<?php
						echo 'Sonstige Leistung :  '. $sonstigeNote; ?> <br>
						<?php
                        echo 'Gesamtnote : ' . $gesamtNote
						?>
						
			<br> <br> <br>
			
			<table border =2>
				<tr>
					<td>Teilbereich</td>
					<td>Teilnote</td>
					</tr>
					<tr>
					<td>Schriftliche Note</td>
					<td><?php echo $schriftlicheNote ?></td>
					</tr>
					<tr>
					<td>Sonstige Note</td>
					<td><?php echo $sonstigeNote ?>
					</tr>
					<tr>
					<td>Gesamtnote</td>
					<td><?php echo $gesamtNote ?>
					</tr>
					</table>
					
					
					<br> <br> <br> 
					<h3>Zusatzaufgabe</h3>
					<br> <br>
					
						<?php
						$minutenanzahl = 1600 ;
						$tag = $minutenanzahl / 1440 ; 
						$stunden = $minutenanzahl / 24 ;
						$reststunden = $stunden % 60 ;
						$minuten = $minutenanzahl % 60 ;
						 
						
						echo 'Tage: ' ; echo floor ($tag) ; ?> <br>
						<?php
						echo 'Reststunden: ' . $reststunden ; ?> <br> <br>
						
						
						<?php
						echo '----------------------------------' ?> <br> <br> 
						
						<?php
						echo 'Stundenanzahl: ' ; echo floor ($stunden); ?> <br>
						<?php 
						echo  'Minutenanzahl: ' . $minuten ;						
						 
						?>
						
						
						
						
						
						<br><br><br>
						
						
						________________________________________________________
						
						
				
					<br> <br>
					<form action="notenberechnung.php" method="post">
					Schriftliche Note: &nbsp <input type=text name=schriftlicheNote> </tab>  <br> <br> <br>
					Sonstige Note: &nbsp &nbsp &nbsp <input type=text name=sonstigeNote> </tab>
					<input type=submit>
					</form>
					
     

		








        </body>
</html>