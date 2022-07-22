<?php
$host = 'localhost';
$db = 'onlinons_JacobDonaldson';
$user = 'onlinons_admin';
$password = 'jacobsdatabase';

try{
$db = new PDO("mysql:host=$host;dbname=$db", "$user", "$password");

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} 

catch(PDOException $error) {
	die("ERROR: Connection unsuccessful." . $error->getMessage());
}

?>