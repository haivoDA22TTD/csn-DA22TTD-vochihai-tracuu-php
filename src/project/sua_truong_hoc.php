<?php
    include_once("header.php");
?>
<?php
$ma_val = $_GET["id"]; $ten_val = "";
$sql = "SELECT * FROM truonghoc WHERE matruong = '$ma_val'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbSua'])){
    $matruong = $_POST['matruong'];
    $tentruongtienganh =  $_POST['tentruongtienganh'];
    $tentruongtiengviet = $_POST['tentruongtiengviet'];
    $website = $_POST['website'];
    $facebook = $_POST['facebook'];
    $makhuvuc = $_POST['makhuvuc'];
    $maloaitruong = $_POST['maloaitruong'];
        $sql = "UPDATE truonghoc SET matruong = ?, tentruongtienganh = ?, tentruongtiengviet = ?, website = ?, facebook = ?,makhuvuc = ?, maloaitruong = ?   WHERE matruong = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $matruong, $tentruongtienganh, $tentruongtiengviet, $website, $facebook, $makhuvuc, $maloaitruong );
                $stmt->execute();
                $stmt->close();
                    header('location:ql_truonghoc.php');
                    exit();
     }
?>
<div class = "container mt-5">
    <form action="sua_truong_hoc.php" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN TRƯỜNG HỌC</h3>
        <div class = "form-group mt-3">
            <label for = "matruong">Mã trường: </label>
            <input  value = "<?php echo $ma_val;?>" class="form-control" type="text" name="makhuvuc" required placeholder="Mã trường">
        </div>
        <div class = "form-group mt-3">
            <label for = "tentruongtienganh">Tên trường tiếng anh: </label>
            <input value = "<?php echo $ten_val;?>" class="form-control" type="text" name="tentruongtienganh" required placeholder="Tên trường tiếng anh">
        </div>
        
        <div class = "form-group mt-3">
            <label for = "tentruongtiengviet">Tên trường tiếng việt: </label>
            <input value = "<?php echo $ten_val;?>" class="form-control" type="text" name="tentruongtiengviet" required placeholder="Tên trường tiếng việt">
        </div>
        
        <div class = "form-group mt-3">
            <label for = "website">Website: </label>
            <input value = "<?php echo $ten_val;?>" class="form-control" type="text" name="website" required placeholder="website">
        </div>

        <div class = "form-group mt-3">
            <label for = "facebook">Facebook: </label>
            <input value = "<?php echo $ten_val;?>" class="form-control" type="text" name="facebook" required placeholder="Facebook">
        </div>
        
        <div class = "form-group mt-3">
            <label for = "makhuvuc">Mã khu vực: </label>
            <input value = "<?php echo $ten_val;?>" class="form-control" type="text" name="makhuvuc" required placeholder="Mã khu vực">
        </div>
        
        <div class = "form-group mt-3">
            <label for = "maloaitruong">Mã loại trường: </label>
            <input value = "<?php echo $ten_val;?>" class="form-control" type="text" name="maloaitruong" required placeholder="Mã loại trường">
        </div>
        <input name = "sbSua" class="btn btn-primary mt-3" type="submit" value="Sửa">
    </form>
</div>
<?php
    include_once("footer.php");
?>
