-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 25, 2022 lúc 05:44 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qldrl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nameAdmin` varchar(255) NOT NULL,
  `emailAdmin` varchar(255) NOT NULL,
  `passAdmin` varchar(255) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `nameAdmin`, `emailAdmin`, `passAdmin`, `img`) VALUES
(1, 'Mai Thanh Tiện', 'tienthanh612@gmail.com', '123', 'https://scontent.fdad3-1.fna.fbcdn.net/v/t1.6435-9/162108685_929246020955346_4632119733527838126_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=FWisnZXjqF0AX-889Gp&tn=2wvptySiSPaVhTBl&_nc_ht=scontent.fdad3-1.fna&oh=00_AT8dIegjAKwbqvWrdlulfiI4DOZHcuMFX2AMrpeSfwimFQ&oe=63551067'),
(7, 'Huỳnh Kim Luân', 'huynhluan99@gmail.com', '123', 'https://tophinhanh.com/wp-content/uploads/2021/12/hinh-avatar-ngau-cho-con-trai.jpg'),
(9, 'Nguyễn Minh Thịnh', 'minhthinh21@gmail.com', '123', 'https://scontent.fsgn5-8.fna.fbcdn.net/v/t1.6435-9/149354414_771250633809686_7510124480716963706_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=e3f864&_nc_ohc=vKodkyoLjQEAX-VBmVD&_nc_ht=scontent.fsgn5-8.fna&oh=00_AT_rtPTCeWz61GhxeNM2YqRoUf24tIWUaMb29_1tBXfyUA&oe=6356ADF1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xep_loai`
--

CREATE TABLE `xep_loai` (
  `id` int(11) NOT NULL,
  `hoVaTen` varchar(255) NOT NULL,
  `lop` varchar(100) NOT NULL,
  `namHoc` varchar(100) NOT NULL,
  `diemHK1` int(11) NOT NULL,
  `diemHK2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `xep_loai`
--

INSERT INTO `xep_loai` (`id`, `hoVaTen`, `lop`, `namHoc`, `diemHK1`, `diemHK2`) VALUES
(1, 'Mai Thanh Tiện', 'DC19CNTT', '2021-2022', 80, 100),
(2, 'Huỳnh Kim Luân', 'DC19CNTT', '2021-2022', 80, 85),
(3, 'Huỳnh Kim', 'DC19CNTT', '2021-2022', 80, 85),
(4, 'Nguyễn Văn C', 'DC20CNTT', '2021-2022', 80, 85),
(5, 'Huỳnh Kim A', 'DC20CNTT', '2021-2022', 80, 85),
(9, 'Mai Thanh Tiện2', 'DC19CNTT', '2021-2022', 92, 0),
(10, 'Đặng Phúc Đỏ', 'DC19CNTT', '2021-2022', 89, 95),
(11, 'Đặng Phúc Đen', 'DC22CNTT', '2025-2026', 62, 0),
(18, 'Mai Thanh Tiện', 'DC19CNTT', '2022-2023', 100, 100),
(19, 'Mai Thanh Tiện', 'DC19CNTT', '2023-2024', 80, 100),
(20, 'Mai Thanh Tiện', 'DC19CNTT', '2024-2025', 87, 0),
(21, 'Nguyễn Hehe', 'DC19CNTT', '2021-2022', 90, 0),
(22, 'Đặng Phúc Đỏ', 'DC22CNTT', '2025-2026', 93, 0),
(23, 'Huỳnh Kim Luân', 'DC22CNTT', '2025-2026', 88, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xep_loai`
--
ALTER TABLE `xep_loai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `xep_loai`
--
ALTER TABLE `xep_loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
