<?php

$sql1 = "SELECT * FROM xep_loai WHERE lop LIKE '%x'AND namHoc LIKE '%2021-2022%'";
$sql2 = "SELECT * FROM xep_loai WHERE lop LIKE '%x'AND namHoc LIKE '%2021-2022%'";
$sql3 = "SELECT * FROM xep_loai WHERE lop LIKE '%x'AND namHoc LIKE '%2021-2022%'";
$kqSearch = '';
$thongBao = '';
if (isset($_POST['xemXepLoai'])) {
    $lop = $_POST['lop'];
    $namHoc = $_POST['namHoc'];
    $kqSearch = '<div class="col__right__container__table__kqSearch">
                    <h3>Kết quả tìm kiếm: [ Lớp: ' . $lop . ', Năm học: ' . $namHoc . ' ]</h3>
                </div>';
    $sql1 = "SELECT * FROM xep_loai WHERE lop LIKE '%$lop%'AND namHoc LIKE '%$namHoc%'";
    $sql2 = "SELECT * FROM xep_loai WHERE lop LIKE '%$lop%'AND namHoc LIKE '%$namHoc%'";
    $sql3 = "SELECT * FROM xep_loai WHERE lop LIKE '%$lop%'AND namHoc LIKE '%$namHoc%'";
};

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);


?>

