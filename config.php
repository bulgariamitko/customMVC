<?php 

return [
	'database' => [
		'name' => 'mvc',
		'username' => 'root',
		'password' => '1718',
		'connection' => 'mysql:host=127.0.0.1',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];