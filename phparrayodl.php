<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale-1">
		<title>PHP Array Exercises</title>
	</head>
	<body>
		<h3>PHP Array Exercises</h3>
		<?php
			#Pua, Justinne Angela A.
			#1
			print "<br> Array Exercise 1 <br>";
			$w = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
			echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $w[5] . " and " . $w[6] . ". Then came " . $w[1] . " with a few " . $w[2] . " and some " . $w[0] . ". At least we didn't get any " . $w[3] . " or " . $w[4] . ".";
		?>
		<?php
			#2
			print "<br> <br> Array Exercise 2 <br>";
			$c = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
			#loop
			for ($x=0; $x<COUNT($c); $x++) {
				echo $c{$x} . ", ";
			}
		?>
		<ul>
			<?php
				#list 1
				print "Cities: <br>";
				sort($c);
				for ($x=0; $x<COUNT($c); $x++) {
	 			echo "<li> {$c{$x}} </li>";
	 			}
			?>
		</ul>
		<ul>
	 		<?php
	 			#list 2
	 			array_push($c, "Los Angeles", "Calcutta", "Osaka", "Beijing");
				sort($c);
	 			print "Cities: <br>";
	 			for ($x=0; $x<COUNT($c); $x++) {
	 			echo "<li> {$c{$x}} </li>";
	 			}
	 		?>
	 	</ul>
	</body>
</html>