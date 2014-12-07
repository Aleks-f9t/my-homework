<!DOCTYPE html>
<html>
<head >
<meta charset="UTF-8">
     <title>3 параметъра</title>
</head>

<body>
<?php
for ($i = 0; $i < 20; $i++) {
	echo multiply (rand(1,20), rand(1,20), rand(1,20));
    echo '<br>';
	}

	
	function multiply($a,$b,$c) {
		$result = $a * $b * $c;
	    return $result;
}
?>

</body>
</html>
 