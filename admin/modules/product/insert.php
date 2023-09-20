<div class="editSanPham dangNhap">
    <form action="index.php?mod=product&act=xl_insert" method="POST">
        <table>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <tr>
                <td>Tên : </td>
                <td>
                    <input type="text" name="name" size="30" value="" />
                </td>
            </tr>
            <tr>
                <td>Giá Bán : </td>
                <td>
                    <input type="text" name="price" size="30" value="" />
                </td>
            </tr>
            <?php
                $str = "SELECT * FROM nhomsanpham";
                $result = mysqli_query($conn, $str);
            ?>
            <tr>
                <td>Loại : </td>
                <td>
                    <style>
                        #se
                        {
                            width: 237px;
                        }
                    </style>
                    <select name="id_group" id="se">
                    <?php
                        while ($rows = mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $rows['ID']; ?>">
                        <?php echo $rows['NhomSanPham']; ?>
                    </option>
                    <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Link Ảnh : </td>
                <td>
                    <input type="text" name="photo" size="30" value="" />
                </td>
            </tr>
            <tr>
                <td>Mô Tả : </td>
                <td>
                    <textarea name="detail" rows="5" cols="29"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="sb">
                    <input type="submit" value="Thêm" />
                </td>
            </tr>
        </table>
    </form>
</div>