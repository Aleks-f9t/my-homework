﻿<!DOCTYPE>
<html>
<head>
<title>Table_do</title>

</head>
<body>
<table border="5">

<?php
$number = 0;
$a = 1;
do {
		$a++;
		echo "<tr>"; 
		$b = 1;
	do {
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
	} while ($b < 6);
		echo "</tr>";
	} while ($a < 5);

?>

</table>
</body>
</html>