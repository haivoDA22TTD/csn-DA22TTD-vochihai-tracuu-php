<?php
    include_once("header.php");
    $sql = "SELECT * FROM thongtinxettuyen";
    $result = $conn->query($sql);
?>

<div class = "container mt-5">
    <p ><a class =  "btn btn-primary" href="form_thongtinxettuyen.php">Thêm</a></p>
            <hr>
            <table class = "table table-hover" >
                <tr>
                    <th>Mã trường</th>
                    <th>Mã ngành đào tạo</th>
                    <th>Tổ hợp xét tuyển</th>
                    <th>Điểm chuẩn</th>
                    <th>Học phí</th>
                    <th>Năm</th>
                    <th colspan = "2">Chức năng</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['matruong']; ?></td>
                        <td><?php echo $row['manganhdaotao']; ?></td>
                        <td><?php echo $row['tohopxettuyen']; ?></td>
                        <td><?php echo $row['diemchuan']; ?></td>
                        <td><?php echo $row['hocphi']; ?></td>
                        <td><?php echo $row['nam']; ?></td>
                        <td><a href="sua_thongtinxettuyen.php?id=<?php echo $row['matruong']; ?>">Sửa</a>
                    </td>
                    <td><a href="xoa_thongtinxettuyen.php?id=<?php echo $row['matruong']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
</div>
<?php
    include_once("footer.php");
?>