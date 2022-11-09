<?php

$sql = "SELECT * FROM  admins WHERE emailAdmin='$emailAdmin'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['luu'])) {
    $linkImg = $_POST['img'];
    $sqlUpdate = "UPDATE admins SET img='$linkImg' WHERE emailAdmin='$emailAdmin'";
    $resultUpdate = mysqli_query($conn, $sqlUpdate);
    if ($resultUpdate) {
        header('Location: pageTaiKhoan.php');
    } else {
        echo '<script>alert("Cập nhật ảnh đại diện thất bại!");</script>';
    };
};

?>


<div class="col__right__container pageQLTaiKhoan">

    <p>Tài khoản</p>

    <div class="col__right__container__table" style="padding-bottom: 40px;">

        <div class="app__taikhoan">

            <div onclick="updateImg()" class="app__taikhoan__avarta">
                <i class="fas fa-camera"></i>
                <img src="<?php echo $row['img']; ?>" alt="">
            </div>

            <h3><?php echo $row['nameAdmin']; ?></h3>

            <div class="app__taikhoan__account">
                <p><i class="far fa-envelope"></i> <?php echo $row['emailAdmin']; ?></p>
                <p><i class="fas fa-lock"></i> <?php echo $row['passAdmin']; ?></p>
            </div>

            <form class="app__taikhoan__updateImg" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <div class="app__taikhoan__updateImg__container">

                    <i onclick="closeUpdateImg()" class="fas fa-times"></i>

                    <h3>Cập nhật ảnh đại diện</h3>

                    <div class="app__taikhoan__updateImg__input">
                        <i class="far fa-image"></i> <input type="text" autocomplete="off" placeholder="Nhập địa chỉ ảnh..." required name="img">
                    </div>

                    <button name="luu">Lưu</button>

                </div>

            </form>

        </div>

        <div class="huongdan_lay_linkImg">
            <h3>Hướng dẫn lấy link ảnh</h3>
            <p><b>Bước 1:</b> Lên <b>google</b> hoặc <b>facebook</b> tìm ảnh mình muốn chọn để cập nhật.</p>
            <p><b>Bước 2:</b> Click chuột phải vào ảnh, sau đó chọn sao chép địa chỉ hình ảnh (như hình bên dưới).</p>
            <img src="./image/huongdan.png" alt="">
            <p><b>Bước 3:</b> Dán link vừa coppy vào và bấm lưu.</p>
        </div>

    </div>

    <a href="pageTrangChu.php" class="col__right__container__nutBam__troLai"><i class="fas fa-chevron-left"></i> Về
        trang chủ</a>

</div>