<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Users_tsk1</title>
</head>
<style>
	form{
		font-size: 17px;
		border: 1px solid red;
		padding: 5px;
		margin:5px;
	}
	form > div {
		margin-bottom: 15px;
	}
</style>
<body>
<?php
function isValid($user, $pass, $repass, $email){
		if(mb_strlen($user, "UTF-8") >3 && mb_strlen($email, "UTF-8") > 2 && $pass == $repass){
			return true;
		}
		return false;
	}
	if(isset($_POST["check"]) && $_POST["check"] == "1"){
	
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$repass = $_POST["repass"];
		$email = $_POST["email"];
		
		$isValid = isValid($user, $pass, $repass, $email);
		
		if($isValid){
		
			$servername = "localhost";
			$username = "sqluser";
			$password = "123456";
			$dbname = "users_tbl";
			$connection = new mysqli($servername, $username, $password, $dbname);
			
			if ($connection->connect_error) {
				die("Невъзможно свързване със сървър: " . $connection->connect_error);
			} 
			$connection->set_charset("utf8");
			$sql = "INSERT INTO users (`user`, `Pass`, `Repass`, `Email`) ".
				   "VALUES ('$user', '$pass','$repass','$email')";
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

<form action="task1.php" method="POST" >
	<div>
		<span>* Потребителско име:</span>
		<input type="text" name="user" />
	</div>
	<div>
		<span>* Парола:</span>
		<input type="password" name="pass" />
	</div>
	<div>
		<span>* Повторете парола:</span>
		<input type="password" name="repass" />
	</div>
	<div>
		<span>Име:</span>
		<input type="text" name="name" />
	</div>
	<div>
		<span>Фамилия:</span>
		<input type="text" name="last name" />
	</div>
	<div>
		<span>* Email:</span>
		<input type="text" name="email" />
	</div>
	<div>
		<span>Таен въпрос:</span>
		<input type="text" name="secret question" />
	</div>
	<div>
		<span>Таен отговор:</span>
		<input type="text" name="secret answer" />
	</div>
	<div>
		<input type="hidden" name="check" value="1" />
	
	<div>
		<input type="submit" value="Влез" >
		<input type="reset" value="Изчисти"/>
	</div>
</form>	

<?php
	}
?>


</body>
</html>