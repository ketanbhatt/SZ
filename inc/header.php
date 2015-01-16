<!DOCTYPE HTML>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<title><?php echo "$pageName" ; ?></title>
		<link rel="stylesheet" type="text/css" href="styles/normalize.css">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/responsiveAboutContact.css">
		<link rel="stylesheet" type="text/css" href="styles/responsiveProducts.css">
		<link rel="stylesheet" type="text/css" href="styles/responsiveForm.css">
		<link rel="stylesheet" type="text/css" href="styles/responsiveFooter.css">
		<!--Font style-->
		<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src = "app.js"></script>
	</head>

	<body>

		<!--Header begins-->

		<div class="blue-bar">

				<div class = "container">
					<div class = "ham"> <img src="img/hamburger.png"> </div> <div class = "ham-press">  <img src="img/ham-press.png">  </div>
					
					<button class = "search-button-icon"><img src = "img/search-icon.png"/></button>
					<div class = "search-ham">
						<form method="GET" action="results.php">
							<input class = "search-box" type = "text" name = "q" required="true"/>
							<button type="submit" class = "search-button"><span>Search</span></button>
						</form>
					</div>
				</div>
			</div>
				<div class = "nav-ele">
					<nav>
						<ul>
							<li> <a href = "index.php">HOME</a></li>
							<li> <a href = "products.php">PRODUCTS</a></li>
							<li> <a href = "about.php">ABOUT</a></li>
							<li> <a href = "contact.php">CONTACT</a></li>
						</ul>
					</nav>
					</div>
					<div class = "search-drop-menu">
						<div class = "center-div">
							<form method="GET" action="results.php">
					 			<input class = "search-drop" type = "text" name = "q" required="true"/> 
								<button type="submit" class = "button" class = "search-button-2"> Search</button>
							</form>
						</div>
					</div>
		<header>
				<div class = "header-nav">

			
			<div class = "container">

				<div class="header-col-1">
					<div class = "logo">
						<img src = "img/logo.png " alt="This is the logo" />
					</div>
				</div>
				<div class="header-col-2">
					<div class="search">
						<form method="GET" action="results.php">
					 		<input class = "search-box" type = "text" name = "q" required="true"/> 
							<button type="submit" class = "search-button"> Search</button>
						</form>
					</div>
					
					<nav>
						<ul>
							<li> <a href = "index.php">HOME</a></li>
							<li> <a href = "products.php">PRODUCTS</a></li>
							<li> <a href = "about.php">ABOUT</a></li>
							<li> <a href = "contact.php">CONTACT</a></li>
						</ul>
					</nav>
					
			</div>
		</div>			
		<div style="clear:both;"></div>
		</header>
		<!--Header Ends-->

<?php 
		if($pageName != "SupplyZone | Contact Us" AND substr($pageName, 0,6) != "Search"){
?>
		<!--Hero area begins-->
		<div class = "hero">
			<div class = "container">
				<!--Main Title-->
				<div class="hero-col-1">
					<h1> Main Title </h1>
						<!--Paragraph text-->
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Duis sed urna a tellus mollis hendrerit. Aliquam rhoncus 
						aliquet sapien, non pellentesque felis. 
					</p>
					<p>
						Cras justo libero, v
						iverra id odio in, vehicula ultricies massa. Curabitur diam tellus, 
						posuere et eleifend vehicula.
					</p>
				</div>


				<!-- Read more Button OR Form-->
				<div class="hero-col-2">

<?php 
					if($pageName != "SupplyZone | Home Page"){

						echo "<div id='form-hero'>";

							include 'form.php';

						echo "</div>";
							
					} else {
?>
					
					<button>Read More</Button>
<?php
					}}
?>

				</div>
			</div>
		</div>
		<!--Hero area ends-->
		
