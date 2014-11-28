<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Масив с 20 елемента</title>
</head>
<body>
<dl>
    <?php

    $array = array(1, 6, 7, 8, 5,4,10,12,30,22,33,44,55,66,77,78,98,55,42,63);
	$size = count($array);

	for($i = 0; $i < $size; $i++){
		echo "<p>" . $array[$i] . "</p>";
		}
		echo "<pre>";
		print_r($array);
		echo "</pre>";
		
		sort($array);
		echo "<pre>";
		print_r($array);
		echo "<pre>";
	?>
	</dl>
	</body>
	</html>
	