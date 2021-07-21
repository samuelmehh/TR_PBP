<?php

session_start();

if(isset($_SESSION['nama_lengkap'])){
	echo '<h1>Hello '.$_SESSION['nama_lengkap'].'</h1>';
} else{
	echo '<h1> Anda belum membuat session </h1>';
}
?>