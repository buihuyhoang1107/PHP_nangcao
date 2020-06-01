<?php

$level="../";
include ("../config.php");
include ($level.Data_Part."DB.php");
include ("SinhVien_data.php");


//Truy Vấn câu lệnh
$MSSV = $_GET['id'];
$querys  = DP::run_query("SELECT * FROM `sinhvien` WHERE MaSinhVien=".$MSSV,[],2);

//var_dump($query);
//echo $query;


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <?php  
        foreach ($querys as $query){
        ?>
        <h3 style="text-align: center">DANH SACH CHI TIET NGUOI DUNG</h3>
        <h2>MSSV: <?=$query['MaSinhVien']?></h2>
        <h2>Họ và tên: <?=$query['HoVaTen']?></h2>
        <h2>Số điện thoại: <?=$query['SoDienThoai']?></h2>
        <h2>Email: <?=$query['Email']?></h2>
        <h2>Giới tính: <?=$query['GioiTinh']?></h2>
        <h2>Địa chỉ: <?=$query['DiaChi']?></h2>
        <?php } ?>
    </div>
</body>

</html>