﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>1-50 numbers</title>
</head>
<body>
<?php
echo numbers (rand(1, 50));
function numbers ($numbers) {
	for ($i = 1; $i <= $numbers; $i++) {
		echo $i . ' ';
	}
} 
?>

</body>

</html>