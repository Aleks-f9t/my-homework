<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Birthday</title>
</head>
<style>
	form{
		font-size: 19px;
		border: 2px dotted blue;
		padding: 10px;
		margin:20px;
	}
	
	form > div {
		margin-bottom: 8px;
	}
</style>
<body>
<?php
$day=date("l");
$date=date("j");
$suffix=date("S");
$month=date("F");
$year=date("Y");
echo $day . ", " . $month . " " . $date . $suffix . ", " . $year;
  

 if(isset($_POST["submit"])){
$birthday = $_POST["birthday"];	
$year = $_POST["year"];
$month = $_POST["month"];
$day = $_POST ["day"];

}
?>
	



<form method="POST">

<div>
		<span>Рождена дата:</span>
		<input type="text" name="birthday" />
	</div>
<div>
		<span>Година:</span>
		<input type="text" name="year" />
	</div>
<div>
		<span>Месец:</span>
		<select name="month">
		  <option value="" selected="selected">Изберете</option>
		  <option value="J">Януари</option>
		  <option value="F">Февруари</option>
		  <option value="M">Март</option>
		  <option value="A">Април</option>
		  <option value="Ma">Май</option>
		  <option value="June">Юни</option>
		  <option value="July">Юли</option>
		  <option value="Au">Август</option>
		  <option value="S">Септември</option>
		  <option value="O">Октомври</option>
		  <option value="N">Ноември</option>
		  <option value="D">Декември</option>
		</select>
	</div>	
	<div>
		<span>Ден:</span>
		<input type="text" name="day" />
	</div>
	<div>
		<input type="reset" value="Изчисти">
		<input type="submit" name="submit" value="Изпрати" />
	</div>
	
</form>	
<?php
	
?>
</body>
</html>

