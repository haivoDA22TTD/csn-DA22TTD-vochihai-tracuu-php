<?php
    include_once("header.php");
?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbThem'])){
    $maloaitruong = $_POST['maloaitruong'];
    $tenloaitruong = $_POST['tenloaitruong'];
$sql = "INSERT INTO loaitruong(maloaitruong, tenloaitruong) VALUES(?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $maloaitruong, $tenloaitruong);
    $stmt->execute();
    $stmt->close();
        header('location:ql_loaitruong.php');
        exit();
}
?>
<div class = "container mt-5">
    <form action="" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN LOẠI TRƯỜNG</h3>
        <div class = "form-group mt-3">
            <label for = "maloaitruong">Mã loại trường: </label>
            <input class="form-control" type="text" name="maloaitruong" required placeholder="Mã loại trường">
        </div>
        <div class = "form-group mt-3">
            <label for = "tenloaitruong">Tên loại trường: </label>
            <input class="form-control" type="text" name="tenloaitruong" required placeholder="Tên loại trường">
        </div>
        
        
        <input name = "sbThem" class="btn btn-primary mt-3" type="submit" value="Thêm">
    </form>
</div>
<?php
    include_once("footer.php");
?>
