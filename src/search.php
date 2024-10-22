<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'data';
$conn = new mysqli($server, $user, $pass, $database);
if($conn)
    {
        mysqli_query($conn, "SET NAMES 'utf8' ");
        echo 'ket noi';
    }
    else{
        echo 'ko ket noi';
    }

// Lấy dữ liệu từ form
$matruong = isset($_POST['matruong']) ? $_POST['matruong'] : '';
$tentruongtienganh = isset($_POST['tentruongtienganh']) ? $_POST['tentruongtienganh'] : '';

// Tạo câu truy vấn SQL
$sql = "SELECT * FROM truong WHERE 1=1"; 

if ($matruong != '') {
    $sql .= " AND matruong = " . intval($matruong);
}

if ($tentruongtienganh != '') {
    $sql .= " AND tentruongtienganh LIKE '%" . $conn->real_escape_string($tentruongtienganh) . "%'";
}

$result = $conn->query($sql);

// Kiểm tra kết quả
if ($result->num_rows > 0) {
    echo "<h2>Kết Quả Tìm Kiếm:</h2>";
    echo "<table border='1'>
            <tr>
                <th>Mã Trường</th>
                <th>Tên Trường Tiếng Anh</th>
                <th>Tên Trường Tiếng Việt</th>
                <th>Loại Trường</th>
                <th>Hệ Đào Tạo</th>
                <th>Địa Chỉ</th>
                <th>Văn Phòng Tuyển Sinh</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Các Ngành Đào Tạo</th>
                <th>Tổ Hợp Xét Tuyển</th>
                <th>Website</th>
                <th>Hình Ảnh Khuôn Viên Trường</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["matruong"] . "</td>
                <td>" . $row["tentruongtienganh"] . "</td>
                <td>" . $row["tentruongtiengviet"] . "</td>
                <td>" . $row["loaitruong"] . "</td>
                <td>" . $row["hedaotao"] . "</td>
                <td>" . $row["diachi"] . "</td>
                <td>" . $row["vanphongtuyensinh"] . "</td>
                <td>" . $row["sodienthoai"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["facebook"] . "</td>
                <td>" . $row["cacnganhdaotao"] . "</td>
                <td>" . $row["tohopxettuyen"] . "</td>
                <td>" . $row["website"] . "</td>
                <td>" . $row["hinhanhkhuonvientruong"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Không tìm thấy kết quả.";
}

$conn->close();
?>