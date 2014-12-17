<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Insert</title>
</head>
<style>
	form{
		font-size: 22px;
		border: 1px solid blue;
		padding: 10px;
		margin:10px;
	}
	form > div {
		margin-bottom: 12px;
	}
</style>

<body>
<?php
function isValid($name, $age){
		if(mb_strlen($name, "UTF-8") > 3 && $age >= 0){
			return true;
		}
		return false;
	}
	if(isset($_POST["check"]) && $_POST["check"] == "1"){
	
		$name = $_POST["name"];
		$age = $_POST["age"];
		
		$isValid = isValid($name, $age);
		
		if($isValid){
		
			$servername = "localhost";
			$username = "sqluser";
			$password = "123456";
			$dbname = "kindergarder";
			$connection = new mysqli($servername, $username, $password, $dbname);
			
			if ($connection->connect_error) {
				die("Невъзможно свързване със сървър: " . $connection->connect_error);
			} 
			$connection->set_charset("utf8");
			$sql = "INSERT INTO children (`Name`, `Age`, KinderGarderID) ".
				   "VALUES ('$name', '$age', 2)";
				   $queryReselt = $connection->query($sql);
			if ($queryReselt === TRUE) {
				$insertedId = $connection->insert_id;
				echo "Успешно въведен резултат с id = " .  $insertedId;
			} else {
				echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
			}
			
			 $connection->close();
		} else{
			echo "<div><strong>Невалидна информация! Моля Опитайте пак!</strong></div>";
		}
		
	} else {
				   




?>

<form action="kind.php" method="POST" >
	<div>
		<span>Име:</span>
		<input type="text" name="name" />
	</div>
	<div>
		<span>Години:</span>
		<input type="text" name="age" />
	</div>
	<div>
		<input type="hidden" name="check" value="1" />
		<input type="submit" value="Въведи" />
	</div>
</form>	

<?php
	}
?>


</body>
</html>