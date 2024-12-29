<?php
    session_start();
    if( !isset($_SESSION['quyen']) || $_SESSION['quyen'] !== 'admin' ){
        header('Location:dangnhap.php');
        exit();
    }
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'data';
    $conn = new mysqli($server, $user, $pass, $database);
        
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang người quản trị </title>
  <!--  <link rel="stylesheet" href="nguoiquantri.css">-->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>TRANG QUẢN TRỊ HỆ THỐNG</h1>
  <p>Quản trị viên sẽ thực hiện các chức năng ...</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="taikhoan.php">Tài khoản</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ql_khuvuc.php">Khu vực</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ql_loaitruong.php">Loại trường</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ql_truonghoc.php">Trường học</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ql_khuhoc.php">Khu học</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ql_nganhdaotao.php">Ngành đào tạo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ql_thongtinxettuyen.php">Thông tin xét tuyển</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="form_phuongthucxettuyen.php">Phương thức xét tuyển</a>
      </li>-->
      <!--<li class="nav-item">
        <a class="nav-link" href="form_tohopxettuyen.php">Tổ hợp xét tuyển</a>
      </li>-->
      <!--<li class="nav-item">
        <a class="nav-link" href="form_diemchuan.php">Điểm chuẩn</a>
      </li>-->
    </ul>
  </div>
</nav>