-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2016 at 04:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `at_mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) UNSIGNED NOT NULL,
  `profile_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `order_id` int(11) UNSIGNED NOT NULL,
  `per_cash` int(20) NOT NULL,
  `total_cash` int(20) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `params` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `params`, `group_name`, `active`, `created`, `updated`) VALUES
(1, 'Hàng cũ', 'hang-cu', 'cu-moi', 1, '2016-09-28 00:00:00', '2016-09-28 06:54:51'),
(2, 'Hàng mới', 'hang-moi', 'cu-moi', 1, '2016-09-28 00:00:00', '2016-09-28 06:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) UNSIGNED NOT NULL,
  `com_name` varchar(255) NOT NULL,
  `params` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `com_name`, `params`, `position`, `active`, `created`, `updated`) VALUES
(1, 'Apple', '123-234-erwer-sdqw', 1, 1, '2016-09-28 00:00:00', '2016-09-28 06:47:05'),
(2, 'Asus', 'qweqwe-234-ada', 2, 1, '2016-09-28 00:00:00', '2016-09-28 06:47:05'),
(3, 'Xiaomi', 'asdas-qwe-as', 3, 1, '2016-09-28 00:00:00', '2016-09-28 06:49:36'),
(4, 'Sony', 'qweqw-34-aa', 4, 1, '2016-09-28 00:00:00', '2016-09-28 06:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `params` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` int(5) NOT NULL,
  `city` varchar(255) NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `date_start` timestamp NULL DEFAULT NULL,
  `date_end` timestamp NULL DEFAULT NULL,
  `ticket` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `params`, `description`, `image`, `address`, `zipcode`, `city`, `schedule`, `date_start`, `date_end`, `ticket`, `price`, `updated`) VALUES
(1, 'evenement test', 'evenement-test', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget sodales risus. Nullam feugiat accumsan aliquam. Suspendisse sagittis commodo feugiat. Cras aliquet et lorem a feugiat. Vestibulum sed ante quam. Duis semper magna egestas egestas scelerisque. Nam pharetra quam nec mauris pulvinar eleifend. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam lacinia mollis odio sed euismod. Nullam vestibulum id sem vel tincidunt. Nulla lobortis metus nec viverra porttitor. In eget gravida ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>', '/Public/img/event/nom.jpg', '19 rue jean robert', 75018, 'Paris', ' 17h20', '2014-12-03 23:00:00', '2014-12-03 23:00:00', 50, '', '2014-11-23 09:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `profile_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `item_count` int(11) NOT NULL,
  `to_price` int(20) NOT NULL,
  `ship_price` int(20) NOT NULL,
  `total_price` int(20) NOT NULL,
  `order_type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `profile_id`, `product_id`, `item_count`, `to_price`, `ship_price`, `total_price`, `order_type`, `description`, `status`, `ip_address`, `created`, `updated`) VALUES
