<?php

$kqSearch = '';

// ---Số lượng---
// - Học kì 1
$SSLop = '...';
$kqXuatSac = '...';
$kqTot = '...';
$kqKha = '...';
$kqTrungBinh = '...';
$kqYeu = '...';
$kqKem = '...';
// - Học kì 2
$SSLop2 = '...';
$kqXuatSac2 = '...';
$kqTot2 = '...';
$kqKha2 = '...';
$kqTrungBinh2 = '...';
$kqYeu2 = '...';
$kqKem2 = '...';
// - Cả năm
$SSLopCN = '...';
$kqXuatSacCN = '...';
$kqTotCN = '...';
$kqKhaCN = '...';
$kqTrungBinhCN = '...';
$kqYeuCN = '...';
$kqKemCN = '...';

// ---Phần trăm---
// - Kì 1
$ptXuatSac = '...';
$ptTot = '...';
$ptKha = '...';
$ptTrungBinh = '...';
$ptYeu = '...';
$ptKem = '...';
// - Kì 2
$ptXuatSac2 = '...';
$ptTot2 = '...';
$ptKha2 = '...';
$ptTrungBinh2 = '...';
$ptYeu2 = '...';
$ptKem2 = '...';
// - Cả năm
$ptXuatSacCN = '...';
$ptTotCN = '...';
$ptKhaCN = '...';
$ptTrungBinhCN = '...';
$ptYeuCN = '...';
$ptKemCN = '...';



