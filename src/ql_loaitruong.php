<?php
    include_once("header.php");
    $sql = "SELECT * FROM loaitruong";
    $result = $conn->query($sql);
?>

<div class = "container mt-5">
    <p ><a class =  "btn btn-primary" href="form_loaitruong.php">Thêm</a></p>
            <hr>
            <table class = "table table-hover" >
                <tr>
                    <th>Mã loại trường</th>
                    <th>Tên loại trường</th>
                    <th colspan = "2">Chức năng</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['maloaitruong']; ?></td>
                        <td><?php echo $row['tenloaitruong']; ?></td>
                        <td><a href="sua_loai_truong.php?id=<?php echo $row['maloaitruong']; ?>">Sửa</a>
                    </td>
                    <td><a href="xoa_loai_truong.php?id=<?php echo $row['maloaitruong']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
</div>
<?php
    include_once("footer.php");
?>