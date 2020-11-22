<?php

$amount =  $_POST['inventment_amount'];

$rate = $_POST['rate'] / 100;

$years = $_POST['years'];

if ($amount <= 0 || $rate <= 0 || $years <= 0) {
    echo "Please enter number >0 </br>";
} else {
    $future_value_1y = $amount + $amount * $rate;

    $present_value = $future_value_1y;

    for ($i = 1; $i < $years; $i++) {

        $future_value = $present_value + ($present_value * $rate);
        $present_value = $future_value;
    }

    echo "<h1>Future value is :</h1>" . "<h2>$present_value $</h2>";
}

//1 năm = vốn + vốn *lãi ;
// echo $future_value_1y;

// 2 năm = 1 năm + 1 năm*lãi;
//3 năm = 2 năm + 2 năm *lãi