if (isset($_POST['xemThongKe'])) {
    $lop = $_POST['lop'];
    $namHoc = $_POST['namHoc'];
    $kqSearch = '<div class="col__right__container__table__kqSearch">
                    <h3>Kết quả tìm kiếm: [ Lớp: ' . $lop . ', Năm học: ' . $namHoc . ' ]</h3>
                </div>';

    // Điều kiện học kì 1
    $sqlSSLop = "SELECT * FROM xep_loai WHERE lop='$lop' && namHoc='$namHoc'";
    $resultSSLop = mysqli_query($conn, $sqlSSLop);
    $rowSSLop = mysqli_num_rows($resultSSLop);
    $SSLop = $rowSSLop;

    $sqlXuatSac = "SELECT * FROM xep_loai WHERE diemHK1 >= 90 && diemHK1 <= 100 && lop='$lop' && namHoc='$namHoc'";
    $resultXuatSac = mysqli_query($conn, $sqlXuatSac);
    $rowXuatSac = mysqli_num_rows($resultXuatSac);
    $kqXuatSac = $rowXuatSac;
    $ptXuatSac = ($rowXuatSac * 100) / $rowSSLop . '%';


    $sqlTot = "SELECT * FROM xep_loai WHERE diemHK1 >= 80 && diemHK1 < 90 && lop='$lop' && namHoc='$namHoc'";
    $resultTot = mysqli_query($conn, $sqlTot);
    $rowTot = mysqli_num_rows($resultTot);
    $kqTot = $rowTot;
    $ptTot = ($rowTot * 100) / $rowSSLop . '%';

    $sqlKha = "SELECT * FROM xep_loai WHERE diemHK1 >= 65 && diemHK1 < 80 && lop='$lop' && namHoc='$namHoc'";
    $resultKha = mysqli_query($conn, $sqlKha);
    $rowKha = mysqli_num_rows($resultKha);
    $kqKha = $rowKha;
    $ptKha = ($rowKha * 100) / $rowSSLop . '%';

    $sqlTrungBinh = "SELECT * FROM xep_loai WHERE diemHK1 >= 50 && diemHK1 < 65 && lop='$lop' && namHoc='$namHoc'";
    $resultTrungBinh = mysqli_query($conn, $sqlTrungBinh);
    $rowTrungBinh = mysqli_num_rows($resultTrungBinh);
    $kqTrungBinh = $rowTrungBinh;
    $ptTrungBinh = ($rowTrungBinh * 100) / $rowSSLop . '%';

    $sqlYeu = "SELECT * FROM xep_loai WHERE diemHK1 >= 35 && diemHK1 < 50 && lop='$lop' && namHoc='$namHoc'";
    $resultYeu = mysqli_query($conn, $sqlYeu);
    $rowYeu = mysqli_num_rows($resultYeu);
    $kqYeu = $rowYeu;
    $ptYeu = ($rowYeu * 100) / $rowSSLop . '%';

    $sqlKem = "SELECT * FROM xep_loai WHERE diemHK1 < 35 && lop='$lop' && namHoc='$namHoc'";
    $resultKem = mysqli_query($conn, $sqlKem);
    $rowKem = mysqli_num_rows($resultKem);
    $kqKem = $rowKem;
    $ptKem = ($rowKem * 100) / $rowSSLop . '%';

    // Điều kiện học kì 2
    $sqlSSLop = "SELECT * FROM xep_loai WHERE lop='$lop' && namHoc='$namHoc'";
    $resultSSLop = mysqli_query($conn, $sqlSSLop);
    $rowSSLop = mysqli_num_rows($resultSSLop);
    $SSLop2 = $rowSSLop;

    $sqlXuatSac = "SELECT * FROM xep_loai WHERE diemHK2 >= 90 && diemHK2 <= 100 && lop='$lop' && namHoc='$namHoc'";
    $resultXuatSac = mysqli_query($conn, $sqlXuatSac);
    $rowXuatSac = mysqli_num_rows($resultXuatSac);
    $kqXuatSac2 = $rowXuatSac;
    $ptXuatSac2 = ($rowXuatSac * 100) / $rowSSLop . '%';

    $sqlTot = "SELECT * FROM xep_loai WHERE diemHK2 >= 80 && diemHK2 < 90 && lop='$lop' && namHoc='$namHoc'";
    $resultTot = mysqli_query($conn, $sqlTot);
    $rowTot = mysqli_num_rows($resultTot);
    $kqTot2 = $rowTot;
    $ptTot2 = ($rowTot * 100) / $rowSSLop . '%';

    $sqlKha = "SELECT * FROM xep_loai WHERE diemHK2 >= 65 && diemHK2 < 80 && lop='$lop' && namHoc='$namHoc'";
    $resultKha = mysqli_query($conn, $sqlKha);
    $rowKha = mysqli_num_rows($resultKha);
    $kqKha2 = $rowKha;
    $ptKha2 = ($rowKha * 100) / $rowSSLop . '%';

    $sqlTrungBinh = "SELECT * FROM xep_loai WHERE diemHK2 >= 50 && diemHK2 < 65 && lop='$lop' && namHoc='$namHoc'";
    $resultTrungBinh = mysqli_query($conn, $sqlTrungBinh);
    $rowTrungBinh = mysqli_num_rows($resultTrungBinh);
    $kqTrungBinh2 = $rowTrungBinh;
    $ptTrungBinh2 = ($rowTrungBinh * 100) / $rowSSLop . '%';

    $sqlYeu = "SELECT * FROM xep_loai WHERE diemHK2 >= 35 && diemHK2 < 50 && lop='$lop' && namHoc='$namHoc'";
    $resultYeu = mysqli_query($conn, $sqlYeu);
    $rowYeu = mysqli_num_rows($resultYeu);
    $kqYeu2 = $rowYeu;
    $ptYeu2 = ($rowYeu * 100) / $rowSSLop . '%';

    $sqlKem = "SELECT * FROM xep_loai WHERE diemHK2 < 35 && lop='$lop' && namHoc='$namHoc'";
    $resultKem = mysqli_query($conn, $sqlKem);
    $rowKem = mysqli_num_rows($resultKem);
    $kqKem2 = $rowKem;
    $ptKem2 = ($rowKem * 100) / $rowSSLop . '%';

    // Điều kiện cả năm
    $sqlSSLop = "SELECT * FROM xep_loai WHERE lop='$lop' && namHoc='$namHoc'";
    $resultSSLop = mysqli_query($conn, $sqlSSLop);
    $rowSSLop = mysqli_num_rows($resultSSLop);
    $SSLopCN = $rowSSLop;

    $sqlXuatSac = "SELECT * FROM xep_loai WHERE ((diemHK1 + diemHK2) / 2) >= 90 && ((diemHK1 + diemHK2) / 2) <= 100 && lop='$lop' && namHoc='$namHoc'";
    $resultXuatSac = mysqli_query($conn, $sqlXuatSac);
    $rowXuatSac = mysqli_num_rows($resultXuatSac);
    $kqXuatSacCN = $rowXuatSac;
    $ptXuatSacCN = ($rowXuatSac * 100) / $rowSSLop . '%';

    $sqlTot = "SELECT * FROM xep_loai WHERE ((diemHK1 + diemHK2) / 2) >= 80 && ((diemHK1 + diemHK2) / 2) < 90 && lop='$lop' && namHoc='$namHoc'";
    $resultTot = mysqli_query($conn, $sqlTot);
    $rowTot = mysqli_num_rows($resultTot);
    $kqTotCN = $rowTot;
    $ptTotCN = ($rowTot * 100) / $rowSSLop . '%';

    $sqlKha = "SELECT * FROM xep_loai WHERE ((diemHK1 + diemHK2) / 2) >= 65 && ((diemHK1 + diemHK2) / 2) < 80 && lop='$lop' && namHoc='$namHoc'";
    $resultKha = mysqli_query($conn, $sqlKha);
    $rowKha = mysqli_num_rows($resultKha);
    $kqKhaCN = $rowKha;
    $ptKhaCN = ($rowKha * 100) / $rowSSLop . '%';

    $sqlTrungBinh = "SELECT * FROM xep_loai WHERE ((diemHK1 + diemHK2) / 2) >= 50 && ((diemHK1 + diemHK2) / 2) < 65 && lop='$lop' && namHoc='$namHoc'";
    $resultTrungBinh = mysqli_query($conn, $sqlTrungBinh);
    $rowTrungBinh = mysqli_num_rows($resultTrungBinh);
    $kqTrungBinhCN = $rowTrungBinh;
    $ptTrungBinhCN = ($rowTrungBinh * 100) / $rowSSLop . '%';

    $sqlYeu = "SELECT * FROM xep_loai WHERE ((diemHK1 + diemHK2) / 2) >= 35 && ((diemHK1 + diemHK2) / 2) < 50 && lop='$lop' && namHoc='$namHoc'";
    $resultYeu = mysqli_query($conn, $sqlYeu);
    $rowYeu = mysqli_num_rows($resultYeu);
    $kqYeuCN = $rowYeu;
    $ptYeuCN = ($rowYeu * 100) / $rowSSLop . '%';

    $sqlKem = "SELECT * FROM xep_loai WHERE ((diemHK1 + diemHK2) / 2) < 35 && lop='$lop' && namHoc='$namHoc'";
    $resultKem = mysqli_query($conn, $sqlKem);
    $rowKem = mysqli_num_rows($resultKem);
    $kqKemCN = $rowKem;
    $ptKemCN = ($rowKem * 100) / $rowSSLop . '%';

};

