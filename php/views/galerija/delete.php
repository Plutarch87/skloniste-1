<?php 

require '../../app/bootstrap.php';

$id = $_GET['id'];

$query = $app['database'];

$query->destroy('galleries', $id);

header('Location: index.php');