<!DOCTYPE html>
<html>
<head>
<title> 0 >>> 1000 </title>
<style type="text/css">

</style>
</head>

<body>

<?php
$x = 0;

while ($x <= 1000) {

	if ($x % 13 == 0) {
	$y = '<div style="background:green;">' . $x . '</div>';
	} else {
	$y = $x;
	}
	if ($x % 36 == 0) {
	$y = '<span style="font-weight:bold;">' . $x . '</span>'; }
	if ($x % 36 == 0 && $x % 13 == 0) {
	$y = '<div style="background:green; font-weight:bold;">' . $x . '</div>' . ' се дели 13 и на 36';
	}
	
echo $y;
echo '<br>';
$x++;
}
?>
</body>

</html>