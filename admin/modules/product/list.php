<div class="container">
    <h1>DANH SÁCH SẢN PHẨM</h1>
    <div class="gioHang">
        <div>
            <a href="index.php?mod=product&act=insert">Thêm Sản Phẩm</a>
        </div>
    </div>
    <!-- php  -->
    <?php
        $soproduct = 8;
        $base_url = 'index.php?mod=product&';
        if (isset($_GET['start']))
            $s = $_GET['start'];
        else
            $s = 1;
        $query = mysqli_query($conn, "SELECT * FROM sanpham");
        $tongsodong = mysqli_num_rows($query);
        if ($tongsodong == 0) {
    ?>
        <p>Sản phẩm chưa được cập nhật!</p>
    <?php
        }
        if ($tongsodong >= $soproduct)
            $str = mysqli_query($conn, "SELECT * FROM sanpham limit $s,$soproduct");
        else
            $str = mysqli_query($conn, "SELECT * FROM sanpham");
    ?>
    <?php
    while ($rows = mysqli_fetch_array($str)) {
    ?>
    <div class="gioHang">
        <div>
            <img src="../<?php echo $rows['LinkAnh']; ?>" alt="">
        </div>
        <div class="gioHangTen">
            <p>
                <a href="index.php?mod=product&act=detail&id=<?php echo $rows['ID']; ?>">
                    Tên : <?php echo $rows['TenSanPham']; ?>
                </a>
            </p>
            <p>
                Giá Bán : <?php echo $rows['GiaBan']; ?> đ
            </p>
        </div>
        <div>
            <a href="index.php?mod=product&act=edit&id=<?php echo $rows['ID']; ?>">
                Sửa
            </a>
            <a onclick="return confirm('Chắc chắn xóaa không?')" href="index.php?mod=product&act=delete&id=<?php echo $rows['ID']; ?>">
                Xóa
            </a>
        </div>
    </div>
    <?php
    }
    ?>
    <div class="tongTien">
        <?php
            echo pagenav($base_url, $s, $tongsodong, $soproduct);
        ?>
    </div>
</div>
