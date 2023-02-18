<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../icon/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/postad.css">
	<script src="../javascript/jquery-3.6.0.min.js"></script>
</head>
<body>
<header>
	<?php 
		include 'storeheader.php';
	?>
</header>

<div class="postadd-cont">
	<h1 class="bottmargin" style="text-align: center; padding-top: 15px">Post ad <span style="float: right">clear</span></h1>
	<div class="adstep-cont bottmargin">
		<span>Step 1: About Ad</span><span class="step2">Step 2: Ad Details</span>
	</div>
	<div onclick="showSelectCat()" class="category bottmargin" style="position: relative;">
		<span class="cat-text">Category*</span>
		<span><span class="cat-val">Category*</span><span i class="fa-solid fa-angle-down" style="float:right"></span></span></span>
	</div>
	
		<div style="position: relative;">
			<div class="uploadbtn1">
				<h4>Add photo</h4>
				<h5 class="bottmargin">First picture is your title picture</h5>
				<input style="opacity: 0;position: absolute;top: 67px;left: -10px;font-size: 65px;width: 86px;cursor: pointer;" type="file" name="" disabled="disabled">
				<span><h1 class="uploadbtn bottmargin">+</h1></span>
				<h6 class="bottmargin">Each picture must not exceed 5 Mb <br>Supported formats are *.jpg and *.png</h6>
			</div>


			<!-- form begining -->
			<div class="form-cont">

				<form>

					<h4>Add photo</h4>
					<h5 class="bottmargin">First picture is your title picture</h5>
					<input style="opacity: 0;position: absolute;top: 67px;left: -10px;font-size: 65px;width: 86px;cursor: pointer;" type="file" name="" multiple>
					<span><h1 class="uploadbtn bottmargin">+</h1></span>
					<h6 class="bottmargin">Each picture must not exceed 5 Mb <br>Supported formats are *.jpg and *.png</h6>





					<div onclick="youtube('youtube3','youtube1')" class="formgen youtube">
						<span class="youtube-title youtube3">Link to YouTube video</span>
						<input class="youtube2 youtube1" type="text" name="">
					</div>
					<!-- Name of product -->
					<div onclick="youtube('namePro1','namePro')" class="formgen youtube">
						<span class="youtube-title namePro1">Name of Product*</span>
						<input class="youtube2 namePro" type="text" name="">
					</div>

					<!-- locaton -->
					<!-- <div>
						<input type="tex" name="" placeholder="Enter locaton(state and city only)">
					</div> -->

					<!-- dog form -->
					<div class="dogform-cont-main">
						<div>
							<div style="margin-bottom: 25px" class="dogform-cont">
							<span onclick="gender('gender','gender2')" class="gender-title gender">Gender*</span>
							<select class="genSelect gender2" style="width: 100%;border: none;outline: none; display: none; font-size: 14px">
								<option>Select</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						
							</div>

							<div class="dogform-cont">
							<span onclick="gender('breed','breed2')" class="gender-title breed">Breed*</span>
							<select id="breedSelect" class="genSelect breed2" style="width: 100%;border: none;outline	: none; display: none; font-size: 14px">
								<option>Select</option>
								<option>German Shepherd</option>
								<option>Bullmastiff</option>
								<option>Cane corso</option>
								<option>Rottweiler</option>
								<option>Other</option>
							</select>
							<script type="text/javascript">
							if($("#breedSelect").val()=="Other"){
								breedprompt();
							}
							</script>
						
							</div>
						</div>
						<!-- dog form sec div -->
						<div class="dogSec-div">
					<!-- Breed type -->
							<div class="dogform-cont">
							<span onclick="gender('breedtype','breedtype2')" class="gender-title breedtype">Breed Type*</span>
							<select class="genSelect breedtype2" style="width: 100%;border: none;outline: none; display: none; font-size: 14px">
								<option>Select</option>
								<option>Mixed Breed</option>
								<option>Pure Breed</option>
							</select>
						
							</div>

					<!-- Age -->
							<div onclick="youtube('age1','age')" class="formgen youtube">
							<span class="youtube-title age1">Age*</span>
							<input class="youtube2 age" type="text" name="" required="">
							</div>
						</div>

					</div>
					<!-- Description -->
					<div onclick="youtube('descpt','descpt1')" class="formgen youtube">
						<div class="descpt-count-cont"><span style="font-size: 10px" class="count">0</span>/200</div>
						<span class="youtube-title descpt">Description*</span>
						<!-- <input class="youtube2" type="text" name=""> -->
						<textarea onkeyup="descrptCount()" class="descpt1" style="width: 381px;height: 136px; border: none;outline: none;resize: none;" required="" maxlength="200"></textarea>
					</div>

					<!-- price -->
					<div onclick="youtube('price1','price')" class="formgen youtube">
						<span class="youtube-title price1">Price*</span>
						<input class="youtube2 price" type="text" name="">
					</div>

					<div onclick="youtube('phone1','phone')" class="formgen youtube">
						<span class="youtube-title phone1">Phone Number</span>
						<input class="youtube2 phone" type="Number" name="">
					</div>
					<div style="width: 100%; display: flex;justify-content: center;">
						<button class="postbtn" type="submit">Post</button>
					</div>
					
				</form>
				
			</div>

			


			<div class="post">
				<div class="post2">
					<h4 id="warning-post">Please select category to post</h4>
					<button class="postbtn" type="submit" disabled="disabled">Post</button>
				</div>
			</div>
		</div>

	</div>


</div>

<div class="cat-select-main">
	<div class="first-sec">
		<div class="first-sec-subcont">
			<span class="back-btn"><i class="fa-solid fa-angle-left"></i></span>
			<input type="text" name="search" placeholder="Find category...">
		</div>
	</div>

	<div class="second-sec">
		<div class="second-sec scnd-sec">
			<span class="pro-cat-cont" onclick="hidecat(),showdog('dog')">Animal & pets <span style="float: right;"><i class="fa-solid fa-angle-right"></i></span></span></span>
			<span class="pro-cat-cont" onclick="hidecat(),showdog('feedacc')">Feeds & Accessories <span style="float: right;"><i class="fa-solid fa-angle-right"></i></span></span></span>
			<span class="pro-cat-cont" onclick="hidecat(),showdog('vet-serv')">Vet service <span style="float: right;"><i class="fa-solid fa-angle-right"></i></span></span></span>
			<span class="pro-cat-cont" style="border-bottom: none;">Others <span style="float: right;" onclick="hidecat()"><i class="fa-solid fa-angle-right"></i></span></span></span>
		</div>
<!-- ------------------------------------------------------------------ -->
		<span class="pro-cat-cont secnd-cat dog" onclick="addcat('dog')">Dog</span>
		<div class="feedacc-cont">
			<span class="pro-cat-cont secnd-cat feedacc feed" onclick="addcat('feed')">Feeds</span>
			<span class="pro-cat-cont secnd-cat feedacc acc" onclick="addcat('acc')">Accessories</span>
		</div>
		<span class="pro-cat-cont secnd-cat vet-serv" onclick="addcat('vet-serv')">Vet service</span>
	</div>
</div>

</body>
<script src="../javascript/jquery-3.6.0.min.js"></script>
<script src="../javascript/post.js"></script>
</html>