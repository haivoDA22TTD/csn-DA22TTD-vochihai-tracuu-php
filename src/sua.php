<?php
    session_start();
    if( !isset($_SESSION['quyen']) || $_SESSION['quyen'] !== 'admin'){
        header('location:dangnhap.php');
        exit();
    }
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $database = 'data';
        $conn = new mysqli($server, $user, $pass, $database);
    if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM taikhoan WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
    }
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_user'])){
                $updateUser = $_POST['updateUser'];
                $updatePass = $_POST['updatePass'];
                $quyen = $_POST['quyen'];
                $sql = "UPDATE taikhoan SET tentaikhoan = ?, matkhau = ?, quyen = ? WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssi", $updateUser, $updatePass, $quyen, $id);
                $stmt->execute();
                    header('location:taikhoan.php');
                    exit();
            }
            $stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sua.css">
</head>
<body>
   <div class="box">
    <form action=""method="post">
    <h1 class = "title">Sửa</h1>
        <input class="input" type="text" name="updateUser" value="<?php echo $user['tentaikhoan'];?>"placeholder="nhap ten nguoi dung">
        <input class="input" type="password"name="updatePass" value="<?php echo $user['matkhau'];?>"placeholder="nhap mat khau">
        <select class="input" name="quyen">
            <option value="user"<?php echo ($user['quyen'] === 'user')? 'selected': '';?>>user</option>
            <option value="admin"<?php echo ($user['quyen'] === 'admin')? 'selected': '';?>>admin</option>
        </select>
        <input class="btn" type="submit" name="edit_user" value="Sửa">
    </form>
    </div>
</body>
</html>