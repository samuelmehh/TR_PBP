<!DOCTYPE html>
<html>
<head>
	<title>Bonus PBP_D_672018053</title>
</head>
<body>
	<table>
	<?php
	echo "<tr>";
	echo "<td>";
    for($no=1;$no<=25;$no++){
    	
        if($no % 2 == 0){
            echo "<font style='color:black;'>".$no."</font><br>";
        }
        else{
            echo "<font style='color:red;'> <b>".$no."</b></font><br>";
        }
    }
    echo "</td>";
    echo "<td>";
    for($no=26;$no<=50;$no++){
    	
        if($no % 2 == 0){

            echo "<font style='color:black;'>".$no."</font><br>";
        }
        else{
            echo "<font style='color:blue;'> <b>".$no."</b></font><br>";
        }
    }
    echo "</td>";
    echo "</tr>";

	?>
</table>
</body>
</html>