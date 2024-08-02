<?php
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"), true);
$drinkName = $data['name'];

$sql = "SELECT details FROM bebidas WHERE name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $drinkName);
$stmt->execute();
$stmt->bind_result($details);
$stmt->fetch();

$response = array("details" => $details);
echo json_encode($response);

$stmt->close();
$conn->close();
?>
