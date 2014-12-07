<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>1-100 numbers</title>
</head>
<body>
<?php
echo numbers (rand(1, 100));
function numbers ($numbers) {
	for ($i = 1; $i <= $numbers; $i++) {
	    if ($i % 2 != 0) {
		echo $i . ' ';
		}
	}
} 
?>

</body>

</html>