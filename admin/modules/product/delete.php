<?php
$id = $_GET['id'];
$str = "Delete From sanpham Where ID='$id'";
$result = mysqli_query($conn, $str);
if ($result) {
    ?>
    <div class="dangNhap">
        <p><?php echo "Xóa thành công!"; ?></p>
        <p>
            <a href="index.php?mod=product">Danh Sách Sản Phẩm</a>
        </p>
    </div>
    <?php
}
else {
    ?>
    <div class="dangNhap">
        <p><?php echo "Xóa thất bại!"; ?></p>
        <p>
            <a href="index.php?mod=product">Danh Sách Sản Phẩm</a>
        </p>
    </div>
    <?php
}
?>

