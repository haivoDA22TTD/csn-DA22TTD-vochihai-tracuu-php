<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 
$conn = new mysqli($servername, $username, $password, $dbname);




$matruong = isset($_GET['matruong']) ? $_GET['matruong'] : '';


$sql = "SELECT maphuongthucxettuyen, tenphuongthucxettuyen FROM phuongthucxettuyen WHERE matruong = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matruong);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<h1>Phương thức xét tuyển của trường</h1>";

    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>Mã phương thức xét tuyển:</strong> " . $row['maphuongthucxettuyen'] . "</p>";
        echo "<p><strong>Tên phương thức xét tuyển:</strong> " . $row['tenphuongthucxettuyen'] . "</p>";
        echo "<hr>";  
    }
} else {
    echo "Không tìm thấy phương thức xét tuyển cho trường này.";
}

$stmt->close();
$conn->close();
?>
