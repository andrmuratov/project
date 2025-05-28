<?php
$user = 'u68675';
$pass = '5180478';
$db = new PDO(
	'mysql:host=localhost;dbname=u68797',
	$user,
	$pass,
	[PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
?>