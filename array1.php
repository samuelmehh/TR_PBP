<!DOCTYPE html>
<html>
<head>
	<title>Latihan Array 1</title>
</head>
<body>


<?php 
#cara 1
#$makanan = array("Nasi Uduk","Gudeg","Ketoprak");

#cara2
//$makanan[0]="Nasi Goreng";
//$makanan[1]="Sop Buntut";
//$makanan[2]="Ikan Bakar";

#cara3
$makanan[]="Ayam Goreng";
$makanan[]="CapCay";
$makanan[]="Gurame Bakar";



echo 'Makanan Favorit saya adalah '.$makanan[2].'<br>';

for ($i = 0; $i  <sizeof($makanan) ; $i++) { 
	echo "Makanan Favorit Saya Adalah : ".$makanan[$i].'<br>';
}

foreach ($makanan as $key => $value) {

	echo "Makanan Fav 2 Saya : ".$value.'<br>';
}

foreach ($makanan as $key => $value) {
	
	echo "Makanan 3 Fav Saya : ".$value.'<br>';
}

 ?>

</body>
</html>