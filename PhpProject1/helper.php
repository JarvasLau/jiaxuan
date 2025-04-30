<?php

define('DB_HOST', 'lab-db.cle2sgso8sju.us-east-1.rds.amazonaws.com');
define('DB_USER', 'main');
define('DB_PASS', 'jarvaslaujingqian');
define('DB_NAME', 'cloud');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
