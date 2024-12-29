<?php
// Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);



$sql = "SELECT matruong, manganhdaotao, tohopxettuyen, diemchuan, hocphi, nam FROM thongtinxettuyen";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    echo "<table border='1'>";
    echo "<tr><th>Mã Trường</th><th>Mã Ngành Đào Tạo</th><th>Tổ Hợp Xét Tuyển</th><th>Điểm Chuẩn</th><th>Học Phí</th><th>Năm</th></tr>";

    while($row = $result->fetch_assoc()) {
 
        $hocphi = $row["hocphi"] ? $row["hocphi"] : 'Chưa xác định';
        
        echo "<tr>";
        echo "<td>" . $row["matruong"]. "</td>";
        echo "<td>" . $row["manganhdaotao"]. "</td>";
        echo "<td>" . $row["tohopxettuyen"]. "</td>";
        echo "<td>" . $row["diemchuan"]. "</td>";
        echo "<td>" . $hocphi . "</td>";
        echo "<td>" . $row["nam"]. "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Không có dữ liệu";
}


$conn->close();
?>
