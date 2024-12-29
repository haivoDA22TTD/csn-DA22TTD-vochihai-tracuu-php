<?php
    include_once("header.php");
?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sbThem'])){
    $manganhdaotao = $_POST['manganhdaotao'];
    $tennganhdaotao = $_POST['tennganhdaotao'];
$sql = "INSERT INTO nganhdaotao(manganhdaotao, tennganhdaotao) VALUES(?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $manganhdaotao, $tennganhdaotao);
    $stmt->execute();
    $stmt->close();
        header('location:ql_nganhdaotao.php');
        exit();
}
?>
<div class = "container mt-5">
    <form action="" method="post">
        <h3 class="title">QUẢN LÝ THÔNG TIN LOẠI TRƯỜNG</h3>
        <div class = "form-group mt-3">
            <label for = "manganhdaotao">Mã ngành đào tạo: </label>
            <input class="form-control" type="text" name="manganhdaotao" required placeholder="Mã ngành đào tạo">
        </div>
        <div class = "form-group mt-3">
            <label for = "tennganhdaotao">Tên ngành đào tạo: </label>
            <input class="form-control" type="text" name="tennganhdaotao" required placeholder="Tên ngành đào tạo">
        </div>
        
        
        <input name = "sbThem" class="btn btn-primary mt-3" type="submit" value="Thêm">
    </form>
</div>
<?php
    include_once("footer.php");
?>
