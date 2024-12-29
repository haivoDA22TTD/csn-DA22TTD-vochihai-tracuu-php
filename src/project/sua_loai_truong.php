<?php
    include_once("header.php");
?>
<?php
$ma_val = $_GET["id"]; $ten_val = "";
$sql = "SELECT * FROM loaitruong WHERE maloaitruong = '$ma_val'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$ma_val = $row["maloaitruong"];
$ten_val = $row["tenloaitruong"];


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbSua'])){
        $maloaitruong = $_POST['maloaitruong'];
        $tenkhuvuc = $_POST['tenloaitruong'];
        $sql = "UPDATE loaitruong SET tenloaitruong = ? WHERE maloaitruong = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $maloaitruong, $tenloaitruong);
                $stmt->execute();
                    header('location:ql_loaitruong.php');
                    exit();
    }
?>
<div class = "container mt-5">
    <form action="" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN LOẠI TRƯỜNG</h3>
        <div class = "form-group mt-3">
            <label for = "maloaitruong">Mã loại trường: </label>
            <input readonly value = "<?php echo $ma_val;?>" class="form-control" type="text" name="maloaitruong" required placeholder="Mã loại trường">
        </div>
        <div class = "form-group mt-3">
            <label for = "tenloaitruong">Tên loại trường: </label>
            <input value = "<?php echo $ten_val;?>" class="form-control" type="text" name="tenloaitruong" required placeholder="Tên loại trường">
        </div>
        
        
        <input name = "sbSua" class="btn btn-primary mt-3" type="submit" value="Sửa">
    </form>
</div>
<?php
    include_once("footer.php");
?>
