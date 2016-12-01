<?php 

require '../../app/bootstrap.php';

$id = $_GET['id'];

$query = $app['database'];

$prof = $query->show('profesori', $id);

if(file_exists(__DIR__.'/../assets/images/'.$prof[0]['img'])):
	$query->destroyImg('images', $prof[0]['img']);
	unlink(__DIR__.'/../assets/images/'.$prof[0]['img']);
endif;

$query->destroy('profesori', $id);

header('Location: index.php');