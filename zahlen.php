<html>
		<head>
			<title> 123 </title>
		</head>
				<body>
				<h3>Dies ist eine Zahlenabfolge</h3>
					<form action ="zahlen.php" method ="post">
					Gerade Zahl eingeben:  <input type="Text" name="txt_zahl" size="5"><br>
					<input type="submit" value="Rechnen" name="Btn_ok"><br>
					</form>
				</body>
					<br />
</html>
		
		
<?php	

		
		if (isset($_POST["Btn_ok"]))
		{
				$i = $_POST["txt_zahl"];
				if ($i % 2 == 0 ) {
				
					for ($i; $i >= 2;) {
					
						echo $i; 
						echo '<html>&nbsp</html>';
						$i=$i-2;
					
				}		 
					
						
					
					}
					
					
		}
			
?>

