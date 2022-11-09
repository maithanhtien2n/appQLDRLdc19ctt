<?php

$sql = "SELECT * FROM admins";
$result = mysqli_query($conn, $sql);

?>


<div class="col__right__container pageQLTaiKhoan">

    <p>Quản lý tài khoản</p>

    <div class="col__right__container__table" style="padding-bottom: 40px; background: #555555;">

        <h3 style="color: #fff;">DANH SÁCH ADMIN QUẢN LÝ ĐIỂM RÈN LUYỆN</h3>

        <div class="ql__admin__gachNganCach"></div>

        <div class="ql__admin">

            <?php
            $stt = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $stt++;
            ?>
                    <div class="ql__admin__item">

                        <img src="<?php echo $row['img'] ?>" alt="">

                        <div class="ql__admin__item__content">
                            <h3><?php echo $row['nameAdmin'] ?></h3>
                            <p><i class="far fa-envelope"></i> <?php echo $row['emailAdmin'] ?></p>
                            <p class="btnSTT"><?php echo $stt ?></p>
                        </div>

                    </div>
            <?php }
            } ?>

        </div>

    </div>

    <a href="pageTrangChu.php" class="col__right__container__nutBam__troLai"><i class="fas fa-chevron-left"></i> Về
        trang chủ</a>

</div>