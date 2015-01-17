<?php 

	$pageName = "Product Information | ".$_GET["name"];
	require 'inc/header.php';
	require 'inc\items.php';

	if(isset($_GET["id"]) AND isset($items[$_GET["id"]])){

?>
	<div class="container" style="min-height:700px">

<?php

		echo "<h2>".$_GET["name"]."</h2>";

		if($_GET["id"] == "0"){

				foreach($items[$_GET["id"]] as $prod){

					echo "<h3>".$prod["name"]."</h3>";
					echo "<p>".$prod["desc"]."</p>";
					echo "<br>";
					echo "<br>";

				}
		}else{

			foreach($items[$_GET["id"]] as $prod){

					echo "<p>".$prod["desc"]."</p>";
					echo "<br>";
					echo "<br>";

				}

		}

	}else{

		header("Location:products.php");
		exit;
	}

?>

	</div>

<?php

	require 'inc/footer.php';

?>