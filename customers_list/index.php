<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Thực hành] Hiển thị danh sách khách hàng</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>

<body>
    <div>
        <table style="max-width : 100%">
            <caption>
                <h2>Danh sách khách hàng</h2>
            </caption>
            <tr>
                <td>STT</td>
                <td>Tên</td>
                <td>Ngày sinh</td>
                <td>Địa chỉ</td>
                <td>Ảnh</td>
            </tr>

            <?php
            $customers = array(
                '1' => array(
                    'name' => 'Mai Hồng Ngọc',
                    'dayOfbirth' => '03/10/2000',
                    'address' => 'Hà Nội',
                    'img' => '/img/1.png'
                ),
                '2' => array(
                    'name' => 'Lê Thị Mơ',
                    'dayOfbirth' => '13/6/1998',
                    'address' => 'Hà Nội',
                    'img' => '/img/2.png'
                ),
                '3' => array(
                    'name' => 'Mai Văn Hoàn',
                    'dayOfbirth' => '12/5/2001',
                    'address' => 'Đà Nẵng',
                    'img' => '/img/3.png'
                ),
                '4' => array(
                    'name' => 'Nguyễn Văn Vũ',
                    'dayOfbirth' => '23/10/1999',
                    'address' => 'Huế',
                    'img' => '/img/4.png'
                ),
                '5' => array(
                    'name' => 'Trần Hoài Thương',
                    'dayOfbirth' => '24/6/1997',
                    'address' => 'Hải Phòng',
                    'img' => 'img/5.png'
                )


            );

            foreach ($customers as $key => $value) {
                echo '<tr>';
                echo " <td>" . $key . "</td>";
                echo  "<td>" . $value['name'] . "</td>";
                echo  "<td>" . $value['dayOfbirth'] . "</td>";
                echo  "<td>" . $value['address'] . "</td>";
                echo "<td><image src ='" . $value['img'] . "' width = '60px' height ='60px'/></td>";
                echo "</tr>";
            };
            ?>
        </table>
    </div>

</body>

</html>