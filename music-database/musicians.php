<!doctype html>
<html lang="en">
	<head>
		<title>Musicians</title>
		<link rel="stylesheet" href="css/style2.css" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
		
	</head>
	<body>
		<ul class ="top-bar">
			<li><a href ="index.php">Home</a></li>
			<li><a href = "music.php">Bands</a></li>
			<li> <a href = "products.php"> T-Shirts</a> </li>
		</ul>
		<h1>The Musicians Page</h1>
	<?php
		$musicPeople['Amy Grant'] ="My mother blasted her all the time in the car while, growing up. I LEARNED to love her!";
		$musicPeople['Jon Schmidt'] ="I think he is insanely talented and listeing to his christmas albums takes me back to a simpler time."; 
		$musicPeople['Tracy Chapman'] ="I love the uniqueness of her voice and the fact she writes with soul!!"; 
		$musicPeople['Banks'] ="Not only is she an INCREDIBLE songwriter, the way she plays her music, the beat to it is mesmorizing!"; 
		$musicPeople['Foster the People'] ="Just because they're my most favorite band."; 
		
		echo "<table class='musicPeeps'>";
		echo "<tr><th>Musicians</th><th>Why I like them</th></tr>";
		foreach($musicPeople as $i => $i_value)
		{
			echo "<tr>"; 
				echo "<td>" . $i . "</td>"; 
				echo "<td>". $i_value . "</td>";
			echo "</tr>"; 
		}
		echo "</table>";
	?>
	<div class="slideShow"> 
		<div class ="wrapper">
				<img class="images" src="img/amy1.webp" alt="amy1">
				<img class="images" src="img/jon3.webp" alt="jon1">
				<img class="images" src="img/tracy1.webp" alt="t1">
				<img class="images" src="img/banks2.png" alt="b2">
				<img class="images" src="img/foster2.webp" alt="f2"> 
		</div>
	</div>
		<script src="js/script.js"></script> 
	</body>
</html>