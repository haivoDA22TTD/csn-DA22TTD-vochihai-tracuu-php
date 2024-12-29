<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


$sql = "SELECT makhuhoc, diachi, sodienthoai, email, hinhanhkhuonvientruong, matruong FROM khuhoc";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>Mã Khu Học</th><th>Địa Chỉ</th><th>Số Điện Thoại</th><th>Email</th><th>Hình Ảnh Khuôn Viên Trường</th><th>Mã Trường</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["makhuhoc"]. "</td>";
        echo "<td>" . $row["diachi"]. "</td>";
        echo "<td>" . $row["sodienthoai"]. "</td>";
        echo "<td>" . $row["email"]. "</td>";
        echo "<td>" . $row["hinhanhkhuonvientruong"]. "</td>";
        echo "<td>" . $row["matruong"]. "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Không có dữ liệu";
}

$conn->close();
?>
