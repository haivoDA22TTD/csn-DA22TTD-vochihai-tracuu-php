<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

echo "Xin chào, " . $_SESSION['tentaikhoan'] . "!<br>";
echo '<a href="logout.php">Đăng xuất</a>';
?>
