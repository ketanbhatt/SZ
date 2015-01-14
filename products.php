<?php 
		$pageName = "SupplyZone | Products";
		require 'inc/header.php';
?>
	
	<section class="products-page">
	<div style="clear:both;"></div>	
	<!--Products Listing Begins-->
	<div class="container">
		<h2>Products</h2>
		<ul class="products-list">

<?php	
		require 'inc\categories.php';
		foreach($categories as $id => $category){
?>
			<li>
				<div class="product-col-1" style="background: url(<?php echo $category["img"]; ?>)">
		<!--			<img src="<?php echo $category["img"]; ?>">  -->
				</div>
				<div class="product-col-2">
					<h3><?php echo "<a href=\"product.php?id=$id\">$category[name]</a>"; ?></h3>
					<p><?php echo $category["desc-short"] ?></p>
				</div>
			</li>
<?php 	
		} 
?>
	<div style="clear:both;"></div>
	</div>
	<!--Product Listing Ends-->
	</section>
<?php 
	
		require 'inc/footer.php';
?>



