<!DOCTYPE html>
<html>
<head>
    <title>Output Kuis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #gray;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #black;
        }
    </style>

</head>
</head>
<body>
	<div class="container" style="margin-top:50px">
<?php
session_start();
session_destroy();
echo '<h1>Loging out ... </h1>';
header("Refresh: 1; url=login2.php");
?>
</div>
</body>

</html>