<?php
    $cart = $_SESSION['cart'];
    $str = "SELECT * FROM sanpham WHERE id IN ($cart)";
    $result = mysqli_query($conn, $str);
    $total = 0;
    while ($rows = mysqli_fetch_array($result)) {
        $total = $total + $rows['GiaBan'];
    ?>
        <div class="gioHang">
            <div>
                <img src="<?php echo $rows['LinkAnh']; ?>" alt="">
            </div>
            <div class="gioHangTen">
                <p>Tên : <?php echo $rows['TenSanPham']; ?></p>
                <p>Giá Bán : <?php echo $rows['GiaBan']; ?></p>
            </div>
            <div>
                <a href="index.php?mod=cart&act=del_cart&id=<?php echo $rows['ID']; ?>"> Xóa </a>
            </div>
        </div>
        <hr>
    <?php
        }
    ?>
    <div class="tongTien">
        Tổng tiền : 
        <?php
            $t = number_format($total);
            echo " $t đ";
        ?>
    </div>




