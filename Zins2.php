<html><head>


<title>Zinsen</title>
</head><body>
<h1>Mit Zins und Zinseszins</h1>
<form action ="Zins1.php" method ="post">
Kapital eingeben:  <input type="Text" name="txt_kapital" size="5"><br>
Prozentsatz eingeben: <input type="Text" name="txt_zins" size="5"><br>
Endkapital eingeben:  <input type="Text" name="txt_endkapital" size="5"><br>
<input type="submit" value="Rechnen" name="Btn_ok"><br>
</form>
<?php
if (isset($_POST["Btn_ok"]))
{
        $kapital=$_POST["txt_kapital"];
        $zinssatz=$_POST["txt_zins"];
		$endkapital=$_POST["txt_endkapital"];
		$i = 0;

        while($endkapital > $kapital) 
        {
			$i++;
            $zins=($kapital*$zinssatz/100);
            $kapital=round(($kapital+$zins),2);
            echo "Nach $i Jahren $kapital Euro <br>";
        }
}
?>
</body></html>