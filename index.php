<?php 
session_start();

$servername = "localhost:3306";
$username = "root";
$password = "";
$db="edodoghub";
$conn = new mysqli($servername, $username, $password, $db);
$sql = "SELECT * FROM users WHERE id= 2 ";
$run =mysqli_query($conn, $sql);

$resultFromdb = mysqli_fetch_assoc($run);
$profilepic = $resultFromdb['picture'];

$profpic = "../user_pics/".$profilepic;

$_SESSION["userpicture"] = $profpic ;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<script src="jquery-3.6.0.min.js"></script>
</head>
<body>
	<!-- div for page opacity -->
	<div class="burry-out">
	<!-- ---- -->
	<div class="main">
		<div class="upper-background">
		</div>
		<div class="upper-background-img"></div>

			<div class="nav">
				<div class="logodiv"></div>
				<div class="navlogindiv">
					<div class="navlogindiv-left">
						<div class="home-nav"><span class="nav-list">Home</span></div>
						<div class="gallery-nav"><span class="nav-list">Gallery</span></div>
						<div class="forum-nav"><span class="nav-list">Forum</span></div>
						<div class="store-nav"><a href="php/store.php"><span class="nav-list">Store</span></a></div>
					</div>
					<div class="navlogindiv-right">
						<div class="logindiv"><a href="logiin.html"><span class="nav-list">Login</span></a></div>
						<div class="signupdiv"><span class="nav-list">Sign up</span></div>
					</div>
				</div>
			</div>
		<span class="house-text">A house isn’t a</span>
		<span class="home-text">Home</span>
		<span class="without-text">without a</span>
		<span class="Dog-text">Dog</span>
		<span class="sub-text">At EdoDog Hub, we believe every home <br> should have a companion,</span>
		<a href="php/store.php">
		<div class="shopnw">
			<span class="shop-text" >Shop Now</span>
			<div class="shopnwicon-container">
				<span class="shopnwicon-inner"><img style="width: 25px" src="img/66831.png"></span>
			</div>
		</div></a>
		<div class="img-left"></div>
		<div class="img-right"></div>
		<span class="first-sub-heading">
			What makes us different from others
		</span>
		<span class="scnd-sub-heading">
			At Edo Dog Hub, we believe every home should have a <br> companion. A dog is man’s best friend
		</span>
		<div class="sure-connect-img"></div>
		<span class="sure-connect-heading">Sure Connect</span>
		<span class="sure-connect-text">
			Our main goal is to connect sellers with buyers and <br>get the best deals out there.
		</span>
		<div class="vet-clinic-img"></div>
		<span class="vet-clinic-heading">Vet. Clinic</span>
		<span class="vet-clinic-text">
			We always care about your pets. Bring <br>them to us for regular Check up.
		</span>
		<div class="dog-acc-img"></div>
		<span class="dog-acc-heading">
			Dog Feeds & Accessories
		</span>
		<span class="dog-acc-text">
			Get the best variety of feeds and best accessories <br> of any kind for your pet.
		</span>


		<div class="help-img"></div>
		<span class="help-heading">
			24/7 support
		</span>
		<span class="help-text">
			Need help? <br>Contact us at edodoghub@gmail.com
		</span>
		<div class="dog-deals">
			Dog Deals
		</div>
		<div class="featured-div">
			<span>
				Featured
			</span>
		</div>
		<div class="bestseller-div">
			<span>Bestseller</span>
		</div>
		<div class="latest-div">
			<span>Latest</span>
		</div>

<!-- ----------------------------------------------------------- -->

		<div class="dog-deals-prod-main">
			<div class="dog-deals-prod-cont">
			<div class="dog-deals-prod-cont-img">
				<img src="img/img9.png">
				<div class="dog-deals-amount-back"></div>
				<span class="dog-deals-amount">&#x20A6 50,000</span>
			</div>
			<div class="dog-deals-prod-cont-disc-cont">
				<div>Age: <span class="age-breed-text">2years</span></div>
				<div>Breed: <span class="age-breed-text">German Shepherd</span></div>
			</div>
			<!-- <div class="dog-deals-amount-back"></div>
				<span class="dog-deals-amount">&#x20A6 50,000</span> -->
			</div>
