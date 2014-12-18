<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Child delete </title>
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
		if(mb_strlen($name, "UTF-8") > 3 && $age > 3){
			return true;
		}
		return false;
	}

	if(isset($_POST["check"]) && $_POST["check"] == "1"){
	
		$id = $_POST["id"];
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
			
			$sql = "UPDATE children ".
				   "SET Name='$name', Phone='$age' ".
				   "WHERE ChildID=$id";
				   
			$queryReselt = $connection->query($sql);
			
			if ($queryReselt === TRUE) {
				echo "Успешно Редактиран резултат!";
			} else {
				echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
			}
			
			 $connection->close();
		} else{
			echo "<div><strong>Невалидна информация! Моля Опитайте пак!</strong></div>";
		}
		
	} else {
	
		if(isset($_GET["id"])){
		$id = $_GET["id"];
			
		$servername = "localhost";
		$username = "sqluser";
		$password = "123456";
		$dbname = "kindergarder";
		
		$connection = new mysqli($servername, $username, $password, $dbname);
			
		if ($connection->connect_error) {
			die("Невъзможно свързване със сървър: " . $connection->connect_error);
		} 
		
		$connection->set_charset("utf8");
		
		$sql = "SELECT ChildID, `Name`, Age ". 
			   "FROM kindergarder.children
			    WHERE ChildID=$id;";
			   
		$result = $connection->query($sql);
		
		$row = $result->fetch_assoc();
		$name = $row["Name"];
		$age = $row["Age"];
		
		$connection->close();
	}
?>

<form action="class2-update.php" method="POST" >
	<div>
		<input type="hidden" name="id" value="<?php echo $id ?>" />
		<span>Име:</span>
		<input type="text" name="name" value="<?php echo $name ?>" />
	</div>
	<div>
		<span>Години:</span>
		<input type="text" name="age" value="<?php echo $age ?>" />
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