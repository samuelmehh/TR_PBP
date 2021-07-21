<!DOCTYPE html>
<html>
<head>
	<title>Fungsi 2</title>
</head>
<body>
	<?php

/*	
	$nama="Dimas";
	function namaSaya(){

		echo "Nama Saya : $nama";
	}

	namaSaya();*/

	#contoh2

	$nama="Samuel";

	function namaSaya($x){
		echo "nama saya : $x <br>";
	}

	namaSaya($nama);

	$nama="My name is";
	function myName(){
		global $nama;
		echo "Nama saya : $nama";
	}

	myName();
	$nama="Gak tau";

	$test=array(32, "Hello", 32.5, array("red", "green","blue"));
	echo "<pre>";
	print_r($test);
	echo "</pre>";

	$test=array(32, "Hello", 32.5, array("red", "green","blue"));
	echo "<pre>";
	var_dump($test);
	echo "</pre>";


	?>

</body>
</html>