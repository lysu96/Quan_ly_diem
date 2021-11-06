-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2021 lúc 05:19 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_diem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emai` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`hoten`, `username`, `password`, `emai`) VALUES
('Nguyễn Văn H', 'H', '827ccb0eea8a706c4c34a16891f84e7b', 'H123@gmail.com'),
('Nguyễn thị L', 'L', '827ccb0eea8a706c4c34a16891f84e7b', 'L12345@gmail.com'),
('Hà Thị Y', 'Y', '827ccb0eea8a706c4c34a16891f84e7b', 'Y@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemhocphan`
--

CREATE TABLE `diemhocphan` (
  `ma_sv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ma_mon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diem_giua_ky` float NOT NULL,
  `diem_thi_hp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diemhocphan`
--

INSERT INTO `diemhocphan` (`ma_sv`, `ma_mon`, `diem_giua_ky`, `diem_thi_hp`) VALUES
('DTC1', 'ATTT', 8.85, 9),
('DTC1', 'CNTBM', 7.4, 7),
('DTC1', 'LTW', 9, 9.5),
('DTC11', 'AV', 6, 7.5),
('DTC11', 'CNTBM', 8, 6.7),
('DTC11', 'LTW', 9.8, 8),
('DTC11', 'TCC1', 7.8, 6.5),
('DTC12', 'CTDLTT', 9.3, 8.2),
('DTC12', 'KCPM', 7.5, 7.5),
('DTC15', 'ATTT', 7, 8.5),
('DTC15', 'KCPM', 8.6, 9),
('DTC15', 'TCC1', 8.5, 9.3),
('DTC15', 'TTNT', 5.5, 4),
('DTC18', 'AV', 8.4, 8),
('DTC18', 'KCPM', 9.6, 8.4),
('DTC18', 'TCC2', 7.3, 7.1),
('DTC18', 'TTNT', 5, 6),
('DTC2', 'KCPM', 6.65, 7),
('DTC2', 'QTH', 7, 7.8),
('DTC2', 'TTNT', 6.5, 9),
('DTC6', 'CNTBM', 7.5, 6),
('DTC6', 'CTDLTT', 9.3, 8.1),
('DTC6', 'LTW', 8.7, 8.4),
('DTC8', 'CNTBM', 5.5, 4),
('DTC8', 'CTDLTT', 6, 6.5),
('DTC8', 'KCPM', 7, 7),
('DTC8', 'LTW', 4.5, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

CREATE TABLE `hocky` (
  `ma_hk` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_hk` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--

INSERT INTO `hocky` (`ma_hk`, `ten_hk`) VALUES
('HK1', 'Học kỳ I'),
('HK2', 'Học kỳ II'),
('HK3', 'Học kỳ III'),
('HK4', 'Học kỳ IV');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `ma_lop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ten_lop` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`ma_lop`, `ten_lop`) VALUES
('CNTT_K17A', 'Công nghệ thông tin K17A'),
('CNTT_K17C', 'Công nghệ thông tin K17C'),
('KTPM_K15C', 'Kỹ thuật phầm mềm K15C'),
('KTPM_K16C', 'Kỹ thuật phầm mền K16C'),
('QTVP_K16D', 'Quản trị văn phòng K16D'),
('QTVP_K18E', 'Quản trị văn phòng K18A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhocphan`
--

CREATE TABLE `monhocphan` (
  `ma_mon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ten_mon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sotinchi` int(11) NOT NULL,
  `ma_hk` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhocphan`
--

INSERT INTO `monhocphan` (`ma_mon`, `ten_mon`, `sotinchi`, `ma_hk`) VALUES
('ATTT', 'An toàn và bảo mật thông tin', 2, 'HK1'),
('AV', 'Anh văn', 2, 'HK3'),
('CNTBM', 'Công nghệ và thiết bị mạng', 3, 'HK1'),
('CTDLTT', 'Cấu trúc dữ liệu & thuật toán', 3, 'HK2'),
('KCPM', 'Kiểm chứng phần mềm', 3, 'HK1'),
('LTW', 'Lập trình web', 3, 'HK2'),
('QTH', 'Quản trị học', 2, 'HK2'),
('TCC1', 'Toán cao cấp 1', 3, 'HK3'),
('TCC2', 'Toán cao cấp 2', 2, 'HK4'),
('TTNT', 'Trí tuệ nhân tạo', 2, 'HK2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `ma_sv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten_sv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `dan_toc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `noi_sinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_lop` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`ma_sv`, `hoten_sv`, `ngay_sinh`, `gioi_tinh`, `dan_toc`, `noi_sinh`, `ma_lop`) VALUES
('DTC1', 'Nguyễn Văn A', '1999-04-04', 'Nam', 'Kinh', 'Hà nội', 'CNTT_K17A'),
('DTC11', 'Trần Thị D', '1998-06-18', 'Nữ', 'Kinh', 'Thái bình', 'QTVP_K16D'),
('DTC12', 'Hoàng C', '2000-06-12', 'Nam', 'Kinh', 'Thái nguyên', 'CNTT_K17C'),
('DTC15', 'Sùng A C', '1998-06-07', 'Nam', 'Mông', 'Sơn la', 'KTPM_K15C'),
('DTC18', 'Lò thị N', '2001-05-20', 'Nữ', 'Mường', 'Lai châu', 'QTVP_K18E'),
('DTC2', 'Hà Thị L', '1999-06-12', 'Nữ', 'Thái', 'Điện Biên', 'KTPM_K16C'),
('DTC6', 'Lường Minh H', '1999-06-13', 'Nam', 'Kinh', 'Hà nội', 'CNTT_K17C'),
('DTC8', 'Vi Vũ L', '2008-06-13', 'Nữ', 'Hài nhì', 'Lai châu', 'CNTT_K17A');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `diemhocphan`
--
ALTER TABLE `diemhocphan`
  ADD UNIQUE KEY `ma_sv` (`ma_sv`,`ma_mon`),
  ADD KEY `ma_mon` (`ma_mon`);

--
-- Chỉ mục cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`ma_hk`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`ma_lop`);

--
-- Chỉ mục cho bảng `monhocphan`
--
ALTER TABLE `monhocphan`
  ADD PRIMARY KEY (`ma_mon`),
  ADD KEY `ma_hk` (`ma_hk`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`ma_sv`),
  ADD KEY `ma_lop` (`ma_lop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
