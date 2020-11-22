<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="handing.php" method="post">
        <table>
            <tr>
                <td><label for="">Inventment Amount ($)</label>
                </td>
                <td><input type="number" value="1000" name="inventment_amount" placeholder="Enter your's Inventment Amount"></td>
            </tr>
            <tr>
                <td><label for="">Yearly Interest Rate (%)</label>
                </td>
                <td><input type="number" value="5" name="rate" placeholder="Enter Yearly Interest Rate"></td>
            </tr>
            <tr>
                <td><label for="">Number of Years</label>
                </td>
                <td><input type="number" name="years" value="1" placeholder="Enter Number of Years"></td>
            </tr>
        </table>

        <button type="submit">Calculate
    </form>




</body>

</html>