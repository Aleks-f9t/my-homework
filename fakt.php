<!DOCTYPE html>
<html>
<head>
<title>Факториел</title>
</head>

<body>
<?php
$а= rand(0,13);
	$factorial = 1;
		for ($x=$а; $x>=1; $x--)
  {
   $factorial = $factorial * $x;
  
 }
  echo "Факториел от <b>$а</b> е <b>$factorial</b>";
 ?>

</body>

</html>