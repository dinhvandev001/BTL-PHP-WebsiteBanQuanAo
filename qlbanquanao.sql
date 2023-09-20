-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 07, 2022 lúc 06:58 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbanquanao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomsanpham`
--

CREATE TABLE `nhomsanpham` (
  `ID` int(11) NOT NULL,
  `NhomSanPham` varchar(100) NOT NULL,
  `Mota` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhomsanpham`
--

INSERT INTO `nhomsanpham` (`ID`, `NhomSanPham`, `Mota`) VALUES
(1, 'Ao Polo Nam', 'Lorem ...'),
(2, 'Ao Sơ Mi Nam', 'Lorem ...'),
(3, 'Quần Âu', 'Lorem ...'),
(4, 'Quần Jean', 'Lorem ...'),
(5, 'Chân Váy', 'Lorem ...'),
(6, 'Quần Kaki', 'Lorem ...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomtaikhoan`
--

CREATE TABLE `nhomtaikhoan` (
  `ID` int(10) NOT NULL,
  `ChucVu` varchar(100) NOT NULL,
  `Mota` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhomtaikhoan`
--

INSERT INTO `nhomtaikhoan` (`ID`, `ChucVu`, `Mota`) VALUES
(1, 'Admin', 'Lorem ...'),
(2, 'Người dùng', 'Lorem ...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(10) NOT NULL,
  `TenSanPham` varchar(100) CHARACTER SET utf8 NOT NULL,
  `GiaBan` double NOT NULL,
  `ID_Nhom` int(10) NOT NULL,
  `LinkAnh` text CHARACTER SET utf8 NOT NULL,
  `MoTa` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `TenSanPham`, `GiaBan`, `ID_Nhom`, `LinkAnh`, `MoTa`) VALUES
(1, 'Áo polo trắng', 299000, 1, 'img/Nam/AoPoloNam/sp1.webp', 'Lorem ...'),
(2, 'Áo Polo đen', 299000, 1, 'img/Nam/AoPoloNam/sp2.webp', '                                                                                                Đây là áo polo đen         \r\n                     \r\n                     \r\n                     \r\n                    '),
(3, 'Áo Polo Xanh', 299000, 1, 'img/Nam/AoPoloNam/sp3.webp', 'Lorem ...'),
(4, 'Áo Sơ Mi Xọc Vàng', 499000, 2, 'img/Nam/AoSoMiNam/sm1.webp', 'Lorem ...'),
(5, 'Áo Sơ Mi Lá', 499000, 2, 'img/Nam/AoSoMiNam/sm2.webp', 'Lorem ...'),
(6, 'Áo Sơ Mi Kẻ Đen', 499000, 2, 'img/Nam/AoSoMiNam/sm3.webp', 'Lorem ...'),
(7, 'Quần Âu Nâu', 549000, 3, 'img/Nam/QuanAu/qau1.webp', 'Lorem ...'),
(8, 'Quần Âu Xám Đậm', 549000, 3, 'img/Nam/QuanAu/qau2.webp', 'Lorem ...'),
(9, 'Quần Âu Xám Nhạt', 549000, 3, 'img/Nam/QuanAu/qau3.webp', 'Lorem ...'),
(10, 'Quần Jean Đen', 499, 4, 'img/Nam/QuanJean/qj1.webp', 'Lorem ...'),
(11, 'Quần Jean Xanh Đậm', 499000, 4, 'img/Nam/QuanJean/qj2.webp', 'Lorem ...'),
(12, 'Quần Jean Xanh Nhạt', 499000, 4, 'img/Nam/QuanJean/qj3.webp', 'Lorem ...'),
(13, 'Chân Váy Đen Dài', 399000, 5, 'img/Nu/ChanVay/cv1.webp', 'Lorem ...'),
(14, 'Chân Váy Đen Ngắn', 399000, 5, 'img/Nu/ChanVay/cv2.webp', 'Lorem ...'),
(15, 'Chân Váy Nâu', 449000, 5, 'img/Nu/ChanVay/cv3.webp', 'Lorem ...'),
(16, 'Quần Kaki 1', 399000, 6, 'img/Nu/QuanKaki/kk1.webp', 'Lorem ...'),
(17, 'Quần Kaki 2', 399000, 6, 'img/Nu/QuanKaki/kk2.webp', 'Lorem ...'),
(18, 'Quần Kaki 3', 399000, 6, 'img/Nu/QuanKaki/kk2.webp', 'Lorem ...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID` int(10) NOT NULL,
  `TenTaiKhoan` varchar(200) CHARACTER SET latin1 NOT NULL,
  `MatKhau` varchar(200) CHARACTER SET latin1 NOT NULL,
  `ID_Nhom_TaiKhoan` int(10) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ID`, `TenTaiKhoan`, `MatKhau`, `ID_Nhom_TaiKhoan`, `Email`) VALUES
(1, 'admin', '123', 1, 'admin@gmail.com'),
(2, 'admin2', '123', 1, 'admin2@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhomsanpham`
--
ALTER TABLE `nhomsanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nhomtaikhoan`
--
ALTER TABLE `nhomtaikhoan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhomsanpham`
--
ALTER TABLE `nhomsanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nhomtaikhoan`
--
ALTER TABLE `nhomtaikhoan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
