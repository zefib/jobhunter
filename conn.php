<?php
$host = 'localhost';
$dbName = 'jobhunter';
$username = 'root';
$password = '';

$conn = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>

