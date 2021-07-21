<?php

session_start();
session_destroy();

echo '<h1> Loging out ... </h1>';
header("Refresh: 2; url=login.php");

?>