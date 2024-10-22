<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm trường đại học</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>
<ul class="menu">
           <li><a href="./form.php">Trang Chủ</a></li>
           <li><a href="./login.php">Đăng Nhập</a></li>
       </ul>
<h1>Tìm kiếm thông tin trường</h1>
    <form action="search.php" method="post">
        <label for="matruong">Mã Trường:</label> <br>
        <input type="number" id="matruong" name="matruong"><br><br>

        <label for="tentruongtienganh">Tên Trường Tiếng Anh:</label><br>
        <input type="text" id="tentruongtienganh" name="tentruongtienganh"><br><br>

        <input class="search" type="submit" value="Tìm Kiếm">
</form>
    <footer>
            <b>Hệ thống tra cứu thông tin trường đại học, cao đẳng </b>
            <p> Địa chỉ: Tầng 5, Tòa Nhà Đổi Mới, 456 Đường Sáng Tạo, Phường 2, Quận 3, TP. Hồ Chí Minh, Việt Nam</p>
            <p>Hotline: 1800-1234-567  </p>
            <p> Email: support@daihoccaodang.vn</p>
        </footer>
</body>
</html>


