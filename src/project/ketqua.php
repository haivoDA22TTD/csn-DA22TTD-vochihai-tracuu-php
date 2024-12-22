<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$conn = new mysqli($servername, $username, $password, $dbname);


$matruong = isset($_GET['matruong']) ? $_GET['matruong'] : '';


$sql = "SELECT * FROM truonghoc WHERE matruong = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matruong);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<div class='container'>";
    echo "<h1 class='school'>" . $row['tentruongtiengviet'] . "</h1>";
    echo "<div class='school-info'>";
    echo "<p><strong>Tên tiếng Anh:</strong> " . $row['tentruongtienganh'] . "</p>";
    echo "<p><strong>Website:</strong> <a href='" . $row['website'] . "' target='_blank'>" . $row['website'] . "</a></p>";
    echo "<p><strong>Facebook:</strong> <a href='" . $row['facebook'] . "' target='_blank'>" . $row['facebook'] . "</a></p>";
    echo "<p><strong>Khu vực:</strong> " . $row['makhuvuc'] . "</p>";
    echo "</div>";


    echo "<div class='links'>";
    echo "<p><a href='diemchuan.php?matruong=" . $matruong . "' class='button'>Xem điểm chuẩn</a></p>";
    echo "<p><a href='hedaotao.php?matruong=" . $matruong . "' class='button'>Xem hệ đào tạo</a></p>";
    echo "<p><a href='tohopxettuyen.php?matruong=" . $matruong . "' class='button'>Xem tổ hợp xét tuyển</a></p>";
    echo "<p><a href='nganhdaotao.php?matruong=" . $matruong . "' class='button'>Xem ngành đào tạo</a></p>";
    echo "<p><a href='phuongthucxettuyen.php?matruong=" . $matruong . "' class='button'>Xem phương thức xét tuyển</a></p>";
    echo "<p><a href='khuvuc.php?matruong=" . $matruong . "' class='button'>Xem khu vực</a></p>";
    echo "<p><a href='khuhoc.php?matruong=" . $matruong . "' class='button'>Xem khu học</a></p>";
    echo "</div>";

    echo "</div>";
} else {
    echo "<p class='error-message'>Không tìm thấy thông tin trường.</p>";
}

$stmt->close();
$conn->close();
?>


<style>
    body {
        background:#fff;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        border-radius: 8px;
        margin-top: 30px;
    }
    h1.school-name {
        font-size: 2em;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }
    .school-info {
        margin-bottom: 20px;
    }
    .school-info p {
        font-size: 1.1em;
        line-height: 1.6;
    }
    .school-info strong {
        color: #333;
    }
    .links {
        margin-top: 30px;
    }
    .links p {
        font-size: 1.1em;
    }
    .links a.button {
        display: inline-block;
        margin: 10px 0;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }
    .links a.button:hover {
        background-color: #0056b3;
    }
    .error-message {
        text-align: center;
        color: red;
        font-size: 1.2em;
    }
</style>
