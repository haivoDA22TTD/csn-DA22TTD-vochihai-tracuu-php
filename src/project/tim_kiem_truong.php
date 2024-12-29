<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data"; 

$conn = new mysqli($servername, $username, $password, $dbname);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matruong = isset($_POST['matruong']) ? $_POST['matruong'] : '';
    $tentruong = isset($_POST['tentruong']) ? $_POST['tentruong'] : '';
    $nganhdaotao = isset($_POST['nganhdaotao']) ? $_POST['nganhdaotao'] : '';


    $sql = "SELECT * FROM truonghoc WHERE matruong LIKE ? OR tentruongtienganh LIKE ? OR tentruongtiengviet LIKE ?";
    $stmt = $conn->prepare($sql);


    $search_term = "%" . $matruong . "%";
    $stmt->bind_param("sss", $search_term, $search_term, $search_term);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li><a  href='ketqua.php?matruong=" . $row['matruong'] . "'>" . $row['tentruongtiengviet'] . "</a></li>";
        }
        echo "</ul>";
    } else {
        echo "Không tìm thấy kết quả.";
    }

    $stmt->close();
}

$conn->close();
?>
