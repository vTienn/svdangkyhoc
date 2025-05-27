-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 05, 2025 lúc 11:40 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `svdangkihoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chamdiem`
--

CREATE TABLE `chamdiem` (
  `masinhvien` varchar(100) NOT NULL,
  `mamonhoc` varchar(100) NOT NULL,
  `tenmonhoc` varchar(100) NOT NULL,
  `diemthi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `username` varchar(50) NOT NULL,
  `password` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`username`, `password`) VALUES
('73dckt29', '73dckt29'),
('73dctt16', '73dctt16'),
('73dctt18', '73dctt18'),
('73dctt27', '73dctt27'),
('73dctt29', '73dctt29'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `mamonhoc` varchar(100) NOT NULL,
  `tenmonhoc` varchar(100) NOT NULL,
  `masv` varchar(100) NOT NULL,
  `diemthi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`mamonhoc`, `tenmonhoc`, `masv`, `diemthi`) VALUES
('Bod', 'Thương mại điện tử', '73dctt29', 0),
('Cdo', 'toán roi rac', '73dctt29', 0),
('cnt1', 'toán cao cấp', '73dctt18', 0),
('cnt2', 'cấu trúc dữ liệu giải thuật', '73dctt18', 0),
('cnt3', 'C++', '73dctt18', 0),
('cnt3', 'C++', '73dctt29', 0),
('Cod', 'Văn học', '73dctt18', 0),
('Cod', 'Văn học', '73dctt29', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `magiaovien` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `gioitinh` varchar(100) NOT NULL,
  `namsinh` date NOT NULL,
  `dienthoai` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`magiaovien`, `hoten`, `gioitinh`, `namsinh`, `dienthoai`, `email`, `diachi`) VALUES
('74k01', 'Kiều Nam', 'Nữ', '2024-06-13', '012312312', 'kieuviettien1@gmail.com', 'hà nam'),
('74k07', 'Kiều Vân', 'Nữ', '2024-06-27', '01231231222', 'kieuviettien1@gmail.com', 'hải phòng'),
('abc', 'Nguyễn thị tình', 'Nam', '2024-06-07', '098212', 'kieuviettien1@gmail.com', 'hn'),
('tod', 'lã quang trung', 'Nam', '2024-06-23', '098212222', 'kieuviettien1@gmail.com', 'lạng sơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `malop` varchar(100) NOT NULL,
  `tenlop` varchar(100) NOT NULL,
  `giaoviengiangday` varchar(100) NOT NULL,
  `sohocsinh` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`malop`, `tenlop`, `giaoviengiangday`, `sohocsinh`) VALUES
('a3301', 'A3', 'Nguyễn thị tình', 5),
('BBCC', 'A03', 'lã quang trung', 1),
('BD0', 'D82', 'Kiều Vân', 20),
('J01', 'A3-501', 'Kiều Nam', 10),
('Jb', 'A2-701', 'Kiều Nam', 2),
('LB01', 'A2', 'Kiều Nam', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamonhoc` varchar(100) NOT NULL,
  `tenmonhoc` varchar(100) NOT NULL,
  `sotinchi` int(100) NOT NULL,
  `giaoviengiangday` varchar(100) NOT NULL,
  `hocki` int(100) NOT NULL,
  `nganh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`mamonhoc`, `tenmonhoc`, `sotinchi`, `giaoviengiangday`, `hocki`, `nganh`) VALUES
('Bod', 'Thương mại điện tử ', 2, 'Kiều Vân', 2, 'cntt'),
('Cdo', 'toán roi rac', 2, 'Kiều Vân', 2, 'cntt'),
('cnt1', 'toán cao cấp', 4, 'Nguyễn thị tình', 1, 'cntt'),
('cnt2', 'cấu trúc dữ liệu giải thuật ', 3, 'lã quang trung', 2, 'cntt'),
('cnt3', 'C++', 3, 'Nguyễn thị tình', 2, 'cntt'),
('cnt4', 'C#', 2, 'lã quang trung', 2, 'cntt'),
('cnt5', 'lập trình web', 4, 'lã quang trung', 1, 'cntt'),
('Cod', 'Văn học', 4, 'Kiều Nam', 1, 'cntt'),
('kt2', 'lịch sử vn', 2, 'Nguyễn thị tình', 2, 'ktxh'),
('kt23', 'kinh tế chính trị', 3, 'Nguyễn thị tình', 1, 'ktxh'),
('KT3', 'thị trường chứng khoán', 4, 'Kiều Vân', 2, 'ktxh'),
('KT4', 'Quản trị thị trường', 4, 'lã quang trung', 2, 'ktxh'),
('L1', 'toasn', 5, 'Kiều Nam', 1, 'cntt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `gioitinh` varchar(100) NOT NULL,
  `namsinh` date NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `hoten`, `gioitinh`, `namsinh`, `diachi`, `email`) VALUES
('73dckt29', 'nguyễn vân anh', 'Nam', '2024-07-30', 'vĩnh phúc', 'asdasd@gmail.com'),
('73dctt16', 'kiều tiến ', 'Nam', '2024-06-11', 'hà nam', 'kieuviettien1@gmail.com'),
('73dctt18', 'phúc du', 'Nữ', '2024-06-04', 'Hà tây 2', 'kieuviettien1@gmail.com'),
('73dctt27', 'chi', 'Nữ', '2024-06-06', 'hà nam', 'kieuviettien1@gmail.com'),
('73dctt29', 'chi', 'Nữ', '2024-06-06', 'yên bái', 'kieuviettien1@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chamdiem`
--
ALTER TABLE `chamdiem`
  ADD PRIMARY KEY (`masinhvien`,`mamonhoc`);

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`mamonhoc`,`masv`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`magiaovien`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamonhoc`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
