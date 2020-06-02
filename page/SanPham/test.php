<tbody>
    <?php
                    if(!$_SESSION['arMua']){
                header('location:SanPham.php');
                }
                    // Nếu chưa có hoa nào thì chúng ta sẽ quay về trang SanPham.php
                $tongTien = 0;
                foreach($_SESSION['arMua'] as $hoa){
                $thanhTien = $hoa['Gia'] * $hoa['soluong'];
                $tongTien += $thanhTien;
                    ?>
    <tr>

        <td><?php echo $hoa['soluong'];?></td>
        <td><?php echo number_format($hoa['Gia'], 0, ",",".");?> VND</td>
        <td><?php echo number_format($thanhTien, 0, ",",".");?> VND</td>
    </tr>
    <?php
            }
                ?>
    <tr>
        <td colspan=”4″ align=”right”>Tổng tiền: <?php echo number_format($tongTien, 0, ",",".");?> VND
        </td>
    </tr>
</tbody>