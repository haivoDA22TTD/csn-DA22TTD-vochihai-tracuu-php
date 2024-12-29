<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);



$sql = "SELECT matruong, tentruongtienganh, tentruongtiengviet, website, facebook, makhuvuc, maloaitruong FROM truonghoc";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>Mã Trường</th><th>Tên Trường Tiếng Anh</th><th>Tên Trường Tiếng Việt</th><th>Website</th><th>Facebook</th><th>Mã Khu Vực</th><th>Mã Loại Trường</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["matruong"]. "</td>";
        echo "<td>" . $row["tentruongtienganh"]. "</td>";
        echo "<td>" . $row["tentruongtiengviet"]. "</td>";
        echo "<td>" . $row["website"]. "</td>";
        echo "<td>" . $row["facebook"]. "</td>";
        echo "<td>" . $row["makhuvuc"]. "</td>";
        echo "<td>" . $row["maloaitruong"]. "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Không có dữ liệu";
}


$conn->close();
?>
