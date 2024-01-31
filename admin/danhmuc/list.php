<div class="row">
    <div class="row frmtitle">
        <h2>Danh Sách Loại Hàng</h2>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&ma_loai=".$ma_loai;
                    $xoadm = "index.php?act=xoadm&ma_loai=".$ma_loai;
                    echo'<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$ma_loai.'</td>
                    <td>'.$ten_loai.'</td>
                    <td> <a href = "'.$suadm.'"><input type="button" value="Sửa"></a>  <a href ="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                </tr>';
                }
                ?>
                
                
            </table>

        </div>
        <div class="row mb10">
        <input type="button" id="select-all" value="Chọn Tất Cả">
        <input type="button" id="deselect-all" value="Bỏ Chọn Tất Cả">
        <input type="button" id="delete-selected" value="Xóa Mục Đã Chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
        </div>
    </div>
</div>







<style>
    /* CSS for list.php */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: Arial, sans-serif;
}

.row {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-bottom: 20px;
}

.frmtitle {
    background-color: #f0f0f0; /* light gray */
    padding: 10px;
}

.frmcontent {
    background-color: #fff; /* white */
    border: 1px solid #ccc; /* gray */
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    border: 1px solid #ccc; /* gray */
    padding: 10px;
    text-align: center;
}

input[type="button"] {
    background-color: #000; /* black */
    color: #fff; /* white */
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    margin-right: 5px;
    border-radius: 5px;
}

input[type="button"]:hover {
    background-color: #444; /* dark gray */
}
</style>