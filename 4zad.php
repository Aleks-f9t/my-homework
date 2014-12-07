<!DOCTYPE html>
<html>
<head>
<title>Задача 4</title>

</head>
<body>

	<?php 
	$int_var = "2";
	
	if($int_var == 1) {
	echo "<div class='first'>Аз съм произволен текст!</div>";
	}
	if($int_var == 2) {
	echo "<div class='second'></div>";
	}
	if($int_var == 3) {
	echo "<span class='third'>Аз съм произволен текст!</span>";
	}
	?>
</body>
<style type="text/css">
.first {background:blue;}
.second{width:600px; height:372px; background-image: url(kola.jpg); border:1px solid red;}
.third {background:#000; color:#fff;}
</style>

</html>