<!-- ------------------------------------------------------- -->
			<div class="dog-deals-prod-cont">
			<div class="dog-deals-prod-cont-img">
				<img src="img/img10.png">
				<div class="dog-deals-amount-back"></div>
				<span class="dog-deals-amount">&#x20A6 45,000</span>
			</div>
			<div class="dog-deals-prod-cont-disc-cont">
				<div>Age: <span class="age-breed-text">7 Months</span></div>
				<div>Breed: <span class="age-breed-text">German Shepherd</span></div>
			</div>
		</div>

		<!-- ------------------------------------ -->
		<div class="dog-deals-prod-cont">
			<div class="dog-deals-prod-cont-img">
				<img src="img/img9.png">
				<div class="dog-deals-amount-back"></div>
				<span class="dog-deals-amount">&#x20A6 50,000</span>
			</div>
			<div class="dog-deals-prod-cont-disc-cont">
				<div>Age: <span class="age-breed-text">2years</span></div>
				<div>Breed: <span class="age-breed-text">German Shepherd</span></div>

			</div>
			</div>
			<div class="dog-deals-prod-cont">
			<div class="dog-deals-prod-cont-img">
				<img src="img/img9.png">
				<div class="dog-deals-amount-back"></div>
				<span class="dog-deals-amount">&#x20A6 50,000</span>
			</div>
			<div class="dog-deals-prod-cont-disc-cont">
				<div>Age: <span class="age-breed-text">2years</span></div>
				<div>Breed: <span class="age-breed-text">German Shepherd</span></div>
			</div>
		</div>


	</div>
	<div class="nav-slid1-cont">
		<div class="arrow-cont"><</div>
		<div class="arrow-cont">></div>
	</div>
	<div class="top-prod">Top Product</div>
	<div class="featured-div2">
			<span>
				Featured
			</span>
		</div>
		<div class="bestseller-div2">
			<span>Bestseller</span>
		</div>
		<div class="latest-div2">
			<span>Latest</span>
		</div>


		<!-- --------------------------------------------- -->
		<!-- Top product display -->

		<div class="top-product-disp-main">
			<div class="dog-deals-prod-cont">
			<div class="dog-deals-prod-cont-img">
				<img src="img/img9.png">
				<div class="dog-deals-amount-back"></div>
				<span class="dog-deals-amount">&#x20A6 50,000</span>
			</div>
			<div class="dog-deals-prod-cont-disc-cont">
				<div>Age: <span class="age-breed-text">2years</span></div>
				<div>Breed: <span class="age-breed-text">German Shepherd</span></div>
			</div>
			<!-- <div class="dog-deals-amount-back"></div>
				<span class="dog-deals-amount">&#x20A6 50,000</span> -->
			</div>
<!-- ------------------------------------------------------- -->
			<div class="dog-deals-prod-cont">
			<div class="dog-deals-prod-cont-img">
				<img src="img/img10.png">
				<div class="dog-deals-amount-back"></div>
				<span class="dog-deals-amount">&#x20A6 45,000</span>
			</div>
			<div class="dog-deals-prod-cont-disc-cont">
				<div>Age: <span class="age-breed-text">7 Months</span></div>
				<div>Breed: <span class="age-breed-text">German Shepherd</span></div>
			</div>
		</div>

		<!-- ------------------------------------ -->
		<div class="dog-deals-prod-cont">
			<div class="dog-deals-prod-cont-img">
				<img src="img/img9.png">
				<div class="dog-deals-amount-back"></div>
				<span class="dog-deals-amount">&#x20A6 50,000</span>
			</div>
			<div class="dog-deals-prod-cont-disc-cont">
				<div>Age: <span class="age-breed-text">2years</span></div>
				<div>Breed: <span class="age-breed-text">German Shepherd</span></div>

			</div>
			</div>
			<div class="dog-deals-prod-cont">
			<div class="dog-deals-prod-cont-img">
				<img src="img/img9.png">
				<div class="dog-deals-amount-back"></div>
				<span class="dog-deals-amount">&#x20A6 50,000</span>
			</div>
			<div class="dog-deals-prod-cont-disc-cont">
				<div>Age: <span class="age-breed-text">2years</span></div>
				<div>Breed: <span class="age-breed-text">German Shepherd</span></div>
			</div>
		</div>


		<!-- ------------------------------------------------>
	</div>
	<div class="nav-slid2-cont">
		<div class="arrow-cont"><</div>
		<div class="arrow-cont">></div></div>
	<div class="our-gallery">Our Gallery</div>


<!-- ---------------Gallery display section------------------ -->
<div class="gallery-display-cont">
	<div class="subcont1"><img src="img/img11.png"></div>

	<div class="subcont2">
		<div style="display: flex;">
			<div class="gallery-sub-image"><img src="img/img15.jpg"></div>
			<div class="gallery-sub-image"><img src="img/img12.png"></div>
		</div>

		<div style="display: flex;">
			<div class="gallery-sub-image"><img src="img/img16.jfif"></div>
			<div class="gallery-sub-image"><img src="img/img13.png"></div>
		</div>
	</div>

	<div class="subcont3"><img src="img/img11.png"></div>
</div>
<div class="view-all-cont">
	<div class="view-all"><span>View all</span></div>
</div>
<div class="login-cont"></div>
<!-- -End of opacity div--- -->
</div>

<?php

	include'php/footer.php';
?>
</body>
</html>
<!-- -------- -->
<!-- <div class="form-container"></div>




