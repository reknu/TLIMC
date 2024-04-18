<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB", "2024_tlimc");

try {
    $conn = new mysqli(SERVER, DB_USER, DB_PWD, DB);
} catch (Exception $err) {
    $conn_err = "Error code: " . mysqli_connect_errno() . " - Failed to connect to MySQL: " . mysqli_connect_error();
    $conn_err .= "<font color='crimson'>\nW przypadku wystąpienia tego błedu, proszę powiadomić administratora strony!</font>";
    header('HTTP/1.1 500 Internal Server Error', true, 500);
    exit($conn_err . " SERVER RESPONDED WITH HTTP STATUS CODE: " . http_response_code());
}