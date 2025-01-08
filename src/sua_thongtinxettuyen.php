<?php
    include_once("header.php");
?>
<?php
$ma_val = $_GET["id"]; $ten_val = "";

$sql = "SELECT * FROM thongtinxettuyen WHERE matruong = '$ma_val'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$ma_val = $row["matruong"]; 
$ten_val = $row["manganhdaotao"];
$tohop_val = $row['tohopxettuyen'];
$diemchuan_val = $row['diemchuan'];
$hocphi_val = $row['hocphi'];
$nam_val = $row['nam'];

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbSua'])){
        $matruong = $_POST['matruong'];
        $manganhdaotao = $_POST['manganhdaotao'];
        $tohopxettuyen = $_POST['tohopxettuyen'];
        $diemchuan = $_POST['diemchuan'];
        $hocphi = $_POST['hocphi'];
        $nam = $_POST['nam'];
        
        $sql = "UPDATE thongtinxettuyen SET matruong = ?, manganhdaotao = ?, tohopxettuyen = ?, diemchuan = ?, hocphi = ?, nam = ?  WHERE matruong= ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $matruong, $manganhdaotao,  $tohopxettuyen, $diemchuan,  $hocphi, $nam);
                $stmt->execute();
                $stmt->close();
                    header('location:ql_thongtinxettuyen.php');
                    exit();
     }
?>
<div class = "container mt-5">
    <form action="sua_khu_vuc.php" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN XÉT TUYỂN</h3>
        <div class = "form-group mt-3">
            <label for = "matruong">Mã trường: </label>
            <input value = "<?php echo $ma_val;?>" class="form-control" type="text" name="matruong" required placeholder="Mã trường">
        </div>
        <div class = "form-group mt-3">
            <label for = "manganh">Mã ngành: </label>
            <input value = "<?php echo $ten_val;?>" class="form-control" type="text" name="manganh" required placeholder="Mã ngành">
        </div>
        <div class = "form-group mt-3">
            <label for = "tohopxettuyen">Tổ hợp xét tuyển: </label>
            <input value = "<?php echo $tohop_val;?>" class="form-control" type="text" name="tohopxettuyen" required placeholder="Tổ hợp xét tuyển">
        </div>
        <div class = "form-group mt-3">
            <label for = "diemchuan">Điểm chuẩn: </label>
            <input value = "<?php echo $diemchuan_val;?>" class="form-control" type="text" name="diemchuan" required placeholder="Điểm chuẩn">
        </div>
        <div class = "form-group mt-3">
            <label for = "hocphi">Học phí: </label>
            <input value = "<?php echo $hocphi_val;?>" class="form-control" type="text" name="hocphi" required placeholder="Học phí">
        </div>
        <div class = "form-group mt-3">
            <label for = "nam">Năm: </label>
            <input value = "<?php echo $nam_val;?>" class="form-control" type="text" name="nam" required placeholder="Năm">
        </div>
        
        <input name = "sbSua" class="btn btn-primary mt-3" type="submit" value="Sửa">
    </form>
</div>
<?php
    include_once("footer.php");
?>
