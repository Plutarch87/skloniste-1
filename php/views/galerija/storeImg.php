<?php
require '../../app/bootstrap.php';

$galleryId = $_GET['id'];
$title = $_POST['title'];

if(isset($_POST['submit'])) {
	for ($i = 0; $i < count($_FILES['img']['name']); $i++):
			$ph = $_FILES['img']['name'][$i];
			$photo = new Photograph();
			$photo->attach_file($_FILES['img'], $i);
			$photo->filename = $title.$counter++.".".pathinfo($ph, PATHINFO_EXTENSION);
			$photo->galleryId = $galleryId;
			$photo->save();
			
	endfor;
}

header("Location: show.php?id=$galleryId"); 