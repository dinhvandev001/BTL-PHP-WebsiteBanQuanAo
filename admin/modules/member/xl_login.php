<?php
$u = $_POST['user'];
$p = $_POST['pass'];
$str = "SELECT * FROM taikhoan WHERE TenTaiKhoan='$u' AND MatKhau='$p' ";
$result = mysqli_query($conn, $str);
$rows = mysqli_fetch_array($result);
//Nếu đăng nhập thành công (gõ đúng user và pass trong taikhoan) thì gán $_SESSION['ok']= 1
if ($rows) 
{
    $_SESSION['ok'] = 1;
    header('location: index.php');
}
else
{
    ?>
    <div class="dangNhap">
        <p><?php echo "Đăng nhập thất bại!"; ?></p>
    </div>
    <?php
}
?>