<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="display_discount.php" method="post">

        <table>
            <tr>
                <td><label for="">Product Description:</label></td>
                <td><input type="text" value="Iphone 12 64g" name="" placeholder="Mô tả của sản phẩm"></td>
            </tr>
            <tr>
                <td><label for="">List Price</label></td>
                <td><input type="text" value="20000000" name="list_price" placeholder="Giá niêm yết của sản phẩm"></td>

            </tr>
            <tr>
                <td><label for="">Discount Percent (%)</label></td>
                <td><input type="text" value="3" name="discount_percent" placeholder="Tỷ lệ chiết khấu (phần trăm)"> </td>
            </tr>

        </table>
        <button type="submit">Calculate Discount</button>
    </form>
</body>

</html>