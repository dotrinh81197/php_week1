<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Thực hành] Chức năng đăng nhập</title>
</head>

<body>
    <div class="login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username"> </br>
            <input type="password" name="password" placeholder="Password"></br>
            <input type="submit" value="Sign in">
        </form>


    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === 'admin' && $password === 'admin') {
            echo "Welcome $username to website";
        } else {
            echo "Login Erros";
        }
    }

    ?>
</body>

</html>