-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 12, 2022 lúc 08:43 AM
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
(12, 'máy ảnh', 'may anh', 0),
(13, 'phụ kiện ', 'phụ kiện ', 0),
(16, 'máy ảnh canon', 'máy ảnh canon', 12),
(17, 'máy quay', 'máy quay', 0),
(19, 'balo', 'balo', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `products_id`, `user_id`, `text`, `created_time`) VALUES
(38, 52, 17, 'máy ảnh xịn \n', '2022-02-04 15:59:30'),
(46, 50, 17, 'tạm ổn', '2022-02-21 05:56:48'),
(56, 49, 11, 'dsa', '2022-02-21 09:53:22'),
(57, 49, 17, 'đasadá', '2022-02-24 04:45:22'),
(59, 49, 8, 'ôn', '2022-02-25 10:22:31');

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
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadate_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(119, 49, 'mayanhcanon.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 49, 'mayanhcanon11.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 49, 'mayanhcanon12.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 49, 'mayanhcanon13.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 52, 'mayanhcanon.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 52, 'mayanhcanon1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 52, 'mayanhcanon2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 52, 'mayanhcanon3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 52, 'mayanhcanon4.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 50, 'mayquay.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 50, 'mayquay1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 50, 'mayquay2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 50, 'mayquay3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 50, 'mayquay4.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 59, 'chânmáy.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 59, 'chânmáy1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 59, 'chânmáy2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 59, 'chânmáy3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 51, 'ongkinh.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 51, 'ongkinh1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 51, 'ongkinh2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 93, 'Leica.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 93, 'Leica1.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 93, 'Leica2.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 94, 'balo1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 94, 'balo2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 94, 'balo3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 95, 'balo2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 95, 'balo4.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 95, 'balo5.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 96, 'tui.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 96, 'tui1.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 96, 'tui2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 97, 'mayquay5.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 97, 'mayquay6.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 97, 'mayquay7.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 98, 'ongkinh2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 98, 'sony.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 98, 'sony2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 99, 'thenho.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 99, 'thenho1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 100, 'GoPro.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 100, 'GoPro1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 100, 'GoPro2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 111, 'day-chuyen-doi-rode-sc15-usb-typec-to-lightning.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 111, 'day-chuyen-doi-rode-sc15-usb-typec-to-lightning-1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 112, 'gimbal-chong-rung-dji-ronin-s2-2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 112, 'gimbal-chong-rung-dji-ronin-s2-3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 112, 'gimbal-chong-rung-dji-ronin-s2-2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 112, 'gimbal-chong-rung-dji-ronin-s2-2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 112, 'day-chuyen-doi-rode-sc15-usb-typec-to-lightning.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 112, 'day-chuyen-doi-rode-sc15-usb-typec-to-lightning-1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manage_user`
--

CREATE TABLE `manage_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `number_phone` int(11) NOT NULL,
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
(8, 'admin1', '$2y$10$.NPuf1Z2av62.eXT3FnY.e8pfTuQnpm.7DHHM4smSRt06F2gMSr4q', 353080812, 'hainguyen@gmail.com', 'hinh-nen-vu-tru-4k-7-scaled.jpg', 1, 'on', 1646630909),
(11, 'huynguyendinh12', '$2y$10$AkUdH.OTQWFjexVLrVYKjOLmZ7/rukj4GXuDBqyFz7wHel4R7oBgy', 231231413, 'hanguyen@gmail.com', 'tải xuống.jfif', 0, 'on', 1646371218),
(17, 'Nguyễn Quang Trường', '$2y$10$TMgYzJvnRinGw2G4RkugKO0XMXNO5ESfkhxEiFRuxuTMW0JreaTQa', 231231413, 'hanguyen@gmail.com', '13399 (1).jpg', 0, 'on', 0),
(41, 'duynguyen', '$2y$10$Sti/BgvRtSHu6h1zoJQtoOfCjIaFBxfi7Q6Jtdb.mvp7WP4IjKjXO', 353080812, 'huyndph14652@fpt.edu.vn', 'user.png', 1, 'on', 1646153907);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `note` text NOT NULL,
  `total` int(250) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_update`) VALUES
(77, 'huy Nguyen', 353080812, 'Vinh Loc', '', 0, '2021-09-25 02:25:15', '0000-00-00 00:00:00'),
(78, 'trường', 353080812, 'Vinh Loc', '', 0, '2021-09-25 03:44:01', '0000-00-00 00:00:00'),
(79, 'Hương', 353080812, 'Hải Duong', '', 68000, '2021-09-25 03:47:18', '0000-00-00 00:00:00'),
(80, 'tuấn', 353080812, 'Hà Nội', '', 20000000, '2021-09-25 03:50:31', '2021-09-25 05:49:54'),
(81, 'Hà', 353080812, 'Vinh Loc', '', 68000, '2021-09-25 03:51:20', '0000-00-00 00:00:00'),
(82, 'Hà', 353080812, 'Vinh Loc', '', 68000, '2021-09-25 03:51:43', '0000-00-00 00:00:00'),
(85, 'huy Nguyen', 353080812, 'Vinh Loc', '', 16300000, '2021-09-25 04:10:42', '0000-00-00 00:00:00'),
(86, 'Quang tèo', 353080812, 'New your', '', 16300000, '2021-09-25 04:18:32', '0000-00-00 00:00:00'),
(87, 'Vinh ', 353080812, 'An Sơn', '', 32600000, '2021-09-25 04:24:03', '0000-00-00 00:00:00'),
(88, 'Nguyễn Thị Thu Hà', 353080812, 'Hưng Yên ', '', 12600000, '2021-09-25 07:27:18', '0000-00-00 00:00:00'),
(89, 'Kiều Oanh', 353080812, 'Hà Nội', '', 33500000, '2021-09-25 07:32:48', '0000-00-00 00:00:00'),
(90, 'huy Nguyen', 353080812, 'Vinh Loc', '', 33500000, '2021-09-25 07:34:13', '0000-00-00 00:00:00'),
(102, 'hai dương', 353080812, 'hai dương', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'hai dương', 353080812, 'hai dương', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'hai dương', 353080812, 'hai dương', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'hai dương', 353080812, 'hai dương', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'hai dương', 353080812, 'hai dương', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'hai dương', 353080812, 'hai dương', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'hai dương', 353080812, 'hai dương', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'hai dương', 353080812, 'hai dương', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'hai dương', 353080812, 'hai dương', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'hai dương', 11111111, 'hai dương', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(52, 77, 50, 18000000, 2, '2021-09-25 02:25:15', '0000-00-00 00:00:00'),
(53, 77, 51, 32500000, 2, '2021-09-25 02:25:15', '0000-00-00 00:00:00'),
(54, 78, 51, 32500000, 2, '2021-09-25 03:44:01', '0000-00-00 00:00:00'),
(55, 78, 52, 7000000, 1, '2021-09-25 03:44:01', '0000-00-00 00:00:00'),
(56, 79, 51, 32500000, 2, '2021-09-25 03:47:18', '0000-00-00 00:00:00'),
(57, 79, 52, 7000000, 1, '2021-09-25 03:47:18', '0000-00-00 00:00:00'),
(58, 81, 51, 32500000, 2, '2021-09-25 03:51:20', '0000-00-00 00:00:00'),
(59, 81, 52, 7000000, 1, '2021-09-25 03:51:20', '0000-00-00 00:00:00'),
(60, 82, 51, 32500000, 2, '2021-09-25 03:51:43', '0000-00-00 00:00:00'),
(61, 82, 52, 7000000, 1, '2021-09-25 03:51:43', '0000-00-00 00:00:00'),
(66, 85, 49, 6300000, 1, '2021-09-25 04:10:42', '0000-00-00 00:00:00'),
(67, 85, 50, 10000000, 1, '2021-09-25 04:10:42', '0000-00-00 00:00:00'),
(68, 86, 49, 6300000, 1, '2021-09-25 04:18:32', '0000-00-00 00:00:00'),
(69, 86, 50, 10000000, 1, '2021-09-25 04:18:32', '0000-00-00 00:00:00'),
(70, 87, 49, 6300000, 1, '2021-09-25 04:24:03', '0000-00-00 00:00:00'),
(71, 87, 50, 10000000, 1, '2021-09-25 04:24:03', '0000-00-00 00:00:00'),
(72, 88, 49, 6300000, 2, '2021-09-25 07:27:18', '0000-00-00 00:00:00'),
(73, 89, 51, 32500000, 1, '2021-09-25 07:32:48', '0000-00-00 00:00:00'),
(74, 89, 53, 1000000, 1, '2021-09-25 07:32:48', '0000-00-00 00:00:00'),
(75, 90, 51, 32500000, 1, '2021-09-25 07:34:13', '0000-00-00 00:00:00'),
(76, 90, 53, 1000000, 1, '2021-09-25 07:34:13', '0000-00-00 00:00:00'),
(100, 102, 0, 0, 1, '2022-02-16 05:11:01', '0000-00-00 00:00:00'),
(101, 102, 0, 0, 1, '2022-02-16 05:11:01', '0000-00-00 00:00:00'),
(102, 103, 0, 0, 2, '2022-02-16 05:53:52', '0000-00-00 00:00:00'),
(103, 103, 0, 0, 1, '2022-02-16 05:53:52', '0000-00-00 00:00:00'),
(104, 103, 0, 0, 1, '2022-02-16 05:53:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `privilege`
--

CREATE TABLE `privilege` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `url_match` varchar(250) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `privilege`
--

INSERT INTO `privilege` (`id`, `group_id`, `name`, `url_match`, `created_time`, `last_update`) VALUES
(10, 8, 'Trang chủ', 'index.php', 1632970609, 1632970609),
(11, 9, 'Khách Hàng', 'customer.php', 1632970609, 1632970609),
(12, 10, 'Quản lý tin nhắn và bình luận', 'Messanges.php', 1632970609, 1632970609),
(14, 12, 'Quản Lý Hàng Hóa', 'products.php', 1632970609, 1632970609),
(18, 12, 'Xóa Hàng Hóa', 'Delete.php\\?id=\\d+$|&&infomation=products', 1632970609, 1632970609);

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
(9, 'customer', 2, 1632970609, 1632970609),
(10, 'Messanges', 3, 1632970609, 1632970609),
(12, 'products', 5, 1632970609, 1632970609);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `prodcts_sale`
--

CREATE TABLE `prodcts_sale` (
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
-- Đang đổ dữ liệu cho bảng `prodcts_sale`
--

INSERT INTO `prodcts_sale` (`id`, `discount_code`, `image`, `products_name`, `price`, `discount`, `quantity`, `categories_id`, `dac_biet`, `view`, `content`) VALUES
(49, '50%', 'mayanhcanon.jpg', 'Máy ảnh Canon 700D ', '6300000', '3000000', NULL, 12, 1, 1, '<h2 dir=\"ltr\"><strong>M&ocirc; tả sản phẩm</strong></h2>\r\n\r\n<p dir=\"ltr\"><strong>Combo&nbsp;</strong><a href=\"https://cuongthinhcamera.com/may-anh-canon-700d-lens-18-55-is-stm\" style=\"box-sizing: border-box; background-color: transparent; color: red; text-decoration-line: none;\"><strong>Canon 700D</strong></a><strong>&nbsp;+ Lens 18-55 IS STM</strong>&nbsp;l&agrave; sản phẩm h&agrave;ng ch&iacute;nh h&atilde;ng đ&atilde; qua sử dụng nhưng vẫn c&ograve;n như mới.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">- Combo Canon 700D k&egrave;m k&iacute;t 18-55 STM&nbsp;<br />\r\n&nbsp; &nbsp;G&iacute;a: 6.800.000<br />\r\n&nbsp; &nbsp;BH: 06 Th&aacute;ng tại shop Cường Thịnh Camera<br />\r\n&nbsp; &nbsp;Phụ ki&ecirc;n: Pin,Sạc,D&acirc;y đeo,tặng thẻ nhớ&nbsp;<br />\r\n- Sản Phẩm C&oacute; Sẵn Tại Shop&nbsp;<br />\r\nĐC: 88 Th&aacute;i H&agrave;- Trung Liệt- Đống Đa - H&agrave; Nội<br />\r\nLH: 0968329268</p>\r\n\r\n<h2 dir=\"ltr\"><strong>T&iacute;nh năng sản phẩm</strong></h2>\r\n\r\n<p dir=\"ltr\">Canon 700D sở hữu cảm biến độ ph&acirc;n giải 18.0 MP, chip xử l&yacute; DIGIC 5, m&agrave;n h&igrave;nh cảm ứng xoay lật 3.0 inch với hơn 1 triệu điểm ảnh sẽ mang đến cho bạn những bức ảnh sống động như thật. B&ecirc;n cạnh đ&oacute;, ống k&iacute;nh 18-55 STM đi k&egrave;m với m&aacute;y gi&uacute;p giảm tiếng ồn trong qu&aacute; tr&igrave;nh lấy n&eacute;t khi quay phim v&agrave; cũng g&oacute;p phần cho bạn những bức h&igrave;nh thật tuyệt vời ngay cả khi điều kiện &aacute;nh s&aacute;ng yếu. Đến với Canon 700D bạn c&oacute; thể ra những bức ảnh nghệ thuật ho&agrave;n hảo d&agrave;nh ri&ecirc;ng cho m&igrave;nh.</p>\r\n\r\n<p dir=\"ltr\">M&aacute;y ảnh Canon 700D l&agrave; d&ograve;ng&nbsp;<a href=\"https://cuongthinhcamera.com/may-anh-canon\" style=\"box-sizing: border-box; background-color: transparent; color: red; text-decoration-line: none;\" target=\"_blank\"><strong>m&aacute;y ảnh Canon DSLR tầm trung</strong></a>&nbsp;hướng đến người d&ugrave;ng với ti&ecirc;u ch&iacute; cụ thể &quot; Bước v&agrave;o nhiếp ảnh DSLR v&agrave; để cho sự s&aacute;ng tạo ph&aacute;t triển&quot;. Canon 700D sở hữu bộ cảm biến CMOS APS-C 18 MP, bộ xử l&yacute; DIGIC 5 c&ugrave;ng hệ thống lấy n&eacute;t 9 điểm chữ thập.</p>\r\n\r\n<p dir=\"ltr\">Canon EOS 700D sở hữu m&agrave;n h&igrave;nh xoay LCD Clear View II 3.0 với hơn 1 triệu điểm ảnh hội tụ mang đến những h&igrave;nh ảnh sắc lung linh, m&agrave;u sắc rực rỡ.Với chế độ xoay 360 độ, bạn c&oacute; thể chụp ảnh hoặc quay phim với nhiều tư thế kh&aacute;c nhau mang đến những bức ảnh c&oacute; nhiều g&oacute;c độ độc v&agrave; lạ m&agrave; kh&ocirc;ng bị hạn chế bởi g&oacute;c nh&igrave;n.</p>\r\n\r\n<p dir=\"ltr\">Canon 700D mang ISO 100-12800 v&agrave; c&oacute; thể mở rộng đến độ nhạy s&aacute;ng mức tối đa 25600 ở chế độ H . Canon 700D c&oacute; độ nhạy s&aacute;ng tối đa cho ph&eacute;p bạn chụp ảnh trong điều kiện bất lợi nhất l&agrave; thiếu s&aacute;ng , ngay cả trong b&oacute;ng tối th&igrave; Canon 700D vẫn lu&ocirc;n cho bạn những bức ảnh tốt như mong đợi.</p>\r\n\r\n<p dir=\"ltr\">Ở chế độ ngắm trực tiếp, Canon EOS 700D cho ph&eacute;p bạn lọc ảnh s&aacute;ng tạo với nhiều hiệu ứng đa dạng v&agrave; đẹp mắt. Với t&iacute;nh năng gồm 7 bộ lọc hiệu ứng gi&uacute;p bạn dễ d&agrave;ng xem trực tiếp v&agrave; lựa chọn hiệu ứng ph&ugrave; hợp. Điều<span style=\"background-color:rgb(255, 255, 102); color:rgb(0, 0, 0)\">&nbsp;ch&uacute;&nbsp;</span>&yacute; l&agrave; c&aacute;c bạn lọc n&agrave;y c&oacute; thể sử dụng&nbsp;<span style=\"background-color:rgb(255, 255, 102); color:rgb(0, 0, 0)\">sau&nbsp;</span>khi bạn thực hiện thao t&aacute;c chụp h&igrave;nh.</p>\r\n'),
(50, '26%', 'mayquay3.jpg', 'Máy quay Panasonic AG-AC30', '18000000', '10000000', NULL, 12, 0, 0, '<p><br />\r\n<span style=\"color:rgb(68, 68, 68); font-family:arial; font-size:14px\">Thuộc ph&acirc;n kh&uacute;c m&aacute;y quay chuy&ecirc;n nghiệp cầm tay,&nbsp;<strong><a href=\"https://binhminhdigital.com/may-quay-panasonic/\" style=\"box-sizing: border-box; outline: none; text-decoration-line: none; color: rgb(68, 68, 68); cursor: pointer; font-family: var(--font-familly); font-weight: var(--font-weight-500);\">M&aacute;y Quay Panasonic</a>&nbsp;AG-AC30</strong>&nbsp;sử dụng cảm biến 1/3 inch c&oacute; chất lượng ghi h&igrave;nh trong điều kiện thiếu s&aacute;ng cực tốt c&ugrave;ng khả năng hỗ trợ sử dụng một tay m&agrave; kh&ocirc;ng cần bất cứ phụ kiện n&agrave;o.</span></p>\r\n\r\n<div style=\"box-sizing: border-box; outline: none; max-width: 100%; line-height: 20px; color: rgb(68, 68, 68); font-family: Roboto, sans-serif; font-size: 12px; text-align: center;\"><span style=\"font-family:arial; font-size:14px\"><img alt=\"Máy Quay Panasonic AG-AC30\" src=\"https://binhminhdigital.com/StoreData/Product/7853/may-quay-panasonic-agac301.jpg\" style=\"box-sizing:border-box; line-height:20px; max-height:100%; max-width:100%; outline:none\" /></span></div>\r\n\r\n<p><br />\r\n<br />\r\n<span style=\"color:rgb(68, 68, 68); font-family:arial; font-size:14px\"><strong>Cảm biến mạnh mẽ</strong></span><br />\r\n<br />\r\n<span style=\"color:rgb(68, 68, 68); font-family:arial; font-size:14px\">M&aacute;y được trang bị bộ cảm biến 1/3 BSI Sensor đ&atilde; được Panasonic tăng cường sức mạnh xử l&yacute; h&igrave;nh ảnh để đạt được chất lượng cao nhất trong mọi ho&agrave;n cảnh. Điều đặc biệt l&agrave; kể cả trong điều kiện thiếu s&aacute;ng, chất lượng h&igrave;nh ảnh vẫn được đảm bảo với độ mượt m&agrave;, trong s&aacute;ng bởi c&ocirc;ng nghệ khử nhiễu đỉnh cao Crytal Engine.</span></p>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n'),
(51, '35%', 'ongkinh.jpg', 'Ống Kính Sony G MASTER', '32500000', '32500000', NULL, 12, 0, 0, 'dsa'),
(52, '40%', 'mayanhcanon1.jpg', 'Máy ảnh Canon EOS M50', '7000000', '3000000', NULL, 13, 0, 0, 'dsa'),
(59, '30%', 'chânmáy1.jpg', 'Chân máy quay Fujifilm', '20000000', '5000000', NULL, 13, 1, 0, 'sda'),
(93, '35%', 'Leica.jpg', 'Máy ảnh Leica V-LUX 6', '32500000', '32500000', NULL, 13, 0, 0, 'dsa'),
(94, '35%', 'balo1.jpg', 'Túi đựng máy ảnh Sony LCS', '32500000', '32500000', NULL, 12, 0, 0, 'dsấd'),
(95, '35%', 'balo.jpg', 'Phụ kiện GoPro Casey', '32500000', '32500000', NULL, 12, 0, 0, 'dsadsa'),
(96, '35%', 'tui.jpg', 'túi đựng phụ kiện canon', '32500000', '32500000', NULL, 13, 0, 0, 'dsads'),
(97, '35%', 'mayquay6.jpg', 'Máy quay Canon XHA1S', '32500000', '32500000', NULL, 13, 0, 0, 'dsadsds'),
(98, '35%', 'sony.jpg', 'Sony Alpha a7 IV', '32500000', '32500000', NULL, 12, 0, 0, 'dsâda'),
(99, '35%', 'thenho1.jpg', 'phụ kiện thẻ nhớ', '32500000', '32500000', NULL, 13, 0, 0, 'ádsada'),
(100, '35%', 'GoPro.jpg', 'Máy quay GoPro ', '32500000', '32500000', NULL, 12, 0, 0, 'dsấ'),
(111, '20%', 'day-chuyen-doi-rode-sc15-usb-typec-to-lightning-1.jpg', 'phụ kiện Dây Chuyển Đổi Rode SC15 USB', '690000', '450000', NULL, 13, 1, 0, '<p style=\"text-align:justify\">Rode SC15 c&oacute; chiều d&agrave;i 30cm, với ch&acirc;n cắm USB Type C, n&oacute; c&oacute; thể sử dụng cho tất cả c&aacute;c&nbsp;<a href=\"https://vjshop.vn/microphone\" style=\"box-sizing: inherit; color: rgb(0, 109, 154); text-decoration-line: none; transition: color 0.2s ease 0s; touch-action: pan-y; -webkit-tap-highlight-color: transparent;\">Microphone</a>&nbsp;t&iacute;ch hợp cổng kết nối n&agrave;y.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Dây Chuyển Đổi Rode SC15 sử dụng cho microphone USB C\" src=\"https://cdn.vjshop.vn/thiet-bi-lam-video/phu-kien-ho-tro-khac/day-chuyen-doi-rode-sc15-usb-type-c-to-lightning/day-chuyen-doi-rode-sc15.jpg\" style=\"box-sizing:inherit; display:inline-block; height:auto; max-width:100%; vertical-align:middle; width:600px\" /></p>\r\n\r\n<h2 style=\"text-align:justify\">Kết nối Rode VideoMic NTG với thiết bị iOS</h2>\r\n\r\n<p style=\"text-align:justify\">Với thiết kế hai đầu, một đầu cắm USB Type-C, một đầu cắm Lightning, D&acirc;y Chuyển Đổi Rode SC15 gi&uacute;p kết nối VideoMic NTG với c&aacute;c thiết bị th&ocirc;ng minh của Apple sử dụng cổng Lightning. Hỗ trợ tạo một hệ thống &acirc;m thanh ho&agrave;n hảo.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Dây Chuyển Đổi Rode SC15 kết nối với thiết bị iOS\" src=\"https://cdn.vjshop.vn/thiet-bi-lam-video/phu-kien-ho-tro-khac/day-chuyen-doi-rode-sc15-usb-type-c-to-lightning/day-chuyen-doi-rode-sc15-1-result.jpg\" style=\"box-sizing:inherit; display:inline-block; height:auto; max-width:100%; vertical-align:middle; width:600px\" /></p>\r\n'),
(112, '20%', 'gimbal-chong-rung-dji-ronin-s2-3.jpg', 'phụ kiện Gimbal DJI Ronin S2', '16900000', '10000000', NULL, 12, 1, 0, '<p><span style=\"color:rgb(0, 0, 0)\">Chống Rung 3 trục (Pitch, Roll, Yaw)</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0)\">B&aacute;nh xe lấy n&eacute;t t&iacute;ch hợp</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0)\">Hỗ trợ sạc nhanh 1.5 tiếng</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0)\">Khung m&aacute;y bằng sợi carbon</span></p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statistical`
--

CREATE TABLE `statistical` (
  `id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `turnover` int(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `orders` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `statistical`
--

INSERT INTO `statistical` (`id`, `booking_date`, `turnover`, `quantity`, `orders`) VALUES
(1, '2022-01-03', 15000000, 25, 50),
(2, '2022-01-02', 25000000, 20, 23),
(3, '2022-01-01', 35000000, 13, 11),
(4, '2021-12-31', 45000000, 12, 17),
(5, '2021-12-30', 10000000, 12, 16),
(6, '2021-12-29', 65000000, 12, 32);

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
(48, 8, 10, 1632970609, 1632970609),
(49, 8, 11, 1632970609, 1632970609),
(50, 8, 12, 1632970609, 1632970609),
(52, 8, 14, 1632970609, 1632970609),
(57, 8, 18, 1632970609, 1632970609);

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
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

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
-- Chỉ mục cho bảng `prodcts_sale`
--
ALTER TABLE `prodcts_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Chỉ mục cho bảng `statistical`
--
ALTER TABLE `statistical`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image_library`
--
ALTER TABLE `image_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT cho bảng `manage_user`
--
ALTER TABLE `manage_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `privilege_group`
--
ALTER TABLE `privilege_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `prodcts_sale`
--
ALTER TABLE `prodcts_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT cho bảng `statistical`
--
ALTER TABLE `statistical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user_privilege`
--
ALTER TABLE `user_privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `manage_user` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`products_id`) REFERENCES `prodcts_sale` (`id`);

--
-- Các ràng buộc cho bảng `image_library`
--
ALTER TABLE `image_library`
  ADD CONSTRAINT `image_library_ibfk_1` FOREIGN KEY (`products_id`) REFERENCES `prodcts_sale` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `privilege`
--
ALTER TABLE `privilege`
  ADD CONSTRAINT `privilege_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `privilege_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `prodcts_sale`
--
ALTER TABLE `prodcts_sale`
  ADD CONSTRAINT `prodcts_sale_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);

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
