<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<dl>
<?php
  $array=array(1,2,3,4,5);
echo "<hr>";

shuffle($array);
echo "<pre>";
print_r($array[0]);
echo "<pre>";

echo "<hr>";
?>
</body>
</html>