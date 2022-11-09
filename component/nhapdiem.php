<?php

if (isset($_POST['nhapdiem'])) {

    $hoVaTen = $_POST['hoVaTen'];
    $lop = $_POST['lop'];
    $namHoc = $_POST['namHoc'];
    $tongDiem = $_POST['tongDiem'];

    $sql = " SELECT * FROM  xep_loai WHERE hoVaTen='$hoVaTen' AND namHoc='$namHoc' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $sql = " UPDATE xep_loai SET diemHK2='$tongDiem' WHERE hoVaTen='$hoVaTen' ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>alert("Thêm điểm học kì 2, năm học '.$namHoc.' cho sinh viên '.$hoVaTen.' thành công!");</script>';
        } else {
            echo '<script>alert("Thêm điểm học kì 2, năm học '.$namHoc.' cho sinh viên '.$hoVaTen.' thất bại!");</script>';
        };
    } else {
        $sql = " INSERT INTO  xep_loai (hoVaTen, lop, namHoc, diemHK1) VALUES ('$hoVaTen', '$lop', '$namHoc', '$tongDiem') ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>alert("Thêm điểm học kì 1, năm học '.$namHoc.' cho sinh viên '.$hoVaTen.' thành công!");</script>';
        } else {
            echo '<script>alert("Thêm điểm học kì 1, năm học '.$namHoc.' cho sinh viên '.$hoVaTen.' thất bại!");</script>';
        };
    }
};

?>

