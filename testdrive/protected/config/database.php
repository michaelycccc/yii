<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	/*
	'connectionString' => 'mysql:host=localhost;dbname=testdrive',
	'emulatePrepare' => true, //配置后，將會紀錄查詢變量值
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	*/
	'connectionString' => 'sqlsrv:Server=123-5B4FE47734D\SQLEXPRESS;Database=iftex',
	'username' => 'sa',
	'password' => 'jl963689',
	'charset' => 'utf8',
);