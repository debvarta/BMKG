<?php
require('lib/bmkg.php');

$bmkg = new BMKG();

$data = $bmkg->earthquake();

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($data, JSON_PRETTY_PRINT);
?>