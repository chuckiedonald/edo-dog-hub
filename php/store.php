<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$db="edodoghub";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);


$sql = 'SELECT * FROM users WHERE email="fej@gmail.com"'; // query to get data from edodoghub users table database but if you want to get the full table, you dont add "where i.e condition"

// $insert = 'INSERT INTO `dogs`( `name`, `breed type`, `breed`, `location`, `gender`, `age`, `amount`) VALUES ()';

// $query = $conn->query($sql);
$run =mysqli_query($conn, $sql); // run the above sql query


if ($run){
 // if true, it will return below
$resultFromdb = mysqli_fetch_assoc($run);//this is the result from database
//print_r($resultFromdb);//this will print out all data from users table where email=fej@gmail.com bacuase we are using select (all) * query
//echo $usernamefrmdb = $resultFromdb['username'];
//echo $numberoffriendsfrmdb = $resultFromdb['num_f'];


}else{
	//echo $run->error;
	echo mysqli_connect_error();
}
?>


<?php


$sql = 'SELECT * FROM dogs WHERE 1';
$run =mysqli_query($conn, $sql);
if ($run){

	$dogs = [];
	while ($row = mysqli_fetch_assoc($run)) {
		array_push($dogs, $row);
	}

	// $dogs = mysqli_fetch_assoc($run);	
	// print_r($dogs);
}else{

	echo '<script type="text/javascript"> 
			alert("An error occured:"); 
			window.history.back();
		</script>';
	exit;

}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edo Dog Store</title>
	<link rel="stylesheet" type="text/css" href="../css/store.css">
</head>
<body>


	
	<!-- <div class="header-container">
		<a href="../index.html"><div class="edodog-logo-test"><b>EdoDog Hub</b></div></a>
		<div class="header-mid-div-cont">
			<img src="../img/search.jpg">
			<input class="header-input" type="text" name="search-store" placeholder="Dog breeds, Accessories and Pedigree">
		</div>
		<div class="header-right-div-cont">
			<img class="shopping-cart" src="../img/cart.jpg">
			<img src="../img/profileavatar.jpg">
		</div>
	</div> -->

	<!--included header -->
	<?php

		include'storeheader.php';
	?>








	<p id="store-header"><b>STORE</b></p>
	<div class="store">
		<p id="Filter-header">Filter</p>
		<p class="righ-div-sub-header">Hot deals</p>
	</div>
	<!-- fist section -->
	<section class="first-section">

		<!-- filter side bar -->
		<div class="first-section-sidebar">
			<div class="locaton-cont">
				<h4 class="filter-header">Location <span style="float: right;margin-top: 7px" i id="loc" class="fa-solid fa-angle-down"></span></h4>
				<!-- hide this div when location collapse -->
				<div class="location-selection-div">
					<span class="abuja">Abuja <span class="checkbox"><img id="abjicon" onclick="filterLocation('benin','lagos','delta','abjicon')" src="../img/checkbox.png"></span></span>
					<span class="benin">Benin <span class="checkbox"><img id="benicon" onclick="filterLocation('abuja','lagos','delta','benicon')" src="../img/checkbox.png"></span></span>
					<span class="delta">Delta <span class="checkbox"><img id="delicon" onclick="filterLocation('abuja','lagos','benin','delicon')" src="../img/checkbox.png"></span></span>
					<span class="lagos">Lagos <span class="checkbox"><img id="lagicon" onclick="filterLocation('abuja','benin','delta','lagicon')" src="../img/checkbox.png">
				</div>
			</div>

			<!-- Category -->
			<div>
				<div>
				<h4 class="filter-header">Categoty <span style="float: right;margin-top: 5px" i class="fa-solid fa-angle-down"></span></h4>
				<!-- hide this div when location collapse -->
				<div class="breed-selection-div">
					<span>Dog <span class="checkbox"><img src="../img/checkbox.png"></span></span>
					<span>Accessories <span class="checkbox"><img src="../img/checkbox.png"></span></span>
					
				</div>
			</div>
			</div>


			<!-- breed filter -->
			<div>
				<h4 class="filter-header">Breed <span style="float: right;margin-top: 5px" i class="fa-solid fa-angle-down"></span></h4>
				<!-- hide this div when location collapse -->
				<div class="breed-selection-div">
					<span>German Shepherd <span class="checkbox"><img src="../img/checkbox.png"></span></span>
					<span>Bulldog <span class="checkbox"><img src="../img/checkbox.png"></span></span>
					<span>Pug <span class="checkbox"><img src="../img/checkbox.png"></span></span>
					<span>Rottweiler <span class="checkbox"><img src="../img/checkbox.png">
				</div>
			</div>



			<!-- gender -->
			<div>
				<h4 class="filter-header">Gender<span style="float: right;margin-top: 5px" i class="fa-solid fa-angle-down"></span></h4>
				<!-- hide this div when location collapse -->
				<div class="breed-selection-div">
					<span>Male<span class="checkbox"><img src="../img/checkbox.png"></span></span>
					<span>Female <span class="checkbox"><img src="../img/checkbox.png"></span></span>
					
					
				</div>
			</div>


			<!-- age -->
			<div>
				<h4 class="filter-header">Age <span style="float: right;margin-top: 5px" i class="fa-solid fa-angle-down"></span></h4>
				<!-- hide this div when location collapse -->
				<div class="breed-selection-div">
					<span>0-5 months<span class="checkbox"><img src="../img/checkbox.png"></span></span>
					<span>6-10 months <span class="checkbox"><img src="../img/checkbox.png"></span></span>
					<span>1+ years <span class="checkbox"><img src="../img/checkbox.png"></span></span>
				</div>
			</div>



			<!-- price range -->
			<div>
				<h4 class="filter-header">Price Range <span style="float: right;margin-top: 5px" i class="fa-solid fa-angle-down"></span></h4>
				<!-- hide this div when location collapse -->
				<div class="breed-selection-div">
					<span>Under 30k <span class="checkbox"><img src="../img/checkbox2.png"></span></span>
					<span>30-60k <span class="checkbox"><img src="../img/checkbox.png"></span></span>
					<span>60-100k <span class="checkbox"><img src="../img/checkbox.png"></span></span>
					<span>Above 100k <span class="checkbox"><img src="../img/checkbox.png">
				</div>
			</div>


		</div>


		<div class="first-section-right-con">
			<div class="hotdealscrollcont">
				<div class="first-section-right-div clonediv">



