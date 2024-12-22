<?php
    session_start();
    if( !isset($_SESSION['quyen']) || $_SESSION['quyen'] !== 'admin' ){
        header('Location:dangnhap.php');
        exit();
    }
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'data';
    $conn = new mysqli($server, $user, $pass, $database);
        $sql = "SELECT * FROM taikhoan";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang người quản trị </title>
    <link rel="stylesheet" href="nguoiquantri.css">
</head>
<body>
    <h1>Trang người quản trị</h1>
    <div class="data">
    <table border = 1 >
        <tr>
            <th>Tài Khoản</th>
            <th>Quyền</th>
            <th><a href="them.php">Thêm</a></th>
        </tr>
        <?php while ($user = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $user['tentaikhoan']; ?></td>
                <td><?php echo $user['quyen']; ?></td>
                <td><a href="sua.php?id=<?php echo $user['id']; ?>">Sửa</a>
            </td>
            <td><a href="xoa.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
            </tr>
        <?php endwhile; ?>
    </table>
    </div>
</body>
</html>