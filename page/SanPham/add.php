<?php
session_start();  //Session có thể sử dụng sau khi chèn đoạn này
ob_start();  //Sử dụng được hàm header();

//echo $_POST['Ma'];
    
echo $_POST['Ma'];
echo $_POST['Ten'];
echo $_POST['Gia'];

if(isset($_POST['submit'])){
    $id = $_POST['Ma'];
    $tenhoa = $_POST['Ten'];
    $soluong = 1;
    $gia = $_POST['Gia'];

    
    if(!isset($_SESSION['arMua'][$id])){
    $_SESSION['arMua'][$id] = array(
    'Ma' => $id,
    'Ten' => $tenhoa,
    'SoLuong' => $soluong,
    'Gia' => $gia
    );

    
    }else{
    $_SESSION['arMua'][$id]['soluong'] += $soluong;
    }
    //header('location:GioHang.php');
    }

    
    ob_end_flush();
?>