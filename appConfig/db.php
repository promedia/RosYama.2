<?php

// Database configuration
$dbconfig = array(
    'class'=>'CDbConnection',
		'connectionString' => 'mysql:host=localhost;dbname=rosyama',
		'enableParamLogging'=>true,
		'emulatePrepare' => true,
		'username' => 'rosyama',
		'password' => 'rosyama',
		'charset' => 'utf8',
		'tablePrefix'=>'yii_'
);


return $dbconfig;

?>