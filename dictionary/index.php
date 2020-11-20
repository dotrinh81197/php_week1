<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Thực hành] Ứng dụng Từ điển đơn giản</title>
</head>
<style>

</style>

<body>
    <div>
        <h2>Từ điển Anh - Việt</h2>
        <form action="" method="POST">
            <input type="text" name="search" placeholder="Nhập từ cần tìm">
            <button type="submit" value="Tìm kiếm">Tìm kiếm

        </form>

    </div>
    <?php
    $dictionary = array(
        'hello' => 'Xin chào',
        'apple' => 'Táo',
        'book' => 'Quyển sách',
        'computer' => 'Máy tính'
    );
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $searchword = $_POST["search"];
        $flag = 0;
        foreach ($dictionary as $word => $description) {
            if ($word == $searchword) {
                echo ("$word" . " có nghĩa là :" . $description);
                echo "</br>";
                $flag = 1;
            }
        };
        if ($flag == 0) {
            echo "Không tìm thấy từ tìm kiếm";
        };
    }
    ?>


</body>

</html>