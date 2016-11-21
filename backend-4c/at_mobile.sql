-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 02:04 PM
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `params` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `position` int(11) UNSIGNED NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `params`, `position`, `group_name`, `active`, `created`, `updated`) VALUES
(1, 'Hàng cũ', 'hang-cu', 2, 'unordered', 1, '2016-09-28 00:00:00', '2016-09-28 06:54:51'),
(2, 'Hàng mới', 'hang-rat-moi', 123, 'unordered', 1, '2016-09-28 00:00:00', '2016-09-28 06:54:51'),
(5, 'Hàng 99%', '2016-09-29-161526-hang-99', 3, 'unordered', 1, '2016-09-29 16:15:26', '2016-09-29 09:15:26');

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
(2, 'MinhPhone', 'minh-phone', 44, 1, '2016-10-11 00:00:00', '2016-10-11 10:10:13'),
(3, 'Xiaomi', 'xiaomi', 3, 1, '2016-09-28 00:00:00', '2016-09-28 06:49:36'),
(4, 'Sony', 'sony', 4, 1, '2016-09-28 00:00:00', '2016-09-28 06:49:36'),
(5, 'Samsung', '2016-10-04-091502-samsung', 5, 1, '2016-10-04 09:15:02', '2016-10-04 02:15:02'),
(8, 'LG', '2016-10-04-091746-lg', 2, 1, '2016-10-04 09:17:46', '2016-10-04 02:17:46'),
(9, 'HTC', '2016-10-04-091903-htc', 6, 1, '2016-10-04 09:19:03', '2016-10-04 02:19:03'),
(10, 'Nokia', '2016-10-04-091916-nokia', 7, 1, '2016-10-04 09:19:16', '2016-10-04 02:19:16'),
(11, 'Blackberry', '2016-10-04-091929-blackberry', 8, 1, '2016-10-04 09:19:29', '2016-10-04 02:19:29'),
(12, 'Asus', '2016-10-04-091942-asus', 9, 1, '2016-10-04 09:19:42', '2016-10-04 02:19:42'),
(13, 'Lenovo', '2016-10-04-091954-lenovo', 10, 1, '2016-10-04 09:19:54', '2016-10-04 02:19:54'),
(14, 'Motorola', '2016-10-04-092008-motorola', 11, 1, '2016-10-04 09:20:08', '2016-10-04 02:20:08'),
(15, 'Mobiado', '2016-10-04-092023-mobiado', 12, 1, '2016-10-04 09:20:23', '2016-10-04 02:20:23'),
(16, 'Vertu', '2016-10-04-092033-vertu', 13, 1, '2016-10-04 09:20:33', '2016-10-04 02:20:33'),
(17, 'QMobile', '2016-10-04-092045-qmobile', 14, 1, '2016-10-04 09:20:45', '2016-10-04 02:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `message`, `name`, `email`, `date`) VALUES
(1, 'hello admin ??p zai', 'sdsd', '0', 'nguyentrungduc2910@gmail.com', '2016-11-16 20:52:22'),
(2, 'sdfsdf', 'dsfsdfdsf', '0', 'nguyentrungduc2910@gmail.com', '2016-11-16 20:54:25'),
(3, 'sdfsdfsdf', 'sdfsdfsdf', '0', 'sdfsdfsd@gmail.com', '2016-11-16 20:57:19'),
(4, '1232132sdasda', '?âsd', '0', 'nguyentrungduc2910@gmail.com', '2016-11-16 20:59:05'),
(5, 'dfsf', 'sdfsdf', '0', 'sdfsdfsd@gmail.com', '2016-11-16 21:20:24'),
(6, 'dfsdf', 'ádsad', 'trung ??c', 'nguyentrungduc2910@gmail.com', '2016-11-16 21:51:38'),
(8, 'hello admin ??p zai', 'sdfsdfsd', 'thu', 'nguyentrungduc2910@gmail.com', '2016-11-21 10:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `params` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `zipcode` int(5) NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `schedule` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_start` timestamp NULL DEFAULT NULL,
  `date_end` timestamp NULL DEFAULT NULL,
  `ticket` int(11) NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `params`, `description`, `image`, `address`, `zipcode`, `city`, `schedule`, `date_start`, `date_end`, `ticket`, `price`, `updated`) VALUES
(1, 'evenement test', 'evenement-test', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget sodales risus. Nullam feugiat accumsan aliquam. Suspendisse sagittis commodo feugiat. Cras aliquet et lorem a feugiat. Vestibulum sed ante quam. Duis semper magna egestas egestas scelerisque. Nam pharetra quam nec mauris pulvinar eleifend. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam lacinia mollis odio sed euismod. Nullam vestibulum id sem vel tincidunt. Nulla lobortis metus nec viverra porttitor. In eget gravida ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>', '/Public/img/event/nom.jpg', '19 rue jean robert', 75018, 'Paris', ' 17h20', '2014-12-03 23:00:00', '2014-12-03 23:00:00', 50, '123123', '2016-09-30 06:47:32'),
(2, '123123', '1475218113-123123', ' 23423wwer121', '', 'qweqwe', 121, 'qwewas', '312', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12123, '123123', '2016-09-30 06:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `label` varchar(255) NOT NULL,
  `position` int(11) UNSIGNED NOT NULL,
  `base_image` tinyint(1) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `product_id`, `label`, `position`, `base_image`, `url`, `active`, `created`, `updated`) VALUES
(1, 13, 'Chưa đặt tên', 0, 1, '/product/1476258924-minh.jpg', 0, '2016-10-12 14:55:24', '2016-10-12 07:55:24'),
(2, 13, 'Chưa đặt tên', 0, 1, '/product/1476258942-minh.jpg', 0, '2016-10-12 14:55:42', '2016-10-12 07:55:42'),
(3, 15, 'Chưa đặt tên', 0, 1, '/product/1476794697-new-pro.jpg', 0, '2016-10-18 19:44:57', '2016-10-18 12:44:57'),
(4, 15, 'Chưa đặt tên', 0, 1, '/product/1476807537-new-pro.png', 0, '2016-10-18 23:18:57', '2016-10-18 16:18:57'),
(5, 13, 'Chưa đặt tên', 0, 1, '/product/1477389019-minh.png', 0, '2016-10-25 16:50:19', '2016-10-25 09:50:19'),
(6, 17, 'Ch?a ??t tên', 0, 1, '/product/1477139925-iphone-5.jpg', 0, '2016-10-22 19:38:45', '2016-10-22 12:45:06'),
(7, 18, 'Ch?a ??t tên', 0, 1, '/product/1477399909-samsung-s7.png', 0, '2016-10-25 19:51:49', '2016-10-25 12:58:19'),
(8, 19, 'Iphone 6', 0, 1, '/product/1477445427-iphone-6.jpg', 0, '2016-10-26 08:30:27', '2016-10-26 01:36:58'),
(9, 20, 'Iphone 7', 0, 1, '/product/1477446113-iphone-7.jpg', 0, '2016-10-26 08:41:53', '2016-10-26 01:48:24'),
(10, 21, 'Ch?a ??t tên', 0, 1, '/product/1477446268-iphone-6s.png', 0, '2016-10-26 08:44:28', '2016-10-26 01:51:00'),
(11, 22, 'Iphone 5s', 0, 1, '/product/1477446416-iphone-5s.jpg', 0, '2016-10-26 08:46:56', '2016-10-26 01:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `profile_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_detail` varchar(255) NOT NULL,
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

INSERT INTO `order_product` (`id`, `profile_id`, `product_id`, `product_detail`, `item_count`, `to_price`, `ship_price`, `total_price`, `order_type`, `description`, `status`, `ip_address`, `created`, `updated`) VALUES
(1, 18, 7, '', 123123, 123, 12, 15144141, 'normal', 'qweqas', 3, '127.0.0.1', '2016-09-30 18:44:27', '2016-09-29 09:45:14'),
(2, 10, 9, '', 999, 34, 887, 34853, 'normal', '123123', 1, '127.0.0.1', '2016-09-29 16:47:17', '2016-09-29 09:47:17'),
(3, 3, 8, '', 2123, 9998, 34345, 21260099, 'normal', '2324234', 1, '127.0.0.1', '2016-09-29 16:48:32', '2016-09-29 09:48:32');

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
(1, 1, 'phan the61 minh testing', '1475076504-phan-the61-minh-testing', 999, 1, 1, '', 12312, 2016, 'no,tag', '2016-09-28 22:28:24', '2016-09-28 15:28:24'),
(3, 3, 'phan thế mỉnhqweq', 'phan-the-minh-1231', 99999, 123, 1, 'asd tr testing', 99999, 2016, 'no,tag', '2016-09-28 22:32:44', '2016-09-28 15:32:44'),
(5, 1, 'Phan Thế Minh', '1475081779-phan-the-minh', 9999, 1, 1, 'asdas', 99999, 2016, 'no,tag', '2016-09-28 23:56:19', '2016-09-28 16:56:19'),
(7, 2, '1234123', '1475082248-123123', 234, 12123, 0, '', 123, 2016, 'no,tag', '2016-09-29 00:04:08', '2016-09-28 17:04:08'),
(8, 4, 'minhrq qwe', '1475083017-minhrq-qwe', 99999, 99, 1, '', 9998, 2016, 'no,tag', '2016-09-29 00:16:57', '2016-09-28 17:16:57'),
(9, 3, 'tresadas', '1475113751-tresadas', 13, 1, 1, 'qweasd', 34, 2016, 'no,tag', '2016-09-29 08:49:11', '2016-09-29 01:49:11'),
(11, 4, 'phan thế minh', '1475140337-phan-the-minh', 1231, 1, 1, '', 123, 2016, 'no,tag', '2016-09-29 16:12:17', '2016-09-29 09:12:17'),
(13, 4, 'Minh', '2016-10-10-183047-minh', 12313, 999, 1, '12312', 123213, 2016, 'no,tag', '2016-10-10 18:30:47', '2016-10-10 11:30:47'),
(15, 2, 'new pro', '2016-10-18-110032-new-pro', 212, 1, 1, 'assd', 3123, 2016, 'no,tag', '2016-10-18 11:00:32', '2016-10-18 04:00:32'),
(16, 3, 'qweqwe', '2016-10-25-172133-qweqwe', 12312, 1, 1, '', 0, 2016, 'no,tag', '2016-10-25 17:21:33', '2016-10-25 10:21:33'),
(17, 1, 'Iphone 5', '2016-10-22-190753-iphone-5', 5000, 1, 1, 'Iphone 5s new', 4000, 2013, 'no,tag', '2016-10-22 19:07:53', '2016-10-22 12:14:14'),
(18, 5, 'Samsung S7', 'samsung-s7-new', 999, 1, 1, '', 0, 2016, 'no,tag', '2016-10-25 19:50:48', '2016-10-25 12:57:18'),
(19, 1, 'Iphone 6', '2016-10-26-082421-iphone-6', 13000, 8, 1, '', 0, 2014, 'no,tag', '2016-10-26 08:24:21', '2016-10-26 01:30:53'),
(20, 1, 'Iphone 7', '2016-10-26-084058-iphone-7', 20000, 1, 1, '', 0, 2016, 'no,tag', '2016-10-26 08:40:58', '2016-10-26 01:47:29'),
(21, 1, 'Iphone 6s', '2016-10-26-084314-iphone-6s', 16000, 1, 1, '', 17000, 2015, 'no,tag', '2016-10-26 08:43:14', '2016-10-26 01:49:45'),
(22, 1, 'Iphone 5s', '2016-10-26-084609-iphone-5s', 5000, 99, 0, '', 4500, 2012, 'no,tag', '2016-10-26 08:46:09', '2016-10-26 01:52:41');

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
(3, 3, 2, '2016-09-28 15:32:44'),
(11, 9, 2, '2016-09-29 01:49:11'),
(15, 7, 2, '2016-09-29 07:09:52'),
(24, 11, 2, '2016-09-30 03:25:32'),
(41, 1, 2, '2016-09-30 04:07:33'),
(43, 8, 2, '2016-09-30 04:08:17'),
(57, 5, 2, '2016-09-30 04:49:37'),
(94, 15, 2, '2016-10-18 16:18:57'),
(95, 13, 2, '2016-10-19 01:10:01'),
(96, 3, 2, '2016-10-21 08:41:14'),
(97, 13, 2, '2016-10-25 09:50:19'),
(98, 16, 2, '2016-10-25 10:21:33'),
(99, 16, 1, '2016-10-22 11:57:13'),
(101, 17, 2, '2016-10-22 12:45:06'),
(104, 18, 2, '2016-10-25 12:59:51'),
(106, 19, 2, '2016-10-26 01:36:58'),
(110, 21, 5, '2016-10-26 01:51:00'),
(113, 22, 5, '2016-10-26 01:53:54'),
(114, 20, 2, '2016-10-26 01:54:21');

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

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `product_id`, `length`, `width`, `height`, `weight`, `screen_type`, `screen_size`, `screen_resolution`, `screen_des`, `memory_int`, `memory_ext`, `memory_sup`, `bandwidth`, `gps_type`, `bluetooth`, `wifi`, `infrared`, `usb`, `main_camera`, `front_camera`, `sim_support`, `os`, `cpu`, `ram`, `battery`, `accessory`, `updated`) VALUES
(2, 13, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-12 07:55:24'),
(3, 15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-18 12:44:57'),
(4, 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-21 08:41:14'),
(5, 17, '123.8', '58.6', '7.6', '112 grams', 'Rentina', '', '1136x640', 'Multi-Touch', '16GB', 'không có', 'không có', '', '', 'Bluetooth 4.0 wireless', '802.11a/b/g/n Wi-Fi (802.11n 2.4GHz và 5GHz)', '', '', '', '', '', 'IOS 8', 'Chip A7 64bit', '1GB', ' Li-Po 1560 mAh battery (5.92 Wh)', 'Cáp s?c, tai nghe, ?p', '2016-10-22 12:45:06'),
(6, 18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-25 12:58:19'),
(7, 19, '138.1', '67.0', '6.9', '129 grams', 'Rentina', '', '1334x750', 'Multi?Touch ', '', '', '', '', '', '', '', '', '', '8.0 Megapixel', '5.0 Megapixel', '', 'IOS 10', 'Apple A8', '1GB', '', 'cáp s?c, tai nghe', '2016-10-26 01:36:58'),
(8, 20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-26 01:48:24'),
(9, 21, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-26 01:51:00'),
(10, 22, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016-10-26 01:53:27');

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
(14, 50, 'Phan Thế Minh 123', '914499925', 'phanminh65@gmail.com12', '02 Phu Cuong', 'Hanoi', 'VN', '', 1, '2016-09-02', 1, '2016-09-24 23:56:03', '2016-09-24 16:56:03'),
(15, 53, 'qweqwewer', '13123', 'phanminh65@gmail.com16', '02 Phu Cuong', 'Hanoi', 'VN', '1474889354-minhtest11.png', 1, '2016-09-30', 1, '2016-09-25 00:07:07', '2016-09-24 17:07:07'),
(16, 9, 'Phan Thế Minh', '914499925', 'phanminh65@gmail.com18', '02 Phu Cuong', 'Hanoi', 'VN', '1474739960-minhtest9.png', 1, '1995-05-06', 1, '2016-09-25 00:38:54', '2016-09-24 17:38:54'),
(18, 69, 'Nguyễn Trung Đức', '12323123123', 'nguyentrungduc2910@gmail.com', 'Hoang  Cau', 'Hanoi', 'VN', '', 1, '1995-05-06', 1, '2016-09-25 21:12:31', '2016-09-25 14:12:31'),
(19, 70, 'Hoàn Nguyên Khấc', '912312312313123', 'hoannguyenkhac1871995@gmail.com', '12312', 'qweqweqwe', 'VN', '', 1, '1970-01-01', 1, '2016-09-25 21:23:56', '2016-09-25 14:23:56'),
(20, 71, 'Trần Thị Thu', '123123123', 'Tranthutak10.1@gmail.com', 'Ha Noi', 'Ha Noi', 'VN', '', 0, '1970-01-01', 1, '2016-09-25 21:27:42', '2016-09-25 14:27:42'),
(21, 72, 'Tiến Trần', '12312323434', 'tien4c@gmail.com', 'qweqwe', '123123', 'VN', '', 1, '1970-01-01', 1, '2016-09-25 21:29:13', '2016-09-25 14:29:13'),
(23, 73, 'Cầm dz', '01648921193', 'camnh@gmail.com', 'Số nhà 58 ngõ 40 phố Tạ Quang Bửu, Bách Khoa, Hà Nội', 'Hà Nội', 'VN', '1474890810-camnh.png', 1, '1991-07-04', 1, '2016-09-26 18:53:30', '2016-09-26 11:53:30'),
(24, 74, 'Tran Thu', '0914499925', 'thu@gmail.com', '02 Phu Cuong, Hatay', 'Hanoi', 'VN', '1475222511-Tran thi thu.jpg', 0, '1995-05-17', 1, '2016-09-30 15:01:51', '2016-09-30 08:01:51'),
(25, 75, 'Phan Thế Minh', '0914499925', 'phanminh65@gmail.com122', 'Ba Vi', 'Hanoi', 'VN', '1475235353-phantheminh.jpg', 1, '1995-05-06', 1, '2016-09-30 18:35:53', '2016-09-30 11:35:53'),
(26, 76, 'Hau Do Van', '012345678', 'phanminh123@gmail.com', 'Hanoi', 'Hanoi', 'VN', '1477399290-haudovan.png', 1, '1995-05-06', 1, '2016-10-25 19:41:30', '2016-10-25 12:47:59'),
(27, 77, 'test minh', '123243', 'test1@g.co', '4234', '3456', 'VN', '1477624580-test1.jpg', 1, '1995-05-06', 1, '2016-10-28 00:58:39', '2016-10-27 17:58:39'),
(28, 78, 'Phan Thế Minh', '914499925', 'phanminh65@gmail.com78', '02 Phu Cuong', 'Hanoi', 'VN', '1478002252-minhthephan.jpg', 1, '1995-05-06', 1, '2016-11-01 19:10:52', '2016-11-01 12:10:52');

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
-- Table structure for table `subcribe`
--

CREATE TABLE `subcribe` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcribe`
--

INSERT INTO `subcribe` (`id`, `email`, `updated`) VALUES
(1, 'phanminh65@gmail.com', '2016-10-28 04:16:31');

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
(50, 'minhtest10', '$2a$07$ptmyE8rvtgg6vIPXuMfmAOsW0nhxlhT.rp5N2HFCer18xQ/I89hou', '4da1098b31d45a1aa26777ce285b0df4', 1, 1, '2016-10-18 10:36:36', '2016-09-14 01:30:28', '2016-10-18 03:36:36'),
(53, 'minhtest11', '$2a$07$ptmUO4pPC49WpBRuPKxBE.WB5TqSU.MhDpU9IfzxhoS/dQZfbSZ.K', '25cbf95aa45c0c06e0409ed99451ed0c', 1, 2, '2016-10-14 13:56:08', '2016-09-22 11:06:14', '2016-10-14 06:56:08'),
(59, 'minhtest14', '$2a$07$ptmrVHQNpLFNaTfySRctBuDdmzuUgSE9frOn0pZZJuPDIoGGIcWZu', 'cb72ef2ac64955e33f873f1c6ac7235c', 1, 1, '0000-00-00 00:00:00', '2016-09-22 14:34:22', '2016-09-22 07:34:22'),
(60, 'minhtest20', '$2a$07$ptmIpU9gBlKF8wRZCosDZefYIJU32uyJ4HjAlYTuXvQEcX2fjerVa', '8ad1e984d254bb75513f987cef3f92e6', 1, 5, '2016-09-25 02:01:47', '2016-09-22 15:47:49', '2016-09-24 19:01:47'),
(61, 'minhtest21', '$2a$07$ptmcYTYEM97OnTrH692wPOHsFUpEBmxhJzzfC/dPnpe2NFU6IkQ9e', '46f13c233604674d335995663d8e1af1', 1, 8, '0000-00-00 00:00:00', '2016-09-22 16:16:16', '2016-09-22 09:16:16'),
(64, 'minhtest23', '$2a$07$ptmbCg9OO3LxQ9kRCFBvUOCMuqL1H4P9fInP/CTWlXPS7hKSuojPW', 'd1c37763e184ce1e3e4037ebf2c71eda', 1, 1, '0000-00-00 00:00:00', '2016-09-24 14:26:50', '2016-09-24 07:26:50'),
(66, 'minhtest28', '$2a$07$ptm5E5KghlSiwu3yJ9cEteSooGDfITFM8V.6ScFZCwQTZB1xe7i26', 'a798282573839191b3e928b4578971e5', 0, 1, '0000-00-00 00:00:00', '2016-09-24 18:37:37', '2016-09-26 11:38:57'),
(67, 'minhtest29', '$2a$07$ptmzpHoMdv5nmDVDDPS2S.SqnQ5YfFbHx5XSuFWkQ4fs8M5NzAE2O', '89ccb7f9b0527a212a7073659b73206e', 1, 5, '0000-00-00 00:00:00', '2016-09-24 18:40:24', '2016-09-24 11:40:24'),
(69, 'trungducng', '$2a$07$ptmB8rvtgg6vIPXuMfmAdehht//LXi8HE.WAbGI0AqgLwTleTtpOa', '6f884550665b43d6a041e03655872f0a', 1, 1, '2016-11-21 17:54:30', '2016-09-25 21:12:31', '2016-11-21 10:54:30'),
(70, 'hoannguyen', '$2a$07$ptmA8mivY6K7UHey4l1WuuSSE86e3Ucf7Myb6jBg1GxPKTlTlWJCC', '776734022b615bdeb3921ef576c8d47d', 1, 1, '2016-10-23 23:47:36', '2016-09-25 21:23:56', '2016-10-23 16:54:01'),
(71, 'thuliinh', '$2a$07$ptmAX8jI0HUiArUmBp4szO0wwA6u59DKHARLdzW9mKC/LrV8HSCne', '0df6f89023f9b4581d512b094ea24bdf', 1, 1, '2016-11-01 19:16:13', '2016-09-25 21:27:42', '2016-11-01 12:16:13'),
(72, 'kuzing', '$2a$07$ptmOv0GqpHbdf0BXWdyczOOre5xhexJoIcRMVQU5FMc7Aazl0DnxO', '6a909baae64b7a4fb3bcc807f7705568', 1, 1, '2016-10-26 08:17:52', '2016-09-25 21:29:13', '2016-10-26 01:24:23'),
(73, 'camnh', '$2a$07$ptm5UciYPFG6ydsJFNdEyez.py2L7/GGcH2xAgLcCBzOOVZVMQeAG', 'b7e4e3ebfe95d1a91c6d9a12edfc7c68', 1, 1, '2016-09-26 18:54:51', '2016-09-26 18:53:30', '2016-09-26 11:54:51'),
(74, 'Tran thi thu', '$2a$07$ptmTqZ6SeTYKSOQ5klufpuEyu94vDCYmRcyFqMNCYwRsjbyZud56O', '8fe8b4af498b2694125be9077236e7e4', 1, 4, '2016-10-14 13:39:20', '2016-09-30 15:01:51', '2016-10-14 06:39:20'),
(75, 'phantheminh', '$2a$07$ptmquLvRwYhT2JajDAkweua0gODIA54JpC4C2y0oPVxxbaTHMptGy', '56018a1a6c6e46b2a48ab3da81742d92', 1, 5, '2016-11-01 19:03:18', '2016-09-30 18:35:53', '2016-11-01 12:03:18'),
(76, 'haudovan', '$2a$07$ptmqOp6VabC5rltTRDPr9eKnfj1x/iUMBeW5NPhWNwBH2WhNImEmy', 'a93bc9a9f100d0e533015b6977117328', 1, 4, '2016-10-25 19:42:10', '2016-10-25 19:41:30', '2016-10-25 12:48:40'),
(77, 'test1', '$2a$07$ptmiArUmBp4szOWxiOv0GeQBSxiwsjP5x9DzjoXm2BDwigzcPqgsi', 'ddc57a1cf5c50a344b6d18534a05e684', 1, 4, '2016-10-28 00:59:12', '2016-10-28 00:58:39', '2016-10-28 03:35:13'),
(78, 'minhthephan', '$2a$07$ptmYMZOUb8B0tbx0DHSNUe2nxEMBMEt9abkT6dkLtB6kX4uMhHZaq', 'd71eb244e5d175604a91cf3ed46974df', 1, 4, '2016-11-01 19:11:59', '2016-11-01 19:10:52', '2016-11-01 12:11:59');

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
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
  ADD UNIQUE KEY `position_3` (`position`),
  ADD KEY `com_name` (`com_name`(191)),
  ADD KEY `params` (`params`(191)),
  ADD KEY `position_2` (`position`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `params` (`params`(191)),
  ADD KEY `params_2` (`params`(191));

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
-- Indexes for table `subcribe`
--
ALTER TABLE `subcribe`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` tinyint(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product_collection`
--
ALTER TABLE `product_collection`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `subcribe`
--
ALTER TABLE `subcribe`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_product_ibfk_3` FOREIGN KEY (`status`) REFERENCES `order_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_product_ibfk_4` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_collection`
--
ALTER TABLE `product_collection`
  ADD CONSTRAINT `product_collection_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_collection_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

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
