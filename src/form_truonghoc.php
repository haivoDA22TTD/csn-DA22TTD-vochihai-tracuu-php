<?php
    include_once("header.php");
?>


<div class = "container mt-5">
    <form action="" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN TRƯỜNG HỌC</h3>
        <div class = "form-group mt-3">
            <label for = "matruong">Mã trường: </label>
            <input class="form-control" type="text" name="matruong" required placeholder="Mã trường">
        </div>
        <div class = "form-group mt-3">
            <label for = "tentruongtienganh">Tên trường tiếng anh: </label>
            <input class="form-control" type="text" name="tentruongtienganh" required placeholder="Tên trường tiếng anh">
        </div>
        <div class = "form-group mt-3">
            <label for = "tentruongtiengviet">Tên trường tiếng việt: </label>
            <input class="form-control" type="text" name="tentruongtiengviet" required placeholder="Tên trường tiếng việt">
        </div>
        <div class = "form-group mt-3">
            <label for = "website">Website: </label>
            <input class="form-control" type="text" name="website" required placeholder="Website">
        </div>
        <div class = "form-group mt-3">
            <label for = "facebook">Facebook: </label>
            <input class="form-control" type="text" name="facebook" required placeholder="facebook">
        </div>
        <div class = "form-group mt-3">
            <label for = "makhuvuc">Mã khu vực: </label>
           <select name="makhuvuc">
            <option value="TV - TV">TV - TV</option>
            <option value="CT - CT">CT - CT</option>
           </select>
        </div>
        <div class = "form-group mt-3">
            <label for = "maloaitruong">Mã loại trường: </label>
           <select name="maloaitruong">
            <option value="DVT - DVT">DVT - DVT</option>
            <option value="C55 - C55">C55 - C55</option>
            <option value="DN - DN">DN -DN</option>
            <option value="HN - HN">HN - HN</option>
            <option value="TPHCM - TPHCM">TPHCM - TPHCM</option>
           </select>
        </div>
        
        
        <input name = "sbThem" class="btn btn-primary mt-3" type="submit" value="Thêm">
    </form>
</div>
<?php
    include_once("footer.php");
?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbThem'])){
    $matruong = $_POST['matruong'];
    $tentruongtienganh =  $_POST['tentruongtienganh'];
    $tentruongtiengviet = $_POST['tentruongtiengviet'];
    $website = $_POST['website'];
    $facebook = $_POST['facebook'];
    $makhuvuc = $_POST['makhuvuc'];
    $maloaitruong = $_POST['maloaitruong'];
$sql = "INSERT INTO truonghoc(matruong, tentruongtienganh, tentruongtiengviet, website, facebook, makhuvuc, maloaitruong) VALUES(?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $matruong,  $tentruongtienganh,  $tentruongtiengviet, $website, $facebook, $makhuvuc, $maloaitruong);
    $stmt->execute();
    $stmt->close();
        header('location:ql_truonghoc.php');
        exit();
}
