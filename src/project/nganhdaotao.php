<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);




$sql = "SELECT manganhdaotao, tennganhdaotao FROM nganhdaotao";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>Mã Ngành Đào Tạo</th><th>Tên Ngành Đào Tạo</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["manganhdaotao"]. "</td>";
        echo "<td>" . $row["tennganhdaotao"]. "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Không có dữ liệu";
}

// Đóng kết nối
$conn->close();
?>
