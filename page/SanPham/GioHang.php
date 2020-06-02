<?php
     session_start();
?>


<html>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Basic Table</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php $sum=0; ?>
                <?php foreach( $_SESSION['products'] as $key => $row )  { 

          $sum += $row[3]*$row[2];
      	?>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo number_format($row[2] )?>VND</td>
                    <td><?php echo $row[3] ?></td>

                    <td><img style="width: 20%;height: 10%;" src="<?php echo $row[4] ?>"></td>
                    <td><?php echo $row['time'] ?></td>

                    <td>
                        <a class="btn btn-danger" href="delete.php?msp=<?php echo $row[0] ?>" title="">xoa gio
                            hang</a>
                    </td>
                </tr>



                <?php } ?>

                <tr>
                    <td colspan="2" style="color:red"> Tong tien</td>
                    <td colspan="5"><?php echo number_format($sum); ?></td>
                </tr>
            </tbody>
        </table>
        <a href="SanPham.php">Quay lại</a>
    </div>
</body>

</html>
<?php
     ob_end_flush();
?>