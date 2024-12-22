<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);


$matruong = isset($_GET['matruong']) ? $_GET['matruong'] : '';


$sql = "SELECT manganhdaotao, tennganhdaotao FROM nganhdaotao WHERE matruong = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matruong);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<h1>Ngành đào tạo của trường</h1>";

    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>Mã ngành đào tạo:</strong> " . $row['manganhdaotao'] . "</p>";
        echo "<p><strong>Tên ngành đào tạo:</strong> " . $row['tennganhdaotao'] . "</p>";
        echo "<hr>";  
    }
} else {
    echo "Không tìm thấy ngành đào tạo cho trường này.";
}

$stmt->close();
$conn->close();
?>
