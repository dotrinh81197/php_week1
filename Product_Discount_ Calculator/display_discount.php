<?php

$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];
if ($list_price <= 0 ||  $discount_percent <= 0) {
    echo "Please enter number ";
} else {
    $discount_amount = $list_price * $discount_percent * 0.01;
    $amount = $list_price - $discount_amount;
    echo " Lượng chiết khấu : $discount_amount " . "</br>";
    echo "Giá sau khi chiết khấu: $amount";
}
