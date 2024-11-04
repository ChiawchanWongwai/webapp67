<?php
    $price = intval($_POST['price']);
    $count = intval($_POST['count']);
    $total = $price * $count;
    $tax = $total * 0.07;
    $summation = $total + $tax;
 
    echo "ราคาสินค้าต่อชิ้น = ".$price."<br>";
    echo "จำนวนชิ้นที่ซื้อ = ".$count."<br>";
    echo "ราคารวม = ".$total."<br>";
    echo "ภาษีมูลค่าเพิ่ม = ".$tax."<br>";
    echo "ราคาสุทธิ = ".$summation."<br>";
 
?>