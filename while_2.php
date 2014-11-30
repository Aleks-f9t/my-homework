﻿<!DOCTYPE>
<html>
<head>

<title>Table_while</title>
</head>
<body>

<table border="5">

<?php
$number = 0;
$a = 1;
while ($a < 5) {
		$a++;
		echo "<tr>"; 
		$b = 1;
while ($b < 6) {
	    $b++;
	    $number++;
			
			if ($number % 2 == 0) {
				$result = "<td style='background:yellow;'>" . $number . "</td>";
			} else {
				$result = "<td style='background:green;'>" . $number . "</td>";
				}
				
			if ($number % 2 == 0 && $number > 12) {
				$result = "<td style='color:red;'>" . $number . "</td>";
				}
			else if ($number % 2 !== 0 && $number > 12) {
				$result = "<td style='color:red;'>" . $number . "</td>";
				}
			
			echo $result;	
		}
		echo "</tr>";
}
?>

</table>
</body>
</html>