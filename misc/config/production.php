<?php
return array(
	'parameters' => array(
		'database' => array(
			'driver' => 'mysql',
			'host' => isset($_ENV['OPENSHIFT_DB_HOST']) ? $_ENV['OPENSHIFT_DB_HOST'] : 'localhost',
			'dbname' => isset($_ENV['OPENSHIFT_GEAR_NAME']) ? $_ENV['OPENSHIFT_GEAR_NAME'] : 'nette',
			'user' => isset($_ENV['OPENSHIFT_DB_USERNAME']) ? $_ENV['OPENSHIFT_DB_USERNAME'] : 'test',
			'password' => isset($_ENV['OPENSHIFT_DB_PASSWORD']) ? $_ENV['OPENSHIFT_DB_PASSWORD'] : '',
		),
	),
);