<?php
	session_start();

	error_reporting(-1);
	ini_set('display_errors', 1);

	$configdb = array();
	$configdb['db']="db_mahasiswa_672018053";
	$configdb['host']="localhost:8080";
	$configdb['user']="root";
	$configdb['pass']="";

	$con = mysqli_connect($configdb['host'], $configdb['user'], $configdb['pass'], $configdb['db']);
	if(mysqli_connect_error()){
		die("Failed connect db : ". mysqli_connect_error());
	}

?>