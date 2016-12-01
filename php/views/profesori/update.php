<?php
require '../../app/bootstrap.php';

foreach($_POST as $key => $value):
	if(!empty($value)):
		$req[$key] = $value;
	endif;
endforeach;

$id = $req['id'];
$query = $app['database'];
$user = $query->show('profesori', $id);

if($_FILES['img']['error'][0] == 0):	
	if(!in_array("", $_FILES['img']['name']) !== false):
		if(file_exists(__DIR__.'/../assets/images/'.$user[0]['img'])):
			$query->destroyImg('images', $user[0]['name'].".".strtolower(pathinfo($_FILES['img']['name'][0], PATHINFO_EXTENSION)));
			unlink(__DIR__.'/../assets/images/'.$user[0]['img']);
		endif;
	endif;
	for ($i = 0; $i < count($_FILES['img']['name']); $i++):
		$ph = $_FILES['img']['name'][$i];
		$photo = new Photograph();
		$photo->attach_file($_FILES['img'], $i);
		$photo->filename = date('his').".".strtolower(pathinfo($ph, PATHINFO_EXTENSION));
		$photo->galleryId = "";
		$photo->save();

		$req['img'] = $photo->filename;
	endfor;
endif;

$db = $app['database'];

$db->updateProf($req);

header('Location: index.php');