<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng Calculator</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first = $_POST['first_Operand'];
        $second = $_POST['second_Operand'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case '+':
                $result = $first + $second;
                break;
            case '-':
                $result = $first - $second;
                break;
            case '*':
                $result = $first * $second;
                break;
            case '/':
                try {
                    if ($second == 0) {
                        throw new Exception("Error division by 0", 1);
                    } else {
                        $result = $first / $second;
                    }
                } catch (Exception $msg) {
                    $error = $msg->getMessage();
                }
                break;
        }
    }




    ?>
    <div>
        <h2>Simple Calculator</h2>

        <form action="" method="POST">
            <table>
                <tr>
                    <td><label for="">First operand</label></td>
                    <td><input type="number" value="" name="first_Operand"></td>
                </tr>
                <tr>
                    <td><label for="">Operator</label></td>
                    <td>
                        <select name="operator" id="">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Second operand</label></td>
                    <td><input type="number" value="" name="second_Operand"></td>
                </tr>
                <tr>
                    <td><button type="submit">Calculate</button></td>
                </tr>
                <tr>
                    <td>
                        <h3>Result:</h3>
                    </td>
                    <td> <?php if (isset($result)) {
                                echo $result;
                            }
                            ?>
                        <?php if (isset($error)) {
                            echo "<h2>$error</h2>";
                        } else ("") ?>
                    </td>


                </tr>
            </table>

        </form>
    </div>

</body>

</html>