<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Kiếm Trường</title>
</head>
<body>
    <h1>Tìm Kiếm Trường Học</h1>
    <form action="" method="post">
        <input type="text" name="matruong" placeholder="Mã Trường">
        <input type="text" name="tentruong" placeholder="Tên Trường">
        <input type="text" name="nganhdaotao" placeholder="Ngành Đào Tạo">
        <input type="submit" value="Tìm Kiếm">
    </form>
    <br>
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $matruong = $_POST['matruong'] ?? '';
            $tentruong = $_POST['tentruong'] ?? '';
            $nganhdaotao = $_POST['nganhdaotao'] ?? '';

            // Kết nối cơ sở dữ liệu
            $server = 'localhost';
            $user = 'root';
            $pass = '';
            $database = 'data';
    $conn = new mysqli($server, $user, $pass, $database);
        if($conn){
            mysqli_query($conn, "SET NAMES 'utf8' ");
            echo 'ket noi';
        }
        else{
            echo ' chưa kết nối';
        }

            // Tạo truy vấn tìm kiếm
            $sql = "SELECT * FROM truong WHERE 1=1";
            if ($matruong) {
                $sql .= " AND matruong = ?";
                $params[] = $matruong;
            }
            if ($tentruong) {
                $sql .= " AND tentruongtienganh LIKE ?";
                $params[] = "%" . $tentruong . "%";
            }
            if ($nganhdaotao) {
                $sql .= " AND cacnganhdaotao LIKE ?";
                $params[] = "%" . $nganhdaotao . "%";
            }

            // Chuẩn bị truy vấn
            $stmt = $conn->prepare($sql);
            if ($params) {
                $stmt->bind_param(str_repeat('s', count($params)), ...$params);
            }
            $stmt->execute();
            $result = $stmt->get_result();

            // Hiển thị kết quả
            if ($result->num_rows > 0) {
                echo "<table border='1'>";
                echo "<tr>
                <th>Mã Trường</th>
                <th>Tên Trường Tiếng Anh</th>
                <th>Tên Trường Tiếng Việt</th>
                <th>Loại Trường</th>
                <th>Hệ Đào Tạo</th>
                <th>Văn Phòng Tuyển Sinh</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th>Website</th>
                <th>Địa Chỉ</th>
                <th>Facebook</th>
                <th>Ngành Đào Tạo</th>
                <th>Tổ Hợp Xét Tuyển</th>
                <th>Hình Ảnh</th>
                </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['matruong']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['tentruongtienganh']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['tentruongtiengviet']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['loaitruong']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['hedaotao']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['vanphongtuyensinh']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['sodienthoai']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td><a href='https://sv1.cdct.edu.vn/" . htmlspecialchars($row['website']) . "' target='_blank'>Truy Cập</a></td>";
                    echo "<td>" . htmlspecialchars($row['diachi']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['facebook']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['cacnganhdaotao']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['tohopxettuyen']) . "</td>";
                    echo "<td><img src='" . htmlspecialchars($row['hinhanhkhuonvientruong']) . "' alt='Hình ảnh trường' width='100'></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Không tìm thấy trường nào.";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
