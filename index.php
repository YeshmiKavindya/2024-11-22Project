<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		li:hover{
			color: red;
			background-color: orange;
		}
</style>
</head>
<body>
	<?php
	$product = array(
		"Electronics" => array(
			"SmartPhone" => array(
				"Apple" => array(
					"iPhone 13",
					"iPhone 12 Pro",
					"iPhone SE"),
			"Samsung" => array(
				"Galaxy S21",
				"Galaxy Note 20",
				"Galaxy A52"
			)
		),
			"Laptop" => array(
				"Dell" => array(
					"xPs 13",
					"Inspiron 15",
				),
				"HP" => array(
					"HP Spectre x360",
					"HP Pavilion" => array(
						"Pavilion 15",
						"Pavilion x360",
						"Pavilion Gaming",
					)
				)
			)
		),
			"Clothing" => array(
				"Men" => array(
					"T-Shirt",
					"Jeans",
					"Suits",
				),
				"Women" => array(
					"Dresses",
					"Shoes",
					"Handbag",
				)
			),
			"Home & kitchen" => array(
				"Furniture" => array(
				"Sofas",
				"Tables",
				"Chairs",
				),
				"Appliances" => array(
				"Refrigerators",
				"Microwaves",
				"Washing Machine",
				)
			)
		
	);

	function printArray($arr){
		foreach($arr as $key => $item){
			if(is_array($item)){
				echo "<ul>";
				echo "<li>".$key. "</li>";
				echo "<ul>";
				printArray($item);
				echo "</ul>";
				echo "</ul>";
			}
			else{
				echo "<li>".$item."</li>";
			}
		}
	}
	printArray($product);
	?>

</body>
</html>