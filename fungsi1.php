<!DOCTYPE html>
<html>
<head>
	<title>Fungsi 1</title>
</head>
<body>
	<?php
	function helloWorld(){
		echo "Hello World ! <br>";
	}

	helloWorld();

	function tambah($angka1, $angka2){
		echo $angka1+$angka2;
		echo "<br>";
	}

	tambah(99,100);

	function tambah2($angka3, $angka4){
		return $angka3+$angka4;

	}

	$hasil= tambah2(50,50);
	echo $hasil;

	?>

</body>
</html>