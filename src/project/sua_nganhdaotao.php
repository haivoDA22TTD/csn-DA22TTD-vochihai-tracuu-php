<?php
    include_once("header.php");
?>
<?php
$ma_val = $_GET["id"]; $ten_val = "";
$sql = "SELECT * FROM nganhdaotao WHERE manganhdaotao = '$ma_val'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbSua'])){
        $manganhdaotao = $_POST['manganhdaotao'];
        $tennganhdaotao = $_POST['tennganhdaotao'];
        $sql = "UPDATE nganhdaotao SET  tennganhdaotao = ? WHERE manganhdaotao = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $manganhdaotao ,$tennganhdaotao);
                $stmt->execute();
                $stmt->close();
                    header('location:ql_nganhdaotao.php');
                    exit();
    }
?>
<div class = "container mt-5">
    <form action="" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN NGÀNH ĐÀO TẠO</h3>
        <div class = "form-group mt-3">
            <label for = "makhuvuc">Mã ngành đào tạo: </label>
            <input readonly value = "<?php echo $ma_val;?>" class="form-control" type="text" name="makhuvuc" required placeholder="Mã ngành đào tạo">
        </div>
        <div class = "form-group mt-3">
            <label for = "tennganhdaotao">Tên ngành đào tạo: </label>
            <input value = "<?php echo $ten_val;?>" class="form-control" type="text" name="tennganhdaotao" required placeholder="Tên ngành đào tạo">
        </div>
        
        
        <input name = "sbSua" class="btn btn-primary mt-3" type="submit" value="Sửa">
    </form>
</div>
<?php
    include_once("footer.php");
?>
