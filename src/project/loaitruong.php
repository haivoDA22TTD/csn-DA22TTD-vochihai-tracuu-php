<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);



$sql = "SELECT maloaitruong, tenloaitruong FROM loaitruong";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
   
    echo "<table border='1'><tr><th>Mã Loại Trường</th><th>Tên Loại Trường</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["maloaitruong"]. "</td><td>" . $row["tenloaitruong"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu";
}


$conn->close();
?>
