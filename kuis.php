<!DOCTYPE html>
<html>
<head>
	<title>Kuis 3</title>
</head>
<body>
	<?php

	if (isset($_POST['username'])){
	echo '<h1> Welcome '.$_POST{'username'}.'</h1>';
}
	?>

<form method="post">

	<div><input type="text" name="username"></div>
	<div><input type="submit" value="Tombol"></div>
	
</form>

</body>
</html>


