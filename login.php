<?php
require_once "function.php";

if(isset($_SESSION['user'])) {
	header("Location: index.php");
} else {
	if(isset($_POST['login'])) {
		$nim = $_POST['nim'];
		$pass= $_POST['pass'];

		if(check_login($nim, $pass)) {
				$_SESSION['user'] = $nim;
				$_SESSION['data'] = select_data($nim);
				echo '<h1> Sukses login!</h1>';
				header("Refresh: 2; url=index.php");
			} else {
				echo '<h1> Password salah !</h1>';
			}
	}

	echo '
		<from method="post">
			<table>
				<tr>
					<th width=5% nowrap>NIM</th>
					<td><input type="text" name="nim" required></td>
				</tr>
				<tr>
					<th width=5% nowrap>Password</th>
					<td><input type="password" name="pass" required></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="login" value="LOGIN"></td>
				</tr>
			</table>
		</form>
		';
	}
?>