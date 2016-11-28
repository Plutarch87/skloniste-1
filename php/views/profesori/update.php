<?php
require '../../app/bootstrap.php';

foreach($_POST as $key => $value):
	if(!empty($value)):
		$req[$key] = $value;
	endif;
endforeach;
// die(var_dump($req));
$db = $app['database'];

$db->updateProf($req);

header('Location: index.php');