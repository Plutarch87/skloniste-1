<?php
session_start();
isset($_SESSION['email']) ?: header('Location: ../views/auth/admin.login.php');

$app = [];

$app['config'] = require 'config.php';

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Request.php';
require 'photograph.php';

$request = new Request();

$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);
