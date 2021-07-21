<?php
echo "Hello Guyss";
echo "<h1> My Name </h1>";
echo '<b style="color:green;">"My Age</b>';

$nama ="Samuel Nugraha";
$upah_awal= 10000000;
$upah_akhir=1.5 * $upah_awal;
$ipk = 3.92;
$nilai_favorit = 'AB';

echo '<div> Nama : '.$nama.'</div>';
echo '
		<div> Upah Awal : '.$upah_awal.'</div>
		<div> Upah Akhir : '.$upah_akhir.'</div>
		<div> IPK : '.$ipk.'</div>
		<div> Nilai Favorite : '.$nilai_favorit.'</div>
		
		';

$nilai=76;
if($nilai>=85){
	$huruf="A";
} else if($nilai>=75){
	$huruf="AB";
}else{
	$huruf="BC";
}

echo 'Nilai'.$nilai.'= '.$huruf;

$nilai2=88;
switch ($nilai2) {
	case $nilai2 >= 85:
		$huruf="A";
		break;
	case $nilai2 >=75:
		$huruf ="AB";
		break;
	default:
		$huruf="BC";
		break;
}

echo '<div>Nilai'.$nilai2.'= '.$huruf.'</div>';

for ($baris=0; $baris <5 ; $baris++) { 
	for ($kolom=0; $kolom <3 ; $kolom++) { 
		echo '<div> Ini adalah baris ke-'.$baris.'kolom ke-'.$kolom.'</div>';
	}
}

$baris=0;
while ($baris <= 3) {
	$kolom=0;
	while ($kolom<=3) {
		echo '<div> Ini adalah baris while ke-'.$baris.' kolom ke-'.$kolom.'</div>';
		$kolom++;
	}
	$baris++;
}

$mobil= array('BMW','Lamborgini','Honda');
foreach ($mobil as $isi) {
	echo $isi.'<br>';
}

echo '<br>';

$motor=array();
$motor['Honda']['CC']=200;
$motor['Honda']['Harga']=25000000;
$motor['Ninja']['CC']=250;
$motor['Ninja']['Harga']=45000000;
$motor['BMW']['CC']=1000;
$motor['BMW']['Harga']=1150000000;
foreach ($motor as $key => $value) {
	echo 'Motor '.$key.' memiliki CC '.$value['CC'].' dengan Harga '.number_format($value['Harga']).'<br>';
}

?>