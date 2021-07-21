<!DOCTYPE html>
<html>
<head>
	<title>Latihan PHP 2</title>
</head>
<body>

<?php

$color1="Red";
$color2="Green";
$color3="Blue";

echo $color1;
echo "<br>";

echo $color2.'<br>';
echo $color3.'<br>';


$colors = array("Purple","Black","White");

//printing array structure:

rsort($colors);
print_r($colors);
echo '<br>';

$colorss[0]="Black";
$colorss[1]="Yellow";
$colorss[2]="Orange";

sort($colorss);
print_r($colorss);

$ages=array("Peter"=>29, "Clark"=>32, "Jhon"=>28);

echo "<br>";
asort($ages);
//asort() mengurutkan array berdasarkan nilai;
print_r($ages);

$usia["Peter"]="22";
$usia["Jhon"]="32";
$usia["Mehh"]="50";
$usia["Brirght"]="20";

echo "<br>";
//arsort($usia);
//arsort() mengurutkan array berdasarkan nilai tetapi terbalik;
ksort($usia);
//ksort() mengurutkan array berdasarkan key
print_r($usia);

$contacts = array(
		array(
			"name"=> "Petter parker",
			"email"=> "peterparker@gmail.com",
			),
		array(

			"name"=>"Samuel Nugraha",
			"email"=>"samnug@gmail.com",
			),
		array(
			"name"=>"Bright Vachirawit",
			"email"=>"bgwin@gmail.com",
		)

			);

echo "<br>Peter Parker's Email-id is : ". $contacts[0]["email"];

$cities = array("London", "Paris", "New York");

echo "<br>";
//krsort($cities);
print_r($cities);
echo "<br>";

var_dump($cities);

?>

</body>
</html>