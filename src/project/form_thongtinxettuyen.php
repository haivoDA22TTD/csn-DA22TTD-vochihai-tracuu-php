<?php
    include_once("header.php");
?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbThem'])){
    $matruong = $_POST['matruong'];
    $manganhdaotao =  $_POST['manganhdaotao'];
    $tohopxettuyen = $_POST['tohopxettuyen'];
    $diemchuan = $_POST['diemchuan'];
    $hocphi = $_POST['hocphi'];
    $nam = $_POST['nam'];
$sql = "INSERT INTO thongtinxettuyen(matruong, manganhdaotao, tohopxettuyen, diemchuan, hocphi, nam) VALUES(?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss",$matruong,  $manganhdaotao,   $tohopxettuyen, $diemchuan, $hocphi, $nam);
    $stmt->execute();
    $stmt->close();
        header('location:ql_thongtinxettuyen.php');
        exit();
}
?>
<div class = "container mt-5">
    <form action="" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN THÔNG TIN XÉT TUYỂN</h3>
        <div class = "form-group mt-3">
            <label for = "matruong">Mã trường: </label>
            <input class="form-control" type="text" name="matruong" required placeholder="Mã trường">
        </div>
        <div class = "form-group mt-3">
            <label for = "manganhdaotao">Mã ngành đào tạo: </label>
            <input class="form-control" type="text" name="manganhdaotao" required placeholder="Mã ngành đào tạo">
        </div>
        <div class = "form-group mt-3">
            <label for = "tohopxettuyen">Tổ hợp xét tuyển: </label>
            <input class="form-control" type="text" name="tohopxettuyen" required placeholder="Tổ hợp xét tuyển">
        </div>
        <div class = "form-group mt-3">
            <label for = "diemchuan">Điểm chuẩn: </label>
            <input class="form-control" type="text" name="diemchuan" required placeholder="Điểm chuẩn">
        </div>
        <div class = "form-group mt-3">
            <label for = "hocphi">Học phí: </label>
            <input class="form-control" type="text" name="hocphi" required placeholder="Học phí">
        </div>
        <div class = "form-group mt-3">
            <label for = "nam">Năm: </label>
            <input class="form-control" type="text" name="nam" required placeholder="Năm">
        </div>
        
        
        <input name = "sbThem" class="btn btn-primary mt-3" type="submit" value="Thêm">
    </form>
</div>
<?php
    include_once("footer.php");
?>
