<?php
    if(is_array($dm)){
        $ma_loai = $dm['ma_loai'] ?? null;
        $ten_loai = $dm['ten_loai'] ?? null;
    }
?>
<div class="container">
    <div class="row">
        <div class=" rowfrmtitle">
            <h2>Sửa Loại hàng</h2>
        </div>
        <div class="frmcontent">
            <form action="index.php?act=updatedm" method="post">
                <div class="rowmb10">
                    Mã Loại <br>
                    <input type="text" name="maloai" value="<?php echo $ma_loai; ?>">
                </div>
                <div class="rowmb10">
                    Tên Loại <br>
                    <input type="text" name="tenloai" value="<?php echo $ten_loai; ?>">
                </div>
                <div class="rowmb10">
                    <input type="hidden" name="ma_loai" value="<?php echo $ma_loai; ?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập Lại">
                    <a href="index.php?act=listdm"><input type="button" value="Danh Sách"></a>
                </div>
                <?php
                if(isset($thongbao) && ($thongbao !=""))
                    echo $thongbao;