<?php  foreach ($dogs as $dog) { ?>
	
<?php 
	$picture="../img/cart.jpg";
	if( $dog['image'] != '') $picture = "../dogs/".$dog['image'];
?>
				<a href="descriptionpage.php?dog=<?= $dog['id'] ?>">
					<div class="hot-deal-dis-cont">
					<div class="img-cont">
						<img src="<?= $picture ?>">
					</div>
					<div class="hot-deal-dis">
						<span>Age: <span class="age-breed-text"><?= $dog['age'] ?></span></span>
						<span>Breed: <span class="age-breed-text"><?= $dog['breed'] ?></span></span>
					</div>
					<span class="dog-deals-amount">&#x20A6 <span id="price"><?php echo $dog['amount'] ?> </span></span>
					</div>
				</a>


<?php } ?>







					</div>

<!-- --------------------------2nd clone------------------------------- -->

<div class="first-section-right-div clonediv">



<?php  foreach ($dogs as $dog) { ?>
	
<?php 
	$picture="../img/cart.jpg";
	if( $dog['image'] != '') $picture = "../dogs/".$dog['image'];
?>
				<a href="descriptionpage.php?dog=<?= $dog['id'] ?>">
					<div class="hot-deal-dis-cont">

					<div class="img-cont">
						<img src="<?= $picture ?>">
					</div>
					<div class="hot-deal-dis">
						<span>Age: <span class="age-breed-text"><?= $dog['age'] ?></span></span>
						<span>Breed: <span class="age-breed-text"><?= $dog['breed'] ?></span></span>
					</div>
					<span class="dog-deals-amount">&#x20A6 <span id="price"><?php echo $dog['amount'] ?> </span></span>
					</div>
				</a>


<?php } ?>







					</div>


				<!-- ********************************** -->
			</div>
			



			<!-- ==============================end her -->
			<!-- Top seller profile -->
				<p class="righ-div-sub-header" style="width: 20%">Top sellers</p>
				<div class="top-seller-cont">

					<span onclick="profileScrollRight()" class="dir-left">
						<i class="fa-solid fa-angle-left"></i>
					</span>
					<span onclick="profileScroll()" class="dir-right">
						<i class="fa-solid fa-angle-right"></i>
					</span>
					<div class="cover-pro-pic"></div>


						<!-- invisible top seller profile -->

					<!-- <div class="invisible-top-seller top-seller-profile"></div>
					<div class="invisible-top-seller top-seller-profile"></div>
					<div class="invisible-top-seller top-seller-profile"></div>
					<div class="invisible-top-seller top-seller-profile"></div>
					<div class="invisible-top-seller top-seller-profile"></div> -->



					<div class="top-seller-profile">
						<img class="profile-photo" src="../img/profile1.png">
						<span class="username">@matthew</span>
						<span class="num-sale">21 sales</span>
						<span><img class="verification-icon" src="../img/profileverification.png"></span>
					</div>


					<!-- ################################### -->


					<div class="top-seller-profile">
						<img class="profile-photo" src="../img/profile1.png">
						<span class="username">@matthew</span>
						<span class="num-sale">21 sales</span>
						<span><img class="verification-icon" src="../img/profileverification.png"></span>
					</div>


					<div class="top-seller-profile">
						<img class="profile-photo" src="../img/profile1.png">
						<span class="username">@matthew</span>
						<span class="num-sale">21 sales</span>
						<span><img class="verification-icon" src="../img/profileverification.png"></span>
					</div>



					<div class="top-seller-profile">
						<img class="profile-photo" src="../img/profile2.png">
						<span class="username">@matthew</span>
						<span class="num-sale">21 sales</span>
						<span><img class="verification-icon" src="../img/profileverification.png"></span>
					</div>

					<div class="top-seller-profile">
						<img class="profile-photo" src="../img/profile3.png">
						<span class="username">@matthew</span>
						<span class="num-sale">21 sales</span>
						<span><img class="verification-icon" src="../img/profileverification.png"></span>
					</div>

					<div class="top-seller-profile">
						<img class="profile-photo" src="../img/profile2.png">
						<span class="username">@matthew</span>
						<span class="num-sale">21 sales</span>
						<span><img class="verification-icon" src="../img/profileverification.png"></span>
					</div>

					<div class="top-seller-profile">
						<img class="profile-photo" src="../img/profile1.png">
						<span class="username">@matthew</span>
						<span class="num-sale">21 sales</span>
						<span><img class="verification-icon" src="../img/profileverification.png"></span>
					</div>


					<div class="top-seller-profile">
						<img class="profile-photo" src="../img/profile1.png">
						<span class="username">@matthew</span>
						<span class="num-sale">21 sales</span>
						<span><img class="verification-icon" src="../img/profileverification.png"></span>
					</div>

					<!-- ######################################## -->
				</div>
		</div>
	</section>