?>

<div class="col__right__container pageThongKe">

    <p>Thống kê</p>

    <div class="col__right__container__table" style="padding-bottom: 40px;">

        <h3>BẢNG THỐNG KÊ TỔNG HỢP KẾT QUẢ RÈN LUYỆN SINH VIÊN</h3>

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
                    <button class="col__right__container__nutBam__nhapDiem" name="xemThongKe">Xem</button>
                </div>

            </div>

        </form>

        <div class="boLoc_search">

            <div class="col__right__container__table__xemTheo">
                <button onclick="hocKi1_tk()" class="hocKi1 active">Học kì 1</button>
                <button onclick="hocKi2_tk()" class="hocKi2">Học kì 2</button>
                <button onclick="caNam_tk()" class="caNam">Cả năm</button>
            </div>

            <?php echo $kqSearch ?>

        </div>

        <table class="hocKi1"> 

            <tr class="main">
                <th style="width:7%; height: 50px;">Sĩ số HK1</th>
                <th style="width: 14px">Xuất sắc (%)</th>
                <th style="width: 14px">Tốt (%)</th>
                <th style="width: 14px">Khá (%)</th>
                <th style="width: 14px">Trung bình (%)</th>
                <th style="width: 14px">Yếu (%)</th>
                <th style="width: 14px">Kém (%)</th>
            </tr>

            <tr>
                <td rowspan="2" style="width:5%; font-weight: bold; text-align: center;"><?php echo $SSLop ?></td>
                <td style="height: auto; font-weight: bold; word-wrap:break-word; padding: 10px; text-align: center;">
                    <?php echo $kqXuatSac ?>
                </td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqTot ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqKha ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqTrungBinh ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqYeu ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqKem ?></td>
            </tr>

            <tr>
                <td style="font-weight: bold; height: auto; word-wrap: break-word; padding: 10px; text-align: center;">
                    <?php echo $ptXuatSac ?>
                </td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptTot ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptKha ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptTrungBinh ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptYeu ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptKem ?></td>
            </tr>

        </table>

        <table class="hocKi2 active">

            <tr class="main">
                <th style="width: 7%; height: 50px;">Sĩ số HK2</th>
                <th style="width: 14px">Xuất sắc (%)</th>
                <th style="width: 14px">Tốt (%)</th>
                <th style="width: 14px">Khá (%)</th>
                <th style="width: 14px">Trung bình (%)</th>
                <th style="width: 14px">Yếu (%)</th>
                <th style="width: 14px">Kém (%)</th>
            </tr>

            <tr>
                <td rowspan="2" style="width:5%; font-weight: bold; text-align: center;"><?php echo $SSLop2 ?></td>
                <td style="height: auto; font-weight: bold; word-wrap:break-word; padding: 10px; text-align: center;">
                    <?php echo $kqXuatSac2 ?>
                </td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqTot2 ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqKha2 ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqTrungBinh2 ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqYeu2 ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqKem2 ?></td>
            </tr>

            <tr>
                <td style="font-weight: bold; height: auto; word-wrap: break-word; padding: 10px; text-align: center;">
                <?php echo $ptXuatSac2 ?>
                </td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptTot2 ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptKha2 ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptTrungBinh2 ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptYeu2 ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptKem2 ?></td>
            </tr>

        </table>

        <table class="caNam active">

            <tr class="main">
                <th style="width: 7%; height: 50px;">Sĩ số CN</th>
                <th style="width: 14px">Xuất sắc (%)</th>
                <th style="width: 14px">Tốt (%)</th>
                <th style="width: 14px">Khá (%)</th>
                <th style="width: 14px">Trung bình (%)</th>
                <th style="width: 14px">Yếu (%)</th>
                <th style="width: 14px">Kém (%)</th>
            </tr>

            <tr>
                <td rowspan="2" style="width:5%; font-weight: bold; text-align: center;"><?php echo $SSLopCN ?></td>
                <td style="height: auto; font-weight: bold; word-wrap:break-word; padding: 10px; text-align: center;">
                <?php echo $kqXuatSacCN ?>
                </td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqTotCN ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqKhaCN ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqTrungBinhCN ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqYeuCN ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $kqKemCN ?></td>
            </tr>

            <tr>
                <td style="font-weight: bold; height: auto; word-wrap: break-word; padding: 10px; text-align: center;">
                <?php echo $ptXuatSacCN ?>
                </td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptTotCN ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptKhaCN ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptTrungBinhCN ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptYeuCN ?></td>
                <td style="text-align: center; font-weight: bold;"><?php echo $ptKemCN ?></td>
            </tr>

        </table>

    </div>

    <a href="pageTrangChu.php" class="col__right__container__nutBam__troLai"><i class="fas fa-chevron-left"></i> Về
        trang chủ</a>

</div>