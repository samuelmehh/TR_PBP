
<!DOCTYPE html>
<html>
<head>
	<title>Contoh 2</title>
</head>
<body>

	<form method="post" action="kuis2a.php">
		<div>
			<input type="number" name="angka1" required>
			<select name="proses">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
				
			</select>
			<input type="number" name="angka2" required>
		</div>
		<div><input type="submit" name="hitung" value="HITUNG"></div>
		
	</form>

</body>
</html>