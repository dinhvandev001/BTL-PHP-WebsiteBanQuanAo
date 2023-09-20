<?php
$id = $_POST['id'];
$n = $_POST['name'];
$p = $_POST['price'];
$idgu = $_POST['id_group'];
$pt = $_POST['photo'];
$d = $_POST['detail'];
$str = "UPDATE sanpham SET TenSanPham='$n', GiaBan='$p', ID_Nhom='$idgu', LinkAnh='$pt', MoTa='$d' WHERE ID=$id";
$result = mysqli_query($conn, $str);
if ($result) {
    ?>
    <div class="dangNhap">
        <p><?php echo "Sửa thành công!"; ?></p>
        <p>
            <a href="index.php?mod=product">Danh Sách Sản Phẩm</a>
        </p>
    </div>
    <?php
}
else {
    ?>
    <div class="dangNhap">
        <p><?php echo "Sửa thất bại!"; ?></p>
        <p>
            <a href="index.php?mod=product">Danh Sách Sản Phẩm</a>
        </p>
    </div>
    <?php
}
?>
