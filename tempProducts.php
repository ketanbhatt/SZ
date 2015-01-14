<html>
<head>
	<title>Products</title>
</head>
<body>
	<h1>Products</h1>

	<?php 
		require 'inc\categories.php';
	?>

	<table border=10px>

	<?php	
		foreach($categories as $id => $category){
	?>
			<tr>
				<td><img src="<?php echo $category["img"] ?>"></td>
				<td><?php echo "<a href=\"product.php?id=$id\">$category[name]</a>"?></td>
				<td><?php echo $category["desc"] ?></td>
			</tr>

	<?php 	} ?>
	</table>
</body>
</html>

