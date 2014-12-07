<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML</title>
	<style>
	form{
		font-size: 19px;
		border: 2px solid red;
		padding: 10px;
		margin:20px;
	}
	
	form > div {
		margin-bottom: 8px;
	}
</style>
</head>


<body>
<?php
if(isset($_GET["submit"])){
$name = htmlspecialchars($_GET["name"]);
$actors = htmlspecialchars($_GET["actors"]);

echo  " <ul> <li> White Chicks </li> <li> Hobbit </li> <li> Mushrooms </li>";
		exit(0);
	}
?>

	<form method="GET">
	<div>
		<span>Име на филм:</span>
		<input type="text" name="name" />
	</div>
<div>
		<span>Изберете актьор:</span>
		<select name="actors">
		    <option value="" selected="selected">Изберете</option>
		    <option value="BA">Бен Афлек</option>
		    <option value="BP">Брад Пит</option>
		    <option value="МА">Майкъл Ансара</option>
		    <option value="DD">Джони Деп</option>
		    <option value="SB">Стивън Блум</option>
		    <option value="RB">Ричард Бигс</option>
		</select>
	</div>
	
<div>
		<span>Жанр:</span>
		<select name="type[]" multiple="yes">
		    <option value="a">Екшън</option>
		    <option value="c">Комедия</option>
		    <option value="ad">Приключенски</option>
		    <option value="h">Исторически</option>
		    <option value="f">Семеен</option>
		    <option value="m">Музикален</option>
		</select>
	</div>
	<div>
		<input type="submit" name="submit" value="Търсене" />
		<input type="reset" value="Изчисти">
	</div>
	
</form>	



  
 </body>
 </html>