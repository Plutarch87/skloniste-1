<?php 

include '../../php/app/bootstrap.php';

$query = $app['database'];
$images = $query->getAll('images');


echo $images;

?>