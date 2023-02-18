
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/viewprod.css">
</head>
<body>
	<?php 
		include 'storeheader.php'; 
		$pic = $_SESSION["propic"];
	?>
	
	<div class="viewprod-main">

			<?php

				echo"<img class='img-main' src='$pic'>";
				echo"<img class='img-main' src='$pic'>";
				echo"<img class='img-main' src='$pic'>";
			 ?>
	
	</div>
</body>
</html>




	


