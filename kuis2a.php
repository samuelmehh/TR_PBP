<?php
if(isset($_POST['hitung'])){
	$angka1=isset($_POST['angka1'])? $_POST['angka1']:0;
	$angka2=isset($_POST['angka2'])? $_POST['angka2']:0;
	$proses=isset($_POST['proses'])? $_POST['proses']: '+';
	if ($proses=="+") {
		$hasil= $angka1+$angka2;
	} else if ($proses=="-") {
		$hasil=$angka1-$angka2;
	}else if ($proses=="*") {
		$hasil=$angka1*$angka2;
	}else if ($proses=="/") {
		$hasil=$angka1/$angka2;
	}else {
		$proses="?";
		$hasil=0;
	}

	echo '<h1> hasil '.$angka1.' '.$proses.' '.$angka2.' = '.$hasil.'</h1>';
}
?>