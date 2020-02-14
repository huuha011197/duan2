-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 07:30 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du-an-mau`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL COMMENT 'Mã bình luận',
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nội dung bình luận',
  `ma_hh` int(11) NOT NULL COMMENT 'Mã hàng hóa được bình luận',
  `ma_kh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã người bình luận',
  `ngay_bl` date NOT NULL COMMENT 'Thời gian bình luận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(1, 'tôi muốn mua sp này', 1, 'KH001', '2018-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `ma_TT` int(11) DEFAULT NULL,
  `ma_hh` int(11) DEFAULT NULL,
  `ten_SP` varchar(50) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `gia_SP` int(11) DEFAULT NULL,
  `ngay_tao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id`, `ma_TT`, `ma_hh`, `ten_SP`, `so_luong`, `gia_SP`, `ngay_tao`) VALUES
(209, 213, 6, 'Bộ vi xử lý/ CPU Xeon E3-1230V6 (3.5GHz)', 1, 7100000, '2018-10-08 17:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL COMMENT ' Mã hàng hóa',
  `ten_hh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên hàng hóa',
  `don_gia` float NOT NULL COMMENT 'Đơn giá',
  `giam_gia` float NOT NULL COMMENT 'Mức giảm giá',
  `hinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Hình ảnh',
  `ngay_nhap` date NOT NULL COMMENT 'Ngày nhập hàng',
  `mo_ta` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mô tả hàng hóa',
  `dac_biet` bit(1) NOT NULL COMMENT 'Trạng thái đặc biệt',
  `so_luot_xem` int(11) NOT NULL DEFAULT '0' COMMENT 'Số lượt xem',
  `ma_loai` int(11) NOT NULL COMMENT 'Mã loại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(1, 'Bộ vi xử lý/ CPU Core I9-7900X (3.30GHz)', 29000000, 5, 'i9-0000x-1.jpg', '2018-09-16', 'Sử dụng socket 2066 chạy trên mainboard X299 mới nhất và rất nhiều nâng cấp. CPU này sở hữu tính năng Turbo Boost Max 3.0. Nhờ công nghệ này, xung nhịp đơn và đôi nhân của CPU có thể được tăng lên đáng kể, tối đa 4.3 mà chưa cần OC.\r\nHỗ trợ OC và tập lênh AVX-512 đáp ứng khả năng xử lý các tác vụ tính toán hiệu suất cao. Với dòng Core X này, Intel tiếp tục cải tiến tính năng OC trên mỗi nhân, điều chỉnh điện áp trên mỗi nhân, OC RAM... và khiến OC trở thành đơn giản với Intel Extreme Tuning (XTU), Extreme Memory Profile 2.0 (XMP).', b'0', 1, 1),
(4, 'Bộ vi xử lý/ CPU Pentium G5500 (3.8GHz)', 2700000, 1, '918cieabiql._sl1500_.jpg', '2018-10-03', '', b'1', 2, 1),
(5, 'Bộ vi xử lý / CPU AMD Ryzen 7 2700X (3.7/4.3 GHz)', 9100000, 0, 'amd-ryzen-7-avatar-lbox-800x800-fefefe.png', '2018-10-16', 'AMD Ryzen 7 2700X là dòng sản phẩm CPU mới được AMD công bố. Được đồn đoán là có sức mạnh vượt trội hơn so với dòng i7-8700k của Intel Được trang bị 6 nhân (12 luồng) cho hiệu năng đa nhiệm cao hơn nhiều thế hệ trước.Ngoài ra dòng CPU này có khả năng OC cao cấp càng tăng cường thêm hiệu suất cho hệ thốngvới hỗ trợ tính năng XFR (eXtended Frequency Range).', b'1', 2, 1),
(6, 'Bộ vi xử lý/ CPU Xeon E3-1230V6 (3.5GHz)', 7100000, 0, 'xeon-1.jpg', '0000-00-00', 'Tiếp nối sản phẩm thế hệ trước V5. CPU Intel Xeon E3-1230 V6 là bản nâng cấp đáng giá tăng hiệu năng đáng kể ! Đây là dòng sản phẩm phù hợp với các máy trạm WORKSTATIONS và dòng máy chủ Server. Dòng sản phẩm CPU Xeon hỗ trợ RAM ECC cùng hàng loạt tính năng mới mang tới tốc độ, ổn định tối ưu cho cả hệ thống.', b'1', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `ma_kh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã đăng nhập',
  `mat_khau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mật khẩu',
  `ho_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Họ và tên',
  `kich_hoat` bit(1) NOT NULL COMMENT 'Trạng thái kích hoạt',
  `hinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên hình ảnh',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Địa chỉ email',
  `vai_tro` bit(1) NOT NULL COMMENT 'Vai trò, true là nhân viên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
(0, 'HUUHA1997', 'maiyeuem113', 'phan Minh Tam', b'0', 'download.jpg', 'tampmpd02460@fpt.edu.vn', b'0'),
(0, 'KH001', 'kh001', 'Phan Minh Tâm', b'0', 'download.jpg', 'sakukelovesakutara@gmail.com', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL COMMENT 'Mã loại hàng',
  `ten_loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, 'Bộ vi xử lí - CPU'),
(8, 'Bo mạch chính - Mainboard'),
(9, 'Bộ nhớ Ram'),
(10, 'Card đồ họa'),
(11, 'Ổ cứng SSD'),
(12, 'Ổ cứng HHD'),
(13, 'Nguồn cấp điện'),
(14, 'Tản nhiệt nước'),
(15, 'Vỏ Case'),
(16, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `thanh_toan`
--

CREATE TABLE `thanh_toan` (
  `ma_TT` int(11) NOT NULL,
  `gia_dh` int(11) DEFAULT NULL,
  `ma_kh` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trang_thai` int(4) DEFAULT NULL,
  `ngay_tao` datetime DEFAULT CURRENT_TIMESTAMP,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanh_toan`
--

INSERT INTO `thanh_toan` (`ma_TT`, `gia_dh`, `ma_kh`, `trang_thai`, `ngay_tao`, `note`) VALUES
(213, 7810000, 'KH001', 0, '2018-10-09 00:05:55', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_kh` (`ma_kh`),
  ADD KEY `ma_kh_2` (`ma_kh`),
  ADD KEY `ma_hh` (`ma_hh`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PersonOrder` (`ma_TT`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `thanh_toan`
--
ALTER TABLE `thanh_toan`
  ADD PRIMARY KEY (`ma_TT`),
  ADD KEY `FK_PersonOr` (`ma_kh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT COMMENT ' Mã hàng hóa', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `thanh_toan`
--
ALTER TABLE `thanh_toan`
  MODIFY `ma_TT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`);

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`ma_TT`) REFERENCES `thanh_toan` (`ma_TT`);

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);

--
-- Constraints for table `thanh_toan`
--
ALTER TABLE `thanh_toan`
  ADD CONSTRAINT `FK_PersonOr` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
