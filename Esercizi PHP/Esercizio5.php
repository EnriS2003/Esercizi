<!DOCTYPE html>
<html>
<head>
<title>esercizio5</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="Es5css.css">
<table>
<?php
for($i=0;$i<3;$i++){
	echo "<th>$i</th>";
    }
    echo "<tr>";
    	for($i=10;$i<13;$i++){
    	echo "<td>$i</td>";
        }
    echo "</tr>";
    echo "<tr>";
    	for($i=20;$i<23;$i++){
    	echo "<td>$i</td>";
        }
    echo "</tr>";

?>
</table>
</body>
</html>