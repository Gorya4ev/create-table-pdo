<?php
$db = new PDO("mysql:host=localhost;dbname=test","root","");
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try{
	$queryStr ="CREATE TABLE user (id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, name VARCHAR(40), password VARCHAR(100), email VARCHAR(150))";
	$db -> query($queryStr);
} catch (PDOException $e){
	echo $e->getMessage();
}
?>