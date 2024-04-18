<?php

$abspath = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["BASE"];

include_once "conf/config.php";

$sql = "SELECT `ID_wydarzenia`, `data_wydarzenia_od`,`data_wydarzenia_do` FROM `kalendarium`;";
$query = $conn->query($sql);
$result = $query->fetch_assoc();

print_r(json_encode($result, JSON_PRETTY_PRINT));