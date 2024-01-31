<?php
include "../model/pdo.php";
include "header.php";
//controller
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'adddm':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                $sql = "insert into loai_hang(ten_loai) values('$tenloai')";
                pdo_execute($sql);
                $thongbao = "Thêm thành công";
            }
            
            include "danhmuc/add.php";
            break;

        case 'listdm':
            $sql = "Select * from loai_hang order by ten_loai";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['ma_loai']) && ($_GET['ma_loai']>0)){
                $sql = "delete from loai_hang where ma_loai=".$_GET['ma_loai'];
                pdo_execute($sql);
            }
            $sql = "Select * from loai_hang order by ten_loai";
            $listdanhmuc = pdo_query($sql);
            
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if(isset($_GET['ma_loai']) && ($_GET['ma_loai']>0)){
                $sql = "Select * loai_hang where ma_loai=".$_GET['ma_loai'];
                $danhmuc = pdo_query_one($sql);
            }
            
            include "danhmuc/update.php";

        default:
            include "home.php";
            break;
    }
    }else {
        include "home.php";
}
include "footer.php";
?>