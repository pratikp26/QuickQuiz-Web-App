<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'DB1';
$conn = new mysqli($server, $username, $password, $db);
if (!$conn){
	die('Not connected');
}
?>