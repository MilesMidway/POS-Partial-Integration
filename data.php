<?php
header('Content-Type: application/json');

// Read the JSON file
$jsonData = file_get_contents('database/db.json');

// Output the JSON data
echo $jsonData;
?>
