<?php
    include_once("header.php");
?>
<?php
$ma_val = $_GET["id"]; $ten_val = "";
$sql = "SELECT * FROM khuvuc WHERE makhuvuc = '$ma_val'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$ma_val = $row["makhuvuc"];
$ten_val = $row["tenkhuvuc"];


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbSua'])){
        $makhuvuc = $_POST['makhuvuc'];
        $tenkhuvuc = $_POST['tenkhuvuc'];
        $sql = "UPDATE khuvuc SET tenkhuvuc = ? WHERE makhuvuc = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $tenkhuvuc,$makhuvuc);
                $stmt->execute();
                $stmt->close();
                    header('location:ql_khuvuc.php');
                    exit();
    }
?>
<div class = "container mt-5">
    <form action="sua_khu_vuc.php" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN KHU VỰC</h3>
        <div class = "form-group mt-3">
            <label for = "makhuvuc">Mã khu vực: </label>
            <input readonly value = "<?php echo $ma_val;?>" class="form-control" type="text" name="makhuvuc" required placeholder="Mã khu vực">
        </div>
        <div class = "form-group mt-3">
            <label for = "tenkhuvuc">Mã khu vực: </label>
            <input value = "<?php echo $ten_val;?>" class="form-control" type="text" name="tenkhuvuc" required placeholder="Tên khu vực">
        </div>
        
        
        <input name = "sbSua" class="btn btn-primary mt-3" type="submit" value="Sửa">
    </form>
</div>
<?php
    include_once("footer.php");
?>
