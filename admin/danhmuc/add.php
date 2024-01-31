
<div class="container">
    <div class="row">
        <div class=" rowfrmtitle">
            <h2>Thêm Mới Loại hàng</h2>
        </div>
        <div class="frmcontent">
            <form action="index.php?act=adddm" method="post">
                <div class="rowmb10">
                    Mã Loại <br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="rowmb10">
                    Tên Loại <br>
                    <input type="text" name="tenloai" value="">
                </div>
                <div class="rowmb10">
                    <input type="submit" name="themmoi" value="Thêm Mới">
                    <input type="reset" value="Nhập Lại">
                    <a href="index.php?act=listdm"><input type="button" value="Danh Sách"></a>
                </div>
                <?php
                if(isset($thongbao) && ($thongbao !=""))
                    echo $thongbao;
                ?>
            </form>
        </div>
    </div>
</div>