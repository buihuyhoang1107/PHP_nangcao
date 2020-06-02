<?php
session_start();  //Session có thể sử dụng sau khi chèn đoạn này
ob_start();  //Sử dụng được hàm header();
	// session_destroy();
  $products = array(

                    'SP01'=> array('SP01','iphone6',9000000,100,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
                    'SP02'=> array('SP02','iphone7',10000000,90,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
                    'SP03'=> array('SP03','iphone7+',9000000,32,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
                    'SP04'=> array('SP04','iphone8',9000000,131,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
                    'SP05'=> array('SP05','iphone8+',9000000,100,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
  );

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <form action="add.php" method="post">
        <div class="container">
            <h2>Basic Table</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Danh sách sản phẩm</th>
                        <th></th>
                        <th></th>
                        <th><a href="GioHang.php">Xem giỏ hàng</a></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Đơn giá</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                foreach($products as $product => $row) {
                ?>
                    <tr>
                        <td><?=$row[0];?></td>
                        <td><?=$row[1];?></td>
                        <td><?=$row[2];?></td>
                        <td><a href="add.php?msp=<?php echo $row[0] ?>" title=""><button type="button"
                                    class="btn btn-primary">Add to card</button></a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>


        </div>
    </form>


</body>

</html>
<?php
ob_end_flush();
?>