<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Рандом масив с 10 елемента</title>
</head>
<body>
<?php
$my_arr=array();
$smallest=("");
for($i=0;$i<10;$i++) {
$my_arr[]=rand();
}

if ($my_arr < $smallest){
$smallest=$my_arr[$i];
}
echo"<pre>";
print_r($my_arr);
echo"</pre>";
?>
</body>
</html>
