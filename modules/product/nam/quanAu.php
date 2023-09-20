<!-- san pham  -->
<?php
    $str = "SELECT * FROM sanpham WHERE ID_Nhom = '3'";
    $result = mysqli_query($conn, $str);
?>
<div class="danhMucSanPham">
    <h2>Quần Âu</h2>
    <hr>
</div>
<div class="sanPham">
    <?php
    while ($rows = mysqli_fetch_array($result)) {
    ?>
    <div class="oSanPham">
        <a href="index.php?mod=product&act=detail&id=<?php echo $rows['ID']; ?>" class="anhSanPham">
            <img src="<?php echo $rows['LinkAnh']; ?>" alt="">
            <p><?php echo $rows['TenSanPham']; ?></p>
            <p><?php echo number_format($rows['GiaBan']); ?> đ</p>
        </a>
        <a href="index.php?mod=cart&act=add_cart&id=<?php echo $rows['ID']; ?>" class="themVaoGio">Thêm vào giỏ</a>
    </div>
    <?php
        }
    ?>
</div>
   