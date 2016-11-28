<?php 

include '../../php/app/bootstrap.php';

$query = $app['database'];
$profesori = $query->getAll('profesori');


echo $profesori;

?>