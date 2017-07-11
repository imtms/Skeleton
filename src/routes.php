<?php
// Routes

$app->get('/', function ($request, $response, $args) {
	return "Hello world";
});

$app->get('/hello', \Controllers\HelloController::class.':index');