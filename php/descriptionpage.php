<?php
$dog_id = $_GET['dog'];
$servername = "localhost:3306";
$username = "root";
$password = "";
$db="edodoghub";
$conn = new mysqli($servername, $username, $password, $db);
$sql = "SELECT * FROM dogs WHERE id='$dog_id'";
$run =mysqli_query($conn, $sql);
if($run){
	$resultFromdb = mysqli_fetch_assoc($run);
	// print_r($resultFromdb);

	$name = $resultFromdb['name'];
	$breedType = $resultFromdb['breed type'];
	$loc = $resultFromdb['location'];
	$breed = $resultFromdb['breed'];
	$Gender = $resultFromdb['gender'];
	$age = $resultFromdb['age'];
	$amount = $resultFromdb['amount'];
	$dealcat = $resultFromdb['deal_cat'];
	$image = $resultFromdb['image'];
	$postTime = $resultFromdb['post_time'];

	if($name ==''){
		$name = $resultFromdb['breed'];
	}

	
}

	$picture="../img/cart.jpg";
	if( $image != '') $picture = "../dogs/".$image;
	// if(strlen($amount)==6){
	// 	$x = substr_replace($amount, ',', 3);
	// 	$amount = $x.substr($amount, 3);
	// }
	// if (strlen($amount)==4) {
	// 	$x = substr_replace($amount, ',', 1);
	// 	$amount = $x.substr($amount, 1);
	// } 
	

?>




<!DOCTYPE html>
<html>
<head>
	<title>Description page</title>
	<link rel="stylesheet" type="text/css" href="../icon/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/descriptionpage.css">
</head>
<body>

<!-- header -->
<?php

		include'storeheader.php';
		$_SESSION["propic"] = $picture;
?>


<?php
	$promotion='<span class="description-hotdeal promted">Promoted</span>';
	$hotdeal2 = '<span class="description-hotdeal promted">Hot Deal</span>';
?>
<?php
	$location2='<i class="fa-solid fa-location-dot description-icon"></i><span class"description-hotdeal"> Warri,Delta</span>'
?>



<div class="description-main-cont">

	<div class="description-first-sect">

		<div class="img-main-div"> 
			<a href="viewproduct.php">
				<img id="descriptionpage-img" src="<?= $picture ?>">
			</a>
			<div class="img-main-div2">
				<span class="arrow"><i class="fa-solid fa-angle-left"></i></span>
				<div class="img-div">
					<img class ="descriptionpage-img2 des-image" src="<?= $picture ?>">
					<img class ="descriptionpage-img3 des-image" src="<?= $picture ?>">
					<img class ="descriptionpage-img4 des-image" src="<?= $picture ?>">
					<img class ="descriptionpage-img4 des-image" src="<?= $picture ?>">
				</div>
				<span class="arrow"><i class="fa-solid fa-angle-right"></i></span>
			</div>

			<div class="descpt-cont">
				<div>
					<p>Description <br><hr></p>
					<p class="descrpt-txt" style="text-align: justify; font-size: 12px">
			Lorem ipsum dolor sit amet, consectetur wwore et dolore magna aliqua. Ut enim ad minim veniamvLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do
					</p>
				</div>
			</div>

		</div>
		<div class="description-first-sect-sub1">
			<h2 id="description-title"><!-- German Shepherd --> <?php echo $name?><span style="float: right;cursor: pointer;"><img style="width: 15px" src="../img/like.png"></span></h2>
			<div class="description-first-sect-sub2" style="width:66%;">
				<?php
					// $hotdeal='<span class="description-hotdeal">'.$dealcat.'</span>';
					// echo $hotdeal;
					echo '<span class="description-hotdeal">'.$dealcat.'</span>';
				?>
				<span><i class="fa-regular fa-clock description-icon"></i> Posted <?php echo $postTime; ?> hours </span>

				<?php
					$location ='<span><i class="fa-solid fa-location-dot description-icon"></i> Ikeja,Lagos</span>';
					echo '<span><i class="fa-solid fa-location-dot description-icon"></i>'.$loc.'</span>';

				?>
			</div>
			<hr>
			<div class="description-first-sect-sub2" style="width:  50%">
				<span>
					<span>Male <br></span>
					<span class="shades">Gender</span>
				</span>
				<span>
					<span>German Shepherd <br></span>
					<span class="shades">Breed</span>
				</span>
			</div>

			<div class="description-first-sect-sub2" style="width: 39%">
				<span>
					<span><!-- Pedigree --><?php echo $breedType?> <br></span>
					<span class="shades">Breed Type</span>
				</span>
				<span class="age">
					<span><?php echo $age ?><br></span>
					<span class="shades">Age</span>
				</span>
			</div>

			<hr>

			<div class="description-first-sect-sub2">
				<div><span class="description-price">N</span><span class="description-price sum-total"><?php echo $amount?></span></div>
				<span class="quant-cont">
					<span style="margin-right: 20px">Quantity</span>
					<button class="plusminus" onclick="sub()">-</button>
					<span><p class="qnty">1</p></span>
					<button class="plusminus" onclick="add()">+</button>
				</span>
			</div>

			<hr>

			<div class="description-first-sect-sub2 mkOffer-sellerContact">
				<span onclick='showbtn("offer-main-cover");showbtn("offer-main")' class="description-offer">Make an Offer</span>
				<a href="tel:08165218003">
					<span onclick='showbtn("offer-main-cover");showbtn("contact-seller")' class="description-offer">Contact Seller</span>
				</a>
			</div>

			<p class="buynow-header">Buy Now</p>
		</div>
	</div>
	
	<div class="description-second-sect">

