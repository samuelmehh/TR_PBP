<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tugas_2_PBP_D_672018053</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-login {
		width: 320px;
		margin: 30px auto;
	}
	.modal-login .modal-content {
		border-radius: 1px;
		border: none;
	}
	.modal-login .modal-header {
        position: relative;
		justify-content: center;
        background: #f2f2f2;
	}
    .modal-login .modal-body {
        padding: 30px;
    }
    .modal-login .modal-footer {
        background: #f2f2f2;
    }
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
    .modal-login label {
        font-weight: normal;
        font-size: 13px;
    }
	.modal-login .form-control, .modal-login .btn {
		min-height: 38px;
		border-radius: 2px; 
	}
	.modal-login .hint-text {
		text-align: center;
	}
	.modal-login .close {
        position: absolute;
		top: 15px;
		right: 15px;
	}
    .modal-login .checkbox-inline {
        margin-top: 12px;
    }
    .modal-login input[type="checkbox"]{
        margin-top: 2px;
    }
	.modal-login .btn {
        min-width: 100px;
		background: #3498db;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #248bd0;
	}
	.modal-login .hint-text a {
		color: #999;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
</head>
<body>
<div class="text-center">
	<a href="#myModal" class="trigger-btn" data-toggle="modal">Click Untuk Login</a>
</div>

<?php
require_once "function.php";

if (isset($_SESSION['user'])) {
	header("Location: index2.php");
} else {
	if (isset($_POST['login'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		if(check_login($nim, $pass)) {
				$_SESSION['user'] = $nim;
				$_SESSION['data'] = select_data($nim);
				echo '<h1> Sukses login!</h1>';
				header("Refresh: 2; url=index2.php");
			} else {
				echo '<h1> Password salah !</h1>';
			}
	}
}
?>
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<form action="index2.php" method="post">
				<div class="modal-header">				
					<h4 class="modal-title">Login</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">				
					<div class="form-group">
						<label>NIM</label>
						<input type="text" name="user" class="form-control" required="required">
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Password</label>
							<a href="#" class="pull-right text-muted"><small>Forgot?</small></a>
						</div>
						
						<input type="password"  name="pass" class="form-control" required="required">
					</div>
				</div>
				<div class="modal-footer">
					<label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
					<input type="submit" class="btn btn-primary pull-right" value="Login">
				</div>
			</form>
		</div>
	</div>
</div>     
</body>
</html>                                		