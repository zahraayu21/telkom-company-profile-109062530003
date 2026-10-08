<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'telkom_profile';
$port = 3308;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($host, $user, $password, $database, $port);
    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    exit('Error: ' . $e->getMessage());
}