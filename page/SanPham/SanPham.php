<?php
session_start();  //Session có thể sử dụng sau khi chèn đoạn này
ob_start();  //Sử dụng được hàm header();
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
                    <tr>
                        <td><input type="text" name="Ma" value="SP1" readonly></td>
                        <td><input type="text" name="Ten" value="Iphone 4 32GB" readonly></td>
                        <td><input type="text" name="Gia" value="5.000.000" readonly></td>
                        <!-- <td name=" submit"><a href="add.php?id=SP1">Add to cart</a></td> -->
                        <td><input type="submit" name="submit" value="Add to cart"></input></td>
                    </tr>
                    <tr>
                        <td name="Ma">SP2</td>
                        <td name="Ten">Ipad Mini 16GB</td>
                        <td name="Gia">8.000.000</td>
                        <td name="submit"><a href="#">Add to cart</a></td>
                    </tr>

                    <tr>
                        <td name="Ma">SP3</td>
                        <td name="Ten">Iphone 5S 32GB</td>
                        <td name="Gia">7.000.000</td>
                        <td name="submit"><a href="#">Add to cart</a></td>
                    </tr>

                    <tr>
                        <td name="Ma">SP4</td>
                        <td name="Ten">Iphone 6 32GB</td>
                        <td>10.000.000</td>
                        <td name="submit"><a href="#">Add to cart</a></td>
                    </tr>
                </tbody>
            </table>


        </div>
    </form>


</body>

</html>
<?php
ob_end_flush();
?>