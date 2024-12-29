<?php
    include_once("header.php");
?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbThem'])){
    $makhuhoc = $_POST['makhuhoc'];
    $diachi=  $_POST['diachi'];
    $sodienthoai = $_POST['sodienthoai'];
    $email = $_POST['email'];
    $hinhanhkhuonvientruong = $_POST['hinhanhkhuonvientruong'];
    $matruong = $_POST['matruong'];
$sql = "INSERT INTO khuhoc(makhuhoc, diachi, sodienthoai, email, hinhanhkhuonvientruong, matruong) VALUES(?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $makhuhoc,  $diachi,  $sodienthoai,  $email, $hinhanhkhuonvientruong, $matruong );
    $stmt->execute();
    $stmt->close();
        header('location:ql_khuhoc.php');
        exit();
}
?>
<div class = "container mt-5">
    <form action="" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN KHU HỌC</h3>
        <div class = "form-group mt-3">
            <label for = "makhuhoc">Mã khu học: </label>
            <input class="form-control" type="text" name="makhuhoc" required placeholder="Mã khu học">
        </div>
        <div class = "form-group mt-3">
            <label for = "diachi">Địa chỉ: </label>
            <input class="form-control" type="text" name="diachi" required placeholder="Địa chỉ">
        </div>
        <div class = "form-group mt-3">
            <label for = "sodienthoai">Số điện thoại: </label>
            <input class="form-control" type="text" name="sodienthoai" required placeholder="Số điện thoại">
        </div>
        <div class = "form-group mt-3">
            <label for = "email">Email: </label>
            <input class="form-control" type="text" name="email" required placeholder="Email">
        </div>
        <div class = "form-group mt-3">
            <label for = "hinhanhkhuonvientruong">Hình ảnh khuôn viên trường: </label>
            <input class="form-control" type="text" name="hinhanhkhuonvientruong" required placeholder="Hình ảnh khuôn viên trường">
        </div>
        <div class = "form-group mt-3">
            <label for = "matruong">Mã trường: </label>
            <input class="form-control" type="text" name="matruong" required placeholder="Mã trường">
        </div>
        
        
        <input name = "sbThem" class="btn btn-primary mt-3" type="submit" value="Thêm">
    </form>
</div>
<?php
    include_once("footer.php");
?>
