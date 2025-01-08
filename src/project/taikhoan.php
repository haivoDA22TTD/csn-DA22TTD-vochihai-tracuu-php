<?php
    include_once("header.php");
    $sql = "SELECT * FROM taikhoan";
    $result = $conn->query($sql);
?>

<div class = "container mt-5">
    <p ><a class =  "btn btn-primary" href="them.php">Thêm</a></p>
            <hr>
            <table class = "table table-hover" >
                <tr>
                    <th>Tài Khoản</th>
                    <th>Quyền</th>
                    <th colspan = "2">Chức năng</th>
                </tr>
                <?php while ($user = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $user['tentaikhoan']; ?></td>
                        <td><?php echo $user['quyen']; ?></td>
                        <td><a href="sua.php?id=<?php echo $user['id']; ?>">Sửa</a>
                    </td>
                    <td><a href="xoa.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
</div>
<?php
    include_once("footer.php");
?>