<?php
    include_once("header.php");
?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbThem'])){
    $makhuvuc = $_POST['makhuvuc'];
    $tenkhuvuc = $_POST['tenkhuvuc'];
$sql = "INSERT INTO khuvuc(makhuvuc, tenkhuvuc) VALUES(?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $makhuvuc, $tenkhuvuc);
    $stmt->execute();
    $stmt->close();
        header('location:ql_khuvuc.php');
        exit();
}
?>
<div class = "container mt-5">
    <form action="" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN KHU VỰC</h3>
        <div class = "form-group mt-3">
            <label for = "makhuvuc">Mã khu vực: </label>
            <input class="form-control" type="text" name="makhuvuc" required placeholder="Mã khu vực">
        </div>
        <div class = "form-group mt-3">
            <label for = "tenkhuvuc">Mã khu vực: </label>
            <input class="form-control" type="text" name="tenkhuvuc" required placeholder="Tên khu vực">
        </div>
        
        
        <input name = "sbThem" class="btn btn-primary mt-3" type="submit" value="Thêm">
    </form>
</div>
<?php
    include_once("footer.php");
?>
