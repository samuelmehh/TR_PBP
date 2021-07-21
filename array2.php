<!DOCTYPE html>
<html>
<head>
	<title>Array2</title>
</head>
<body>
	<?php
	$rating= array("Nasi Uduk" =>4.5,"Gudeg"=> 4.6,"Ketoprak"=>4.4 );

	$rating["Nasi Uduk"]=4.5;
	$rating["Gudeg"]=4.6;
	$rating["Ketoprak"]=4.4;

	#cara aksesnya

	echo "Rating Makana Fav : ".$rating["Ketoprak"]."<br>";

	foreach ($rating as $key => $value) {
		echo "Rating ".$key." Adalah : ".$value."<br>";
	}

	foreach ($rating as $value) {
		echo "Rating Makana : ".$value."<br>";
	}
 
	?>

</body>
</html>