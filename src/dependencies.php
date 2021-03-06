<?php
// DIC configuration

$container = $app->getContainer();

$container['db'] = function ($c) {
	$settings = $c->get('settings')['db'];
	$database = new \Medoo\Medoo([
	    'database_type' => $settings['database_type'],
	    'database_name' => $settings['database_name'],
	    'server' => $settings['server'],
	    'username' => $settings['username'],
	    'password' => $settings['password']
	]);
	return $database;
};
