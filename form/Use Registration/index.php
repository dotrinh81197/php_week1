<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký người dùng</title>
</head>

<body>
    <?php
    $name = NULL;
    $email = NULL;
    $tel = NULL;
    $name_err = NULL;
    $email_err = NULL;
    $tel_err = NULL;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['telephone'];
        $has_error = false;


        if (empty($name)) {
            $name_err = " * Please fill in the name";

            $has_error = true;
        }
        if (empty($email)) {
            $email_err = " * Please fill in the email";
            $has_error = true;
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_err = " * Error fill in the email";
                $has_error = true;
            }
        }
        if (empty($tel)) {
            $tel_err = " Please fill in the telephone";
            $has_error = true;
        }
        if ($has_error === false) {
            saveDataJSON('user.json', $name, $email, $tel);
            $name = NULL;
            $email = NULL;
            $tel = NULL;
        }
    }


    ?>
    <form action="" method="post">
        <fieldset>


            <table>
                <tr>
                    <td><label for="">Tên người dùng :</label></td>
                    <td><input type="text" value="" name="name" placeholder="Nhập tên người dùng"></td>
                    <td style="color:red"> <?php if (isset($name_err)) echo $name_err; ?></td>
                </tr>
                <tr>
                    <td><label for="">Email :</label></td>
                    <td><input type="email" value="" name="email" placeholder="Nhập tên email"></td>
                    <td style="color:red"> <?php if (isset($email_err)) echo  $email_err ?></td>
                </tr>
                <tr>
                    <td><label for="">Điện thoại: </label></td>
                    <td><input type="tel" value="" name="telephone" placeholder="Nhập số điện thoại người dùng" pattern="[0-9]{10}"></td>
                    <td style="color:red"> <?php if (isset($tel_err)) echo $tel_err ?></td>
                </tr>
                <tr>
                    <td><button type="submit">Đăng ký</button></td>

                </tr>

            </table>
        </fieldset>

    </form>


    <?php

    function saveDataJSON($filename, $name, $email, $tel)
    {

        $contact = [
            'name' => $name,
            'email' => $email,
            'tel' => $tel,
        ];
        $arr_data = loadRegistrations('user.json'); // []

        // đẩy mảng contact vào $array_data
        $arr_data[] = $contact;
        // chuyển mảng dữ liệu > json
        $json_contact = json_encode($arr_data);
        // đưa vào file json
        file_put_contents("user.json", $json_contact);
        echo "<pre>";
        print_r($json_contact);
        echo "</br>";
        echo "</pre>";

        echo "Save succes!!";
    }
    function loadRegistrations($filename)
    {
        $jsondata = file_get_contents($filename); // lấy dữ liệu từ file json ra
        $arr_data = json_decode($jsondata, true); // chuyển json > mảng dữ liệu
        return $arr_data;
    }

    ?>






</body>

</html>