<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<dl>
<?php

    $userArr = array(
        'name' => 'Aleks Dimitrova',
        'username' => 'adimitrova',
		'email' => 'alexandra.1992@abv.bg'
		);
		$userArr ['in_out'] = 15;
		$userArr ['friends'] = 912;
		
		
    echo "<dt> Име: </dt>";
    echo "<dd>" . $userArr['name'] . " </dd>";
    echo "<dt>Потребителско име: </dt>";
    echo "<dd>" . $userArr['username'] . " </dd>";
	echo "<dt> Имейл: </dt>";
    echo "<dd>" . $userArr['email'] . " </dd>";
	 echo "<dt> Посещения </dt>";
    echo "<dd>" . $userArr['in_out'] . " </dd>";
	 echo "<dt> Приятели </dt>";
    echo "<dd>" . $userArr['friends'] . " </dd>";
	?>
	</dl>
	</table>
	</body>
	</html>