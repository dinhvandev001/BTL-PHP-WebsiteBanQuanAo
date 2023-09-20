<?php
$n = $_POST['name'];
$p = $_POST['price'];
$idgu = $_POST['id_group'];
$pt = $_POST['photo'];
$d = $_POST['detail'];
$str = "INSERT INTO sanpham VALUES ('','$n','$p','$idgu','$pt','$d')";
$result = mysqli_query($conn, $str);
if ($result) {
    ?>
    <div class="dangNhap">
        <p><?php echo "Thêm thành công!"; ?></p>
        <p>
            <a href="index.php?mod=product">Danh Sách Sản Phẩm</a>
        </p>
    </div>
    <?php
}
else {
    ?>
    <div class="dangNhap">
        <p><?php echo "Thêm thất bại!"; ?></p>
        <p>
            <a href="index.php?mod=product">Danh Sách Sản Phẩm</a>
        </p>
    </div>
    <?php
}
?>

