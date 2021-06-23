-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 23, 2021 lúc 02:01 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_bandienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `prodID` int(11) DEFAULT NULL,
  `img1` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `img2` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `img3` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `img4` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`prodID`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'hinh1.1.png', 'hinh1.2.png', 'hinh1.3.png', 'hinh1.4.png'),
(2, 'hinh2.1.png', 'hinh2.2.png', 'hinh2.3.png', 'hinh2.4.png'),
(3, 'hinh3.1.png', 'hinh3.2.png', 'hinh3.3.png', 'hinh3.4.png'),
(4, 'hinh4.1.png', 'hinh4.2.png', 'hinh4.3.png', 'hinh4.4.png'),
(5, 'hinh5.1.png', 'hinh5.2.png', 'hinh5.3.png', 'hinh5.4.png'),
(6, 'hinh6.1.png', 'hinh6.2.png', 'hinh6.3.png', 'hinh6.4.png'),
(7, 'hinh7.1.1.png', 'hinh7.2.png', 'hinh7.3.png', 'hinh7.4.png'),
(8, 'hinh8.1.1.png', 'hinh8.2.png', 'hinh8.3.png', 'hinh8.4.png'),
(9, 'hinh9.1.png', 'hinh9.2.png', 'hinh9.3.png', 'hinh9.4.png'),
(10, 'hinh10.1.png', 'hinh10.2.png', 'hinh10.3.png', 'hinh10.4.png'),
(11, 'hinh11.1.png', 'hinh11.2.png', 'hinh11.3.png', 'hinh11.4.png'),
(12, 'hinh12.1.png', 'hinh12.2.png', 'hinh12.3.png', 'hinh12.4.png'),
(13, 'hinh13.1.png', 'hinh13.2.png', 'hinh13.3.png', 'hinh13.4.png'),
(14, 'hinh14.1.png', 'hinh14.2.png', 'hinh14.3.png', 'hinh14.4.png'),
(15, 'hinh15.1.png', 'hinh15.2.png', 'hinh15.3.png', 'hinh15.4.png'),
(16, 'xiaomi-mi-10t-pro-den-600x600.jpg', NULL, NULL, NULL),
(17, 'new1.jpg', NULL, NULL, NULL),
(18, 'hinh2.1.png', NULL, NULL, NULL),
(19, 'hinh19.1.png', NULL, NULL, NULL),
(20, 'hinh20.1.png', NULL, NULL, NULL),
(21, 'hinh21.1.png', NULL, NULL, NULL),
(22, 'hinh22.1.png', NULL, NULL, NULL),
(23, 'hinh23.1.png', NULL, NULL, NULL),
(24, 'hinh24.1.png', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD KEY `FK_prodID_img` (`prodID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_prodID_img` FOREIGN KEY (`prodID`) REFERENCES `product` (`prodID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
