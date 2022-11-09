<header class="col__right__header">

    <?php

    if (isset($_SESSION['email'])) {

        $emailAdmin = $_SESSION['email'];

        $sql = "SELECT * FROM  admins WHERE emailAdmin='$emailAdmin'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>

        <div onclick="btnUser()" class="col__right__home__header__user">
            <img src="<?php echo $row['img']; ?>" alt="">
            <p><?php echo $emailAdmin; ?> <i class="far fa-angle-down"></i></p>
            <div class="col__right__home__header__user__logout">
                <h3><?php echo $row['nameAdmin']; ?></h3>
                <a href="pageTaiKhoan.php"><button class="btnQLTaiKhoan"><b>Tài khoản</b></button></a><br><br>
                <a class="btnLogOut" href="index.php">Đăng xuất</a>
                <div class="arrow-up"></div>
            </div>
        </div>

    <?php } ?>

</header>