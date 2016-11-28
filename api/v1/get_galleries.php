<?php 

include '../../php/app/bootstrap.php';

$query = $app['database'];
$galleries = $query->getAll('galleries');


echo $galleries;

?>