-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2021 lúc 12:45 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.19

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
-- Cấu trúc bảng cho bảng `access`
--

CREATE TABLE `access` (
  `SL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `access`
--

INSERT INTO `access` (`SL`) VALUES
(1578);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `catID` int(11) NOT NULL,
  `catName` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `catDescription` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `catStatus` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`catID`, `catName`, `catDescription`, `catStatus`) VALUES
(1, 'Điện thoại Phím', 'NULL', '1'),
(2, 'Điện thoại Cảm ứng', 'NULL', '1'),
(3, 'Điện thoại Gaming', 'NULL', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `client`
--

CREATE TABLE `client` (
  `cliID` int(11) NOT NULL,
  `cliName` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `cliAddress` varchar(500) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `cliCountry` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `cliPostOfficeCode` char(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `cliPhone` char(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `cliStatus` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `cliUser` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `cliPass` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `client`
--

INSERT INTO `client` (`cliID`, `cliName`, `cliAddress`, `cliCountry`, `cliPostOfficeCode`, `cliPhone`, `cliStatus`, `cliUser`, `cliPass`) VALUES
(1, 'Nguyễn Thị Hồng  Ánh', '123, Nguyễn Phúc Chu, P15, QTB', 'TH HCM', '12345', '0799501324', '1', 'user1', '123'),
(2, 'Nguyễn Gia Hòa', '124, Nguyễn Phúc Chu, P15, QTB', 'TH HCM', '12346', '0799501325', '1', 'user2', '123'),
(3, 'Nguyễn Nhan Gia Bảo', '125, Nguyễn Phúc Chu, P15, QTB', 'TH HCM', '12347', '0799501326', '1', 'user3', '123'),
(4, 'Nguyễn Công Chính', '126, Nguyễn Phúc Chu, P15, QTB', 'NTH HCM', '12348', '0799501327', '1', 'user4', '123'),
(5, 'Dương Nghĩa Hiệp', '127, Nguyễn Phúc Chu, P15, QTB', 'TH HCM', '12349', '0799501328', '1', 'user5', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `prodID` int(11) DEFAULT NULL,
  `color1` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `color2` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `color3` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `color4` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`prodID`, `color1`, `color2`, `color3`, `color4`) VALUES
(16, 'Nâu', NULL, NULL, NULL),
(17, 'Trắng lam', NULL, NULL, NULL),
(18, 'Trắng lam', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comID` int(11) NOT NULL,
  `prodID` int(11) NOT NULL,
  `comUser` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `comContent` text COLLATE utf8_vietnamese_ci NOT NULL,
  `comDate` datetime NOT NULL,
  `comTime` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`comID`, `prodID`, `comUser`, `comContent`, `comDate`, `comTime`) VALUES
