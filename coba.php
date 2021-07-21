<!DOCTYPE html>
<html>
<head>
	<title>Bonus PBP_D</title>
</head>
<body>

	<?php
	echo "<table border=0 >";
	for ($i = 1; $i <= 10; $i++ ) {    
		echo "<tr >";
		$style="background:red;color:black";
		if($i%2==0)      
			$style="background:green;color:white";
		echo "<td style=$style>".$i."</td>";
		for ( $j = 2; $j <= 10; $j++ ) {
			$val = ($i * $j);
			$style="background:red;color:black";
			if($val%2==0)      
				$style="background:green;color:white";
			echo "<td style=$style>".$val."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	?>

</body>
</html>