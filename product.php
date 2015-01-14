<?php 
	require 'inc\items.php';

	if(isset($_GET["id"]) AND isset($items[$_GET["id"]])){

		if($_GET["id"] == "0"){

				foreach($items[$_GET["id"]] as $prod){

					echo "<h2>".$prod["name"]."</h2>";
					echo "<h3>".$prod["desc"]."</h3>";
					echo "<br>";
					echo "<br>";

				}
		}else{

			foreach($items[$_GET["id"]] as $prod){

					echo "<h3>".$prod["desc"]."</h3>";
					echo "<br>";
					echo "<br>";

				}

		}

	}else{

		header("Location:products.php");
		exit;
	}




?>