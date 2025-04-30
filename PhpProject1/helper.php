<?php

define('DB_HOST', 'clouddb.cle2sgso8sju.us-east-1.rds.amazonaws.com');
define('DB_USER', 'jarvas');
define('DB_PASS', 'a3014402');
define('DB_NAME', '');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
