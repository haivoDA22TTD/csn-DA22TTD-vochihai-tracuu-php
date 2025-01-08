<?php
    include_once("header.php");
    $sql = "SELECT * FROM truonghoc";
    $result = $conn->query($sql);
?>

<div class = "container mt-5">
    <p ><a class =  "btn btn-primary" href="form_truonghoc.php">Thêm</a></p>
            <hr>
            <table class = "table table-hover" >
                <tr>
                    <th>Mã trường</th>
                    <th>Tên trường tiếng anh</th>
                    <th>Tên trường tiếng việt</th>
                    <th>Website</th>
                    <th>Facebook</th>
                    <th>Mã khu vực</th>
                    <th colspan = "2">Chức năng</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['matruong']; ?></td>
                        <td><?php echo $row['tentruongtienganh']; ?></td>
                        <td><?php echo $row['tentruongtiengviet']; ?></td>
                        <td><?php echo $row['website']; ?></td>
                        <td><?php echo $row['facebook']; ?></td>
                        <td><?php echo $row['makhuvuc']; ?></td>
                        <td><a href="sua_truong_hoc.php?id=<?php echo $row['matruong']; ?>">Sửa</a>
                    </td>
                    <td><a href="xoa_truonghoc.php?id=<?php echo $row['matruong']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
</div>
<?php
    include_once("footer.php");
?>