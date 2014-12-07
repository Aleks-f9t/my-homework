<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<dl>
    <?php
	echo "<hr>";

    $animals = array(
	"Кон","Лъв","Котка","Тигър");
	$animals_string = implode (";",$animals);
	echo $animals_string;
	echo "<hr>";
	?>
	</dl>
	</body>
	</html>
	