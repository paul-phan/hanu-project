-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2016 at 04:30 PM
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
  `position` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `status` tinyint(1) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `company_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL COMMENT 'tên sp',
  `params` varchar(255) NOT NULL COMMENT 'link param trên url',
  `price` int(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `detail` text NOT NULL COMMENT 'thông tin',
  `type` varchar(255) NOT NULL,
  `sale` int(20) UNSIGNED NOT NULL COMMENT 'giá sale',
  `manufactured_date` date NOT NULL COMMENT 'ngày sản xuất',
  `tags` varchar(255) NOT NULL,
  `view` int(20) NOT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `company_id`, `title`, `params`, `price`, `count`, `active`, `detail`, `type`, `sale`, `manufactured_date`, `tags`, `view`, `created`, `updated`) VALUES
(41, 1, 1, 'non magna. Nam ligula elit, pretium et, rutrum', 'GJL57IMQ2FG', 8, 2, 1, 'pede et risus. Quisque libero lacus,', 'magna. Cras convallis convallis dolor. Quisque tincidunt', 2, '0000-00-00', '', 0, '2017-07-22 23:10:59', '2016-09-20 08:49:09'),
(42, 2, 2, 'ornare, lectus ante dictum mi, ac mattis velit', 'QKS91KJB1VV', 8, 1, 1, 'Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est.', 'Aenean eget metus. In nec orci. Donec', 2, '0000-00-00', '', 0, '2016-11-08 09:35:50', '2016-09-20 08:49:09'),
(43, 3, 3, 'Nullam scelerisque', 'UBV30KHG0CG', 7, 2, 1, 'sagittis felis. Donec tempor, est ac', 'molestie', 3, '0000-00-00', '', 0, '2017-02-08 13:20:25', '2016-09-20 08:49:09'),
(44, 4, 4, 'a tortor. Nunc commodo', 'JHQ51BEL0UN', 10, 10, 1, 'eu dolor egestas rhoncus. Proin nisl sem, consequat nec,', 'ut, pellentesque eget, dictum placerat, augue.', 8, '0000-00-00', '', 0, '2017-05-02 06:34:10', '2016-09-20 08:49:09'),
(45, 5, 5, 'eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc', 'OMD36ONO9LU', 7, 6, 1, 'aliquam arcu. Aliquam ultrices iaculis odio. Nam', 'risus odio, auctor vitae, aliquet nec, imperdiet nec,', 5, '0000-00-00', '', 0, '2016-04-14 17:09:42', '2016-09-20 08:49:09'),
(46, 6, 6, 'purus sapien, gravida non, sollicitudin a, malesuada id,', 'TDD18IVB6GL', 10, 3, 1, 'Maecenas malesuada fringilla est. Mauris eu turpis. Nulla', 'luctus. Curabitur egestas nunc sed', 10, '0000-00-00', '', 0, '2015-09-29 21:03:49', '2016-09-20 08:49:09'),
(47, 7, 7, 'ridiculus mus. Proin vel arcu eu odio tristique pharetra.', 'PSM64FUJ4ST', 9, 7, 1, 'dapibus gravida. Aliquam tincidunt, nunc ac mattis', 'Nunc mauris sapien, cursus', 9, '0000-00-00', '', 0, '2016-02-16 19:58:47', '2016-09-20 08:49:09'),
(48, 8, 8, 'commodo hendrerit. Donec porttitor tellus non magna. Nam ligula', 'ZCI88EQJ0MQ', 9, 6, 1, 'a,', 'ac sem ut dolor', 6, '0000-00-00', '', 0, '2015-10-21 15:54:21', '2016-09-20 08:49:09'),
(49, 9, 9, 'varius orci, in consequat enim diam vel arcu. Curabitur ut', 'YEA06IYE6NO', 8, 3, 1, 'ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper', 'luctus vulputate,', 5, '0000-00-00', '', 0, '2016-12-23 04:39:33', '2016-09-20 08:49:09'),
(50, 10, 10, 'sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna.', 'JNI08FLG5PK', 8, 2, 1, 'risus a ultricies adipiscing,', 'auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare', 5, '0000-00-00', '', 0, '2016-02-09 05:38:13', '2016-09-20 08:49:09'),
(51, 11, 11, 'nunc nulla vulputate dui,', 'UGS02NNH7MZ', 8, 2, 1, 'Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus', 'et, rutrum eu, ultrices sit amet,', 4, '0000-00-00', '', 0, '2016-09-29 05:10:58', '2016-09-20 08:49:09'),
(52, 12, 12, 'vel sapien imperdiet ornare. In', 'ZXU98WIZ3RT', 8, 3, 1, 'massa. Vestibulum', 'congue turpis. In condimentum. Donec at arcu. Vestibulum', 1, '0000-00-00', '', 0, '2016-03-29 17:35:16', '2016-09-20 08:49:09'),
(53, 13, 13, 'tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque', 'ERU13TTD7MR', 7, 4, 1, 'dui lectus rutrum urna, nec luctus felis purus ac tellus.', 'orci, adipiscing non, luctus', 1, '0000-00-00', '', 0, '2015-10-22 05:52:20', '2016-09-20 08:49:09'),
(54, 14, 14, 'tempus risus. Donec egestas.', 'GOV16AXN0ID', 10, 3, 1, 'neque. Nullam ut', 'magna, malesuada vel,', 1, '0000-00-00', '', 0, '2017-07-25 15:48:53', '2016-09-20 08:49:09'),
(55, 15, 15, 'elit, dictum eu, eleifend nec,', 'DPZ15BXN1AL', 10, 4, 1, 'scelerisque neque.', 'et arcu imperdiet ullamcorper.', 5, '0000-00-00', '', 0, '2017-04-07 09:07:15', '2016-09-20 08:49:09'),
(56, 16, 16, 'auctor, nunc nulla vulputate', 'JMC76CGV7FA', 8, 1, 1, 'Phasellus dolor elit, pellentesque a, facilisis non,', 'ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy', 3, '0000-00-00', '', 0, '2017-07-21 09:43:43', '2016-09-20 08:49:09'),
(57, 17, 17, 'urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat', 'UUZ47WUQ7MG', 8, 1, 1, 'ut odio vel est tempor', 'sapien. Cras dolor dolor, tempus non,', 8, '0000-00-00', '', 0, '2017-04-18 21:20:16', '2016-09-20 08:49:09'),
(58, 18, 18, 'Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu,', 'JEU20WVT0FH', 8, 9, 1, 'non magna. Nam ligula elit, pretium et,', 'Donec felis orci,', 3, '0000-00-00', '', 0, '2016-07-06 04:54:01', '2016-09-20 08:49:09'),
(59, 19, 19, 'Integer in magna. Phasellus dolor elit, pellentesque', 'STC68CJG5BK', 8, 9, 1, 'a feugiat tellus lorem eu metus.', 'tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio.', 3, '0000-00-00', '', 0, '2015-12-23 10:05:32', '2016-09-20 08:49:09'),
(60, 20, 20, 'Curabitur egestas nunc sed libero. Proin sed turpis', 'SEI11KQY5AX', 7, 7, 1, 'sagittis. Duis gravida. Praesent eu nulla at', 'vestibulum lorem, sit amet ultricies sem magna nec quam.', 2, '0000-00-00', '', 0, '2016-01-15 09:53:03', '2016-09-20 08:49:09'),
(61, 21, 21, 'ultricies adipiscing, enim mi tempor', 'QGS87GZT1WJ', 8, 6, 1, 'tempus, lorem fringilla ornare placerat, orci lacus vestibulum', 'luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae', 10, '0000-00-00', '', 0, '2016-10-03 14:57:41', '2016-09-20 08:49:09'),
(62, 22, 22, 'sit', 'ZNK79WJG7FM', 7, 3, 1, 'ac mi eleifend egestas.', 'Integer id magna et ipsum', 2, '0000-00-00', '', 0, '2017-05-08 06:53:19', '2016-09-20 08:49:09'),
(63, 23, 23, 'semper egestas,', 'NUB03JSY5VA', 7, 2, 1, 'ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget', 'velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae', 2, '0000-00-00', '', 0, '2017-05-07 01:25:19', '2016-09-20 08:49:09'),
(64, 24, 24, 'varius et,', 'MSV10XOF2MY', 10, 9, 1, 'orci, adipiscing non, luctus sit amet, faucibus ut,', 'enim', 3, '0000-00-00', '', 0, '2015-11-30 20:42:09', '2016-09-20 08:49:09'),
(65, 25, 25, 'id, erat. Etiam vestibulum massa rutrum magna. Cras', 'BUY05BEW4WL', 9, 10, 1, 'ut lacus. Nulla tincidunt,', 'mauris eu elit. Nulla facilisi. Sed neque.', 1, '0000-00-00', '', 0, '2016-11-26 16:24:27', '2016-09-20 08:49:09'),
(66, 26, 26, 'ultricies sem magna nec quam. Curabitur vel lectus. Cum', 'ODZ61NFF5YH', 9, 4, 1, 'dictum. Phasellus in felis.', 'ornare,', 5, '0000-00-00', '', 0, '2017-04-27 18:30:56', '2016-09-20 08:49:09'),
(67, 27, 27, 'consequat, lectus sit amet luctus', 'OAB17VDQ1HW', 8, 4, 1, 'nibh.', 'eu', 6, '0000-00-00', '', 0, '2016-07-20 00:58:44', '2016-09-20 08:49:09'),
(68, 28, 28, 'enim. Etiam imperdiet dictum magna. Ut tincidunt', 'TLH17TRF3VH', 9, 7, 1, 'pede blandit congue.', 'nisi sem semper erat, in consectetuer ipsum', 6, '0000-00-00', '', 0, '2016-09-07 10:00:23', '2016-09-20 08:49:09'),
(69, 29, 29, 'Proin vel arcu eu odio tristique pharetra. Quisque ac', 'KSI13BUZ4WO', 8, 9, 1, 'Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque', 'egestas.', 3, '0000-00-00', '', 0, '2017-02-16 10:51:36', '2016-09-20 08:49:09'),
(70, 30, 30, 'mauris ut mi. Duis risus odio, auctor', 'NLY58XSJ2NQ', 7, 4, 1, 'lectus rutrum urna, nec luctus felis purus ac tellus.', 'iaculis aliquet', 8, '0000-00-00', '', 0, '2017-01-21 22:06:35', '2016-09-20 08:49:09'),
(71, 31, 31, 'nonummy ipsum non arcu. Vivamus sit amet risus.', 'GCF06FTW8OJ', 7, 2, 1, 'mi eleifend egestas. Sed pharetra, felis eget varius', 'nulla. In tincidunt congue turpis.', 4, '0000-00-00', '', 0, '2016-10-06 10:19:51', '2016-09-20 08:49:09'),
(72, 32, 32, 'mattis. Cras', 'AWP96MOO1SW', 8, 9, 1, 'Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci,', 'Nam', 7, '0000-00-00', '', 0, '2017-02-07 20:56:14', '2016-09-20 08:49:09'),
(73, 33, 33, 'at, velit. Cras lorem lorem, luctus', 'HBD95TJB1VZ', 8, 9, 1, 'vel, vulputate eu, odio. Phasellus', 'quam, elementum at, egestas a, scelerisque sed, sapien. Nunc', 8, '0000-00-00', '', 0, '2016-01-13 18:30:31', '2016-09-20 08:49:09'),
(74, 34, 34, 'ut lacus. Nulla tincidunt, neque vitae semper egestas, urna', 'BFG70LSQ5ZA', 7, 3, 1, 'ipsum nunc id', 'aliquam eros turpis non enim. Mauris', 9, '0000-00-00', '', 0, '2016-02-27 09:09:11', '2016-09-20 08:49:09'),
(75, 35, 35, 'vitae mauris sit amet lorem semper auctor. Mauris', 'TTF57ORZ4GE', 8, 6, 1, 'nisi nibh lacinia', 'at, nisi. Cum sociis natoque penatibus et magnis dis', 8, '0000-00-00', '', 0, '2016-08-20 19:30:36', '2016-09-20 08:49:09'),
(76, 36, 36, 'Mauris eu turpis. Nulla aliquet. Proin velit.', 'BFZ53HAG4GF', 8, 5, 1, 'In at pede. Cras vulputate velit eu sem. Pellentesque ut', 'ullamcorper magna.', 3, '0000-00-00', '', 0, '2017-08-10 20:57:42', '2016-09-20 08:49:09'),
(77, 37, 37, 'commodo ipsum. Suspendisse non leo. Vivamus', 'ADS29OWR0DB', 7, 5, 1, 'ac mattis ornare,', 'at, velit. Pellentesque', 3, '0000-00-00', '', 0, '2017-01-28 14:54:10', '2016-09-20 08:49:09'),
(78, 38, 38, 'velit eu sem.', 'RTQ18ETQ2QX', 7, 1, 1, 'eros nec tellus. Nunc lectus', 'ultrices. Duis volutpat nunc sit', 10, '0000-00-00', '', 0, '2016-06-10 00:52:19', '2016-09-20 08:49:09'),
(79, 39, 39, 'dapibus id, blandit at, nisi. Cum', 'XTB80ESP7RI', 10, 4, 1, 'luctus, ipsum leo elementum', 'nonummy. Fusce fermentum fermentum arcu. Vestibulum ante', 1, '0000-00-00', '', 0, '2015-09-25 09:29:44', '2016-09-20 08:49:09'),
(80, 40, 40, 'diam dictum sapien. Aenean massa. Integer vitae', 'OJV97EEZ1RY', 7, 4, 1, 'Mauris quis turpis vitae', 'feugiat tellus lorem eu metus.', 8, '0000-00-00', '', 0, '2017-05-23 01:18:33', '2016-09-20 08:49:09'),
(81, 41, 41, 'vitae risus. Duis a mi fringilla mi lacinia mattis.', 'VHB00NMD7NL', 7, 1, 1, 'Proin dolor. Nulla semper tellus id nunc interdum feugiat.', 'nisi. Cum sociis natoque penatibus et', 5, '0000-00-00', '', 0, '2015-12-23 16:29:22', '2016-09-20 08:49:09'),
(82, 42, 42, 'dictum ultricies ligula. Nullam enim. Sed nulla ante,', 'JJB70DLV0HC', 10, 8, 1, 'Proin sed turpis nec mauris blandit', 'purus. Duis elementum, dui quis accumsan convallis,', 3, '0000-00-00', '', 0, '2016-05-16 01:39:27', '2016-09-20 08:49:09'),
(83, 43, 43, 'libero. Donec', 'OZD81HTG7SW', 10, 8, 1, 'nunc sed libero. Proin sed turpis', 'egestas.', 6, '0000-00-00', '', 0, '2017-04-10 20:15:38', '2016-09-20 08:49:09'),
(84, 44, 44, 'feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare,', 'RPA25LUP8VF', 8, 8, 1, 'est. Nunc ullamcorper, velit in', 'nec ligula consectetuer rhoncus.', 7, '0000-00-00', '', 0, '2016-05-03 22:59:39', '2016-09-20 08:49:09'),
(85, 45, 45, 'sodales elit erat vitae risus. Duis a mi', 'UDL19RLE9UF', 10, 8, 1, 'molestie. Sed id risus', 'a, auctor non,', 6, '0000-00-00', '', 0, '2016-03-04 20:08:20', '2016-09-20 08:49:09'),
(86, 46, 46, 'Duis at lacus. Quisque purus sapien, gravida', 'UTV83NTL5KQ', 8, 5, 1, 'lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec', 'placerat. Cras dictum', 1, '0000-00-00', '', 0, '2016-09-18 15:27:19', '2016-09-20 08:49:09'),
(87, 47, 47, 'gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat.', 'VBT52JJU0AU', 10, 1, 1, 'venenatis lacus. Etiam bibendum fermentum', 'turpis nec mauris blandit mattis. Cras eget nisi dictum', 8, '0000-00-00', '', 0, '2016-07-16 03:25:56', '2016-09-20 08:49:09'),
(88, 48, 48, 'et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus', 'SFN07RCP1RS', 8, 9, 1, 'eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus', 'nec', 3, '0000-00-00', '', 0, '2016-06-11 08:43:22', '2016-09-20 08:49:09'),
(89, 49, 49, 'massa rutrum magna.', 'RHC35ZMO8BC', 9, 4, 1, 'et magnis dis parturient montes, nascetur ridiculus mus. Proin', 'Aliquam adipiscing lobortis risus.', 2, '0000-00-00', '', 0, '2016-05-12 06:35:56', '2016-09-20 08:49:09'),
(90, 50, 50, 'nulla. In tincidunt congue turpis. In', 'CIB09PHW0HM', 10, 10, 1, 'enim.', 'luctus sit amet,', 10, '0000-00-00', '', 0, '2016-06-14 16:24:27', '2016-09-20 08:49:09'),
(91, 51, 51, 'nisl arcu iaculis enim,', 'SCZ52PJF2VV', 9, 9, 1, 'condimentum. Donec at arcu. Vestibulum ante ipsum primis', 'nec urna et arcu imperdiet ullamcorper. Duis at lacus.', 2, '0000-00-00', '', 0, '2017-07-10 07:06:39', '2016-09-20 08:49:09'),
(92, 52, 52, 'Mauris quis turpis vitae purus', 'JDP18ZRY3HP', 8, 6, 1, 'tristique senectus et netus et malesuada fames ac turpis egestas.', 'arcu. Vestibulum ante ipsum primis in faucibus orci luctus', 9, '0000-00-00', '', 0, '2017-08-26 11:32:21', '2016-09-20 08:49:09'),
(93, 53, 53, 'vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non', 'AKW76ZNO6WN', 10, 10, 1, 'semper, dui lectus rutrum urna, nec', 'Morbi vehicula. Pellentesque', 1, '0000-00-00', '', 0, '2016-02-28 05:01:55', '2016-09-20 08:49:09'),
(94, 54, 54, 'vulputate dui, nec tempus mauris erat', 'LVS53BWP6MM', 10, 8, 1, 'augue id ante dictum cursus. Nunc mauris', 'Nunc sollicitudin', 6, '0000-00-00', '', 0, '2017-01-24 18:59:05', '2016-09-20 08:49:09'),
(95, 55, 55, 'magna. Nam ligula elit, pretium et, rutrum non,', 'TAZ90JGD8SH', 7, 6, 1, 'habitant', 'libero lacus,', 9, '0000-00-00', '', 0, '2016-01-05 07:54:24', '2016-09-20 08:49:09'),
(96, 56, 56, 'a', 'LIU72XPB1FD', 10, 1, 1, 'eu erat semper rutrum. Fusce dolor quam, elementum', 'enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida.', 7, '0000-00-00', '', 0, '2016-04-28 13:33:21', '2016-09-20 08:49:09'),
(97, 57, 57, 'bibendum ullamcorper. Duis cursus, diam at', 'RQT98FQP7GP', 10, 9, 1, 'dis parturient montes,', 'elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed', 8, '0000-00-00', '', 0, '2016-11-02 15:07:17', '2016-09-20 08:49:09'),
(98, 58, 58, 'nibh', 'LLQ40ZSE1EY', 8, 7, 1, 'dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque', 'Phasellus ornare. Fusce mollis.', 5, '0000-00-00', '', 0, '2016-02-22 01:01:40', '2016-09-20 08:49:09'),
(99, 59, 59, 'augue ut lacus. Nulla tincidunt, neque vitae semper egestas,', 'FTI13FYT7IQ', 7, 10, 1, 'pede', 'Nullam lobortis quam a felis ullamcorper viverra.', 10, '0000-00-00', '', 0, '2015-10-13 20:28:59', '2016-09-20 08:49:09'),
(100, 60, 60, 'Duis', 'AJB69BKW0XP', 8, 4, 1, 'scelerisque', 'Donec egestas. Aliquam nec enim. Nunc ut', 8, '0000-00-00', '', 0, '2015-11-01 10:26:36', '2016-09-20 08:49:09'),
(101, 61, 61, 'Duis cursus, diam at pretium aliquet, metus urna', 'WHI49BVU6LJ', 9, 6, 1, 'vitae, sodales at, velit. Pellentesque ultricies', 'et, rutrum eu, ultrices sit amet, risus. Donec nibh', 2, '0000-00-00', '', 0, '2016-10-24 14:06:39', '2016-09-20 08:49:09'),
(102, 62, 62, 'magna et ipsum cursus vestibulum. Mauris magna.', 'PAV55MUT1PS', 9, 7, 1, 'Donec porttitor tellus non magna. Nam ligula elit, pretium et,', 'velit eget laoreet posuere, enim', 4, '0000-00-00', '', 0, '2015-12-15 05:32:11', '2016-09-20 08:49:09'),
(103, 63, 63, 'penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'NCY39OBA3QI', 10, 8, 1, 'hendrerit id, ante.', 'mollis. Duis sit', 3, '0000-00-00', '', 0, '2016-05-18 17:36:12', '2016-09-20 08:49:09'),
(104, 64, 64, 'magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum', 'DIJ41SOT0FJ', 10, 4, 1, 'non, bibendum sed, est. Nunc', 'faucibus leo, in lobortis tellus justo', 4, '0000-00-00', '', 0, '2016-09-20 04:37:38', '2016-09-20 08:49:09'),
(105, 65, 65, 'sapien,', 'BFC81KWV9SD', 10, 3, 1, 'sit amet, faucibus ut, nulla. Cras eu', 'malesuada fames ac turpis egestas.', 9, '0000-00-00', '', 0, '2017-06-04 06:03:11', '2016-09-20 08:49:09'),
(106, 66, 66, 'Nam interdum enim non', 'MJV79CXC1CM', 8, 4, 1, 'parturient montes, nascetur', 'tellus id nunc interdum feugiat. Sed nec', 6, '0000-00-00', '', 0, '2016-01-03 15:55:02', '2016-09-20 08:49:09'),
(107, 67, 67, 'magna. Sed eu eros. Nam consequat dolor vitae dolor.', 'EUY05VXW1HZ', 9, 8, 1, 'varius et, euismod et, commodo at, libero. Morbi', 'ut eros non enim commodo hendrerit. Donec porttitor', 3, '0000-00-00', '', 0, '2016-01-05 03:43:04', '2016-09-20 08:49:09'),
(108, 68, 68, 'odio tristique pharetra. Quisque ac libero nec', 'DBS56MIZ0KZ', 7, 10, 1, 'Donec at arcu. Vestibulum ante ipsum primis in', 'non, lacinia at,', 9, '0000-00-00', '', 0, '2015-10-03 09:30:11', '2016-09-20 08:49:09'),
(109, 69, 69, 'feugiat metus', 'TDA59LSH2BX', 8, 6, 1, 'nisi dictum augue malesuada malesuada. Integer id magna et', 'amet,', 6, '0000-00-00', '', 0, '2015-10-24 07:23:33', '2016-09-20 08:49:09'),
(110, 70, 70, 'Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate,', 'RQE05YFL6WU', 8, 7, 1, 'dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales', 'cursus purus. Nullam scelerisque neque', 3, '0000-00-00', '', 0, '2017-03-23 05:58:10', '2016-09-20 08:49:09'),
(111, 71, 71, 'Ut', 'JPN31JPQ8HK', 7, 3, 1, 'Vivamus sit amet risus.', 'non magna. Nam ligula', 4, '0000-00-00', '', 0, '2015-10-26 11:35:08', '2016-09-20 08:49:09'),
(112, 72, 72, 'Etiam bibendum fermentum metus. Aenean sed pede nec ante', 'WMD52AHJ5NG', 9, 3, 1, 'mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae', 'primis in faucibus orci luctus et ultrices posuere cubilia Curae;', 9, '0000-00-00', '', 0, '2017-01-10 09:35:41', '2016-09-20 08:49:09'),
(113, 73, 73, 'metus urna convallis erat, eget tincidunt dui augue eu tellus.', 'YWF39QMA9XX', 8, 8, 1, 'ultricies dignissim lacus. Aliquam rutrum', 'vel pede', 9, '0000-00-00', '', 0, '2015-10-25 19:40:01', '2016-09-20 08:49:09'),
(114, 74, 74, 'mi fringilla mi lacinia mattis. Integer', 'PNA36VIT9ZI', 10, 10, 1, 'cursus. Integer mollis. Integer tincidunt aliquam', 'consectetuer ipsum nunc', 8, '0000-00-00', '', 0, '2016-11-20 06:35:50', '2016-09-20 08:49:09'),
(115, 75, 75, 'Nulla tincidunt, neque vitae semper egestas, urna justo', 'KKJ01AAG7AP', 8, 6, 1, 'ornare lectus justo eu arcu. Morbi sit amet massa.', 'a sollicitudin orci sem eget massa. Suspendisse', 3, '0000-00-00', '', 0, '2016-02-13 20:42:11', '2016-09-20 08:49:09'),
(116, 76, 76, 'ipsum', 'PWV03VHP4HJ', 9, 3, 1, 'lectus ante dictum mi, ac mattis', 'amet, faucibus ut, nulla. Cras', 5, '0000-00-00', '', 0, '2016-01-03 09:30:21', '2016-09-20 08:49:09'),
(117, 77, 77, 'inceptos hymenaeos.', 'NAL93OCH6SM', 8, 7, 1, 'Curabitur ut odio vel est', 'nisi dictum augue malesuada malesuada. Integer', 5, '0000-00-00', '', 0, '2016-12-01 05:43:46', '2016-09-20 08:49:09'),
(118, 78, 78, 'Proin eget odio. Aliquam vulputate', 'ANC40NVH2NW', 7, 4, 1, 'erat, eget tincidunt dui augue eu tellus. Phasellus elit', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 7, '0000-00-00', '', 0, '2016-06-27 21:10:17', '2016-09-20 08:49:09'),
(119, 79, 79, 'pellentesque eget, dictum', 'DDC25ATG1CL', 10, 10, 1, 'ipsum porta', 'vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non', 9, '0000-00-00', '', 0, '2016-02-08 06:29:10', '2016-09-20 08:49:09'),
(120, 80, 80, 'nulla at sem molestie sodales. Mauris blandit enim', 'SAL83BNI2KQ', 8, 5, 1, 'mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam', 'pellentesque a, facilisis non, bibendum', 6, '0000-00-00', '', 0, '2016-04-10 06:33:41', '2016-09-20 08:49:09'),
(121, 81, 81, 'dictum eu, placerat eget, venenatis a,', 'IEZ15RWZ2DV', 9, 4, 1, 'Cras vehicula aliquet libero. Integer in magna.', 'id, blandit at, nisi.', 8, '0000-00-00', '', 0, '2017-05-28 03:12:40', '2016-09-20 08:49:10'),
(122, 82, 82, 'nec quam. Curabitur vel', 'FDW50VJL1VY', 7, 6, 1, 'sit', 'eget tincidunt dui augue eu tellus.', 1, '0000-00-00', '', 0, '2017-03-11 17:37:26', '2016-09-20 08:49:10'),
(123, 83, 83, 'Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet', 'WHE63JDE4HT', 7, 6, 1, 'nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia', 'rutrum eu, ultrices sit amet,', 9, '0000-00-00', '', 0, '2017-09-01 22:45:02', '2016-09-20 08:49:10'),
(124, 84, 84, 'risus a ultricies adipiscing, enim mi tempor', 'CEB56RQS9NI', 9, 5, 1, 'porta elit, a feugiat', 'eget massa. Suspendisse eleifend. Cras sed leo. Cras', 6, '0000-00-00', '', 0, '2016-10-31 18:16:49', '2016-09-20 08:49:10'),
(125, 85, 85, 'rhoncus. Donec est. Nunc ullamcorper, velit', 'ENT68NRA2XZ', 8, 7, 1, 'Nunc ac sem ut dolor dapibus', 'facilisis non, bibendum sed, est.', 6, '0000-00-00', '', 0, '2015-11-25 02:22:30', '2016-09-20 08:49:10'),
(126, 86, 86, 'facilisis vitae, orci. Phasellus dapibus', 'IXZ38OFM5VJ', 9, 2, 1, 'nisi. Aenean eget metus. In nec orci. Donec', 'pede sagittis augue,', 1, '0000-00-00', '', 0, '2016-08-06 14:30:19', '2016-09-20 08:49:10'),
(127, 87, 87, 'vestibulum, neque sed dictum eleifend, nunc risus varius', 'TZW33DZD6TB', 9, 4, 1, 'blandit. Nam nulla magna, malesuada', 'magna. Ut tincidunt orci quis lectus. Nullam suscipit, est', 2, '0000-00-00', '', 0, '2016-09-01 00:49:25', '2016-09-20 08:49:10'),
(128, 88, 88, 'turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla', 'YJL87KNB7YV', 9, 5, 1, 'odio sagittis semper. Nam', 'massa. Mauris vestibulum,', 9, '0000-00-00', '', 0, '2016-08-15 22:51:15', '2016-09-20 08:49:10'),
(129, 89, 89, 'vitae purus gravida sagittis. Duis gravida. Praesent', 'SUJ78MSI8ZR', 10, 8, 1, 'risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed', 'imperdiet nec, leo. Morbi neque tellus,', 2, '0000-00-00', '', 0, '2017-01-11 13:46:45', '2016-09-20 08:49:10'),
(130, 90, 90, 'Curabitur consequat, lectus sit amet', 'EMW54QFF9UI', 8, 7, 1, 'dapibus id, blandit at, nisi. Cum sociis', 'vitae semper egestas, urna justo', 1, '0000-00-00', '', 0, '2016-04-03 15:52:36', '2016-09-20 08:49:10'),
(131, 91, 91, 'quam dignissim pharetra. Nam ac nulla. In tincidunt congue', 'EFB02DEQ4KS', 7, 9, 1, 'placerat, augue. Sed molestie. Sed id risus quis', 'ornare tortor', 2, '0000-00-00', '', 0, '2016-02-19 13:21:19', '2016-09-20 08:49:10'),
(132, 92, 92, 'aliquet. Phasellus fermentum convallis ligula. Donec luctus', 'FHK02AFT4TS', 9, 8, 1, 'vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie', 'amet risus. Donec egestas. Aliquam nec enim. Nunc', 8, '0000-00-00', '', 0, '2016-09-13 13:38:00', '2016-09-20 08:49:10'),
(133, 93, 93, 'ac, eleifend vitae, erat. Vivamus nisi. Mauris', 'GRW06ARR7BM', 7, 5, 1, 'Praesent eu nulla at sem molestie sodales. Mauris blandit', 'Nam ligula elit, pretium et, rutrum non,', 1, '0000-00-00', '', 0, '2015-12-25 04:02:46', '2016-09-20 08:49:10'),
(134, 94, 94, 'sodales elit erat vitae risus. Duis a mi fringilla', 'MBK23QXH4HU', 10, 3, 1, 'enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie', 'Quisque imperdiet, erat nonummy ultricies ornare,', 2, '0000-00-00', '', 0, '2016-12-16 09:16:51', '2016-09-20 08:49:10'),
(135, 95, 95, 'dictum magna. Ut', 'MIM67ZCV6CB', 10, 10, 1, 'vehicula', 'laoreet lectus', 8, '0000-00-00', '', 0, '2017-07-19 22:33:49', '2016-09-20 08:49:10'),
(136, 96, 96, 'sociosqu ad litora torquent per', 'HMJ46FOK5CA', 7, 10, 1, 'et netus', 'Ut', 1, '0000-00-00', '', 0, '2015-10-10 04:44:32', '2016-09-20 08:49:10'),
(137, 97, 97, 'nec, diam. Duis mi enim,', 'NQU18PQI1CS', 9, 3, 1, 'sem mollis dui, in sodales elit erat vitae risus.', 'a, aliquet vel, vulputate', 5, '0000-00-00', '', 0, '2016-06-28 19:19:10', '2016-09-20 08:49:10'),
(138, 98, 98, 'scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada', 'WAU19FCW5JR', 10, 4, 1, 'et, eros. Proin', 'metus eu erat semper rutrum. Fusce dolor quam,', 6, '0000-00-00', '', 0, '2016-06-17 11:39:35', '2016-09-20 08:49:10'),
(139, 99, 99, 'sit amet lorem semper auctor. Mauris', 'PND32SDA8ZL', 10, 6, 1, 'gravida.', 'molestie tortor nibh sit amet orci. Ut sagittis', 5, '0000-00-00', '', 0, '2015-10-23 08:16:28', '2016-09-20 08:49:10'),
(140, 100, 100, 'sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis', 'QMT63EYP6YB', 8, 2, 1, 'at sem molestie sodales. Mauris blandit', 'fermentum risus, at fringilla', 2, '0000-00-00', '', 0, '2017-01-30 04:14:49', '2016-09-20 08:49:10');

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
(1, 58, 'qweqwewer', '12312', 'phanminh65@gmail.com', '123123', 'qwe', 'VN', '', 1, '0000-00-00', 1, '2016-09-22 13:24:36', '2016-09-22 06:24:36'),
(2, 59, 'Phan Th? Minh', '0914499925', 'phanminh65@gmail.com', 'Ba Vi', 'Hanoi', 'VN', '', 1, '1995-05-06', 1, '2016-09-22 14:34:22', '2016-09-22 07:34:22'),
(3, 60, 'Phan Thế Minh', '0914499925', 'phanminh65@gmail.com', 'Ba Vi', 'Hanoi', 'VN', 'updatelater.jpg', 1, '1995-05-06', 0, '2016-09-22 15:47:49', '2016-09-22 08:47:49'),
(4, 61, 'Phan Thế Minh', '01234567890', 'phanminh65@gmail.com', 'Ba Vi', 'Hanoi', 'VN', '', 1, '1995-05-06', 1, '2016-09-22 16:16:16', '2016-09-22 09:16:16'),
(7, 64, 'Phan Thế Minh', '0914499925', 'phanminh65@gmail.com1', 'Ba Vi', 'Hanoi', 'VN', '', 2, '1995-05-06', 1, '2016-09-24 14:26:50', '2016-09-24 07:26:50'),
(8, 65, 'Phan Thế Minh', '0914499925', 'phanminh65@gmail.com5', 'Ba Vi', 'Hanoi', 'VN', '', 2, '1995-05-06', 1, '2016-09-24 22:38:14', '2016-09-24 09:01:12'),
(9, 66, 'Phan Thế Minh', '0914499925', 'phanminh65@gmail.com8', 'Ba Vi', 'Hanoi', 'VN', '', 1, '1995-05-06', 1, '2016-09-24 18:37:37', '2016-09-24 11:37:37'),
(10, 67, 'Minh The Phan', '0914499925', 'phanminh65@gmail.com9', 'Ba Vi', 'Hanoi', 'VN', '', 1, '1995-05-06', 1, '2016-09-24 18:40:24', '2016-09-24 11:40:24'),
(14, 50, 'hhhhhhhhhhhhhhh', '1111111111111', 'phanminh65@gmail.com15', '02 Phu Cuong', 'Hanoi', 'VN', '', 1, '2016-09-02', 1, '2016-09-24 23:56:03', '2016-09-24 16:56:03'),
(15, 53, 'qweqwewer', 'wqweasd', 'phanminh65@gmail.com16', '02 Phu Cuong', 'Hanoi', 'VN', '', 1, '2016-09-30', 1, '2016-09-25 00:07:07', '2016-09-24 17:07:07'),
(16, 9, 'Phan Thế Minh', '914499925', 'phanminh65@gmail.com18', '02 Phu Cuong', 'Hanoi', 'VN', '1474739960-minhtest9.png', 1, '1995-05-06', 1, '2016-09-25 00:38:54', '2016-09-24 17:38:54'),
(18, 69, 'Nguyễn Trung Đức', '12323123123', 'nguyentrungduc2910@gmail.com', 'Hoang  Cau', 'Hanoi', 'VN', '', 1, '1995-05-06', 1, '2016-09-25 21:12:31', '2016-09-25 14:12:31'),
(19, 70, 'Hoàn Nguyên Khấc', '912312312313123', 'hoannguyenkhac1871995@gmail.com', '12312', 'qweqweqwe', 'VN', '', 1, '1970-01-01', 1, '2016-09-25 21:23:56', '2016-09-25 14:23:56'),
(20, 71, 'Trần Thị Thu', '123123123', 'Tranthutak10.1@gmail.com', 'Ha Noi', 'Ha Noi', 'VN', '', 1, '1970-01-01', 1, '2016-09-25 21:27:42', '2016-09-25 14:27:42'),
(21, 72, 'Tiến Trần', '12312323434', 'tien4c@gmail.com', 'qweqwe', '123123', 'VN', '', 1, '1970-01-01', 1, '2016-09-25 21:29:13', '2016-09-25 14:29:13');

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
(50, 'minhtest10', '$2a$07$ptmyE8rvtgg6vIPXuMfmAOsW0nhxlhT.rp5N2HFCer18xQ/I89hou', '3442340de303326198d6e2dc0a68d5aa', 1, 1, '2016-09-25 10:24:48', '2016-09-14 01:30:28', '2016-09-25 03:24:48'),
(53, 'minhtest11', '$2a$07$ptmUO4pPC49WpBRuPKxBE.WB5TqSU.MhDpU9IfzxhoS/dQZfbSZ.K', 'e6431ee79282d2e1f392873f8cba9162', 1, 2, '2016-09-25 10:22:15', '2016-09-22 11:06:14', '2016-09-25 03:22:15'),
(58, 'minhtest13', '$2a$07$ptm2FsthVGz4i5arL8TmROyRwMLyhNWOfC7clJgGyhFnejm4oMJXu', 'a7eb9c6d30ac2fd42dd9654a667aef49', 1, 3, '0000-00-00 00:00:00', '2016-09-22 13:24:36', '2016-09-22 06:24:36'),
(59, 'minhtest14', '$2a$07$ptmrVHQNpLFNaTfySRctBuDdmzuUgSE9frOn0pZZJuPDIoGGIcWZu', 'cb72ef2ac64955e33f873f1c6ac7235c', 1, 1, '0000-00-00 00:00:00', '2016-09-22 14:34:22', '2016-09-22 07:34:22'),
(60, 'minhtest20', '$2a$07$ptmIpU9gBlKF8wRZCosDZefYIJU32uyJ4HjAlYTuXvQEcX2fjerVa', '8ad1e984d254bb75513f987cef3f92e6', 1, 5, '2016-09-25 02:01:47', '2016-09-22 15:47:49', '2016-09-24 19:01:47'),
(61, 'minhtest21', '$2a$07$ptmcYTYEM97OnTrH692wPOHsFUpEBmxhJzzfC/dPnpe2NFU6IkQ9e', '46f13c233604674d335995663d8e1af1', 1, 8, '0000-00-00 00:00:00', '2016-09-22 16:16:16', '2016-09-22 09:16:16'),
(64, 'minhtest23', '$2a$07$ptmbCg9OO3LxQ9kRCFBvUOCMuqL1H4P9fInP/CTWlXPS7hKSuojPW', 'd1c37763e184ce1e3e4037ebf2c71eda', 1, 1, '0000-00-00 00:00:00', '2016-09-24 14:26:50', '2016-09-24 07:26:50'),
(65, 'minhtest26', '$2a$07$ptmCyGNYGbFHFN2d48dlguhlJIYOAKDPBKvefRErwhxUTDyhEVpsy', 'bcb063f8c158c5cbb726acc98a39cc89', 0, 1, '2016-09-24 16:37:13', '2016-09-24 16:01:12', '2016-09-24 15:38:14'),
(66, 'minhtest28', '$2a$07$ptm5E5KghlSiwu3yJ9cEteSooGDfITFM8V.6ScFZCwQTZB1xe7i26', 'a798282573839191b3e928b4578971e5', 1, 1, '0000-00-00 00:00:00', '2016-09-24 18:37:37', '2016-09-24 11:37:37'),
(67, 'minhtest29', '$2a$07$ptmzpHoMdv5nmDVDDPS2S.SqnQ5YfFbHx5XSuFWkQ4fs8M5NzAE2O', '89ccb7f9b0527a212a7073659b73206e', 1, 5, '0000-00-00 00:00:00', '2016-09-24 18:40:24', '2016-09-24 11:40:24'),
(69, 'trungducng', '$2a$07$ptmB8rvtgg6vIPXuMfmAdehht//LXi8HE.WAbGI0AqgLwTleTtpOa', '8e843b14eb01fc8793b0f5ac457119ca', 1, 1, '0000-00-00 00:00:00', '2016-09-25 21:12:31', '2016-09-25 14:12:31'),
(70, 'hoannguyen', '$2a$07$ptmA8mivY6K7UHey4l1WuuSSE86e3Ucf7Myb6jBg1GxPKTlTlWJCC', '0a16530a299151060fac288a5d3f4885', 1, 1, '0000-00-00 00:00:00', '2016-09-25 21:23:56', '2016-09-25 14:23:56'),
(71, 'thuliinh', '$2a$07$ptmAX8jI0HUiArUmBp4szO0wwA6u59DKHARLdzW9mKC/LrV8HSCne', '59e350e16badcd013385adc4da8e50e3', 1, 1, '0000-00-00 00:00:00', '2016-09-25 21:27:42', '2016-09-25 14:27:42'),
(72, 'kuzing', '$2a$07$ptmOv0GqpHbdf0BXWdyczOOre5xhexJoIcRMVQU5FMc7Aazl0DnxO', 'f7590ad212a472270cfa7cb53764f7bb', 1, 1, '0000-00-00 00:00:00', '2016-09-25 21:29:13', '2016-09-25 14:29:13');

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
  ADD KEY `com_name` (`com_name`(191));

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
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`(191)),
  ADD KEY `price` (`price`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `category_id_2` (`category_id`),
  ADD KEY `company_id_2` (`company_id`),
  ADD KEY `params` (`params`(191));

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
