<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Param</title>
</head>
<body>
<?php
function param() { 
    
	$param = func_get_args();
	
	echo implode (" ", $param);
}
param(6, 8);
echo '<br>';
param(9, 56, 34);
echo '<br>';
param(98, 65, 32, 3, 67);
echo '<br>';
?>

