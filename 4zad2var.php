<!DOCTYPE html>
<html>
<head>
<title>Задача 4/2</title>
<body>
   <?php 
	$int_var = "2";
	
	switch ($int_var) {
		case 1:
	    echo "<div class='first'>Аз съм произволен текст!</div>";
		break;
		
		case 2:
		echo "<div class='second'></div>";
		break;
		
		case 3:
		echo "<span class='third'>Аз съм произволен текст!</span>";
		break;
	}
	?>

</body>
<style type="text/css">
.first {background:blue;}
.second {width:600px; height:372px; background-image: url(kola.jpg); border:1px solid red;}
.third {background:#000; color:#fff;}
</style>
</head>
</html>

