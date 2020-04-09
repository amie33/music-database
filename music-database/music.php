<!doctype html> 
<html lang ="en">
	<head>
		<title>Music Database</title>
		<link rel="stylesheet" href="css/style.css" type ="text/css">
		<link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
	</head>
	<body>
		<ul class ="menu"> 
			<li> <a href = "index.php"> Home</a> </li>
			<li> <a href = "musicians.php"> Muscians</a> </li>
			<li> <a href = "products.php"> T-Shirts</a> </li>
		</ul>
		<?php
			$albums = array("Tenacious D", "Home For Christmas","World War Joy", "Falling All the Way", "The Weatherman", "On A Clear Night", "Dirty Heads","The Piano Guys", "Hot Fuss", "Hell Freezes Over"); 
				
			echo "<table class='albums'>";
				echo "<tr>"; 
					echo "<th>Albums I Enjoy</th>";
				echo "</tr>";
						for($i = 0; $i < sizeof($albums); $i++)
						{
							echo "<tr>"; 
							echo "<td>$albums[$i]</td>";
							echo "</tr>";
						}
			echo "</table>";
		?>
	</body> 
</html>