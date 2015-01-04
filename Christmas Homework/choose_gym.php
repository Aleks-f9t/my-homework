<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Choice</title>
</head>
<style>
table {
font-size: 75px;
border: 1px solid black;
position:relative;
padding: 10px;
margin:10px;
}
</style>
<body>
<table border="10">
	<thead>
		<tr>
		    <th>ID</th>
			<th>Фитнес зали</th>
			<th>Локация</th>
			<th>Избери</th>
			

		</tr>
	</thead>

<?php
	$servername = "localhost";
	$username = "sqluser";
	$password = "123456";
	$dbname = "info";
	
	$connection = new mysqli($servername, $username, $password, $dbname);
		
	if ($connection->connect_error) {
		die("Невъзможно свързване със сървър: " . $connection->connect_error);
	} 
	
	$connection->set_charset("utf8");
	
	$sql = "SELECT GymID, Gymname, Location ". 
		   "FROM gymstbl.gyms;";
		   
	$result = $connection->query($sql);
	
	
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {
	        $id = $row["GymID"];
			$Gymname = $row["Gymname"];
			$location = $row["Location"];
			
			echo "<tr>";
			echo "<td>$id</td>";
			echo "<td>$Gymname</td>";
			echo "<td>$location</td>";
			echo "<td><a href=\"choice.php?\">Избери</a></td>";
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