<?php
    include_once("header.php");
    $sql = "SELECT * FROM khuhoc";
    $result = $conn->query($sql);
?>

<div class = "container mt-5">
    <p ><a class =  "btn btn-primary" href="form_khuhoc.php">Thêm</a></p>
            <hr>
            <table class = "table table-hover" >
                <tr>
                    <th>Mã khu học</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Hình ảnh khuôn viên trường</th>
                    <th>Mã trường</th>
                    <th colspan = "2">Chức năng</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['makhuhoc']; ?></td>
                        <td><?php echo $row['diachi']; ?></td>
                        <td><?php echo $row['sodienthoai']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['hinhanhkhuonvientruong']; ?></td>
                        <td><?php echo $row['matruong']; ?></td>
                        <td><a href="sua_khuhoc.php?id=<?php echo $row['makhuhoc']; ?>">Sửa</a>
                    </td>
                    <td><a href="xoa_khuhoc.php?id=<?php echo $row['makhuhoc']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
</div>
<?php
    include_once("footer.php");
?>