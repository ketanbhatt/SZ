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

	</head>

	<body>

		<!--Header begins-->
		<header>
				<div class = "header-nav">

			<div class="blue-bar">
				<div class = "container">
					<div class = "ham"> <img src="img/hamburger.png"> </div>
					<div class = "search-ham">
						<input class = "search-box" type = "text" name = "Search"/>
						<button class = "search-button">Search</button>
					</div>
				</div>
			</div>
			<div class = "container">
				<div class="header-col-1">
					<div class = "logo">
						<img src = "img/logo.png " alt="This is the logo" />
					</div>
				</div>
				<div class="header-col-2">
					<div class="search">
						<input class = "search-box" type = "text" name = "Search"/>
						<button class = "search-button">Search</button>
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
		</div>			
		<div style="clear:both;"></div>
		</header>
		<!--Header Ends-->

<?php 
		if($pageName != "SupplyZone | Contact Us"){
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

							include 'form.php';
							
					} else {
?>
					
					<button type = "Read More Button"> Read More </Button>
<?php
					}}
?>

				</div>
			</div>
		</div>
		<!--Hero area ends-->
		
