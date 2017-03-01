<html>
	<head>
		<title>12345</title>
	</head>
	
			<body>
			<h2>Das kleine 1x1</h2>
			</body>
</html>

<?php

echo '<table>';
for ($i = 1; $i<= 10; $i++) {
		echo '<tr>';
		for ($j = 1; $j<= 10; $j++) {
		echo '<td>';
		echo $i * $j;
		echo '</td>';	
	}
			echo '</tr>';


	
}
echo '<table>';



?>