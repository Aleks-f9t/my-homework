<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Users</title>
</head>

<body>
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Потребителско име</th>
		    <th>Email</th>
			<th>Име</th>
			<th>Фамилия</th>
		
		</tr>
	</thead>

<?php
	$servername = "localhost";
	$username = "sqluser";
	$password = "123456";
	$dbname = "users_tbl";
	
	$connection = new mysqli($servername, $username, $password, $dbname);
		
	if ($connection->connect_error) {
		die("Невъзможно свързване със сървър: " . $connection->connect_error);
	} 
	
	$connection->set_charset("utf8");
	
	$sql = "SELECT UserID, `User`, Email, Name, `Last name` ". 
		   "FROM users;";
		   
	$result = $connection->query($sql);
	
	
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {
			$id = $row["UserID"];
			$user = $row["User"];
			$email = $row["Email"];
			$name = $row["Name"];
			$lastname = $row["Last name"];
			
			echo "<tr>";
			echo "<td>$id</td>";
			echo "<td>$user</td>";
			echo "<td>$email</td>";
			echo "<td>$name</td>";
			echo "<td>$lastname</td>";
			echo "</tr>";
		}
	} else {
		echo "Няма Резултати";
	}
	
	 $connection->close();
?>

</table>

</body>
</html>