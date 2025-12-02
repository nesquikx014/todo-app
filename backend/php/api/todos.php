<?php

header('content-type: application/json');

$host = "db";
$user = "root";
$pass = "rootpassword";
$db = "todo_app";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die(json_encode(["error" => "kan geen verbinding maken " . $conn->connect_error]));
}
$result = $conn->query("SELECT * FROM todos");

$data = [];
while ($row = $result->fetch_assoc()) {
    $todos[] = $row;
    
}
echo json_encode($todos);