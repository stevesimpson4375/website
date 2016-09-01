<!DOCTYPE html>

<html lang="en">
	<head>
		<title>PHP with some issues</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		
		$myArray=array("The first"=>"10", "The second"=>"20", "The third"=>"20");


		foreach($myArray as $x => $x_value) {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";
		}
		
		$myArray[The second]=12;
		
		foreach($myArray as $x => $x_value) {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";
		}
		
		unset($myArray["The second"]);
		
		foreach($myArray as $x => $x_value) {
			echo "Key=" . $x . ", Value=" . $x_value;
			echo "<br>";
		}
		
		?>
	</body>
</html>