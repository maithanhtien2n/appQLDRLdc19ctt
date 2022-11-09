<?php

session_start();
ob_start();
include "./connectDatabase/conDatabase.php";

if (isset($_POST['dangky'])) {
    $hovaten = $_POST['hovaten'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $passXN = $_POST['passXN'];
    $img = $_POST['img'];

    if ($pass != $passXN) {
        echo '<script>alert("Mật khẩu xác nhận không chính xác!");</script>';
    } else {
        $sql = " INSERT INTO  admins (nameAdmin, emailAdmin, passAdmin, img) VALUES ('$hovaten', '$email', '$pass', '$img') ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>alert("Đăng ký thành công!");</script>';
        } else {
            echo '<script>alert("Đăng ký không thành công!");</script>';
        }
    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./css/register.css">
    <title>Đăng ký</title>
</head>

<body>

    <div class="app__register">

        <!-- <div class="app__register__text">
            <h3>R E G I S T E R</h3>
        </div> -->

        <div class="register__container">

            <h3>ĐĂNG KÝ TÀI KHOẢN</h3>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <div class="register__container__account">
                    <h4>Họ và tên</h4>
                    <input type="text" name="hovaten" required autocomplete="off">
                </div>

                <div class="register__container__account">
                    <h4>Tài khoản</h4>
                    <input type="email" name="email" required autocomplete="off">
                </div>

                <div class="register__container__password" required autocomplete="off">
                    <h4>Mật khẩu</h4>
                    <input type="password" name="pass">
                </div>

                <div class="register__container__password">
                    <h4>Xác nhận mật khẩu</h4>
                    <input type="password" name="passXN" required autocomplete="off">
                </div>

                <div class="register__container__dk">
                    <a href="login.php">Đăng nhập!</a>
                </div>

                <input type="text" name="img" style="opacity: 0;" value="./image/avata.jpg">

                <input class="btnDangKy" onclick="dangky()" type="submit" name="dangky" value="REGISTER">

            </form>

        </div>

    </div>

</body>

</html>