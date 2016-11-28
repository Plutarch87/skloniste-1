<?php
session_start();
isset($_SESSION['email']) ? header('Location: ../admin.index.php') : null;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/admin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>LOGIN</title>
</head>
<body style="background: #3e3e3e;">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" style="background: darkgrey;">Login</div>
				<div class="panel-body" style="background: #efefef;">

				<form method="POST" action="../../app/login.php" class="form-horizontal" role="form">

				    <div class="form-group">
				        <label for="email" class="col-md-4 control-label">EMAIL</label>
				        <div class="col-md-6">
				            <input required type="text" name="email" class="form-control">
				        </div>
				    </div>

					<div class="form-group">
					    <label for="password" class="col-md-4 control-label">PASSWORD</label>
					    <div class="col-md-6">
					        <input required type="password" name="password" class="form-control">
					    </div>
					</div>

					<div class="form-group">
					    <div class="col-md-6 col-md-offset-4">
					        <button type="submit" class="form-control btn-danger">LOGIN</button>
					    </div>
					</div>

				</form>

				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>