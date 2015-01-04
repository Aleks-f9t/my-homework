<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP</title>
</head>

<body>
<table border="5">
	<thead>
		<tr>
			<th>ID</th>
			<th>Име</th>
			<th>Картата е валидна до:</th>
		</tr>
	</thead>

<?php
	$servername = "localhost";
	$username = "sqluser";
	$password = "123456";
	$dbname = "gymstbl";
	
	$connection = new mysqli($servername, $username, $password, $dbname);
		
	if ($connection->connect_error) {
		die("Невъзможно свързване със сървър: " . $connection->connect_error);
	} 
	
	$connection->set_charset("utf8");
	
	$sql = "SELECT GymID, `Name`, Edate ". 
		   "FROM gymstbl.customers;";
		   
	$result = $connection->query($sql);
	
	
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {
			$GymID = $row["GymID"];
			$name = $row["Name"];
			$edate = $row["Edate"];
			
			echo "<tr>";
			echo "<td>$GymID</td>";
			echo "<td>$name</td>";
			echo "<td>$edate</td>";
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