(1, 1, 'Hieu Minh 1', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <3', '2001-09-28 00:00:00', '1'),
(2, 2, 'Hieu Minh 2', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <4', '2001-09-29 00:00:00', '2'),
(3, 3, 'Hieu Minh 3', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <5', '2001-09-30 00:00:00', '3'),
(4, 4, 'Hieu Minh 4', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <6', '2001-10-01 00:00:00', '4'),
(5, 5, 'Hieu Minh 5', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <7', '2001-10-02 00:00:00', '5'),
(6, 6, 'Hieu Minh 6', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <8', '2001-10-03 00:00:00', '6'),
(7, 7, 'Hieu Minh 7', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <9', '2001-10-04 00:00:00', '7'),
(8, 8, 'Hieu Minh 8', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <10', '2001-10-05 00:00:00', '8'),
(9, 9, 'Hieu Minh 9', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <11', '2001-10-06 00:00:00', '9'),
(10, 10, 'Hieu Minh 10', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <12', '2001-10-07 00:00:00', '10'),
(11, 11, 'Hieu Minh 11', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <13', '2001-10-08 00:00:00', '11'),
(12, 12, 'Hieu Minh 12', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <14', '2001-10-09 00:00:00', '12'),
(13, 13, 'Hieu Minh 13', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <15', '2001-10-10 00:00:00', '13'),
(14, 14, 'Hieu Minh 14', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <16', '2001-10-11 00:00:00', '14'),
(15, 15, 'Hieu Minh 15', 'Hàng tốt nha mn, giao còn nhanh nữa, m cho 1 like <17', '2001-10-12 00:00:00', '15'),
(16, 1, 'an', 'Cái tui sài dc 2 tuần thấy chơi game tốt ', '0000-00-00 00:00:00', '1'),
(17, 1, 'Nguyễn Hiếu', 'Giao hàng nhanh quá', '2021-06-12 00:00:00', '09'),
(20, 2, 'HM', 'Rẻ mà ngon quá', '2021-06-12 00:00:00', '09'),
(21, 3, 'Noname', 'i like', '2021-06-12 00:00:00', '09');

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
(7, 'hinh7.1.png', 'hinh7.2.png', 'hinh7.3.png', 'hinh7.4.png'),
(8, 'hinh8.1.png', 'hinh8.2.png', 'hinh8.3.png', 'hinh8.4.png'),
(9, 'hinh9.1.png', 'hinh9.2.png', 'hinh9.3.png', 'hinh9.4.png'),
(10, 'hinh10.1.png', 'hinh10.2.png', 'hinh10.3.png', 'hinh10.4.png'),
(11, 'hinh11.1.png', 'hinh11.2.png', 'hinh11.3.png', 'hinh11.4.png'),
(12, 'hinh12.1.png', 'hinh12.2.png', 'hinh12.3.png', 'hinh12.4.png'),
(13, 'hinh13.1.png', 'hinh13.2.png', 'hinh13.3.png', 'hinh13.4.png'),
(14, 'hinh14.1.png', 'hinh14.2.png', 'hinh14.3.png', 'hinh14.4.png'),
(15, 'hinh15.1.png', 'hinh15.2.png', 'hinh15.3.png', 'hinh15.4.png'),
(16, 'xiaomi-mi-10t-pro-den-600x600.jpg', NULL, NULL, NULL),
(17, 'new1.jpg', NULL, NULL, NULL),
(18, 'hinh2.1.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information_order`
--

CREATE TABLE `information_order` (
  `infoOrderID` int(11) NOT NULL,
  `ordID` int(11) DEFAULT NULL,
  `prodID` int(11) DEFAULT NULL,
  `infoOrderSL` int(11) DEFAULT NULL,
  `infoOrderPrice` int(11) DEFAULT NULL,
  `infoStatus` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `information_order`
--

INSERT INTO `information_order` (`infoOrderID`, `ordID`, `prodID`, `infoOrderSL`, `infoOrderPrice`, `infoStatus`) VALUES
(1, 1, 1, 4, 180000, '1'),
(2, 2, 2, 5, 225000, '1'),
(3, 3, 3, 6, 270000, '1'),
(4, 4, 4, 7, 315000, '1'),
(5, 5, 5, 8, 360000, '1'),
(6, 6, 6, 9, 405000, '1'),
(7, 7, 7, 10, 450000, '1'),
(8, 8, 8, 11, 495000, '1'),
(9, 9, 9, 12, 540000, '1'),
(10, 10, 10, 13, 585000, '1'),
(11, 11, 11, 14, 630000, '1'),
(12, 12, 12, 15, 675000, '1'),
(13, 13, 13, 16, 720000, '1'),
(14, 14, 14, 17, 765000, '1'),
(15, 15, 15, 20, 810000, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderr`
--

CREATE TABLE `orderr` (
  `ordID` int(11) NOT NULL,
  `ordDate` date DEFAULT NULL,
  `ordDescription` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ordBill` bit(1) DEFAULT NULL,
  `ordStatus` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `cliID` int(11) DEFAULT NULL,
  `staID` int(11) DEFAULT NULL,
  `shiID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `orderr`
--

INSERT INTO `orderr` (`ordID`, `ordDate`, `ordDescription`, `ordBill`, `ordStatus`, `cliID`, `staID`, `shiID`) VALUES
(1, '2021-09-20', NULL, b'1', '-1', 1, 1, NULL),
(2, '2021-09-20', NULL, b'1', '-1', 2, 2, NULL),
(3, '2021-10-01', NULL, b'1', '-1', 3, 3, NULL),
(4, '2021-10-02', NULL, b'1', '-1', 4, 4, NULL),
(5, '2021-11-03', NULL, b'1', '-1', 5, 5, NULL),
(6, '2021-11-04', NULL, b'1', '0', 1, 6, NULL),
(7, '2021-12-05', NULL, b'1', '0', 2, 7, NULL),
(8, '2021-12-06', NULL, b'1', '0', 3, 8, NULL),
(9, '2021-01-07', NULL, b'1', '0', 4, 9, NULL),
(10, '2021-01-08', NULL, b'1', '0', 5, 10, NULL),
(11, '2021-02-09', NULL, b'1', '1', 1, 11, NULL),
(12, '2021-06-10', NULL, b'1', '1', 2, 12, NULL),
(13, '2021-09-11', NULL, b'1', '1', 3, 13, NULL),
(14, '2021-04-12', NULL, b'1', '1', 4, 14, NULL),
(15, '2022-05-13', NULL, b'1', '1', 5, 15, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `prodID` int(11) NOT NULL,
  `prodName` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `prodPrice` int(11) DEFAULT NULL,
  `prodSL` int(11) DEFAULT NULL,
  `prodInit` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `prodReleaseYear` int(11) DEFAULT NULL,
  `prodDescription` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `prodStatus` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `provID` int(11) DEFAULT NULL,
  `catID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`prodID`, `prodName`, `prodPrice`, `prodSL`, `prodInit`, `prodReleaseYear`, `prodDescription`, `prodStatus`, `provID`, `catID`) VALUES
(1, 'Xiaomi 1280', 45000, 100, 'đ', 2001, NULL, '1', 1, 1),
(2, 'Apple 1280', 46000, NULL, 'đ', 2002, 'NULL', '1', 2, 1),
(3, 'Samsung 1280', 47000, NULL, 'đ', 2002, NULL, '1', 3, 1),
(4, 'Huawei 1280', 45000, NULL, 'đ', 2004, NULL, '1', 4, 1),
(5, 'Oppo Phone', 45000, NULL, 'đ', 2005, NULL, '1', 5, 2),
(6, 'Vivo Phone', 45000, NULL, 'đ', 2006, NULL, '1', 6, 2),
(7, 'Sony phone', 48000, NULL, 'đ', 2007, NULL, '1', 7, 2),
(8, 'Lenovo Gaming', 80000, NULL, 'đ', 2015, NULL, '1', 15, 3),
(9, 'Vsmart Phone', 49000, NULL, 'đ', 2008, NULL, '1', 8, 2),
(10, 'OnePlus Phone', 50000, NULL, 'đ', 2009, NULL, '1', 9, 2),
(11, 'SmartPhone Gaming', 55000, NULL, 'đ', 2010, NULL, '1', 10, 3),
(12, 'Bphone gaming', 45000, NULL, 'đ', 2011, NULL, '1', 11, 3),
(13, 'Tencent ganing', 60000, NULL, 'đ', 2012, NULL, '1', 12, 3),
(14, 'Super Gaimg', 45000, NULL, 'đ', 2013, NULL, '1', 13, 3),
(15, 'CPhone Gaming', 45000, NULL, 'đ', 2014, NULL, '1', 14, 3),
(16, 'Xiaomi 2021', 3000000, 123, 'đ', 2021, 'mạnh mẽ', '1', 1, 2),
(17, 'Apple New version', 3000005, 12345, 'đ', 2025, '5', '1', 2, 2),
(18, 'Iphone 12 pro max', 20000000, 2, 'đ', 2021, '', '1', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `provided`
--

CREATE TABLE `provided` (
  `provID` int(11) NOT NULL,
  `provFullName` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `provName` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `provAddress` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `provPostOfficeCode` char(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `provCountry` varchar(25) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `provPhone` char(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `provDescription` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `provStatus` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `provided`
--

INSERT INTO `provided` (`provID`, `provFullName`, `provName`, `provAddress`, `provPostOfficeCode`, `provCountry`, `provPhone`, `provDescription`, `provStatus`) VALUES
(1, 'Công ty Xiaomi Inc', 'Xiaomi Inc', '116 Nguyễn Du, Q.1, Tp. Hồ Chí Minh', '12345', 'HCM', '0799501325', '', '1'),
(2, NULL, 'Apple Inc', '246 Nguyễn Hồng Đào, Q.Tân Bình, Tp. Hồ Chí Minh', '12346', 'TP HCM', '0799501325', NULL, '1'),
(3, NULL, 'Samsung Inc', '718bis Kinh Dương Vương, Q.6, Tp. Hồ Chí Minh', '12347', 'TP HCM', '0799501326', NULL, '1'),
(4, NULL, 'Huawei Inc', 'Lầu 304A Quang Trung, P.11, Q. Gò Vấp, Tp. Hồ Chí Minh', '12348', 'TP HCM', '0799501327', NULL, '1'),
(5, NULL, 'Oppo Inc', 'Tầng 10, CT Plaza, 60A Trường Sơn, P.2, Q. Tân Bình, Tp. Hồ Chí Minh', '12349', 'TP HCM', '0799501328', NULL, '1'),
(6, NULL, 'Vivo Inc', 'Tầng 7, Hùng Vương Plaza, 126 Hùng Vương, Q.5, Tp. Hồ Chí Minh', '12350', 'TP HCM', '0799501329', NULL, '1'),
(7, NULL, 'Sony Inc', 'Lầu 3, Aeon Mall 30 Bờ Bao Tân Thắng, P. Sơn Kỳ, Q. Tân Phú, Tp. Hồ Chí Minh', '12351', 'TP HCM', '0799501330', NULL, '1'),
(8, NULL, 'Lenovo Inc', 'Tầng 2, Thảo Điền Mall, 12 Quốc Hương, P. Thảo Điền, Q.2, Tp. Hồ Chí Minh', '12352', 'TP HCM', '0799501331', NULL, '1'),
(9, NULL, 'Vismart Inc', 'Tầng 5, TTTM Vincom Thủ Đức, 216 Võ Văn Ngân, P. Bình Thọ, Q. Thủ Đức, Tp. Hồ Chí Minh', '12353', 'TP HCM', '0799501332', NULL, '1'),
(10, NULL, 'OnePlus Inc ', 'Tầng 5 TTTM Vincom Plaza Gò Vấp, 12 Phan Văn Trị, P.7, Q. Gò Vấp, Tp. Hồ Chí Minh', '12354', 'TP HCM', '0799501333', NULL, '1'),
(11, NULL, 'SmartPhone Inc', 'Lầu 3 & 4, TTTM ICON 68, 2 Hải Triều, Q.1, Tp. Hồ Chí Minh', '12355', 'TP HCM', '0799501334', NULL, '1'),
(12, NULL, 'Bphone Inc', '52 Lê Văn Việt, Quận 9, Tp. Hồ Chí Minh', '12356', 'TP HCM', '0799501335', NULL, '1'),
(13, NULL, 'Tencent Inc', 'Tầng 3, Lotte Mart, 469 Nguyễn Hữu Thọ, P. Tân Hưng, Q.7, Tp. Hồ Chí Minh', '12357', 'TP HCM', '0799501336', NULL, '1'),
(14, NULL, 'SuperPhone Inc', 'Tầng 4, Pico Plaza, 20 Cộng Hòa, P.12, Q. Tân Bình, Tp. Hồ Chí Minh', '12358', 'TP HCM', '0799501337', NULL, '1'),
(15, NULL, 'Cphone', 'Tầng 4 Lotte Mart Phú Thọ, ngã tư 3/2 và Lê Đại Hành, Q.11, Tp. Hồ Chí Minh', '12359', 'TP HCM', '0799501338', NULL, '1'),
(16, 'Công ty THHH NokiaPhone', ' NokiaPhone', '65, Huỳnh Thúc Kháng, Q1, TP HCM', '12345', 'HCM', '0799501324', NULL, '1'),
(17, 'Công ty SellPhone HCM', 'HCM', '123, Nguyễn Phúc Chu, P15, QTB', '1234`', 'HCM', '+847995013', NULL, '1'),
(20, 'Công ty TheGioiDiDong', 'TheGioiDiDong', '65, Huỳnh Thúc Kháng, Q1, TP HCM', '123', 'HCM', '+847995013', 'Cửa hàng bán lẻ', '1'),
(21, 'Công ty HMM', 'HMM', '123, Nguyễn Phúc Chu, P15, QTB', '123', 'Việt Nam', '+847995013', '', '0'),
(22, 'Công Ty HM', 'HM', '65, Huỳnh Thúc Kháng, Q1, TP HCM', '12345', 'TP HCM', '0799501324', '', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `staID` int(11) NOT NULL,
  `staName` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `staBirthday` date DEFAULT NULL,
  `staAddress` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `staImg` varchar(250) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `staPhone` char(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `staSex` bit(1) DEFAULT NULL,
  `staDescription` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `staStatus` int(11) DEFAULT NULL,
  `staSalary` int(11) DEFAULT NULL,
  `staPosition` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `LoginID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`staID`, `staName`, `staBirthday`, `staAddress`, `staImg`, `staPhone`, `staSex`, `staDescription`, `staStatus`, `staSalary`, `staPosition`, `LoginID`) VALUES
(1, 'Hiếu Minh', '2001-09-29', 'Tân Hiệp, Kiên Giang', '2.png', '374422286', b'1', '', 1, 8000000, 'GD', 1),
(2, 'Trần Đức Hiếu', '0000-00-00', 'Kiên Gang', 'avata2.png', '374422287', b'1', NULL, 1, 9000000, 'NV', 2),
(3, 'Dương Nghĩa Hiệp', '2001-09-30', 'Kiên Giang', 'avata3.png', '374422288', b'1', NULL, 1, 10000000, 'NV', 3),
(4, 'Nguyễn Công Chính', '2001-10-01', 'Gò Vấp', 'avata4.png', '374422289', b'1', NULL, 1, 11000000, 'NV', 4),
(5, 'Nguyễn Nhan Gia Bảo', '2001-10-02', 'Q5', 'avata5.png', '374422290', b'1', NULL, 1, 12000000, 'NV', 5),
(6, 'Trần Dương Trí Hiếu', '2001-10-03', 'Bình Chánh ', 'avata6.png', '374422291', b'1', NULL, 1, 13000000, 'NV', 6),
(7, 'Nguyễn Đình Thủ', '2001-10-04', 'Tân Phú', 'avata7.png', '374422292', b'1', NULL, 1, 14000000, 'NV', 7),
(8, 'Nguyễn Hiếu', '2001-10-05', 'Tân Bình', 'avata8.png', '374422293', b'1', NULL, 1, 15000000, 'NV', 8),
(9, 'Trần Hiếu', '2001-10-06', 'Kiên Giang', 'avata9.png', '374422294', b'1', NULL, 1, 16000000, 'NV', 9),
(10, 'Dương Thu', '2001-10-07', 'Kiên Gang', 'avata10.png', '374422295', b'0', NULL, 1, 17000000, 'NV', 10),
(11, 'Nguyễn Hồng', '2001-10-08', 'Kiên Giang', 'avata11.png', '374422296', b'0', NULL, 1, 18000000, 'NV', 11),
(12, 'Nguyễn Thảo', '2001-10-09', 'Gò Vấp', 'avata12.png', '374422297', b'0', NULL, 1, 19000000, 'NV', 12),
(13, 'Trần Hạnh', '2001-10-10', 'Q5', 'avata13.png', '374422298', b'0', NULL, 1, 20000000, 'NV', 13),
(14, 'Nguyễn  Minh', '2001-10-11', 'Bình Chánh ', 'avata14.png', '374422299', b'0', NULL, 1, 21000000, 'NV', 14),
(15, 'Nguyễn Trân', '2001-10-12', 'Tân Phú', 'avata15.png', '374422300', b'0', NULL, 1, 22000000, 'NV', 15),
(16, 'Hiếu Minh Nguyễn', '2001-09-28', '123 Nguyễn Phúc Chu, P.15, Q.TB, TP.HCM', 'hieu.jpg', '0799501324', b'1', '', 1, 1000, 'GD', 21),
(17, 'user20 Nguyen6', '2001-09-28', '123 Nguyễn Phúc Chu, P.15, Q.TB, TP.HCM6', '2.png', '123123126', b'1', '6', 0, 1236, 'NV', 22),
(18, 'user21 Nguyen', '2001-09-28', '123 Nguyễn Phúc Chu, P.15, Q.TB, TP.HCM', '8.jpg', '12312312', b'1', '', 0, 123, 'GD', 23),
(19, 'Nguyễn Minh Hiêu', '2001-09-28', '123 Nguyễn Phúc Chu, P.15, Q.TB, TP.HCM', 'test2.jpg', '0799501324', b'1', 'XYZ', 0, 23000000, 'NV', 24),
(20, 'Nguyễn Tèo', '2001-09-29', '123 Nguyễn Phúc Chu, P.15, Q.TB, TP.HCM', 'test2.jpg', '0799501324', b'1', '', 1, 20000000, 'GD', 25),
(21, 'Nguyễn Minh Hiếu', '2001-09-28', '123', '2.png', '0799501324', b'1', 'Hi', 1, 200000000, 'GD', 26),
(22, 'user 23', '2001-09-28', '123, TH, KG', 'Untitled-2.png', '0799501324', b'1', 'nhân viên', 0, 2000000, 'NV', 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff_login`
--

CREATE TABLE `staff_login` (
  `LoginID` int(11) NOT NULL,
  `LoginUserName` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `LoginPassword` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `LoginStatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `staff_login`
--

INSERT INTO `staff_login` (`LoginID`, `LoginUserName`, `LoginPassword`, `LoginStatus`) VALUES
(1, 'user1', '123', 1),
(2, 'user2', '123', 1),
(3, 'user3', '123456773', 1),
(4, 'user4', '123456765', 1),
(5, 'user5', '123456757', 1),
(6, 'user6', '123456749', 1),
(7, 'user7', '123456741', 1),
(8, 'user8', '123456733', 1),
(9, 'user9', '123456725', 1),
(10, 'user10', '123456717', 1),
(11, 'user11', '123456709', 1),
(12, 'user12', '123456701', 1),
(13, 'user13', '123456693', 1),
(14, 'user14', '123456685', 1),
(15, 'user15', '123456677', 1),
(16, 'user16', '123456709', 1),
(17, 'user17', '123456701', 1),
(18, 'user18', '123456693', 1),
(19, 'user19', '123456685', 1),
(20, 'user20', '123456677', 1),
(21, 'HieuMinh4', '123', 1),
(22, 'user2246', '555346', 0),
(23, 'user21', '123', 0),
(24, 'user22', '123', 0),
(25, 'HM', 'nguyenteo', 1),
(26, 'HieuMinh', '123', 1),
(27, 'user23', '123', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catID`),
  ADD UNIQUE KEY `catID` (`catID`);

--
-- Chỉ mục cho bảng `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cliID`),
  ADD UNIQUE KEY `cliID` (`cliID`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD KEY `FK_prodID_color` (`prodID`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comID`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD KEY `FK_prodID_img` (`prodID`);

--
-- Chỉ mục cho bảng `information_order`
--
ALTER TABLE `information_order`
  ADD PRIMARY KEY (`infoOrderID`),
  ADD UNIQUE KEY `infoOrderID` (`infoOrderID`),
  ADD KEY `FK_ordID` (`ordID`),
  ADD KEY `FK_prodID` (`prodID`);

--
-- Chỉ mục cho bảng `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`ordID`),
  ADD UNIQUE KEY `ordID` (`ordID`),
  ADD KEY `FK_cliID` (`cliID`),
  ADD KEY `FK_staID` (`staID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodID`),
  ADD UNIQUE KEY `prodID` (`prodID`),
  ADD KEY `FK_provID` (`provID`),
  ADD KEY `FK_catID` (`catID`);

--
-- Chỉ mục cho bảng `provided`
--
ALTER TABLE `provided`
  ADD PRIMARY KEY (`provID`),
  ADD UNIQUE KEY `provID` (`provID`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staID`),
  ADD UNIQUE KEY `staID` (`staID`),
  ADD KEY `FK_LoginID` (`LoginID`);

--
-- Chỉ mục cho bảng `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`LoginID`),
  ADD UNIQUE KEY `LoginID` (`LoginID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `client`
--
ALTER TABLE `client`
  MODIFY `cliID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `information_order`
--
ALTER TABLE `information_order`
  MODIFY `infoOrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `orderr`
--
ALTER TABLE `orderr`
  MODIFY `ordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `prodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `provided`
--
ALTER TABLE `provided`
  MODIFY `provID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `staID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `staff_login`
--
ALTER TABLE `staff_login`
  MODIFY `LoginID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `color`
--
ALTER TABLE `color`
  ADD CONSTRAINT `FK_prodID_color` FOREIGN KEY (`prodID`) REFERENCES `product` (`prodID`);

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_prodID_img` FOREIGN KEY (`prodID`) REFERENCES `product` (`prodID`);

--
-- Các ràng buộc cho bảng `information_order`
--
ALTER TABLE `information_order`
  ADD CONSTRAINT `FK_ordID` FOREIGN KEY (`ordID`) REFERENCES `orderr` (`ordID`),
  ADD CONSTRAINT `FK_prodID` FOREIGN KEY (`prodID`) REFERENCES `product` (`prodID`);

--
-- Các ràng buộc cho bảng `orderr`
--
ALTER TABLE `orderr`
  ADD CONSTRAINT `FK_cliID` FOREIGN KEY (`cliID`) REFERENCES `client` (`cliID`),
  ADD CONSTRAINT `FK_staID` FOREIGN KEY (`staID`) REFERENCES `staff_login` (`LoginID`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_catID` FOREIGN KEY (`catID`) REFERENCES `category` (`catID`),
  ADD CONSTRAINT `FK_provID` FOREIGN KEY (`provID`) REFERENCES `provided` (`provID`);

--
-- Các ràng buộc cho bảng `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `FK_LoginID` FOREIGN KEY (`LoginID`) REFERENCES `staff_login` (`LoginID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
