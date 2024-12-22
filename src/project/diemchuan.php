<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 


$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT diem, nam, manganhdaotao, matohopxettuyen FROM diemchuan";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Điểm chuẩn</th>
                <th>Năm</th>
                <th>Mã ngành đào tạo</th>
                <th>Mã tổ hợp xét tuyển</th>
            </tr>";
    

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['diem'] . "</td>
                <td>" . $row['nam'] . "</td>
                <td>" . $row['manganhdaotao'] . "</td>
                <td>" . $row['matohopxettuyen'] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Không có dữ liệu.";
}
$conn->close();
?>
