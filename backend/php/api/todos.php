<?php

$conn = new mysqli("db", "root", "rootpassword", "todo_app");

if ($conn->connect_error) {
    die();
}
$sql = "SELECT * FROM todos";
$result = $conn->query($sql);

$todos = [];

while ($row = $result->fetch_assoc()) {
    $todos[] = $row;
}

header('Content-Type: application/json');
echo json_encode($todos);


;