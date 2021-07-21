<?php
require_once "function.php";

if(!isset($_SESSION['user'])){
	header("Location: login.php");
}else {
	echo '
		<div><a href="logout.php">Logout</a></div>
		<h1>Welcome, '.$_SESSION['data']['nama'].'</h1>
		<table>
			<tr>
				<th width="5%" nowrap>NIM</th>
				<td>'.$_SESSION['user'].'</td>
			</tr>
			<tr>
				<th width="5%" nowrap>IPK</th>
				<td>'.$_SESSION['data']['ipk'].'</td>
			</tr>
			<tr>
				<th width="5%" nowrap>Asal</th>
				<td>'.$_SESSION['data']['asal'].'</td>
			</tr>
		</table>
		';
}

?>