<div class="col__right__container pageXepLoai">

    <p>Xếp loại</p>

    <div class="col__right__container__table">

        <h3>BẢNG TỔNG HỢP ĐÁNH GIÁ KẾT QUẢ RÈN LUYỆN SINH VIÊN</h3>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form">

            <div class="col__right__container__table__from">

                <div class="thongtin">

                    <div class="col__right__container__table__from__item">
                        <label>Lớp:</label><br>
                        <select name="lop" required>
                            <option value="">--- Chọn lớp ---</option>
                            <option value="DC19CNTT">DC19CNTT</option>
                            <option value="DC20CNTT">DC20CNTT</option>
                            <option value="DC21CNTT">DC21CNTT</option>
                            <option value="DC22CNTT">DC22CNTT</option>
                        </select>
                    </div>

                    <div class="col__right__container__table__from__item">
                        <label>Năm học:</label><br>
                        <select name="namHoc" required>
                            <option value="">--- Chọn năm học ---</option>
                            <option value="2021-2022">2021-2022</option>
                            <option value="2022-2023">2022-2023</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2024-2025">2024-2025</option>
                            <option value="2025-2026">2025-2026</option>
                        </select>
                    </div>

                </div>

                <div class="col__right__container__table__from__item">
                    <label for=""> </label><br>
                    <button class="col__right__container__nutBam__nhapDiem" name="xemXepLoai">Xem</button>
                </div>

            </div>

        </form>

        <div class="boLoc_search">

            <div class="col__right__container__table__xemTheo">
                <button onclick="hocKi1()" class="hocKi1 active">Học kì 1</button>
                <button onclick="hocKi2()" class="hocKi2">Học kì 2</button>
                <button onclick="caNam()" class="caNam">Cả năm</button>
            </div>

            <?php echo $kqSearch ?>

        </div>

        <!-- Bảng học kỳ 1 -->
        <table class="hocKi1">

            <tr class="main">
                <th style="width:5%; height: 50px;">STT</th>
                <th>Họ và tên</th>
                <th>Điểm học kì 1</th>
                <th>Xếp loại</th>
            </tr>

            <?php
            $stt = 0;
            if (mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_array($result1)) {
                    $stt++;
                    $soMang = count($row);
                    $xeploai = '';
                    if ($row['diemHK1'] >= 90 && $row['diemHK1'] <= 100) {
                        $xeploai = 'Xuất sắc';
                    } else if ($row['diemHK1'] >= 80 && $row['diemHK1'] < 90) {
                        $xeploai = 'Tốt';
                    } else if ($row['diemHK1'] >= 65 && $row['diemHK1'] < 80) {
                        $xeploai = 'Khá';
                    } else if ($row['diemHK1'] >= 50 && $row['diemHK1'] < 65) {
                        $xeploai = 'Trung bình';
                    } else if ($row['diemHK1'] >= 35 && $row['diemHK1'] < 50) {
                        $xeploai = 'Yếu';
                    } else if ($row['diemHK1'] < 35) {
                        $xeploai = 'Kém';
                    }
            ?>
                    <tr>
                        <td style="width:5%; text-align: center;"><?php echo $stt ?></td>
                        <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                            <?php echo $row['hoVaTen'] ?>
                        </td>
                        <td style="text-align: center;"><?php echo $row['diemHK1'] ?></td>
                        <td style="text-align: center;">
                            <h3 style="font-size: 16px;"><?php echo $xeploai ?></h3>
                        </td>
                    </tr>
            <?php }
            } else {
                $thongBao = 'Danh sách trống!';
            } ?>

        </table>
 
        <!-- Bảng học kỳ 2 -->
        <table class="hocKi2 active">

            <tr class="main">
                <th style="width:5%; height: 50px;">STT</th>
                <th>Họ và tên</th>
                <th>Điểm học kì 2</th>
                <th>Xếp loại</th>
            </tr>

            <?php
            $stt = 0;
            if (mysqli_num_rows($result2) > 0) {
                while ($row = mysqli_fetch_array($result2)) {
                    $stt++;
                    $xeploai = '';
                    if ($row['diemHK2'] >= 90 && $row['diemHK2'] <= 100) {
                        $xeploai = 'Xuất sắc';
                    } else if ($row['diemHK2'] >= 80 && $row['diemHK2'] < 90) {
                        $xeploai = 'Tốt';
                    } else if ($row['diemHK2'] >= 65 && $row['diemHK2'] < 80) {
                        $xeploai = 'Khá';
                    } else if ($row['diemHK2'] >= 50 && $row['diemHK2'] < 65) {
                        $xeploai = 'Trung bình';
                    } else if ($row['diemHK2'] >= 35 && $row['diemHK2'] < 50) {
                        $xeploai = 'Yếu';
                    } else if ($row['diemHK2'] >= 1 && $row['diemHK2'] < 35) {
                        $xeploai = 'Kém';
                    } else if ($row['diemHK2'] < 1) {
                        $xeploai = 'Chưa nhập điểm';
                    }


            ?>
                    <tr>
                        <td style="width:5%; text-align: center;"><?php echo $stt ?></td>
                        <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                            <?php echo $row['hoVaTen'] ?>
                        </td>
                        <td style="text-align: center;"><?php echo $row['diemHK2'] ?></td>
                        <td style="text-align: center;">
                            <h3 style="font-size: 16px;"><?php echo $xeploai ?></h3>
                        </td>
                    </tr>
            <?php }
            } else {
                $thongBao = 'Danh sách trống!';
            } ?>

        </table>

        <!-- Bảng cả năm -->
        <table class="caNam active">

            <tr class="main">
                <th rowspan="2" style="height: 50px;">STT</th>
                <th rowspan="2">Họ và tên</th>
                <th style="padding: 10px 0;" colspan="2">Học kỳ 1</th>
                <th style="padding: 10px 0;" colspan="2">Học kỳ 2</th>
                <th style="padding: 10px 0;" colspan="2">Cả năm</th>
            </tr>
            <tr class="main">
                <th style="padding: 10px 0;">Điểm</th>
                <th style="padding: 10px 0;">Xếp loại</th>
                <th style="padding: 10px 0;">Điểm</th>
                <th style="padding: 10px 0;">Xếp loại</th>
                <th style="padding: 10px 0;">Điểm</th>
                <th style="padding: 10px 0;">Xếp loại</th>
            </tr>

            <?php
            $stt = 0;
            if (mysqli_num_rows($result3) > 0) {
                while ($row = mysqli_fetch_array($result3)) {
                    $stt++;
                    // Học kì 1
                    $xeploai1 = '';
                    if ($row['diemHK1'] >= 90 && $row['diemHK1'] <= 100) {
                        $xeploai1 = 'Xuất sắc';
                    } else if ($row['diemHK1'] >= 80 && $row['diemHK1'] < 90) {
                        $xeploai1 = 'Tốt';
                    } else if ($row['diemHK1'] >= 65 && $row['diemHK1'] < 80) {
                        $xeploai1 = 'Khá';
                    } else if ($row['diemHK1'] >= 50 && $row['diemHK1'] < 65) {
                        $xeploai1 = 'Trung bình';
                    } else if ($row['diemHK1'] >= 35 && $row['diemHK1'] < 50) {
                        $xeploai1 = 'Yếu';
                    } else if ($row['diemHK1'] < 35) {
                        $xeploai1 = 'Kém';
                    }
                    // Học kì 2
                    $xeploai2 = '';
                    if ($row['diemHK2'] >= 90 && $row['diemHK2'] <= 100) {
                        $xeploai2 = 'Xuất sắc';
                    } else if ($row['diemHK2'] >= 80 && $row['diemHK2'] < 90) {
                        $xeploai2 = 'Tốt';
                    } else if ($row['diemHK2'] >= 65 && $row['diemHK2'] < 80) {
                        $xeploai2 = 'Khá';
                    } else if ($row['diemHK2'] >= 50 && $row['diemHK2'] < 65) {
                        $xeploai2 = 'Trung bình';
                    } else if ($row['diemHK2'] >= 35 && $row['diemHK2'] < 50) {
                        $xeploai2 = 'Yếu';
                    } else if ($row['diemHK2'] >= 1 && $row['diemHK2'] < 35) {
                        $xeploai2 = 'Kém';
                    } else if ($row['diemHK2'] < 1) {
                        $xeploai2 = 'Chưa nhập điểm';
                    }
                    // Cả năm
                    if ($row['diemHK2'] < 1) {
                        $xeploaiCN = '...';
                        $diemCaNam = '...';
                    } else {
                        $diemCaNam = ($row['diemHK1'] + $row['diemHK2']) / 2;
                        $xeploaiCN = '';
                        if ($diemCaNam >= 90 && $diemCaNam <= 100) {
                            $xeploaiCN = 'Xuất sắc';
                        } else if ($diemCaNam >= 80 && $diemCaNam < 90) {
                            $xeploaiCN = 'Tốt';
                        } else if ($diemCaNam >= 65 && $diemCaNam < 80) {
                            $xeploaiCN = 'Khá';
                        } else if ($diemCaNam >= 50 && $diemCaNam < 65) {
                            $xeploaiCN = 'Trung bình';
                        } else if ($diemCaNam >= 35 && $diemCaNam < 50) {
                            $xeploaiCN = 'Yếu';
                        } else if ($diemCaNam >= 1 && $diemCaNam < 35) {
                            $xeploaiCN = 'Kém';
                        }
                    }
            ?>
                    <tr>
                        <td style="width:5%; text-align: center;"><?php echo $stt ?></td>

                        <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                            <?php echo $row['hoVaTen'] ?>
                        </td>

                        <td style="text-align: center;"><?php echo $row['diemHK1'] ?></td>
                        <td style="text-align: center;">
                            <h3 style="font-size: 17px;"><?php echo $xeploai1 ?></h3>
                        </td>

                        <td style="text-align: center;"><?php echo $row['diemHK2'] ?></td>
                        <td style="text-align: center;">
                            <h3 style="font-size: 17px;"><?php echo $xeploai2 ?></h3>
                        </td>

                        <td style="text-align: center;"><?php echo $diemCaNam ?> </td>
                        <td style="text-align: center;">
                            <h3 style="font-size: 17px;"><?php echo $xeploaiCN ?></h3>
                        </td>
                    </tr>
            <?php }
            } else {
                $thongBao = 'Danh sách trống!';
            } ?>

        </table>
        <h3 style="font-size: 17px;"><?php echo $thongBao ?></h3>

    </div>

    <a href="pageTrangChu.php" class="col__right__container__nutBam__troLai"><i class="fas fa-chevron-left"></i> Về
        trang chủ</a>

</div>