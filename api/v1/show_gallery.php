<?php 

$app = [];

$app['config'] = require '../../php/app/config.php';

require '../../php/app/database/Connection.php';
require '../../php/app/database/QueryBuilder.php';

$id = $_GET['id'];

$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);

$gallery = $app['database']->showImagesAPI('images', $id);


echo $gallery;

?>