<?php
isset($_SESSION['email']) ?: header('Location: ../views/auth/admin.login.php') ;
require 'bootstrap.php';
 $email = $_POST['email'];
$password = $_POST['password'];

$query = $app['database'];

$stmt = $query->check($email, $password);

if (in_array($email, $stmt) && in_array($password, $stmt) !== false):
	$_SESSION['email'] = $stmt['email'];
 	header('Location: ../views/admin.index.php');
 else:
 	echo "<h1>Incorrect input... <small style='color:#f4f4f4'>asshole</small><h1>";
 endif;