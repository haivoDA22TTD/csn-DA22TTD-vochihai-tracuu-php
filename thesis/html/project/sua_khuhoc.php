<?php
    include_once("header.php");
?>
<?php
$ma_val=$_GET['id'];$diachi_val = ""; $sodienthoai_val = ""; $email_val = ""; $hinhanhkhuonvientruong_val = ""; $matruong_val = "";
$sql = "SELECT * FROM khuhoc WHERE makhuhoc = '$ma_val'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbSua'])){
        $makhuhoc = $_POST['makhuhoc'];
        $diachi = $_POST['diachi'];
        $sodienthoai = $_POST['sodienthoai'];
        $email = $_POST['email'];
        $hinhanhkhuonvientruong = $_POST['hinhanhkhuonvientruong'];
        $matruong = $_POST['matruong'];
        $sql = "UPDATE khuhoc SET diachi = ?, sodienthoai = ?, email = ?, hinhanhkhuonvientruong = ?, matruong = ? WHERE makhuhoc = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $diachi,  $sodienthoai,  $email,   $hinhanhkhuonvientruong, $matruong, $makhuhoc);
                $stmt->execute();
                $stmt->close();
                    header('location:ql_khuhoc.php');
                    exit();
    }
?>
<div class = "container mt-5">
    <form action="sua_khuhoc.php?id=<?php echo $ma_val;?>" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN KHU HỌC</h3>
        <div class = "form-group mt-3">
            <label for = "makhuhoc">Mã khu học: </label>
            <input readonly value = "<?php echo $ma_val;?>" class="form-control" type="text" name="makhuhoc" required placeholder="Mã khu học">
        </div>
        <div class = "form-group mt-3">
            <label for = "diachi">Địa chỉ:</label>
            <input value = "<?php echo $diachi_val;?>" class="form-control" type="text" name="diachi" required placeholder="Địa chỉ">
        </div>

        <div class = "form-group mt-3">
            <label for = "sodienthoai">Số điện thoại:</label>
            <input value = "<?php echo $sodienthoai_val;?>" class="form-control" type="text" name="sodienthoai" required placeholder="Số điện thoại">
        </div>
        
        <div class = "form-group mt-3">
            <label for = "email">Email:</label>
            <input value = "<?php echo $email_val;?>" class="form-control" type="text" name="email" required placeholder="Email">
        </div>
        <div class = "form-group mt-3">
            <label for = "hinhanhkhuonvientruong">Hình ảnh khuôn viên trường:</label>
            <input value = "<?php echo $hinhanhkhuonvientruong_val;?>" class="form-control" type="text" name="hinhanhkhuonvientruong" required placeholder="Hình ảnh khuôn viên trường">
        </div>

        <div class = "form-group mt-3">
            <label for = "matruong">Mã trường:</label>
            <input value = "<?php echo $ma_val;?>" class="form-control" type="text" name="matruong" required placeholder="Mã trường">
        </div>
        
        <input name = "sbSua" class="btn btn-primary mt-3" type="submit" value="Sửa">
    </form>
</div>
<?php
    include_once("footer.php");
?>