<div class="col__right__container pageNhapDiem">

    <p>Nhập điểm</p>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="col__right__container__table" style="padding-bottom: 40px;">

            <h3>BẢNG ĐÁNH GIÁ KẾT QUẢ RÈN LUYỆN SINH VIÊN</h3>

            <div class="col__right__container__table__from">

                <div class="thongtin">

                    <div class="col__right__container__table__from__item">
                        <label>Họ và tên:</label><br>
                        <input type="text" placeholder="Ví dụ: Biện Ngọc Nhi" name="hoVaTen" required>
                    </div>

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
                    <button class="col__right__container__nutBam__nhapDiem" name="nhapdiem">Nhập</button>
                </div>

            </div>

            <table onchange="showValue()" style="width:100%">

                <tr class="main">
                    <th style="padding: 0 5px; width:5%; height: 50px;">STT</th>
                    <th style="padding: 0 5px;">Nội dung và tiêu chí đánh giá</th>
                    <th style="padding: 0 5px;">Mức điểm tối đa</th>
                    <th style="padding: 0 5px;">Đánh giá của lớp</th>
                </tr>

                <form>

                    <tr>
                        <td style="font-weight: bold; width:5%; text-align: center;">1</td>
                        <td style="font-weight: bold; max-width: 500px; height:auto; word-wrap:break-word; padding: 10px;">
                            Ý thức học tập (từ 0 đến 20 điểm)
                        </td>
                        <td style="width:10%; text-align: center;"></td>
                        <td style="width:10%; text-align: center;">
                            <input style="font-weight: bold;" id="diemtong1" type="text" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">1.1</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Tinh thần, thái độ trong học tập (chuẩn bị bài, xây dựng bài, chuyên cần, chấp hành
                            các
                            quy
                            định trong giờ học…).
                        </td>
                        <td style="width:10%; text-align: center;">15</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r1" name="element" value="15">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">1.2</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Thực hiện tốt mục 1 và tích cực tham gia các hoạt động học thuật, ngoại khóa, nghiên
                            cứu
                            khoa học.
                        </td>
                        <td style="width:10%; text-align: center;">17</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r1" name="element" value="17">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">1.3</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Thực hiện tốt mục 2 và có thực hiện các đề tài nghiên cứu khoa học, hoặc có các bài
                            báo
                            về
                            chuyên ngành đang học đăng trên tạp chí/báo trong và ngoài trường, hoặc có tham gia
                            dự
                            thi
                            HSSV giỏi từ cấp trường trở lên.
                        </td>
                        <td style="width:10%; text-align: center;">20</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r1" name="element" value="20">
                        </td>
                    </tr>

                </form>

                <form>

                    <tr>
                        <td style="font-weight: bold; width:5%; text-align: center;">2</td>
                        <td style="font-weight: bold; max-width: 500px; height:auto; word-wrap:break-word; padding: 10px;">
                            Ý thức và kết quả chấp hành nội quy, quy chế trong nhà trường (từ 0 đến 25 điểm)
                        </td>
                        <td style="width:10%; text-align: center;"></td>
                        <td style="width:10%; text-align: center;">
                            <input style="font-weight: bold;" id="diemtong2" type="text" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">2.1</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Vi phạm các nội quy, quy chế và các quy định khác được áp dụng trong trường bị xử lý
                            kỷ luật mức cảnh cáo trở lên.
                        </td>
                        <td style="width:10%; text-align: center;">0</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r2" name="element" value="0">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">2.2</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Vi phạm bị xử lý kỷ luật mức khiển trách.
                        </td>
                        <td style="width:10%; text-align: center;">10</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r2" name="element" value="10">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">2.3</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Vi phạm nhưng chỉ bị phê bình, rút kinh nghiệm cấp Khoa và tương đương.
                        </td>
                        <td style="width:10%; text-align: center;">15</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r2" name="element" value="15">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">2.4</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Vi phạm nhưng chỉ bị phê bình, rút kinh nghiệm ở tập thể lớp/chi đoàn.
                        </td>
                        <td style="width:10%; text-align: center;">20</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r2" name="element" value="20">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">2.5</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Không vi phạm.
                        </td>
                        <td style="width:10%; text-align: center;">25</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r2" name="element" value="25">
                        </td>
                    </tr>

                </form>

                <form>

                    <tr>
                        <td style="font-weight: bold; width:5%; text-align: center;">3</td>
                        <td style="font-weight: bold; max-width: 500px; height:auto; word-wrap:break-word; padding: 10px;">
                            Ý thức và kết quả tham gia các hoạt động chính trị – xã hội, văn hoá, văn nghệ, thể
                            thao, phòng chống các tệ nạn xã hội (từ 0 đến 20 điểm):
                        </td>
                        <td style="width:10%; text-align: center;"></td>
                        <td style="width:10%; text-align: center;">
                            <input style="font-weight: bold;" id="diemtong3" type="text" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">3.1</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Không tham dự (vắng mặt từ 50% trở lên) các hoạt động rèn luyện về chính trị – xã
                            hội, văn hoá, văn nghệ, thể thao và phòng chống các tệ nạn xã hội do lớp, khoa, nhà
                            trường phát động, tổ chức.
                        </td>
                        <td style="width:10%; text-align: center;">0</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r3" name="element" value="0">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">3.2</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Có tham dự nhưng không đầy đủ (vắng mặt dưới 50%).
                        </td>
                        <td style="width:10%; text-align: center;">10</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r3" name="element" value="10">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">3.3</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Tham dự đầy đủ.
                        </td>
                        <td style="width:10%; text-align: center;">15</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r3" name="element" value="15">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">3.4</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Tích cực tham gia tổ chức, thực hiện các hoạt động cấp Khoa trở lên.
                        </td>
                        <td style="width:10%; text-align: center;">17</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r3" name="element" value="17">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">3.5</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Tích cực tham gia tổ chức, thực hiện các hoạt động cấp trường trở lên và tích cực
                            tham gia hoạt động công ích, tình nguyện, công tác xã hội.
                        </td>
                        <td style="width:10%; text-align: center;">20</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r3" name="element" value="20">
                        </td>
                    </tr>

                </form>

                <form>

                    <tr>
                        <td style="font-weight: bold; width:5%; text-align: center;">4</td>
                        <td style="font-weight: bold; max-width: 500px; height:auto; word-wrap:break-word; padding: 10px;">
                            Phẩm chất công dân và quan hệ với cộng đồng (từ 0 đến 25 điểm)
                        </td>
                        <td style="width:10%; text-align: center;"></td>
                        <td style="width:10%; text-align: center;">
                            <input style="font-weight: bold;" id="diemtong4" type="text" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">4.1</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Vi phạm các chủ trương của Đảng, chính sách, pháp luật của Nhà nước bị công an,
                            chính quyền các cấp, nhà trường lập biên bản xử lý .
                        </td>
                        <td style="width:10%; text-align: center;">0</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r4" name="element" value="0">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">4.2</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Vi phạm các chủ trương của Đảng, chính sách, pháp luật của Nhà nước; gây mất đoàn
                            kết trong tập thể lớp, Khoa, Trường nhưng chưa đến mức bị lập biên bản xử lý hoặc bị
                            xử lý kỷ luật.
                        </td>
                        <td style="width:10%; text-align: center;">10</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r4" name="element" value="10">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">4.3</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Chấp hành các chủ trương của Đảng, chính sách, pháp luật của Nhà nước, có tinh thần
                            giúp đỡ bạn bè, cưu mang người gặp khó khăn.
                        </td>
                        <td style="width:10%; text-align: center;">20</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r4" name="element" value="20">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">4.4</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            Thực hiện tốt mục 3 và được biểu dương, khen thưởng (cấp trường trở lên) trong công
                            tác xã hội và giữ gìn an ninh chính trị, trật tự an toàn xã hội; mối quan hệ cộng
                            đồng, tinh thần giúp đỡ bạn bè, cưu mang người gặp khó khăn.
                        </td>
                        <td style="width:10%; text-align: center;">25</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r4" name="element" value="25">
                        </td>
                    </tr>

                </form>

                <form>

                    <tr>
                        <td style="font-weight: bold; width:5%; text-align: center;">5</td>
                        <td style="font-weight: bold; max-width: 500px; height:auto; word-wrap:break-word; padding: 10px;">
                            Ý thức và kết quả tham gia công tác phụ trách lớp, các đoàn thể, tổ chức trong nhà
                            trường hoặc đạt được thành tích đặc biệt trong học tập, rèn luyện của SV (từ 0 đến
                            10 điểm):
                        </td>
                        <td style="width:10%; text-align: center;"></td>
                        <td style="width:10%; text-align: center;">
                            <input style="font-weight: bold;" id="diemtong5" type="text" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight: bold; width:5%; text-align: center;"></td>
                        <td style="font-weight: bold; max-width: 500px; height:auto; word-wrap:break-word; padding: 10px;">
                            * Đối với những SV được phân công quản lý lớp, đoàn thể, các tổ chức…
                        </td>
                        <td style="width:10%; text-align: center;"></td>
                        <td style="width:10%; text-align: center;">

                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">5.1</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            - Hoàn thành nhiệm vụ được phân công.
                        </td>
                        <td style="width:10%; text-align: center;">8</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r5" name="element" value="8">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">5.2</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            - Hoàn thành tốt nhiệm vụ được phân công.
                        </td>
                        <td style="width:10%; text-align: center;">10</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r5" name="element" value="10">
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight: bold; width:5%; text-align: center;"></td>
                        <td style="font-weight: bold; max-width: 500px; height:auto; word-wrap:break-word; padding: 10px;">
                            * Đối với những SV không được phân công quản lý lớp, đoàn thể, các tổ chức…
                        </td>
                        <td style="width:10%; text-align: center;"></td>
                        <td style="width:10%; text-align: center;">

                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">5.3</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            - Đạt giải thưởng, được khen thưởng trong lĩnh vực học tập, rèn luyện, hoạt động
                            văn-thể-mỹ, xã hội…cấp trường.
                        </td>
                        <td style="width:10%; text-align: center;">8</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r5" name="element" value="8">
                        </td>
                    </tr>

                    <tr>
                        <td style="width:5%; text-align: center;">5.4</td>
                        <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                            - Đạt giải thưởng, được khen thưởng trong lĩnh vực học tập, rèn luyện, hoạt động
                            văn-thể-mỹ, xã hội…do các đơn vị ngoài trường tổ chức.
                        </td>
                        <td style="width:10%; text-align: center;">10</td>
                        <td style="width:10%; text-align: center;">
                            <input type="radio" class="r5" name="element" value="10">
                        </td>
                    </tr>

                </form>

                <tr>
                    <td style="font-weight: bold; width:5%; text-align: center;"></td>
                    <td style="text-align: center; font-size: 20px; font-weight: bold; max-width: 500px; height:auto; word-wrap:break-word; padding: 10px;">
                        Tổng cộng
                    </td>
                    <td style="font-weight: bold; font-size: 20px; width:10%; text-align: center;">100</td>
                    <td style="width:10%; text-align: center;">
                        <input style="font-weight: bold; font-size: 20px;" id="tongcong" type="text" readonly name="tongDiem" required>
                    </td>
                </tr>

            </table>

        </div>

    </form>

    <a href="pageTrangChu.php" class="col__right__container__nutBam__troLai"><i class="fas fa-chevron-left"></i> Về
        trang chủ</a>

</div>