<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="numbers" placeholder="Nhập số lượng số nguyên tố">
        <button type="submit">Print</button>
    </form>


</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $numbers = $_POST['numbers'];


    for ($count = 0, $N = 2; $count < $numbers; $N++) {
        if (isPrime($N)) {
            echo $N . "</br>";
            $count++;
        }
    }
}


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
?>