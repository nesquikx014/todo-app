

<?php
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

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