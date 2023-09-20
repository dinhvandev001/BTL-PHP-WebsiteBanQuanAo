<?php
$id = $_GET['id'];
$str = "SELECT * FROM sanpham WHERE ID=$id";
$result = mysqli_query($conn, $str);
$rows = mysqli_fetch_array($result);
?>
<div class="chiTietSanPham">
    <div class="anhChiTietSanPham">
        <img src="../<?php echo $rows['LinkAnh']; ?>" alt="">
    </div>
    <div class="ttChiTietSanPham">
        <h1>Tên : <?php echo $rows['TenSanPham']; ?></h1>
        <p>
            Giá Bán : <?php echo number_format($rows['GiaBan']); ?> đ
        </p>
        <p>
            Mô Tả : <?php echo $rows['MoTa']; ?>
        </p>
    </div>
</div>