<!-- Accessories -->
	<p class="righ-div-sub-header" style="width: 17%;
	 margin-left: 8px">Accessories</p>

	 <div class="accessories-cont">
	 	<div class="acc-div">
	 		<img class="acc-prod-discrpt-photo" src="../img/img17.png">
	 		<div>
	 			<h5>Good Dog Tokens</h5>
	 			<p class="acc-prod-discrpt">Lorem ipsum dolor sit amet
	 			 </p>
	 			<div class="acc-price"><h6><span>&#x20A6</span><span>10,000</span><h6></div>
	 			<img class="like" src="../img/like.png">
	 			<img class="acc-cart" src="../img/shoppincart2.png">
	 			<div class="acc-div-back"></div>
	 		</div>
	 	</div>

	 	<!-- delete duplication from here -->

	 	<div class="acc-div">
	 		<img class="acc-prod-discrpt-photo" src="../img/img20.png">
	 		<div>
	 			<h5>Good Dog Tokens</h5>
	 			<p class="acc-prod-discrpt">Lorem ipsum dolor sit amet
	 			 </p>
	 			<div class="acc-price"><h6><span>&#x20A6</span><span>10,000</span><h6></div>
	 			<img class="like" src="../img/like.png">
	 			<img class="acc-cart" src="../img/shoppincart2.png">
	 			<div class="acc-div-back"></div>
	 		</div>
	 	</div>

	 	<div class="acc-div">
	 		<img class="acc-prod-discrpt-photo" src="../img/img19.png">
	 		<div>
	 			<h5>Good Dog Tokens</h5>
	 			<p class="acc-prod-discrpt">Lorem ipsum dolor sit amet
	 			 </p>
	 			<div class="acc-price"><h6><span>&#x20A6</span><span>10,000</span><h6></div>
	 			<img class="like" src="../img/like.png">
	 			<img class="acc-cart" src="../img/shoppincart2.png">
	 			<div class="acc-div-back"></div>
	 		</div>
	 	</div>

	 	<div class="acc-div">
	 		<img class="acc-prod-discrpt-photo" src="../img/img18.png">
	 		<div>
	 			<h5>Good Dog Tokens</h5>
	 			<p class="acc-prod-discrpt">Lorem ipsum dolor sit amet
	 			 </p>
	 			<div class="acc-price"><h6><span>&#x20A6</span><span>10,000</span><h6></div>
	 			<img class="like" src="../img/like.png">
	 			<img class="acc-cart" src="../img/shoppincart2.png">
	 			<div class="acc-div-back"></div>
	 		</div>
	 	</div>

	 	<div class="acc-div">
	 		<img class="acc-prod-discrpt-photo" src="../img/img17.png">
	 		<div>
	 			<h5>Good Dog Tokens</h5>
	 			<p class="acc-prod-discrpt">Lorem ipsum dolor sit amet
	 			 </p>
	 			<div class="acc-price"><h6><span>&#x20A6</span><span>10,000</span><h6></div>
	 			<img class="like" src="../img/like.png">
	 			<img class="acc-cart" src="../img/shoppincart2.png">
	 			<div class="acc-div-back"></div>
	 		</div>
	 	</div>

	 	<div class="acc-div">
	 		<img class="acc-prod-discrpt-photo" src="../img/img18.png">
	 		<div>
	 			<h5>Good Dog Tokens</h5>
	 			<p class="acc-prod-discrpt">Lorem ipsum dolor sit amet
	 			 </p>
	 			<div class="acc-price"><h6><span>&#x20A6</span><span>10,000</span><h6></div>
	 			<img class="like" src="../img/like.png">
	 			<img class="acc-cart" src="../img/shoppincart2.png">
	 			<div class="acc-div-back"></div>
	 		</div>
	 	</div>

	 	<div class="acc-div">
	 		<img class="acc-prod-discrpt-photo" src="../img/img17.png">
	 		<div>
	 			<h5>Good Dog Tokens</h5>
	 			<p class="acc-prod-discrpt">Lorem ipsum dolor sit amet
	 			 </p>
	 			<div class="acc-price"><h6><span>&#x20A6</span><span>10,000</span><h6></div>
	 			<img class="like" src="../img/like.png">
	 			<img class="acc-cart" src="../img/shoppincart2.png">
	 			<div class="acc-div-back"></div>
	 		</div>
	 	</div>
	 	<!-- end delete here -->

	 </div>

