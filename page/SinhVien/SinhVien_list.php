<?php

$level="../";
include ("../config.php");
include ($level.Data_Part."DB.php");
include ("SinhVien_data.php");
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
        <h3 align="center">DANH SACH NGUOI DUNG</h3>
        <a href="SinhVien_add.php" type="button" class="btn btn-primary">Thêm mới</a>

        <!--    
    <div class="alert alert-success">
      <strong>Thành công! </strong> Thông báo 
    </div> -->

        <?php
        if(isset($_COOKIE['msg'])) { 
        ?>
        <div class="alert alert-success">
            <?=$_COOKIE['msg']?>
        </div>
        <?php } ?>
        <hr>
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Mã Số Sinh Viên</th>
                    <th scope="col">Họ Và Tên</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
        foreach ($SinhViens as $sinhvien ) {
            # code...

       ?>
                <tr>
                    <th scope="row"><?=$sinhvien['MaSinhVien']?></th>
                    <td><?=$sinhvien['HoVaTen']?></td>
                    <td><?=$sinhvien['SoDienThoai']?></td>
                    <td>
                        <a href="SinhVien_detail.php?id=<?=$sinhvien['MaSinhVien']?>" type="button"
                            class="btn btn-default">Xem</a>
                        <a href="category_edit.php?id=<?=$sinhvien['MaSinhVien']?>" type="button"
                            class="btn btn-success">Sửa</a>
                        <a href="SinhVien_delete.php?id=<?=$sinhvien['MaSinhVien']?>" type="button"
                            class="btn btn-warning">Xóa</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>