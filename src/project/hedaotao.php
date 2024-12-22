<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);


$matruong = isset($_GET['matruong']) ? $_GET['matruong'] : '';


$sql = "SELECT * FROM hedaotao WHERE matruong = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matruong);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<h1>Hệ đào tạo của trường</h1>";

    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>Mã hệ đào tạo:</strong> " . $row['mahedaotao'] . "</p>";
        echo "<p><strong>Tên hệ đào tạo:</strong> " . $row['tenhedaotao'] . "</p>";
        echo "<hr>";  
    }
} else {
    echo "Không tìm thấy hệ đào tạo cho trường này.";
}

$stmt->close();
$conn->close();
?>
