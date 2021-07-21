<?php
    $usernamelogin = '672018053';
    $passwordlogin = 'admin123';

    session_start();

    $username = $_POST['nim'];
    $password = $_POST['pass'];

    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index2.php");
    } 
    else {
        header("Location: login2.php");
   }
?>