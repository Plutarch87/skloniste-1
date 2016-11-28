<?php 

include '../../app/bootstrap.php';

$title = $_POST['title'];

$db = $app['database'];

$db->storeGallery($title);

$_SESSION['message'] = '$title uspesno napravljen!';

header('Location: index.php');

?>