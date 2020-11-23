<?php

function isPrime($number)
{
    $flag = true;
    if ($number == 2) ($flag = true);
    for ($i = 2; $i < ($number); $i++) {
        if ($number % $i === 0) {
            $flag = false;
        }
    }

    return $flag;
}
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo "Số nguyên tố là : $i </br>";
    }
}