<!-- ============================================================================ -->
	 <p class="righ-div-sub-header" style="width: 20%; margin-top: 40px;
	 margin-left: 8px">General sales</p>

	 <div class="accessories-cont">
	 	<div class="acc-div">
	 		<img class="acc-prod-discrpt-photo" src="../img/img20.png">
	 		<div>
	 			<h5>Good Dog Tokens</h5>
	 			<p class="acc-prod-discrpt">Lorem ipsum dolor sit amet
	 			 </p>
	 			<div class="acc-price"><h6><span>&#x20A6</span><span>10,000</span><h6></div>
	 			<img class="like" src="../img/like.png">
	 			<img class="acc-cart" src="../img/shoppincart2.png">
	 			<div class="acc-div-back"></div>
	 		</div>
	 	</div>
	</div>

<a href="postad.php">
	<div class="postads">
		
		<span class="posttitle"><i class="fa-solid fa-plus posticon"></i> Post ad here</span>
	</div>
</a>
<div id="main-cont">
	<div class="postad1">
	<span class="title-cont"><i id="postani-icon" class="fa-solid fa-plus posticon1"></i></span>
	<span>Post ad here</span>
</div>
</div>
<!-- <footer>

</footer> -->
<?php
		include 'footer.php';
	?>

<script src="../javascript/jquery-3.6.0.min.js"></script>
<script src="../javascript/hideandshowbtn.js"></script>
<script src="../javascript/store.js"></script>
</body>
</html>