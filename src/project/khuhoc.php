<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);



$matruong = isset($_GET['matruong']) ? $_GET['matruong'] : '';


$sql = "SELECT makhuhoc, diachi, sodienthoai, email, hinhanhkhuonvientruong FROM khuhoc WHERE matruong = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matruong);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<h1>Thông tin khu học của trường</h1>";

    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>Mã khu học:</strong> " . $row['makhuhoc'] . "</p>";
        echo "<p><strong>Địa chỉ:</strong> " . $row['diachi'] . "</p>";
        echo "<p><strong>Số điện thoại:</strong> " . $row['sodienthoai'] . "</p>";
        echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
        

        if (!empty($row['hinhanhkhuonvientruong'])) {
            echo "<p><strong>Hình ảnh khuôn viên:</strong></p>";
            echo "<img src='../img/tvu.jpg.jpg" . "' alt='Hình ảnh khuôn viên' style='max-width: 500px;'>";
        } else {
            echo "<p><strong>Hình ảnh khuôn viên:</strong> Không có hình ảnh.</p>";
        }

        echo "<hr>"; 
    }
} else {
    echo "Không tìm thấy khu học cho trường này.";
}

$stmt->close();
$conn->close();
?>
