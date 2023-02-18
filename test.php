<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		*{
			box-sizing: border-box;
		}
		.display{
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			
		}
		.image img{
			width: 400px;
		}
		div{
			font-family: sans-serif;
			font-size: 14px;
		}
		.contt{
			display: flex;
			cursor: pointer;
			margin: 10px;
			/*transform: scale(2)*/

		}
		
	</style>
</head>
<body>
	
	<div class="display">
		<?php
		$a='<div class="contt">
			<div class="image"><img src="img/im2.jpg"></div>
		<div>
			<div>Age: Amos
			</div>
			<div>Price: 200
			</div>
		</div>
		</div>';
	for($i=0;$i<1;$i++){
		echo $a;
	}

	?>
		
	</div>

	<div></div>

	<div class="Upload">
		<form>
		<input type="number" name="age" placeholder="enter age"><br><br>
		<label>Upload image </label><input type="file" name="dogimg" placeholder="enter image"><br><br>
		<input type="number" name="price" placeholder="enter price">
		<input type="submit" name="">
	</form>
	<?php 

		/**
		 * 
		 */
		class Animal{   
			var $name;
			var $eat = 'This name is eating';
			var $run;
		}

		$ani1 = new Animal;
		$ani1->name="Dog";
		echo $ani1->eat;
	?>
		
	</div>
	
</body>
</html>