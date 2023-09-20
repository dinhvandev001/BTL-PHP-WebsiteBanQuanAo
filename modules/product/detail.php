<?php
    $id = $_GET['id'];
    $str = "SELECT * FROM sanpham WHERE id = $id";
    $result = mysqli_query($conn, $str);
    $rows = mysqli_fetch_array($result);
?>
<div class="chiTietSanPham">
    <div class="anhChiTietSanPham">
        <img src="<?php echo $rows['LinkAnh']; ?>" alt="">
    </div>
    <div class="ttChiTietSanPham">
        <h1>Tên : <?php echo $rows['TenSanPham']; ?></h1>
        <p>
            Giá Bán : <?php echo number_format($rows['GiaBan']); ?> đ
        </p>
        <p>
            Mô Tả : <?php echo $rows['MoTa']; ?>
        </p>
        <a href="index.php?mod=cart&act=add_cart&id=<?php echo $rows['ID']; ?>" class="themVaoGio">Thêm vào giỏ</a>
    </div>
</div>