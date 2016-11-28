<?php 

$app = [];

$app['config'] = require '../../php/app/config.php';

require '../../php/app/database/Connection.php';
require '../../php/app/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);
$profesori = $app['database']->getAll('profesori');


echo $profesori;

?>