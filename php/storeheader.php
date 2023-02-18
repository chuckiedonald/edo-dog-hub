<?php 
session_start();

//  $_SESSION["$userpicture"];
$profilepicture = $_SESSION["userpicture"]; 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/store.css">
</head>
<body>
<header>
	<div class="main">
		<div class="header-container">
		<a href="../index.php"><div class="edodog-logo-test"><b>EdoDog Hub</b></div></a>
		<div class="header-mid-div-cont">
			<img src="../img/search.jpg">
			<input class="header-input" type="text" name="search-store" placeholder="Dog breeds, Accessories and Pedigree">
		</div>
		<div class="header-right-div-cont">
			<img class="shopping-cart" src="../img/cart.jpg">
			<!-- <img src="../img/profileavatar.jpg"> -->
			<?php
		
				echo"<img class='profilepic' src='$profilepicture'>";
			 ?>
		</div>
	</div>
	</div>
</header>
</body>
</html>