<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
<?php


    $cars = array("Toyota", "BMW", "Fiat", "Opel");
	$colors_cars = array ( "Червен","Син", "Зелен", "Бял");
	
	$all_cars = array_merge($cars,$colors_cars);
	echo "<pre>";
    print_r($all_cars);
     echo "<pre>";
	  
	  
	  
?>
	
	</body>
	</html>