<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/gold.db',
	// uncomment the following lines to use a MySQL database
	/*
	'connectionString' => 'mysql:host=localhost;dbname=gold',
	'emulatePrepare' => true, //�t�m�Z�A�N�|�����d���ܶq��
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	*/
	'connectionString' => 'sqlsrv:Server=123-5B4FE47734D\SQLEXPRESS;Database=iftex',
	'username' => 'sa',
	'password' => 'jl963689',
	'charset' => 'utf8',
);