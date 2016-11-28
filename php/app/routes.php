<?php 

$router->define([
	'' => 'controllers/index.php',
	'admin/create' => 'controllers/create.php',
	'admin/edit' => 'UserController@edit',
	'admin/show' => 'UserController@show',

	'admin/profesor' => 'ProfesorController@index',
	'admin/profesor/edit' => 'ProfesorController@edit',
	'admin/profesor/show' => 'ProfesorController@show'
]);