<!-- Similar products -->

	<hr style="margin-top: 70px;margin-bottom: 50px">
	<div style="width: 100%;margin: auto;">
		<h4>Similar Products</h4>
		<div class="description-second-sect-sub">
			
			<div class="description-second-sect-two">
				<img class="similar-img" src="../img/img26.png">
				<div class="description-second-sect-three">
					<h5>1 year 3months Female Halfbred <span class="sim-price">N400,000</span></h5>
					<p class="short-desc">Fullbreed male and female also available for sale</p>
					<div class="loc">


						<span>
							<?php
								echo $location;
							?>
						</span>

						<span>
							<?php
								echo $hotdeal2;
							?>
						</span>
					</div>
				</div>
			</div>


			<!-- delete from her -->
			<div class="description-second-sect-two">
				<img class="similar-img" src="../img/img25.png">
				<div class="description-second-sect-three">
					<h5>1 year 3months Female Halfbred <span class="sim-price">N400,000</span></h5>
					<p class="short-desc">Fullbreed male and female also available for sale</p>
					<div class="loc">


						<span>
							<?php
								echo $location2;
							?>
						</span>

						<span>
							<?php
								echo $promotion;
							?>
						</span>
					</div>
				</div>
			</div>

		</div>
		</div>
	
		</div>

	</div>

<!-- Make an offer -->

	<div class="offer-main-cover"></div>

	<div class="offer-main">
		<span onclick='hidebtn("offer-main-cover");hidebtn("offer-main")' class="closebtn"><img class="closebttn" src="../img/closebutton.png"></span>
		<h3>Make an offer</h3>
		<div style="margin: 20px 0">
		<span onclick="offerAmount1()" class="price-range price-range1">65,000</span>
		<span onclick="offerAmount2()" class="price-range price-range2">60,000</span>
		<span onclick="offerAmount3()" class="price-range price-range3">55,000</span>
	</div>
		<form>
		<input onkeyup="offerinput()" class="offer-input" type="text" name="" placeholder="Enter your price" required><br>
		<button class="offer-button" type="submit">Send</button>
		</form>
	</div>


	<!-- contact seller -->

	<div class="offer-main-cover"></div>

	<div class="contact-seller">
	<span onclick='hidebtn("offer-main-cover");hidebtn("contact-seller")' class="closebtn"><img class="closebttn" src="../img/closebutton.png"></span>
	<div class="seller-dv1">
		<img class="seller-photo" src="../img/profile1.png">
		<div class="online"></div>
		<div class="seller-dv2">
			<h3 id="seller-name">Matthew</h3>
			<p class="lastseenpar" style="font-size: 9px"><span class="lastseen seller-dv3">Last seen 21 hours</span><span class="seller-dv3">6months on Doghub</span></p>
		</div>
	</div>
	
	<form class="seller-cont-form">
		<button class="mkcall"><i class="fa-solid fa-phone callmssg"></i> Make a call</button><br>
		<button class="sndmssg" type="submit"><i class="fa-solid fa-envelope-open-text callmssg"></i>Send Message</button>
	</form>

	
	
</div>

<!-- <div class="descpt-cont">
	<div>
		<p>Description <br><hr></p>
		<p class="descrpt-txt" style="text-align: justify; font-size: 12px">
			Lorem ipsum dolor sit amet, consectetur wwore et dolore magna aliqua. Ut enim ad minim veniamvLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do
		</p>
	</div>
	
</div> -->

<!-- footer -->

<?php

		include'footer.php';
?>

<script>
	qnty = document.querySelector(".qnty").innerHTML;
	qnty = Number(qnty);
	var num = 1;
	var countNum = 0;
	var descriptionPrice = document.querySelector(".sum-total").innerHTML;
	// var sumTotal = Number(descriptionPrice);
	var sumTotal =descriptionPrice;
	function addSub(){
		var x = document.querySelector(".qnty").innerHTML=qnty+countNum;
		var gsum = eval(sumTotal*num);
		document.querySelector(".sum-total").innerHTML= gsum;
		// document.querySelector(".sum-total").innerHTML= eval(sumTotal*num);
		var i = document.querySelector(".sum-total").innerHTML;
	}
	function add(){
		num++;
		countNum++;
		addSub();
	}
	function sub(){
		if (num >1){
			num--;
			countNum--;
			addSub();
		}
	}
	function offerinput(){
		document.querySelector(".offer-button").style.opacity='1';
	}

	function offerAmount1(){
		x = document.querySelector(".price-range1").innerHTML;
		document.querySelector(".offer-input").value='N'+x;
		document.querySelector(".offer-button").style.opacity='1';
	}

	function offerAmount2(){
		x = document.querySelector(".price-range2").innerHTML;
		document.querySelector(".offer-input").value='N'+x;
		document.querySelector(".offer-button").style.opacity='1';
	}

	function offerAmount3(){
		x = document.querySelector(".price-range3").innerHTML;
		document.querySelector(".offer-input").value='N'+x;
		document.querySelector(".offer-button").style.opacity='1';
	}

</script>
<script src="../javascript/hideandshowbtn.js"></script>
</body>
</html>