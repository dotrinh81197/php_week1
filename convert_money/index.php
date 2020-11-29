<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">USD</label>
        <input type="number" value="" name="usd" placeholder="Enter USD ">
        <button type="submit">Convert</button> </br>


    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $money_usd = $_POST['usd'];
        if ($money_usd < 0 || empty($money_usd)) {
            echo "Please enter money ";
        } else {
            $rate = 23000;
            $money_vnd = $money_usd * $rate;
            echo $money_usd . " USD = " . $money_vnd . "VND";
        }
    }

    ?>


</body>

</html>