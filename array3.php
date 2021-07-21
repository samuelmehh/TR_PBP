<!DOCTYPE html>
<html>
<head>
	<title>Array3</title>
</head>
<body>
	<?php

	$makanan=array(
			array(
				"nama"=>"Nasi Uduk",
				"rating"=>4.5,
			),
			array(
				"nama"=>"Gudeg",
				"rating"=>4.6,
			),
			array(
				"nama"=>"Ketoprak",
				"rating"=>4.4,
			),
					);

	$makanan[0]["nama"]="Nasi Uduk";
	$makanan[0]["rating"]=4.5;
	$makanan[1]["nama"]="Gudeg";
	$makanan[1]["rating"]=4.6;
	$makanan[2]["nama"]="Ketoprak";
	$makanan[2]["rating"]=4.4;

	#cara akses

	#cara1
	echo "Rating ".$makanan[2]["nama"]."Adalah : ".$makanan[2]["rating"]."<br>";
	#cara2
	for ($i=0; $i <sizeof($makanan) ; $i++) { 
		echo "Rating ".$makanan[$i]["nama"]."Adalah : ".$makanan[$i]["rating"]."<br>";
	}
	#cara3
	foreach ($makanan as $key => $value) {
		echo "Rating".$value["nama"]."Adalah : ".$value["rating"]."<br>";
	}

	?>

</body>
</html>