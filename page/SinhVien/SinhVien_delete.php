<?php
$level="../";
include ("../config.php");
include ($level.Data_Part."DB.php");

$MSSV = $_GET['id'];

$query = DP::run_query("DELETE FROM `sinhvien` WHERE MaSinhVien=".$MSSV,[],1);

    //echo $query;
    var_dump($query);
    if($query == true)
    {
        setcookie('msg', '<b>Thành Công </b>: Xóa thành công', time() + 5);
        header('Location: SinhVien_list.php');

    }
    else
    {
        setcookie('msg', 'Xóa không thành công', time() + 5);
        header('Location: SinhVien_list.php');
    }
?>