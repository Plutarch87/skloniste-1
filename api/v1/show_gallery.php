<?php 

include '../../php/app/bootstrap.php';

$id = $_GET['id'];
$query = $app['database'];
$gallery = $query->showImagesAPI('images', $id);


echo $gallery;

?>