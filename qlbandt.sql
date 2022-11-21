-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2022 lúc 03:43 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbandt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlbanhang`
--

CREATE TABLE `qlbanhang` (
  `MaBH` int(11) NOT NULL,
  `TenSP` varchar(255) NOT NULL,
  `TenKH` varchar(255) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qlbanhang`
--

INSERT INTO `qlbanhang` (`MaBH`, `TenSP`, `TenKH`, `SoLuong`, `Gia`) VALUES
(1, 'Iphone XS max', 'Nguyễn Anh Linh', 1, 10000000),
(2, 'Iphone 12 pro max', 'Phạm Bá Hùng', 1, 25000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlbaohanh`
--

CREATE TABLE `qlbaohanh` (
  `MaBaoHanh` int(11) NOT NULL,
  `TenKH` varchar(255) NOT NULL,
  `TenSP` varchar(255) NOT NULL,
  `NgayBH` date NOT NULL,
  `HanBH` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qlbaohanh`
--

INSERT INTO `qlbaohanh` (`MaBaoHanh`, `TenKH`, `TenSP`, `NgayBH`, `HanBH`) VALUES
(1, 'Phạm Văn Tuấn ', 'Iphone XS max', '2020-11-25', '2021-11-25'),
(2, 'Huỳnh Tấn Đạt', 'Iphone 11 pro max', '2020-12-27', '2021-12-27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlchucvu`
--

CREATE TABLE `qlchucvu` (
  `MaCV` int(11) NOT NULL,
  `TenCV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qlchucvu`
--

INSERT INTO `qlchucvu` (`MaCV`, `TenCV`) VALUES
(1, 'Nhân Viên Bán Hàng'),
(2, 'Nhân Viên Kỹ Thuật'),
(3, 'Trưởng Ca'),
(5, 'Quản Lý ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qldienthoai`
--

CREATE TABLE `qldienthoai` (
  `MaDT` int(11) NOT NULL,
  `TenDT` varchar(255) NOT NULL,
  `MaDM` int(11) NOT NULL,
  `AnhDT` varchar(100) NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `MoTa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qldienthoai`
--

INSERT INTO `qldienthoai` (`MaDT`, `TenDT`, `MaDM`, `AnhDT`, `Gia`, `SoLuong`, `MoTa`) VALUES
(1, 'Iphone 13 ', 1, 'Iphone13.jpg', 30000000, 25, 'Mẫu mã đẹp, nhiều màu sắc, camera sắc nét giúp người dùng trở nên sang trọng'),
(2, 'Iphone 13 promax', 1, 'Iphone13promax.jpg', 35000000, 15, 'Mẫu mã đẹp, nhiều màu sắc, camera sắc nét giúp người dùng trở nên sang trọng'),
(7, 'Iphone 12 promax', 1, 'Iphone12promax.jpg', 25000000, 45, 'Đây là sản phẩm mới với thiết kế sang trọng và nhiều màu sắc đa dạng '),
(8, 'SamSungGalaxy Z Fold ', 2, 'Samsungfold.jpg', 45000000, 26, 'Đây là sản phẩm của hãng SamSung với thiết kế gập máy độc đáo cùng nhiều tính năng hấp dẫn cho những người muốn sử dụng dòng máy đắt tiền'),
(9, 'XiaoMi Redmi Note 11 Pro ', 5, 'xiaomiredminote11pro.jpg', 8000000, 12, 'Đây là sản phẩm mới nhất của hãng XiaoMi với giá thành phải chăng nhưng chất lượng máy tốt và có camera sắc nét, dung lượng pin khủng'),
(10, 'Oppo Reno 6 ', 4, 'opporeno6.jpg', 13000000, 10, 'Đây là sản phẩm mới của hãng Oppo với camera selfie cực đỉnh, màn hình sắc nét'),
(11, 'Iphone 11 promax', 1, 'iphone11promax.jpg', 18000000, 10, 'Đây là sản phẩm Iphone ra mắt năm 2019 được nhiều người tin cậy và sử dụng '),
(12, 'SamSung Galaxy S21 Ultra', 2, 'samsunggalaxys21ultra.jpg', 20000000, 20, 'Sảm Phẩm của hãng SamSung với thiết kế độc đáo, màn hình rộng, camera sắc nét');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qldongmay`
--

CREATE TABLE `qldongmay` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qldongmay`
--

INSERT INTO `qldongmay` (`MaDM`, `TenDM`) VALUES
(1, 'IPhone'),
(2, 'SamSung'),
(4, 'Oppo'),
(5, 'XiaoMi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlkhachhang`
--

CREATE TABLE `qlkhachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(255) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `MaLK` int(11) NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qlkhachhang`
--

INSERT INTO `qlkhachhang` (`MaKH`, `TenKH`, `NgaySinh`, `GioiTinh`, `MaLK`, `SDT`) VALUES
(1, 'Nguyễn Thành An ', '2001-12-19', 'Nam', 1, 123456789),
(2, 'Lê Đức Minh', '2001-10-11', 'Nam', 2, 123456789),
(3, 'Vũ Tuấn Nghĩa', '2001-05-08', 'Nam', 1, 123456789),
(4, 'Nguyễn Thành Việt', '2001-07-31', 'Nam', 1, 123456789),
(5, 'Cao Vũ Nguyên', '2001-08-17', 'Nam', 2, 123456789);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlloaikhach`
--

CREATE TABLE `qlloaikhach` (
  `MaLK` int(11) NOT NULL,
  `TenLK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qlloaikhach`
--

INSERT INTO `qlloaikhach` (`MaLK`, `TenLK`) VALUES
(1, 'Thường'),
(2, 'Vip');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlnhanvien`
--

CREATE TABLE `qlnhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(255) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `QueQuan` varchar(100) NOT NULL,
  `MaCV` int(11) NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qlnhanvien`
--

INSERT INTO `qlnhanvien` (`MaNV`, `TenNV`, `NgaySinh`, `GioiTinh`, `QueQuan`, `MaCV`, `SDT`) VALUES
(1, 'Dương Thành Minh ', '2001-04-16', 'Nam', 'Hà Nội', 1, 123456789),
(2, 'Đinh Trung Hiếu', '2001-09-27', 'Nam', 'Hà Nội', 1, 123456669),
(3, 'Trần Đức Long', '2001-09-17', 'Nam', 'Hà Nội', 2, 125335639),
(4, 'Đinh Như Quỳnh', '2001-09-16', 'Nam', 'Hà Nội', 3, 435335639),
(5, 'Đào Quang Huy ', '2001-05-30', 'Nam', 'Hà Nội', 2, 1122334455);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlphukien`
--

CREATE TABLE `qlphukien` (
  `MaPK` int(11) NOT NULL,
  `TenPK` varchar(255) NOT NULL,
  `AnhPK` varchar(100) NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `MoTa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qlphukien`
--

INSERT INTO `qlphukien` (`MaPK`, `TenPK`, `AnhPK`, `Gia`, `SoLuong`, `MoTa`) VALUES
(1, 'Tai Nghe Airpod 1', 'Airpod1.jpg', 2500000, 12, 'Tai nghe của hãng Apple chuyên dùng cho sản phẩm của apple'),
(2, 'Ốp điện thoại iphone 12 promax', 'op12promax.jpg', 100000, 25, 'ốp lưng bảo vệ máy 12 pro max'),
(5, 'Tai Nghe SamSung Galaxy Buds Pro ', 'galaxybudspro.jpg', 2990000, 27, 'Đây là sản phẩm của samsung');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `qlbanhang`
--
ALTER TABLE `qlbanhang`
  ADD PRIMARY KEY (`MaBH`);

--
-- Chỉ mục cho bảng `qlbaohanh`
--
ALTER TABLE `qlbaohanh`
  ADD PRIMARY KEY (`MaBaoHanh`);

--
-- Chỉ mục cho bảng `qlchucvu`
--
ALTER TABLE `qlchucvu`
  ADD PRIMARY KEY (`MaCV`);

--
-- Chỉ mục cho bảng `qldienthoai`
--
ALTER TABLE `qldienthoai`
  ADD PRIMARY KEY (`MaDT`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Chỉ mục cho bảng `qldongmay`
--
ALTER TABLE `qldongmay`
  ADD PRIMARY KEY (`MaDM`);

--
-- Chỉ mục cho bảng `qlkhachhang`
--
ALTER TABLE `qlkhachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD KEY `MaLK` (`MaLK`);

--
-- Chỉ mục cho bảng `qlloaikhach`
--
ALTER TABLE `qlloaikhach`
  ADD PRIMARY KEY (`MaLK`);

--
-- Chỉ mục cho bảng `qlnhanvien`
--
ALTER TABLE `qlnhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `MaCV` (`MaCV`);

--
-- Chỉ mục cho bảng `qlphukien`
--
ALTER TABLE `qlphukien`
  ADD PRIMARY KEY (`MaPK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `qlbanhang`
--
ALTER TABLE `qlbanhang`
  MODIFY `MaBH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `qlbaohanh`
--
ALTER TABLE `qlbaohanh`
  MODIFY `MaBaoHanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `qlchucvu`
--
ALTER TABLE `qlchucvu`
  MODIFY `MaCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `qldienthoai`
--
ALTER TABLE `qldienthoai`
  MODIFY `MaDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `qldongmay`
--
ALTER TABLE `qldongmay`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `qlkhachhang`
--
ALTER TABLE `qlkhachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `qlloaikhach`
--
ALTER TABLE `qlloaikhach`
  MODIFY `MaLK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `qlnhanvien`
--
ALTER TABLE `qlnhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `qlphukien`
--
ALTER TABLE `qlphukien`
  MODIFY `MaPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `qldienthoai`
--
ALTER TABLE `qldienthoai`
  ADD CONSTRAINT `qldienthoai_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `qldongmay` (`MaDM`);

--
-- Các ràng buộc cho bảng `qlkhachhang`
--
ALTER TABLE `qlkhachhang`
  ADD CONSTRAINT `qlkhachhang_ibfk_1` FOREIGN KEY (`MaLK`) REFERENCES `qlloaikhach` (`MaLK`);

--
-- Các ràng buộc cho bảng `qlnhanvien`
--
ALTER TABLE `qlnhanvien`
  ADD CONSTRAINT `qlnhanvien_ibfk_1` FOREIGN KEY (`MaCV`) REFERENCES `qlchucvu` (`MaCV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
