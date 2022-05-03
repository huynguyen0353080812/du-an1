-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 22, 2022 lúc 09:07 AM
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
-- Cơ sở dữ liệu: `coffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`) VALUES
(12, 'COFFEE', 'coffee', 0),
(13, 'NƯỚC ÉP', 'NƯỚC ÉP', 0),
(16, 'Espresso', 'Espresso', 12),
(17, 'COCKTAIL', 'COCKTAIL', 0),
(19, 'Dưa hấu', 'Dưa hấu', 13),
(21, 'CAKE', 'CAKE', 0),
(22, 'TRÀ', 'TRÀ', 0),
(23, 'Cappuccino', 'Cappuccino', 12),
(24, 'Cam', 'Cam', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `products_id`, `user_id`, `text`, `parent_id`, `created_time`) VALUES
(67, 93, 17, 'sản phẩm ok ', 0, '2022-04-16 02:14:57'),
(68, 93, 8, 'tạm ổ', 0, '2022-04-21 13:55:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_number` int(11) NOT NULL,
  `quantity` int(250) NOT NULL,
  `begin` date NOT NULL,
  `finish` date NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_time` date NOT NULL,
  `update_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `discount`
--

INSERT INTO `discount` (`id`, `code`, `name`, `discount_number`, `quantity`, `begin`, `finish`, `status`, `created_time`, `update_time`) VALUES
(1, '1234', 'mã giảm nước ép', 20, 12, '2022-03-17', '2022-03-17', 'Đã kết thúc', '2022-03-17', '2022-03-17'),
(2, '1234', 'mã coffee', 20, 2, '2022-04-02', '2022-03-31', 'Đã kết thúc', '2022-03-17', '2022-03-25'),
(3, 'admin1', 'nguyễn thị phương anh ', 10, 2, '2022-04-04', '2022-04-07', 'Đã kết thúc', '0000-00-00', '0000-00-00'),
(4, 'ABC123', 'huy Nguyen', 200000, 12, '2022-04-04', '2022-04-13', 'Đã kết thúc', '0000-00-00', '0000-00-00'),
(5, '123456', 'huy Nguyen', 20000, 1, '2022-04-21', '2022-04-24', 'Đang diễn ra', '0000-00-00', '0000-00-00'),
(6, 'DUAN1', 'dự án 1', 100000, 12, '2022-04-19', '2022-04-23', 'Đang diễn ra', '0000-00-00', '0000-00-00'),
(7, '279', 'giảm cho mọi đơn hàng ', 200000, 0, '2022-04-22', '2022-04-24', 'Đang diễn ra', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_phone` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadate_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `user_name`, `number_phone`, `email`, `note`, `status`, `created_time`, `upadate_time`) VALUES
(10, 'nguyễn xuân hoàn', 353080812, 'nguyenxuanhoan007@gmail.com', 'thiều hàng khi nhận hàng', 1, '2022-04-14 07:53:56', '2022-04-14 09:53:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_library`
--

CREATE TABLE `image_library` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `image_pro` varchar(250) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image_library`
--

INSERT INTO `image_library` (`id`, `products_id`, `image_pro`, `created_time`, `update_time`) VALUES
(140, 93, 'Leica.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 93, 'Leica1.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 93, 'Leica2.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 94, 'balo1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 94, 'balo2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 94, 'balo3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 99, 'thenho.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 99, 'thenho1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 100, 'GoPro.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 100, 'GoPro1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 100, 'GoPro2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 121, 'extenction.PNG', '2022-04-15 03:54:23', '0000-00-00 00:00:00'),
(182, 121, 'extenction2.PNG', '2022-04-15 03:54:23', '0000-00-00 00:00:00'),
(183, 121, 'extenction3.PNG', '2022-04-15 03:54:23', '0000-00-00 00:00:00'),
(184, 121, 'Espresso.jpg', '2022-04-15 03:58:31', '0000-00-00 00:00:00'),
(185, 121, 'Espresso1.jpg', '2022-04-15 03:58:31', '0000-00-00 00:00:00'),
(186, 121, 'Espresso2.jpg', '2022-04-15 03:58:31', '0000-00-00 00:00:00'),
(187, 122, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 123, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 124, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 125, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 126, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 127, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 93, 'cocktail-b52.webp', '2022-04-22 06:43:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manage_user`
--

CREATE TABLE `manage_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `number_phone` varchar(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `role` int(10) NOT NULL,
  `status` varchar(250) NOT NULL,
  `last_login` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `manage_user`
--

INSERT INTO `manage_user` (`id`, `user_name`, `password`, `number_phone`, `email`, `image`, `role`, `status`, `last_login`) VALUES
(8, 'huynguyen', '$2y$10$X2ILautfqRwwhT/4ZGQEheu9lRf6x4yjwJNlpO.qs3kgm.NXP.IS6', '0123456789', 'nguyenhuuhai21112002@gmail.com', 'user_admin.png', 3, 'on', 1646630909),
(11, 'huy lê1111', '$2y$10$dyb2rRaR2Y.RnjEC.kHRk.gn3mOCbiGVbD/TJD0I4HZZ3iHb.LZG6', '231231413', 'nguyenhuuhai21112002@gmail.com', 'images.png', 0, 'off', 1646371218),
(17, 'longnguyen', '$2y$10$TMgYzJvnRinGw2G4RkugKO0XMXNO5ESfkhxEiFRuxuTMW0JreaTQa', '231231413', 'nguyenhuuhai21112002@gmail.com', 'man-300x300.png', 1, 'on', 0),
(95, 'phùng thành111', '$2y$10$SG/kk0MdrBku5ts3MxGmzuIVlhExnsDEdukNM1T5sEl4b39jLH27i', '353080812', 'nguyenhuuhai21112002@gmail.com', 'Espresso2.jpg', 1, 'off', 0),
(96, 'quangdinh', '$2y$10$0ICrFKoA3/E8Oq2uMlvNsOIZRTwkmdJCQwtXT5aV7/Kgj5kbp6TFG', '0', 'nguyenhuuhai21112002@gmail.com', '', 0, '', 0),
(100, 'dinhnguyen', '$2y$10$rcXc3.69a1a8NffMT4HhLOSw5dQjT.uYY56yMnf7/b5cEhZngVsVC', '0353080812', 'huynguyenz2002@gmail.com', 'Espresso.jpg', 0, 'on', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_time` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `created_time`) VALUES
(1, '0', 'ngày hôm nay', '<p style=\"text-align:center\">- <strong>C&aacute;c địa phương ghi nhận số ca nhiễm giảm nhiều nhất so</strong> với ng&agrave;y trước đ&oacute;: Quảng Ninh (-526), Lạng Sơn (-450), L&agrave;o Cai (-444).</p>\r\n\r\n<p>- C&aacute;c địa phương ghi nhận số ca nhiễm tăng cao nhất so với ng&agrave;y trước đ&oacute;: Đắk Lắk (+3.923), Hưng Y&ecirc;n (+282), TP. Hồ Ch&iacute; Minh (+190).</p>\r\n\r\n<p>- Trung b&igrave;nh số ca nhiễm mới trong nước ghi nhận trong 07 ng&agrave;y qua: 70.368 ca/ng&agrave;y.</p>\r\n\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">&nbsp;</div>\r\n\r\n<p>Biểu đồ số ca mắc COVID-19 tại Việt Nam đến chiều ng&agrave;y 4/4</p>\r\n\r\n<h3>T&igrave;nh h&igrave;nh dịch COVID-19 tại Việt Nam:</h3>\r\n\r\n<p>- Kể từ đầu dịch đến nay Việt Nam c&oacute; 9.867.045 ca nhiễm, đứng thứ 12/227 quốc gia v&agrave; v&ugrave;ng l&atilde;nh thổ, trong khi với tỷ lệ số ca nhiễm/1 triệu d&acirc;n, Việt Nam đứng thứ 110/227quốc gia v&agrave; v&ugrave;ng l&atilde;nh thổ (b&igrave;nh qu&acirc;n cứ 1 triệu người c&oacute; 99.796 ca nhiễm).</p>\r\n\r\n<p>- Đợt dịch thứ 4 (từ ng&agrave;y 27/4/2021 đến nay):</p>\r\n\r\n<p>+ Số ca nhiễm ghi nhận trong nước là 9.859.306 ca, trong đ&oacute; c&oacute; 7.841.018 bệnh nh&acirc;n đ&atilde; được c&ocirc;ng bố khỏi bệnh.</p>\r\n\r\n<p>+ C&aacute;c địa phương ghi nhận số nhiễm t&iacute;ch lũy cao trong đợt dịch n&agrave;y: H&agrave; Nội (1.502.111), TP. Hồ Ch&iacute; Minh (596.940), Nghệ An (402.907), B&igrave;nh Dương (379.064), Hải Dương (348.055).</p>\r\n\r\n<div class=\"VCSortableInPreviewMode alignCenter\" id=\"ObjectBoxContent_1649069335844\" style=\"box-sizing: border-box; margin: 0px auto 15px; padding: 10px; z-index: 96; flex-direction: column; position: relative; transition: all 0.3s ease-in-out 0s; width: 670px; visibility: visible; overflow-wrap: break-word; cursor: default; clear: both; border: 1px solid rgb(242, 209, 170); font-family: Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 251, 242);\">\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">\r\n<p>Số ca mắc COVID-19 trên thế giới</p>\r\n\r\n<p>- Cả thế giới có 491.871.157 ca nhiễm, trong đó 426,860,135 ca khỏi bệnh; 6.176.628 ca tử vong và 58,834,394 ca đang điều trị (55.616 ca diễn biến nặng).</p>\r\n\r\n<p>- Trong ng&agrave;y số ca nhiễm của thế giới tăng 727.467 ca, tử vong tăng 1.741 ca.</p>\r\n\r\n<p>- Ch&acirc;u &Acirc;u tăng 290.422 ca; Bắc Mỹ tăng 12.024 ca; Nam Mỹ tăng 10.492 ca; ch&acirc;u &Aacute; tăng 355.821 ca; ch&acirc;u Phi tăng 1.060 ca; ch&acirc;u Đại Dương tăng 57.648 ca.</p>\r\n\r\n<p>- Tại Đông Nam Á, trong ngày ghi nhận 44.748 ca, trong đó: Indonesia tăng 1.933 ca, Malaysia tăng 12.380 ca, Th&aacute;i Lan tăng 24.892 ca, Philippines tăng 661 ca, Singapore tăng 3.743 ca, Myanmar tăng 66 ca, L&agrave;o tăng 1.038 ca, Campuchia tăng 35 ca, Đ&ocirc;ng Timor tăng 0 c</p>\r\n</div>\r\n</div>\r\n', '22-04-2022 08:50:18'),
(2, 'tin mới', 'ngày hôm nay', '<p>&nbsp;C&aacute;c địa phương ghi nhận số ca nhiễm tăng cao nhất so với ng&agrave;y trước đ&oacute;: Đắk Lắk (+3.923), Hưng Y&ecirc;n (+282), TP. Hồ Ch&iacute; Minh (+190).</p>\r\n\r\n<p>- Trung b&igrave;nh số ca nhiễm mới trong nước ghi nhận trong 07 ng&agrave;y qua: 70.368 ca/ng&agrave;y</p>\r\n\r\n<p>Biểu đồ số ca mắc COVID-19 tại Việt Nam đến chiều ng&agrave;y 4/4</p>\r\n\r\n<h3>T&igrave;nh h&igrave;nh dịch COVID-19 tại Việt Nam:</h3>\r\n', '21-04-2022 16:55:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguenlieu_sp`
--

CREATE TABLE `nguenlieu_sp` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_nguyelieu` int(11) NOT NULL,
  `quantity` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguenlieu_sp`
--

INSERT INTO `nguenlieu_sp` (`id`, `id_sp`, `id_nguyelieu`, `quantity`) VALUES
(3, 94, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenlieu`
--

CREATE TABLE `nguyenlieu` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(250) NOT NULL,
  `donvi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguyenlieu`
--

INSERT INTO `nguyenlieu` (`id`, `name`, `quantity`, `donvi`) VALUES
(1, 'trứng ', 12, 'qua'),
(2, 'hạt cà phê nguyên chất', 30, 'gam'),
(3, 'Sữa', 2, 'lít');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `status` varchar(11) NOT NULL,
  `note` text DEFAULT NULL,
  `total` int(250) NOT NULL,
  `quantity` int(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_time` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `status`, `note`, `total`, `quantity`, `user_id`, `updated_time`, `created_time`) VALUES
(115, 'thanh', 353080812, 'trịnh văn bô', '115/s', 'gọi tầm 30 phút', 300000, 1, 8, '2022-04-21 15:02:31', '2022-03-24'),
(116, 'thanh', 353080812, 'trịnh văn bô', '116/s', 'gọi tầm 30 phút', 30000000, 1, 11, '2022-04-21 15:02:32', '2022-03-24'),
(121, 'huy Nguyen', 353080812, 'Vinh Loc', '121/s', 'ok', 32520000, 1, 17, '2022-04-21 03:11:34', '2022-04-15'),
(122, 'Phùng Thành', 123456789, 'Vinh Loc', '122/x', '', 97580000, 3, 11, '2022-04-19 06:29:21', '2022-04-15'),
(123, 'đá', 3530812, 'đá', '122/z', '', 97580000, 0, 8, '2022-04-19 13:16:14', '2022-04-17'),
(124, 'hai duong', 353080812, 'hai duong', '124/y', '', 552500000, 0, 8, '2022-04-19 14:01:05', '2022-04-17'),
(143, 'hai nguyen', 353080812, '40 xuân phương', '143/y', NULL, 32500000, 0, 8, '2022-04-19 17:09:42', '2022-04-19'),
(144, 'duong cu te', 353080812, 'ngõ 80 xuân phương', '144/y', NULL, 130000000, 0, 8, '2022-04-19 17:09:43', '2022-04-19'),
(145, 'phùng thành', 353080812, '40 xuân phương', '145/h', NULL, 260000000, 0, 8, '2022-04-20 14:30:20', '2022-04-20'),
(146, 'phùng thành', 353080812, '40 xuân phương', '146/z', NULL, 162500000, 0, 8, '2022-04-21 02:57:01', '2022-04-20'),
(147, 'phùng thành', 353080812, '40 xuân phương', '147/h', NULL, 162500000, 0, 8, '2022-04-21 16:31:22', '2022-04-21'),
(148, 'phùng thành', 353080812, '40 xuân phương', '148/h', NULL, 32500000, 0, 8, '2022-04-22 02:50:44', '2022-04-21'),
(149, 'huynguyen', 353080812, '40 xuân phương ', '149/h', NULL, 560000, 0, 8, '2022-04-22 04:51:40', '2022-04-22'),
(150, 'huynguyen', 353080812, '40 xuân phương ', '150/h', NULL, 540000, 0, 8, '2022-04-22 04:53:25', '2022-04-22'),
(151, 'huynguyen', 353080812, '40 xuân phương', '115/x', NULL, 440000, 0, 8, '2022-04-22 05:10:34', '2022-04-22'),
(152, 'huynguyen', 353080812, '40 xuân phương', '115/x', NULL, 180000, 0, 8, '2022-04-22 05:14:26', '2022-04-22'),
(153, 'huynguyen', 353080812, '40 xuân phương', '115/x', NULL, 420000, 0, 8, '2022-04-22 06:29:32', '2022-04-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `produrt_id` int(11) NOT NULL,
  `price` int(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `order_id`, `produrt_id`, `price`, `quantity`, `created_time`, `last_update`) VALUES
(113, 115, 94, 20000000, 1, '2022-04-12 13:47:28', '2022-03-29 14:34:21'),
(114, 124, 100, 2000000, 2, '2022-04-19 08:34:16', '2022-03-29 14:34:21'),
(115, 115, 100, 20000000, 3, '2022-04-12 13:47:28', '2022-03-29 14:34:21'),
(116, 121, 121, 20000, 1, '2022-04-15 03:28:41', '0000-00-00 00:00:00'),
(117, 121, 94, 32500000, 1, '2022-04-15 03:28:41', '0000-00-00 00:00:00'),
(118, 122, 121, 80000, 1, '2022-04-15 12:04:29', '0000-00-00 00:00:00'),
(144, 123, 94, 12000000, 2, '2022-04-19 12:48:14', '2022-04-19 14:48:03'),
(145, 143, 93, 32500000, 1, '2022-04-19 14:55:45', '0000-00-00 00:00:00'),
(146, 144, 93, 32500000, 1, '2022-04-19 15:03:17', '0000-00-00 00:00:00'),
(147, 144, 94, 32500000, 1, '2022-04-19 15:03:17', '0000-00-00 00:00:00'),
(148, 144, 99, 32500000, 1, '2022-04-19 15:03:17', '0000-00-00 00:00:00'),
(149, 144, 100, 32500000, 1, '2022-04-19 15:03:17', '0000-00-00 00:00:00'),
(150, 145, 93, 32500000, 4, '2022-04-20 13:42:27', '0000-00-00 00:00:00'),
(151, 145, 94, 32500000, 4, '2022-04-20 13:42:27', '0000-00-00 00:00:00'),
(152, 146, 93, 32500000, 2, '2022-04-20 13:54:41', '0000-00-00 00:00:00'),
(153, 146, 94, 32500000, 3, '2022-04-20 13:54:41', '0000-00-00 00:00:00'),
(154, 147, 94, 32500000, 5, '2022-04-21 14:28:57', '0000-00-00 00:00:00'),
(155, 148, 93, 32500000, 1, '2022-04-21 14:31:05', '0000-00-00 00:00:00'),
(156, 149, 99, 100000, 2, '2022-04-22 04:49:49', '0000-00-00 00:00:00'),
(157, 149, 94, 120000, 3, '2022-04-22 04:49:49', '0000-00-00 00:00:00'),
(158, 150, 93, 60000, 3, '2022-04-22 04:52:24', '0000-00-00 00:00:00'),
(159, 150, 94, 120000, 3, '2022-04-22 04:52:24', '0000-00-00 00:00:00'),
(160, 151, 94, 120000, 2, '2022-04-22 05:10:34', '0000-00-00 00:00:00'),
(161, 151, 99, 100000, 2, '2022-04-22 05:10:34', '0000-00-00 00:00:00'),
(162, 152, 94, 120000, 1, '2022-04-22 05:14:26', '0000-00-00 00:00:00'),
(163, 152, 93, 60000, 1, '2022-04-22 05:14:26', '0000-00-00 00:00:00'),
(164, 153, 93, 60000, 3, '2022-04-22 06:29:32', '0000-00-00 00:00:00'),
(165, 153, 94, 120000, 2, '2022-04-22 06:29:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `privilege`
--

CREATE TABLE `privilege` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `url_match` varchar(250) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `privilege`
--

INSERT INTO `privilege` (`id`, `group_id`, `name`, `url_match`, `parent_id`, `created_time`, `last_update`) VALUES
(23, 8, 'trang chính ', 'Dashboard|Dashboard\n', 0, 1632970609, 1632970609),
(25, 9, 'Manage_user', 'Manage_user|list_user', 0, 1632970609, 1632970609),
(26, 19, 'decentralization', 'decentralization', 0, 1632970609, 1632970609),
(28, 19, 'Edit_Decentralization', 'Edit_Decentralization\\?id=\\d', 26, 1632970609, 1632970609),
(29, 9, 'Created_acount', 'Created_acount', 25, 1632970609, 1632970609),
(30, 9, 'Delete_acount', 'Delete_acount', 25, 1632970609, 1632970609),
(31, 9, 'Edit_acount', 'Edit_acount\\?id=\\d', 25, 1632970609, 1632970609),
(32, 10, 'Feedback', 'Feedback', 0, 1632970609, 1632970609),
(33, 10, 'feedback_user', 'feedback_user', 32, 1632970609, 1632970609),
(34, 10, 'Comment', 'Comment', 32, 1632970609, 1632970609),
(35, 10, 'comment_details', 'comment_details\\?id=\\d', 32, 1632970609, 1632970609),
(36, 10, 'delete_comment', 'delete_comment', 32, 1632970609, 1632970609),
(37, 12, 'Products', 'Products|list_product', 0, 1632970609, 1632970609),
(39, 12, 'edit_product', 'edit_product\\?id=\\d', 37, 1632970609, 1632970609),
(40, 12, 'add_product', 'add_product', 37, 1632970609, 1632970609),
(41, 12, 'remove_product', 'remove_product', 37, 1632970609, 1632970609),
(77, 13, 'Category', 'Category|list_category', 0, 1632970609, 1632970609),
(78, 13, 'edit_category', 'edit_category\\?id=\\d', 77, 1632970609, 1632970609),
(79, 13, 'add_category', 'add_category', 77, 1632970609, 1632970609),
(80, 13, 'remove_category', 'remove_category', 77, 1632970609, 1632970609),
(81, 14, 'Statistical', 'Statistical', 0, 1632970609, 1632970609),
(83, 14, 'show_charts', 'show_charts', 0, 1632970609, 1632970609),
(85, 16, 'Discount', 'Discount|list_discount', 0, 1632970609, 1632970609),
(87, 16, 'edit_discount', 'edit_discount\\?id=\\d', 85, 1632970609, 1632970609),
(88, 16, 'add_discount', 'add_discount', 85, 1632970609, 1632970609),
(89, 16, 'remove_discount', 'remove_discount', 85, 1632970609, 1632970609),
(90, 17, 'quan_ly', 'quan_ly|list_nguyenlieu', 0, 1632970609, 1632970609),
(92, 17, 'edit_nguyenlieu', 'edit_nguyenlieu\\?id=\\d', 90, 1632970609, 1632970609),
(93, 17, 'add_nguyenlieu', 'add_nguyenlieu', 90, 1632970609, 1632970609),
(94, 17, 'remove_nguyenlieu', 'remove_nguyenlieu', 90, 1632970609, 1632970609),
(95, 18, 'News', 'News|list_news', 0, 1632970609, 1632970609),
(97, 18, 'edit_news', 'edit_news\\?id=\\d', 95, 1632970609, 1632970609),
(98, 18, 'add_news', 'add_news', 95, 1632970609, 1632970609),
(99, 18, 'remove_news', 'remove_news', 95, 1632970609, 1632970609),
(102, 16, 'edit_discount', 'edit_discount\\?id=\\d', 85, 1632970609, 1632970609),
(104, 15, 'Order', 'Order|list_order', 0, 1632970609, 1632970609),
(106, 15, 'order_detail', 'order_detail\\?id=\\d', 104, 1632970609, 1632970609);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `privilege_group`
--

CREATE TABLE `privilege_group` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `postion` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `privilege_group`
--

INSERT INTO `privilege_group` (`id`, `name`, `postion`, `created_time`, `last_update`) VALUES
(8, 'Dashboard', 1, 1632970609, 1632970609),
(9, 'Manage user', 2, 1632970609, 1632970609),
(10, 'Feedback', 3, 1632970609, 1632970609),
(12, 'Products', 5, 1632970609, 1632970609),
(13, 'Category', 6, 1632970609, 1632970609),
(14, 'Statistical', 7, 1632970609, 1632970609),
(15, 'Order', 8, 1596502615, 1632970609),
(16, 'Discount', 9, 1596502615, 1632970609),
(17, 'Quản lý kho', 10, 1632970609, 1632970609),
(18, 'News', 11, 1632970609, 1632970609),
(19, 'decentralization', 12, 1632970609, 1632970609);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `discount_code` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `products_name` varchar(250) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `quantity` int(250) DEFAULT NULL,
  `categories_id` int(11) NOT NULL,
  `dac_biet` bigint(11) NOT NULL,
  `view` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `discount_code`, `image`, `products_name`, `price`, `discount`, `quantity`, `categories_id`, `dac_biet`, `view`, `content`) VALUES
(93, '35%', 'product1-8e.webp', 'CHAI LATTE', '60000', '32500000', 3, 12, 0, 1, 'dsa'),
(94, '35%', 'product4-ce.webp', 'capuchino ', '120000', '32500000', 2, 12, 0, 12, 'dsấd'),
(99, '35%', 'product5-dea6a61f-c0e3-4d78-b53b-513dae894166.webp', ' AMERICANO', '100000', '32500000', 3, 12, 0, 6, 'ádsada'),
(100, '35%', 'dau-tay.webp', 'Trà sữa dâu tây', '50000', '32500000', 2, 12, 0, 3, 'dsấ'),
(121, '', 'product3-e4.webp', 'AMERICANO', '80000', '0', NULL, 12, 0, 0, 'dá'),
(122, '', 'khoai-monwebp.webp', 'Trà sữa khoai môn', '50000', '0', NULL, 16, 0, 0, 'Theo lời khuyên của các chuyên gia y tế cho rằng: mùa hè, bạn nên uống ít nhất 2 ly nước ép dưa hấu mỗi ngày. Bởi vì, khi đó các hàm lượng có sẵn chứa trong quả dưa hấu sẽ tự động làm giảm lượng calo bên cạnh việc duy trì sức khỏe của thận. Đồng thời, nó sẽ tự động loại bỏ các độc tố ra khỏi bàng quang, giúp cho cơ thể bạn luôn trong trạng thái khỏe mạnh.'),
(123, '', 'cocktail-b52.webp', 'Cocktail B-52', '40000', '0', NULL, 13, 0, 0, 'Theo lời khuyên của các chuyên gia y tế cho rằng: mùa hè, bạn nên uống ít nhất 2 ly nước ép dưa hấu mỗi ngày. Bởi vì, khi đó các hàm lượng có sẵn chứa trong quả dưa hấu sẽ tự động làm giảm lượng calo bên cạnh việc duy trì sức khỏe của thận'),
(124, '', 'flan.webp', 'Bánh Flan', '15000', '0', NULL, 21, 0, 0, ' Bởi vì, khi đó các hàm lượng có sẵn chứa trong quả dưa hấu sẽ tự động làm giảm lượng calo bên cạnh việc duy trì sức khỏe của thận'),
(125, '', 'dư hấu.webp', 'Nước ép dưa hấu', '60000', '0', NULL, 19, 0, 0, 'Theo lời khuyên của các chuyên gia y tế cho rằng: mùa hè, bạn nên uống ít nhất 2 ly nước ép dưa hấu mỗi ngày. Bởi vì, khi đó các hàm lượng có sẵn chứa trong quả dưa hấu sẽ tự động làm giảm lượng calo bên cạnh việc duy trì sức khỏe của thận.'),
(126, '', 'classic-bloody-mary-720x720-recipe.webp', 'Cocktail Bloody Mary', '150000', '0', NULL, 13, 0, 0, 'heo lời khuyên của các chuyên gia y tế cho rằng: mùa hè, bạn nên uống ít nhất 2 ly nước ép dưa hấu mỗi ngày. Bởi vì, khi đó các hàm lượng có sẵn chứa trong quả '),
(127, '', '5af2fc3799585.webp', 'Cocktail Bacardi', '140000', '0', NULL, 13, 0, 0, 'heo lời khuyên của các chuyên gia y tế cho rằng: mùa hè, bạn nên uống ít nhất 2 ly nước ép dưa hấu mỗi ngày. Bởi vì, khi đó các hàm lượng có sẵn chứa trong quả ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statistical`
--

CREATE TABLE `statistical` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `total` int(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `orders` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `statistical`
--

INSERT INTO `statistical` (`id`, `booking_date`, `total`, `quantity`, `orders`) VALUES
(39, '2022-03-24', 20000000, 13, 23),
(40, '2022-03-25', 40000000, 2, 32),
(41, '2022-03-26', 50000000, 10, 11),
(46, '2022-03-27', 87000000, 2, 0),
(49, '2022-03-28', 107000000, 3, 0),
(50, '2022-04-05', 0, 0, 0),
(51, '2022-04-05', 0, 0, 0),
(52, '2022-04-05', 0, 0, 0),
(53, '2022-04-05', 0, 0, 0),
(54, '2022-04-12', 0, 0, 0),
(55, '2022-04-14', 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_privilege`
--

CREATE TABLE `user_privilege` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_privilege`
--

INSERT INTO `user_privilege` (`id`, `user_id`, `privilege_id`, `created_time`, `last_update`) VALUES
(1677, 95, 25, 1632970609, 1632970609),
(1678, 17, 23, 1632970609, 1632970609),
(1679, 17, 37, 1632970609, 1632970609),
(1680, 17, 39, 1632970609, 1632970609),
(1681, 17, 40, 1632970609, 1632970609),
(1682, 17, 41, 1632970609, 1632970609),
(1683, 17, 77, 1632970609, 1632970609),
(1684, 17, 78, 1632970609, 1632970609),
(1685, 17, 79, 1632970609, 1632970609),
(1686, 17, 80, 1632970609, 1632970609),
(1687, 17, 81, 1632970609, 1632970609),
(1688, 17, 83, 1632970609, 1632970609),
(1689, 17, 104, 1632970609, 1632970609),
(1690, 17, 106, 1632970609, 1632970609),
(1691, 17, 85, 1632970609, 1632970609),
(1692, 17, 87, 1632970609, 1632970609),
(1693, 17, 88, 1632970609, 1632970609),
(1694, 17, 89, 1632970609, 1632970609),
(1695, 17, 102, 1632970609, 1632970609),
(1696, 17, 90, 1632970609, 1632970609),
(1697, 17, 92, 1632970609, 1632970609),
(1698, 17, 93, 1632970609, 1632970609),
(1699, 17, 94, 1632970609, 1632970609),
(1700, 17, 95, 1632970609, 1632970609),
(1701, 17, 97, 1632970609, 1632970609),
(1702, 17, 98, 1632970609, 1632970609),
(1703, 17, 99, 1632970609, 1632970609),
(1771, 8, 23, 1632970609, 1632970609),
(1772, 8, 25, 1632970609, 1632970609),
(1773, 8, 29, 1632970609, 1632970609),
(1774, 8, 30, 1632970609, 1632970609),
(1775, 8, 31, 1632970609, 1632970609),
(1776, 8, 32, 1632970609, 1632970609),
(1777, 8, 33, 1632970609, 1632970609),
(1778, 8, 34, 1632970609, 1632970609),
(1779, 8, 35, 1632970609, 1632970609),
(1780, 8, 36, 1632970609, 1632970609),
(1781, 8, 37, 1632970609, 1632970609),
(1782, 8, 39, 1632970609, 1632970609),
(1783, 8, 40, 1632970609, 1632970609),
(1784, 8, 41, 1632970609, 1632970609),
(1785, 8, 77, 1632970609, 1632970609),
(1786, 8, 78, 1632970609, 1632970609),
(1787, 8, 79, 1632970609, 1632970609),
(1788, 8, 80, 1632970609, 1632970609),
(1789, 8, 81, 1632970609, 1632970609),
(1790, 8, 83, 1632970609, 1632970609),
(1791, 8, 104, 1632970609, 1632970609),
(1792, 8, 106, 1632970609, 1632970609),
(1793, 8, 85, 1632970609, 1632970609),
(1794, 8, 87, 1632970609, 1632970609),
(1795, 8, 88, 1632970609, 1632970609),
(1796, 8, 89, 1632970609, 1632970609),
(1797, 8, 102, 1632970609, 1632970609),
(1798, 8, 90, 1632970609, 1632970609),
(1799, 8, 92, 1632970609, 1632970609),
(1800, 8, 93, 1632970609, 1632970609),
(1801, 8, 94, 1632970609, 1632970609),
(1802, 8, 95, 1632970609, 1632970609),
(1803, 8, 97, 1632970609, 1632970609),
(1804, 8, 98, 1632970609, 1632970609),
(1805, 8, 99, 1632970609, 1632970609),
(1806, 8, 26, 1632970609, 1632970609),
(1807, 8, 28, 1632970609, 1632970609);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id` (`products_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image_library`
--
ALTER TABLE `image_library`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_library_ibfk_1` (`products_id`);

--
-- Chỉ mục cho bảng `manage_user`
--
ALTER TABLE `manage_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguenlieu_sp`
--
ALTER TABLE `nguenlieu_sp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguyenlieu` (`id_nguyelieu`),
  ADD KEY `products` (`id_sp`);

--
-- Chỉ mục cho bảng `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `orders_detail_ibfk_2` (`produrt_id`);

--
-- Chỉ mục cho bảng `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Chỉ mục cho bảng `privilege_group`
--
ALTER TABLE `privilege_group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Chỉ mục cho bảng `statistical`
--
ALTER TABLE `statistical`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_privilege`
--
ALTER TABLE `user_privilege`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `privilege_id` (`privilege_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `image_library`
--
ALTER TABLE `image_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT cho bảng `manage_user`
--
ALTER TABLE `manage_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nguenlieu_sp`
--
ALTER TABLE `nguenlieu_sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT cho bảng `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT cho bảng `privilege_group`
--
ALTER TABLE `privilege_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `statistical`
--
ALTER TABLE `statistical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_privilege`
--
ALTER TABLE `user_privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1808;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `manage_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `image_library`
--
ALTER TABLE `image_library`
  ADD CONSTRAINT `image_library_ibfk_1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nguenlieu_sp`
--
ALTER TABLE `nguenlieu_sp`
  ADD CONSTRAINT `nguyenlieu` FOREIGN KEY (`id_nguyelieu`) REFERENCES `nguyenlieu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products` FOREIGN KEY (`id_sp`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `manage_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_detail_ibfk_2` FOREIGN KEY (`produrt_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `privilege`
--
ALTER TABLE `privilege`
  ADD CONSTRAINT `privilege_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `privilege_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `user_privilege`
--
ALTER TABLE `user_privilege`
  ADD CONSTRAINT `user_privilege_ibfk_1` FOREIGN KEY (`privilege_id`) REFERENCES `privilege` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_privilege_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `manage_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
