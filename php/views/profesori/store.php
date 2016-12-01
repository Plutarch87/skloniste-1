<?php
require '../../app/bootstrap.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$instrument = $_POST['instrument'];
$bio = $_POST['bio'];
if(isset($_POST['submit'])):
	for ($i = 0; $i < count($_FILES['img']['name']); $i++):
			$ph = $_FILES['img']['name'][$i];
			$photo = new Photograph();
			$photo->attach_file($_FILES['img'], $i);
			$photo->filename = date('his').".".pathinfo($ph, PATHINFO_EXTENSION);
			$photo->galleryId = "";
			$photo->save();
			
	endfor;
endif;


$db = $app['database'];

$db->storeProf('profesori', $name, $surname, $instrument, $bio, $photo->filename);

header('Location: index.php');