(26, 21, 140, 30, 2, 20, 80, 'normal', 'minh', 1, 'null', '2016-09-26 16:50:23', '2016-09-26 09:50:23'),
(27, 19, 45, 99, 5, 12, 507, 'normal', '', 1, 'null', '2016-09-26 17:00:47', '2016-09-26 10:00:47'),
(29, 20, 49, 123, 5, 123231, 123846, 'normal', '1123', 1, '127.0.0.1', '2016-09-27 11:21:28', '2016-09-27 04:21:28'),
(30, 23, 50, 999999, 5, 8776, 5008771, 'normal', '', 1, '127.0.0.1', '2016-09-27 11:27:51', '2016-09-27 04:27:51'),
(31, 23, 45, 99999, 5, 99999, 599994, 'normal', 'asdasdqw', 1, '127.0.0.1', '2016-09-27 19:10:02', '2016-09-27 12:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`, `note`, `updated`) VALUES
(1, 'Vừa đặt', '', '2016-09-27 02:55:29'),
(2, 'Đã xác nhận', '', '2016-09-27 02:55:29'),
(3, 'Chờ gửi hàng', '', '2016-09-27 02:57:13'),
(4, 'Đang ship hàng', '', '2016-09-27 02:57:13'),
(5, 'Gửi thành công', '', '2016-09-27 02:58:05'),
(6, 'Đã hủy', '', '2016-09-27 02:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `company_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL COMMENT 'tên sp',
  `params` varchar(255) NOT NULL COMMENT 'link param trên url',
  `price` int(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `detail` text NOT NULL COMMENT 'thông tin',
  `sale` int(20) UNSIGNED NOT NULL COMMENT 'giá sale',
  `product_year` year(4) NOT NULL COMMENT 'ngày sản xuất',
  `tags` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `company_id`, `title`, `params`, `price`, `count`, `active`, `detail`, `sale`, `product_year`, `tags`, `created`, `updated`) VALUES
(145, 4, 'RMN3', '', 999, 0, 1, '', 99, 2016, 'no,tag', '2016-09-28 17:32:45', '2016-09-28 10:32:45'),
(146, 4, 'RMN34', '', 9999, 10, 1, '', 99, 2016, 'no,tag', '2016-09-28 17:34:09', '2016-09-28 10:34:09'),
(147, 1, 'Phan Thế Minh asasd', 'n-a', 99999999, 0, 1, '', 0, 2016, 'no,tag', '2016-09-28 17:48:16', '2016-09-28 10:48:16'),
(148, 1, 'Phan Thế Minh asasd', 'n-a', 99999999, 0, 1, '', 0, 2016, 'no,tag', '2016-09-28 17:49:05', '2016-09-28 10:49:05'),
(149, 4, 'Phan Thế Minh asasd', '', 99999999, 0, 1, '', 0, 2016, 'no,tag', '2016-09-28 17:53:03', '2016-09-28 10:53:03'),
(150, 4, 'Phan Thế Minh asasd', 'n-a', 99999999, 0, 1, '', 0, 2016, 'no,tag', '2016-09-28 17:54:21', '2016-09-28 10:54:21'),
(151, 3, 'Phan Thế Minh testingasdas', '1475062998-phan-the-minh-testingasdas', 123123, 0, 1, '', 123, 2016, 'no,tag', '2016-09-28 18:43:18', '2016-09-28 11:43:18'),
(152, 1, 'minh test hihi', '1475073206-minh-test-hihi', 1111, 1, 1, '', 2222, 2016, 'no,tag', '2016-09-28 21:33:26', '2016-09-28 14:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_collection`
--

CREATE TABLE `product_collection` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_collection`
--

INSERT INTO `product_collection` (`id`, `product_id`, `category_id`, `updated`) VALUES
(7, 145, 1, '2016-09-28 10:32:45'),
(8, 145, 2, '2016-09-28 10:32:45'),
(9, 146, 1, '2016-09-28 10:34:09'),
(10, 146, 2, '2016-09-28 10:34:09'),
(11, 147, 1, '2016-09-28 10:48:16'),
(12, 147, 2, '2016-09-28 10:48:16'),
(13, 148, 1, '2016-09-28 10:49:05'),
(14, 148, 2, '2016-09-28 10:49:05'),
(15, 149, 2, '2016-09-28 10:53:03'),
(16, 151, 1, '2016-09-28 11:43:18'),
(17, 151, 2, '2016-09-28 11:43:18'),
(18, 152, 2, '2016-09-28 14:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `length` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `screen_type` varchar(255) NOT NULL,
  `screen_size` varchar(255) NOT NULL,
  `screen_resolution` varchar(255) NOT NULL,
  `screen_des` varchar(255) NOT NULL,
  `memory_int` varchar(255) NOT NULL,
  `memory_ext` varchar(255) NOT NULL,
  `memory_sup` varchar(255) NOT NULL,
  `bandwidth` varchar(255) NOT NULL COMMENT 'băng tần hỗ trợ',
  `gps_type` varchar(255) NOT NULL,
  `bluetooth` varchar(255) NOT NULL,
  `wifi` varchar(255) NOT NULL,
  `infrared` varchar(255) NOT NULL,
  `usb` varchar(255) NOT NULL,
  `main_camera` varchar(255) NOT NULL,
  `front_camera` varchar(255) NOT NULL,
  `sim_support` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `accessory` varchar(255) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL COMMENT 'avatar url',
  `gender` tinyint(2) NOT NULL,
  `birthday` date NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `full_name`, `phone`, `email`, `address`, `city`, `country`, `avatar`, `gender`, `birthday`, `active`, `created`, `updated`) VALUES
(2, 59, 'Phan Th? Minh', '0914499925', 'phanminh65@gmail.com', 'Ba Vi', 'Hanoi', 'VN', '', 1, '1995-05-06', 1, '2016-09-22 14:34:22', '2016-09-22 07:34:22'),
(3, 60, 'Phan Thế Minh', '0914499925', 'phanminh65@gmail.com', 'Ba Vi', 'Hanoi', 'VN', 'updatelater.jpg', 1, '1995-05-06', 0, '2016-09-22 15:47:49', '2016-09-22 08:47:49'),
(4, 61, 'Phan Thế Minh', '01234567890', 'phanminh65@gmail.com', 'Ba Vi', 'Hanoi', 'VN', '', 1, '1995-05-06', 1, '2016-09-22 16:16:16', '2016-09-22 09:16:16'),
(7, 64, 'Phan Thế Minh', '0914499925', 'phanminh65@gmail.com1', 'Ba Vi', 'Hanoi', 'VN', '', 2, '1995-05-06', 1, '2016-09-24 14:26:50', '2016-09-24 07:26:50'),
(9, 66, 'Phan Thế Minh', '0914499925', 'phanminh65@gmail.com8', 'Ba Vi', 'Hanoi', 'VN', '', 1, '1995-05-06', 0, '2016-09-24 18:37:37', '2016-09-24 11:37:37'),
(10, 67, 'Minh The Phan', '0914499925', 'phanminh65@gmail.com9', 'Ba Vi', 'Hanoi', 'VN', '', 1, '1995-05-06', 1, '2016-09-24 18:40:24', '2016-09-24 11:40:24'),
(14, 50, 'hhhhhhhhhhhhhhh', '1111111111111', 'phanminh65@gmail.com15', '02 Phu Cuong', 'Hanoi', 'VN', '1474865347-minhtest10.png', 1, '2016-09-02', 1, '2016-09-24 23:56:03', '2016-09-24 16:56:03'),
(15, 53, 'qweqwewer', '13123', 'phanminh65@gmail.com16', '02 Phu Cuong', 'Hanoi', 'VN', '1474889354-minhtest11.png', 1, '2016-09-30', 1, '2016-09-25 00:07:07', '2016-09-24 17:07:07'),
(16, 9, 'Phan Thế Minh', '914499925', 'phanminh65@gmail.com18', '02 Phu Cuong', 'Hanoi', 'VN', '1474739960-minhtest9.png', 1, '1995-05-06', 1, '2016-09-25 00:38:54', '2016-09-24 17:38:54'),
(18, 69, 'Nguyễn Trung Đức', '12323123123', 'nguyentrungduc2910@gmail.com', 'Hoang  Cau', 'Hanoi', 'VN', '', 1, '1995-05-06', 1, '2016-09-25 21:12:31', '2016-09-25 14:12:31'),
(19, 70, 'Hoàn Nguyên Khấc', '912312312313123', 'hoannguyenkhac1871995@gmail.com', '12312', 'qweqweqwe', 'VN', '', 1, '1970-01-01', 1, '2016-09-25 21:23:56', '2016-09-25 14:23:56'),
(20, 71, 'Trần Thị Thu', '123123123', 'Tranthutak10.1@gmail.com', 'Ha Noi', 'Ha Noi', 'VN', '', 0, '1970-01-01', 1, '2016-09-25 21:27:42', '2016-09-25 14:27:42'),
(21, 72, 'Tiến Trần', '12312323434', 'tien4c@gmail.com', 'qweqwe', '123123', 'VN', '', 1, '1970-01-01', 1, '2016-09-25 21:29:13', '2016-09-25 14:29:13'),
(23, 73, 'Cầm dz', '01648921193', 'camnh@gmail.com', 'Số nhà 58 ngõ 40 phố Tạ Quang Bửu, Bách Khoa, Hà Nội', 'Hà Nội', 'VN', '1474890810-camnh.png', 1, '1991-07-04', 1, '2016-09-26 18:53:30', '2016-09-26 11:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) UNSIGNED NOT NULL,
  `level` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `level`, `name`, `update`) VALUES
(1, 0, 'Administrator', '2014-08-20 10:54:36'),
(2, 1, 'Staff', '2014-08-20 10:54:36'),
(3, 2, 'Stakeholder ', '2016-09-13 07:44:29'),
(4, 3, 'Customer', '2016-09-13 07:44:29'),
(5, 0, 'Architect & Scrum Master', '2016-09-20 06:14:03'),
(6, 0, 'PHP Developer', '2016-09-20 06:14:03'),
(7, 1, 'Android Developer', '2016-09-20 06:15:00'),
(8, 1, 'BA & Quality Assurance', '2016-09-20 06:15:00'),
(9, 1, 'Solution Developer', '2016-09-20 06:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `id_role` int(11) UNSIGNED NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `token`, `active`, `id_role`, `last_login`, `created`, `update`) VALUES
(9, 'minhtest9', '$2a$07$ptmp4szOWxiOv0GqpHbdfukkHqQ3U4d4m7PFEE69vtTM1DiLgEaki', 'ab24dd7efa48a65b5aea845e9e5b5ce9', 1, 5, '2016-09-24 17:34:18', '2016-09-14 01:28:13', '2016-09-24 17:59:20'),
(50, 'minhtest10', '$2a$07$ptmyE8rvtgg6vIPXuMfmAOsW0nhxlhT.rp5N2HFCer18xQ/I89hou', '2912d35c377b60fe078f53f0a9714474', 1, 1, '2016-09-28 00:00:52', '2016-09-14 01:30:28', '2016-09-27 17:00:52'),
(53, 'minhtest11', '$2a$07$ptmUO4pPC49WpBRuPKxBE.WB5TqSU.MhDpU9IfzxhoS/dQZfbSZ.K', '63be1949df643caba09310500ad0bb15', 1, 2, '2016-09-26 18:34:08', '2016-09-22 11:06:14', '2016-09-26 11:34:08'),
(59, 'minhtest14', '$2a$07$ptmrVHQNpLFNaTfySRctBuDdmzuUgSE9frOn0pZZJuPDIoGGIcWZu', 'cb72ef2ac64955e33f873f1c6ac7235c', 1, 1, '0000-00-00 00:00:00', '2016-09-22 14:34:22', '2016-09-22 07:34:22'),
(60, 'minhtest20', '$2a$07$ptmIpU9gBlKF8wRZCosDZefYIJU32uyJ4HjAlYTuXvQEcX2fjerVa', '8ad1e984d254bb75513f987cef3f92e6', 1, 5, '2016-09-25 02:01:47', '2016-09-22 15:47:49', '2016-09-24 19:01:47'),
(61, 'minhtest21', '$2a$07$ptmcYTYEM97OnTrH692wPOHsFUpEBmxhJzzfC/dPnpe2NFU6IkQ9e', '46f13c233604674d335995663d8e1af1', 1, 8, '0000-00-00 00:00:00', '2016-09-22 16:16:16', '2016-09-22 09:16:16'),
(64, 'minhtest23', '$2a$07$ptmbCg9OO3LxQ9kRCFBvUOCMuqL1H4P9fInP/CTWlXPS7hKSuojPW', 'd1c37763e184ce1e3e4037ebf2c71eda', 1, 1, '0000-00-00 00:00:00', '2016-09-24 14:26:50', '2016-09-24 07:26:50'),
(66, 'minhtest28', '$2a$07$ptm5E5KghlSiwu3yJ9cEteSooGDfITFM8V.6ScFZCwQTZB1xe7i26', 'a798282573839191b3e928b4578971e5', 0, 1, '0000-00-00 00:00:00', '2016-09-24 18:37:37', '2016-09-26 11:38:57'),
(67, 'minhtest29', '$2a$07$ptmzpHoMdv5nmDVDDPS2S.SqnQ5YfFbHx5XSuFWkQ4fs8M5NzAE2O', '89ccb7f9b0527a212a7073659b73206e', 1, 5, '0000-00-00 00:00:00', '2016-09-24 18:40:24', '2016-09-24 11:40:24'),
(69, 'trungducng', '$2a$07$ptmB8rvtgg6vIPXuMfmAdehht//LXi8HE.WAbGI0AqgLwTleTtpOa', '8e843b14eb01fc8793b0f5ac457119ca', 1, 1, '0000-00-00 00:00:00', '2016-09-25 21:12:31', '2016-09-25 14:12:31'),
(70, 'hoannguyen', '$2a$07$ptmA8mivY6K7UHey4l1WuuSSE86e3Ucf7Myb6jBg1GxPKTlTlWJCC', '0a16530a299151060fac288a5d3f4885', 1, 1, '0000-00-00 00:00:00', '2016-09-25 21:23:56', '2016-09-25 14:23:56'),
(71, 'thuliinh', '$2a$07$ptmAX8jI0HUiArUmBp4szO0wwA6u59DKHARLdzW9mKC/LrV8HSCne', '59e350e16badcd013385adc4da8e50e3', 1, 1, '0000-00-00 00:00:00', '2016-09-25 21:27:42', '2016-09-25 14:27:42'),
(72, 'kuzing', '$2a$07$ptmOv0GqpHbdf0BXWdyczOOre5xhexJoIcRMVQU5FMc7Aazl0DnxO', 'f7590ad212a472270cfa7cb53764f7bb', 1, 1, '0000-00-00 00:00:00', '2016-09-25 21:29:13', '2016-09-25 14:29:13'),
(73, 'camnh', '$2a$07$ptm5UciYPFG6ydsJFNdEyez.py2L7/GGcH2xAgLcCBzOOVZVMQeAG', 'b7e4e3ebfe95d1a91c6d9a12edfc7c68', 1, 1, '2016-09-26 18:54:51', '2016-09-26 18:53:30', '2016-09-26 11:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `reported_in` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_name` (`cat_name`(191));

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `position` (`position`),
  ADD KEY `com_name` (`com_name`(191));

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`(191)),
  ADD KEY `price` (`price`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `company_id_2` (`company_id`),
  ADD KEY `params` (`params`(191));

--
-- Indexes for table `product_collection`
--
ALTER TABLE `product_collection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`level`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `product_collection`
--
ALTER TABLE `product_collection`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_product_ibfk_3` FOREIGN KEY (`status`) REFERENCES `order_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_product_ibfk_4` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_collection`
--
ALTER TABLE `product_collection`
  ADD CONSTRAINT `product_collection_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_collection_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD CONSTRAINT `user_feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
