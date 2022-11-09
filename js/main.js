// Khi click vào user
function btnUser() {
    document.querySelector('.col__right__home__header__user__logout').classList.toggle('active');
}

function showValue() {
    // Nút radio
    var select1 = document.querySelector('.r1:checked');
    document.getElementById("diemtong1").value = select1.value;

    var select2 = document.querySelector('.r2:checked');
    document.getElementById("diemtong2").value = select2.value;

    var select3 = document.querySelector('.r3:checked');
    document.getElementById("diemtong3").value = select3.value;

    var select4 = document.querySelector('.r4:checked');
    document.getElementById("diemtong4").value = select4.value;

    var select5 = document.querySelector('.r5:checked');
    document.getElementById("diemtong5").value = select5.value;

    // Tổng cộng
    const dt1 = Number(select1.value);
    const dt2 = Number(select2.value);
    const dt3 = Number(select3.value);
    const dt4 = Number(select4.value);
    const dt5 = Number(select5.value);

    var tongDiem = dt1 + dt2 + dt3 + dt4 + dt5;
    document.getElementById("tongcong").value = tongDiem;
}

// Chọn lớp -> khóa học

function chonLopND() {
    var eND = document.getElementById('selectLopND');
    var giaTriND = eND.options[eND.selectedIndex].value;
    document.getElementById("khoahocNhapDiem").value = giaTriND;

}

function chonLopXL() {
    var eXL = document.getElementById('selectLopXL');
    var giaTriXL = eXL.options[eXL.selectedIndex].value;
    document.getElementById("khoahocXepLoai").value = giaTriXL;

}

function chonLopTK() {
    var eTK = document.getElementById('selectLopTK');
    var giaTriTK = eTK.options[eTK.selectedIndex].value;
    document.getElementById("khoahocThongKe").value = giaTriTK;

}

// Bổ sung phần xem theo kì, cả năm
function hocKi1() {
    document.querySelector('.col__right__container__table table.hocKi1').classList.remove('active');
    document.querySelector('.col__right__container__table table.hocKi2').classList.add('active');
    document.querySelector('.col__right__container__table table.caNam').classList.add('active');

    document.querySelector('.col__right__container__table__xemTheo button.hocKi1').classList.add('active');
    document.querySelector('.col__right__container__table__xemTheo button.hocKi2').classList.remove('active');
    document.querySelector('.col__right__container__table__xemTheo button.caNam').classList.remove('active');
}

function hocKi2() {
    document.querySelector('.col__right__container__table table.hocKi1').classList.add('active');
    document.querySelector('.col__right__container__table table.hocKi2').classList.remove('active');
    document.querySelector('.col__right__container__table table.caNam').classList.add('active');

    document.querySelector('.col__right__container__table__xemTheo button.hocKi1').classList.remove('active');
    document.querySelector('.col__right__container__table__xemTheo button.hocKi2').classList.add('active');
    document.querySelector('.col__right__container__table__xemTheo button.caNam').classList.remove('active');
}

function caNam() {
    document.querySelector('.col__right__container__table table.hocKi1').classList.add('active');
    document.querySelector('.col__right__container__table table.hocKi2').classList.add('active');
    document.querySelector('.col__right__container__table table.caNam').classList.remove('active');

    document.querySelector('.col__right__container__table__xemTheo button.hocKi1').classList.remove('active');
    document.querySelector('.col__right__container__table__xemTheo button.hocKi2').classList.remove('active');
    document.querySelector('.col__right__container__table__xemTheo button.caNam').classList.add('active');
}

// Bổ sung phần xem theo kì, cả năm
function hocKi1_tk() {
    document.querySelector('.col__right__container__table table.hocKi1').classList.remove('active');
    document.querySelector('.col__right__container__table table.hocKi2').classList.add('active');
    document.querySelector('.col__right__container__table table.caNam').classList.add('active');

    document.querySelector('.col__right__container__table__xemTheo button.hocKi1').classList.add('active');
    document.querySelector('.col__right__container__table__xemTheo button.hocKi2').classList.remove('active');
    document.querySelector('.col__right__container__table__xemTheo button.caNam').classList.remove('active');
}

function hocKi2_tk() {
    document.querySelector('.col__right__container__table table.hocKi1').classList.add('active');
    document.querySelector('.col__right__container__table table.hocKi2').classList.remove('active');
    document.querySelector('.col__right__container__table table.caNam').classList.add('active');

    document.querySelector('.col__right__container__table__xemTheo button.hocKi1').classList.remove('active');
    document.querySelector('.col__right__container__table__xemTheo button.hocKi2').classList.add('active');
    document.querySelector('.col__right__container__table__xemTheo button.caNam').classList.remove('active');
}

function caNam_tk() {
    document.querySelector('.col__right__container__table table.hocKi1').classList.add('active');
    document.querySelector('.col__right__container__table table.hocKi2').classList.add('active');
    document.querySelector('.col__right__container__table table.caNam').classList.remove('active');
    
    document.querySelector('.col__right__container__table__xemTheo button.hocKi1').classList.remove('active');
    document.querySelector('.col__right__container__table__xemTheo button.hocKi2').classList.remove('active');
    document.querySelector('.col__right__container__table__xemTheo button.caNam').classList.add('active');
}

// Xử lý click update Img
function updateImg() {
    document.querySelector('.app__taikhoan__updateImg').classList.add('active');
}

function closeUpdateImg() {
    document.querySelector('.app__taikhoan__updateImg').classList.remove('active');
}



