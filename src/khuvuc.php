<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);



$sql = "SELECT makhuvuc, tenkhuvuc FROM khuvuc";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>Mã Khu Vực</th><th>Tên Khu Vực</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["makhuvuc"]. "</td>";
        echo "<td>" . $row["tenkhuvuc"]. "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Không có dữ liệu";
}

// Đóng kết nối
$conn->close();
?>
