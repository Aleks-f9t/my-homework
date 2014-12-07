<!DOCTYPE html>
<html>
<head>
<title>Задача 3</title>
</head>

<body>
<div class="div_random">
</div>

</body>
<style type="text/css">
.div_random {
	width:300px; height:300px; background:red;position:absolute; 
top:<?php echo rand(0,1000); ?>px; 
left:<?php echo rand(0,1000); ?>px;
}
</style>

</html>
