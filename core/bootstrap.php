<?php

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));


// Helper functions
function view($name, $data = [])
{
	extract($data);

	return require "views/{$name}.view.php";
}

function redirect($path)
{
	header("Location: {$path}");
}