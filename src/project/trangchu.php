<?php
     $server = 'localhost';
     $user = 'root';
     $pass = '';
     $database = 'data';
     $conn = new mysqli($server, $user, $pass, $database);
 
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Tra Cứu Thông Tin Trường Đại Học, Cao Đẳng| Trang Chủ</title>
    <link rel="stylesheet" href="trangchu.css">
</head>
<body>
    <header><i>Website Tra Cứu Thông Tin Trường Đại Học, Cao Đẳng</i></header>
    <ul class="menu">
        <li><a href="./trangchu.php">Trang Chủ</a></li>
        <li><a href="./dangnhap.php">Đăng Nhập</a></li>
    </ul>
    <div class="box">
    <form action="tim_kiem_truong.php"method="post">
        <h1 class="title">Tra Cứu</h1>
        <input class="input" type="text" name="matruong" placeholder="Nhập mã trường">
        <input class="input" type="text" name="tentruong"placeholder="Nhập Tên Trường">
        <input class="input" type="text" name="nganhdaotao" placeholder="Nhập Ngành Đào Tạo">
        <input class="btn" type="submit" value="Tra Cứu">
    </form>
    </div>
    <footer>
        <b>Website Tra Cứu Thông Tin Trường Đại Học, Cao Đẳng </b>
        <p>Hotline: 19009999</p>
        <p> Email: daihoc&caodang.vn</p>
    </footer>
</body>
</html>