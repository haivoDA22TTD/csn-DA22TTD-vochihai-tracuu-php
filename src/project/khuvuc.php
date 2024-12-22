<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);

$matruong = isset($_GET['matruong']) ? $_GET['matruong'] : '';


$sql = "SELECT makhuvuc, tenkhuvuc FROM khuvuc WHERE matruong = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matruong);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<h1>Khu vực của trường</h1>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>Mã khu vực:</strong> " . $row['makhuvuc'] . "</p>";
        echo "<p><strong>Tên khu vực:</strong> " . $row['tenkhuvuc'] . "</p>";
        echo "<hr>";  
    }
} else {
    echo "Không tìm thấy khu vực cho trường này.";
}

$stmt->close();
$conn->close();
?>
