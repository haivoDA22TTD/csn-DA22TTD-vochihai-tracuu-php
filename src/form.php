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
           <li><a href="./dangNhap.html">Đăng Nhập</a></li>
       </ul>
<h1>Tìm kiếm thông tin trường</h1>
    <form action="search.php" method="POST">
        <label for="loaitruong">Loại trường:</label>
        <select name="loaitruong" id="loaitruong">
            <option value="">-- Chọn loại trường --</option>
            <option value="Đại học">Đại học</option>
            <option value="Cao đẳng">Cao đẳng</option>
            <!-- Thêm các loại trường khác nếu cần -->
        </select><br>

        <label for="hedaotao">Hệ đào tạo:</label>
        <select name="hedaotao" id="hedaotao">
            <option value="">-- Chọn hệ đào tạo --</option>
            <option value="Chính quy">Chính quy</option>
            <option value="Tại chức">Tại chức</option>
            <!-- Thêm các hệ đào tạo khác nếu cần -->
        </select><br>

            <button type="submit">Tìm kiếm</button>
    </form>
    <footer>
            <b>Hệ thống tra cứu thông tin trường đại học, cao đẳng </b>
            <p> Địa chỉ: Tầng 5, Tòa Nhà Đổi Mới, 456 Đường Sáng Tạo, Phường 2, Quận 3, TP. Hồ Chí Minh, Việt Nam</p>
            <p>Hotline: 1800-1234-567  </p>
            <p> Email: support@daihoccaodang.vn</p>
        </footer>
</body>
</html>


