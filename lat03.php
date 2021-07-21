<!DOCTYPE html>
<html>
<head>
	<title>Latihan 03</title>
</head>
<body>

<?php

//Defining function

function whatIsToday()
{
	echo "Today is".date('1', mktime());
}

//Calling function
whatIsToday();

echo "<br>Function with parameters";

function getSum($num1, $num2){
	$sum=$num1+$num2;
	echo "<br>Sum of the two numbers $num1 and $num2 is : $sum";


}

getSum(10,20);

echo "<br>";

function customFont($font, $size=1.5){
	echo "<p style=\"font-family: $font; font-size: {$size}em;\"> Hello, Guyss!</p>";
}

customFont("Arial",2);
customFont("Times",3);
customFont("Courier");

echo "<br>";

function penjumlahan($angka1, $angka2){
	$total=$angka1+$angka2;
	return $total;
}

echo penjumlahan(10,20);

echo "<br>";

function divideNumbers($dividend, $divisor){
	$quotient=$dividend/$divisor;
	$array=array($dividend, $divisor,$quotient);
	return $array;
}

list($dividend, $divisor, $quotient)= divideNumbers(10,2);

echo $dividend."<br>";
echo $divisor."<br>";
echo $quotient."<br><br>";

function selfMultiply (&$number){
	$number *= $number;
	return $number;
}

$mynum = 5;
echo $mynum."<br>";

selfMultiply($mynum);
echo $mynum."<br>";

function test(){

	$greet = "Hello World!";
	echo '<p>$greet inside function is : '.$greet.'</p>';
}

echo "<br>";
test();

//echo "<p>$greet inside function is : '.$greet.'</p>";

$salam="Hi guyss";

function coba(){
	echo '<p> $salam inside the function is : '.$salam
	.'</p>';
}
//coba();

echo '<p> $salam outside the function is: '.$salam.'</p>';

$greet="Hai Dunia!";

function cek(){

	global $greet;
	echo '<p> $greet inside function is: '.$greet.'</p>';
}

cek();
echo '<p> $greet outside of function is : '.$greet.'</p>';

$greet="Goodbye";

cek();
echo '<p> $greet outside of function is : '.$greet.'</p>';

function printValue($arr){
	global $count;
	global $items;

	//Check input is an array
	if(!is_array($arr)){
		die("Error: Input is not an array");
	}

	/*
	Loop through array, if value is itself and array recurively call the function, else add the value found to the output items array, and increment counter by 1 for each value found
	*/

	foreach ($arr as $a) {
		if (is_array($a)) {
			printValue($a);
		} else{
			$items[]=$a;
			$count++;
		}
	}

	return array('total'=> $count, 'value' =>$items);
}

//Defined nested array

$species= array(
		"birds"=> array(
				"Eagle",
				"Parrot",
				"Swan"),
		"mamal"=>array(
				"Human",
				"cat"=>array(
						"Lion",
						"Tiger",
						"Jaguar"),
				"elephent",
				"Monkey"),
		"reptiles"=>array(
				"snake"=>array(
						"Cobra"=>array(
								"King Cobra", 
								"Egyptian cobra"),
						"Viper",
						"Annaconda"),
				"Crocodile",
				"Dinosaur"=>array(
							"T-rex",
							"Alamosaurus")
							)
			);

$result=printValue($species);
echo $result['total'].'value(s) found : ';
echo implode(' , ', $result['value']);
?>


</body>
</html>