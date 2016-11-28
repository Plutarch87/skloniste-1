<?php 
isset($_SESSION['email']) ?: require '../app/bootstrap.php'; 

?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/admin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Stranica za Administratora</title>
</head>
<body>
<div class="container">
	<section class="header">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="../index.php">Muzicko Skloniste</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="#">Administratori</a></li> 
					<li><a href="profesori/index.php">Profesori</a></li>
			  		<li><a href="galerija/">Galerija</a></li>

				</ul>
				<ul class="nav navbar-nav navbar-right">					
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Profil</a></li>
							<li><a href="../app/logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</section>
