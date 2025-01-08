<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);



$matruong = isset($_GET['matruong']) ? $_GET['matruong'] : '';


$sql = "SELECT matohopxettuyen, tentohopxettuyen, manganhdaotao FROM tohopxettuyen WHERE matruong = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matruong);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<h1>Tổ hợp xét tuyển của trường</h1>";

    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>Mã tổ hợp xét tuyển:</strong> " . $row['matohopxettuyen'] . "</p>";
        echo "<p><strong>Tên tổ hợp xét tuyển:</strong> " . $row['tentohopxettuyen'] . "</p>";
        echo "<p><strong>Mã ngành đào tạo:</strong> " . $row['manganhdaotao'] . "</p>";
        echo "<hr>";  
    }
} else {
    echo "Không tìm thấy tổ hợp xét tuyển cho trường này.";
}

$stmt->close();
$conn->close();
?>
