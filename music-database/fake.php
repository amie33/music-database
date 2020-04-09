<?php 
$display  ="";
				if(empty($_POST['register']))//submit HASN"T been pressed submit the form for the user to fill out 
				{
					$display.= '<div class="form">';
						//the $_GET variable here is allowing the user to enter a field in the text box and if there is a mistake and the page reloads, the information that the user enters will remain :) 
						if(!empty($_GET['fn'])) $fn = $_GET['fn']; else $fn="";
						if(!empty($_GET['ln'])) $ln = $_GET['ln']; else $ln="";
						if(!empty($_GET['e'])) $e = $_GET['e']; else $e="";
						if(!empty($_GET['ad'])) $ad = $_GET['ad']; else $ad="";
						if(!empty($_GET['p'])) $p = $_GET['p']; else $p="";
						if(!empty($_GET['t'])) $t = $_GET['t']; else $t="";
						if(!empty($_GET['c'])) $pn = $_GET['c']; else $c="";
						if(!empty($_GET['s'])) $s = $_GET['s']; else $s="";
						if(!empty($_GET['sty'])) $sty = $_GET['sty']; else $sty="";
						if(!empty($_GET['q'])) $q = $_GET['q']; else $q="";

						$display.= '<h1 class="head"> Buy A Band T-SHIRT!</h1>';
						$display.= '<form method ="post" action="products.php" >';
							$display.= '<input type="text" value = "'.$fn.'" name ="firstN" placeholder ="Enter First Name">'; 
							$display.= '<input type="text" value = "'.$ln.'" name ="lastN" placeholder ="Enter Last Name">'; 
							$display.= '<input type="text" value = "'.$e.'" name ="email" placeholder ="Enter Email">'; 
							$display.= '<input type="text" value = "'.$ad.'" name ="address" placeholder ="Enter Address">'; 
							$display.= '<input type="text" value = "'.$p.'" name ="phone" placeholder ="Enter Phone Number">';
							$display.= '<select name ="tshirt">';
									$display.='<option value="'.$t.'" selected disabled >Choose a T-Shirt</option>';
										$bandTs = array("Tenacious D", "Amy Grant", "Chain Smokers", "Falling All the Way", "Weather Man", "Missy Higgins", "Dirty Heads", "Piano Guys", "Hot Fuss", "Hell Freezes Over");
										
										foreach($bandTs as $value)
										{
											$display.= '<option> ' . $value . ' </option>';
										} 
								$display.= '</select>';

							$display.= '<select name="color">'; 
									$display.= '<option value="'.$c.'" selected disabled >Choose a Color</option>';
										$colorT = array("Idian Red", "Medium Spring Gree", "Macaroni Orange", "Simpsons Yellow", "Egg White");
										
										foreach($colorT as $value)
										{
											$display.= '<option> '. $value .'</option>';
										} 
								$display.= '</select>';

							$display.='<select name = "size">';
									$display.='<option value="'.$s.'" selected disabled >Choose a Size</option>';
										$sizeT = array("X-Small", "Small", "Medium", "Large", "X-Large");
										foreach($sizeT as $value)
										{
											$display.='<option>'. $value .'</option>';
										}
								$display.='</select>';
							
								$display.='<select name= "style">';
									$display.='<option value="'.$sty.'" selected disabled >Choose a Style</option>';
										$styleT = array("T-Shirt", "Long Sleeve", "Hoodie", "Pull-Over", "Tank-Top");
										foreach($styleT as $value)
										{
											$display.='<option> '. $value .'</option>';
										} 
								$display.='</select>';
								
								$display.='<select name ="quantity">';
									$display.='<option value="'.$q.'" selected disabled >Quantity Per Item</option>';
										$quant = array("1", "2", "3", "4", "5");
										foreach($quant as $value)
										{
											$display.='<option>'. $value .'</option>';
										} 
								$display.='</select>';
							$display.= '<input type="reset">';
							$display.= '<input type="submit" name ="register">'; 
						$display.= '</form>'; 
					
				}
				
				//submit has been pressed, display the users fields that they filled out 
				else{
					$errorCatch =0;//initalize your errorCatch to 0, it will be different based on their error committed.  you can see the error committed in the url of your website base on what number we initialized the error here with.  
					$display.= '<div class = "orderDisplay">';
						if(!empty($_POST['firstN'])) $fn = $_POST['firstN']; else{$fn = ''; $errorCatch +=1;} 
						if(!empty($_POST['lastN'])) $ln = $_POST['lastN']; else{$ln = ''; $errorCatch +=2;} 
						if(!empty($_POST['email'])) $e = $_POST['email']; else{$e = ''; $errorCatch +=3;} 
						if(!empty($_POST['address'])) $ad =$_POST['address']; else{ $ad = ''; $errorCatch +=4;}
						if(!empty($_POST['phone'])) $p = $_POST['phone']; else{$p = ''; $errorCatch +=5;}
						if(!empty($_POST['tshirt'])) $t = $_POST['tshirt']; else{$t = ''; $errorCatch +=6;}
						if(!empty($_POST['color'])) $c = $_POST['color']; else{$c = ''; $errorCatch +=7;}
						if(!empty($_POST['size'])) $s = $_POST['size']; else{ $s = ''; $errorCatch += 8;}
						if(!empty($_POST['style'])) $sty = $_POST['style']; else{$sty = ''; $errorCatch +=9;}
						if(!empty($_POST['quantity'])) $q = $_POST['quantity']; else{$q = ''; $errorCatch +=10;}
							
						if($errorCatch)
						{
							header("location: ?fn=$fn&ln$ln&e=$e&ad=$ad&p=$p&t=$t&c=$c&s=$s&sty=$sty&q=$q");
						}else{
							echo '<h1 class="head"> Your T-Shirt Order is: </h1>';
							echo '<p class ="output"> First Name: '. ucfirst($fn) .'</p>';
							echo '<p class ="output"> Last Name: '. ucfirst($ln) .'</p>';
							echo '<p class ="output"> Email Address: '. $e .'</p>'; 
							echo '<p class ="output"> Home Address: '. ucfirst($ad) .'</p>';
							echo '<p class ="output"> Phone Number: '. $p .'</p>'; 
							echo '<p class ="output"> Band T You Picked Out: '. ucfirst($t) .' T-Shirt</p>';
							echo '<p class ="output"> Color of T: '. ucfirst($c) .'</p>'; 
							echo '<p class ="output"> Size of T: '. ucfirst($s) .'</p>';
							echo '<p class ="output"> Style of Chose T: '. ucfirst($sty) .'</p>'; 
							echo '<p class ="output"> Quantity Ordered: '. ucfirst($q) .'</p>';
						}
				}
					$display.= '</div>';
?>
<!doctype html> 
<html lang='en'>
<head> 
	<title>T Shirt Page</title>
	<link rel ="stylesheet" href="css/stylet.css" type ="text/css">
	<link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
</head>
	<body> 
		<ul class ="menu"> 
			<li> <a href = "index.php"> Home</a> </li>
			<li> <a href = "music.php"> Link to my music database</a> </li>
			<li> <a href = "musicians.php"> Link to my musicians</a> </li> 
		</ul>
	</body>
</html>
