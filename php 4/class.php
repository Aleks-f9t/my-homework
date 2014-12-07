<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Reference</title>
</head>
<body>
<?php
$number = 12;
 Dosomething($number,"Bubble");
 echo "<div>Числото е $number </div> ";
 
 
  Dosomething($number,"Stone");
 echo "<div>Числото е $number </div> ";
 
 
  Dosomething($number,"Blq");
 echo "<div>Числото е $number </div> ";
 



function Dosomething(&$number,$word) {
     $count= mb_strlen($word,"UTF-8");
	 if ($count % 2 ==0) { 
		$number +=12;
	 } else {
		$number -=3;
	 }
	 if ($number>10) {
	$number-=22;
	 }
	 if ($number <0) {
	 
	$number+=14;
	 }
	 echo $word;
	 
} 
?>
</body>
</html>
