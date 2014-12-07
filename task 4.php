<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Ацоциативен масив с любими...</title>
</head>
<body>
<table border="1">
<?php
$array = array (
'Любим цвят' => 'Червен',
'Любим филм' => 'Бели мадами',
'Любима песен' => 'Сбогом',
'Зодия' => 'Лъв'
);
 foreach ($array as $key => $value) {
		echo "<tr>";
	    echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
		echo "</tr>";
    }
	

ksort($array);

echo "<pre>";
print_r($array);
echo "<pre>";
?>
</table>
</body>
</html>