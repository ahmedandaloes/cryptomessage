<?php

$db_host = "localhost";
$db_name = "user";
$db_user = "cryptomessage";
$db_pass = "AaBbDd15641564";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

