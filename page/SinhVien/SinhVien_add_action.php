<?php
$level="../";
include ("../config.php");
include ($level.Data_Part."DB.php");

    $MSSV = $_POST['MSSV'];
    $HoVaTen = $_POST['HoVaTen'];
    $SoDienThoai = $_POST['SoDienThoai'];
    $Email = $_POST['Email'];
    $GioiTinh = $_POST['gender'];
    $DiaChi = $_POST['DiaChi']; 

    $query = DP::run_query("INSERT INTO `sinhvien`(`MaSinhVien`, `HoVaTen`, `SoDienThoai`, `Email`, `GioiTinh`, `DiaChi`) value(?,?,?,?,?,?)"  ,
    [$MSSV,$HoVaTen,$SoDienThoai,$Email,$GioiTinh,$DiaChi],1);   

    var_dump($query);
    if($query == true)
    {
        setcookie('msg', 'Thêm mới thành công', time() + 5);
        header('Location: SinhVien_list.php');
    }
    else
    {
        setcookie('msg', 'Thêm mới không thành công', time() + 5);
        header('Location: category_add.php');
    }
?>