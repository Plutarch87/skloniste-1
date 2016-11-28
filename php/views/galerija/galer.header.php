<?php require '../../app/bootstrap.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Galerija / Albumi</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/admin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

	a {
		text-decoration: none;
	}
	
	.header {
		color: #eee;
		background-color: #333;
	}

	.header h4 {
		margin: 0;
		padding-top: 20px;
		text-align: center;
		font-size: x-large;
	}

	.row #album {
		border: 0.1px solid black;
		width: 250px;
		height: 250px;
	}

	#album .body {
		font-size: xx-large;
		text-align: center;
	}
	
	#album .body img {
		height: 181px;
		width: auto;
	    margin-top: -46px;
	    max-height: 150px;
	}

	#album .body a:link {
		text-decoration: none;
	}

	#album .body a:visited {
		text-decoration: none;
		color: #333;
	}

	#album .body a:hover {
		text-decoration: none;
		color: cyan;
	}

	#album .body a:active {
		text-decoration: none;
		color: cyan;
	}

	.row .album {
		border: 0.1px solid black;
		width: 250px;
		height: 250px;
	}

	.album .body {
		font-size: xx-large;
		text-align: center;
	}

	.album .body a:link {
		text-decoration: none;
	}

	.album .body a:visited {
		text-decoration: none;
		color: #333;
	}

	.album .body a:hover {
		text-decoration: none;
		color: cyan;
	}

	.album .body a:active {
		text-decoration: none;
		color: cyan;
	}

	.album .footer {
		text-align: center;
	}

</style>
</head>
<body>
<div class="container">
	<section class="header">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="../../">Muzicko Skloniste</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="../admin.index.php">Administratori</a></li> 
					<li><a href="index.php">Profesori</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">					
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Profil</a></li>
							<li><a href="../../app/logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</section>

	<!-- MODAL -->
<?php include 'galer.modal.php'; ?>
<?php include 'image.modal.php'; ?>