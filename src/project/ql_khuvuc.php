<?php
    include_once("header.php");
    $sql = "SELECT * FROM khuvuc";
    $result = $conn->query($sql);
?>

<div class = "container mt-5">
    <p ><a class =  "btn btn-primary" href="form_khuvuc.php">Thêm</a></p>
            <hr>
            <table class = "table table-hover" >
                <tr>
                    <th>Mã khu vực</th>
                    <th>Tên khu vực</th>
                    <th colspan = "2">Chức năng</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['makhuvuc']; ?></td>
                        <td><?php echo $row['tenkhuvuc']; ?></td>
                        <td><a href="sua_khu_vuc.php?id=<?php echo $row['makhuvuc']; ?>">Sửa</a>
                    </td>
                    <td><a href="xoa_khuvuc.php?id=<?php echo $row['makhuvuc']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
</div>
<?php
    include_once("footer.php");
?>