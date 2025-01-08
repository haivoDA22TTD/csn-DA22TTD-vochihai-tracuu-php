<?php
    include_once("header.php");
    $sql = "SELECT * FROM nganhdaotao";
    $result = $conn->query($sql);
?>

<div class = "container mt-5">
    <p ><a class =  "btn btn-primary" href="form_nganhdaotao.php">Thêm</a></p>
            <hr>
            <table class = "table table-hover" >
                <tr>
                    <th>Mã ngành đào tạo</th>
                    <th>Tên ngành đào tạo</th>
                    <th colspan = "2">Chức năng</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['manganhdaotao']; ?></td>
                        <td><?php echo $row['tennganhdaotao']; ?></td>
                        <td><a href="sua_nganhdaotao.php?id=<?php echo $row['manganhdaotao']; ?>">Sửa</a>
                    </td>
                    <td><a href="xoa_nganhdaotao.php?id=<?php echo $row['manganhdaotao']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
</div>
<?php
    include_once("footer.php");
?>