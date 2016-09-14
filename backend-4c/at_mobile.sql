-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2016 at 10:13 AM
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'người đăng sản phẩm',
  `title` varchar(80) NOT NULL COMMENT 'tên sp',
  `price` int(20) UNSIGNED NOT NULL,
  `detail` text NOT NULL COMMENT 'thông tin',
  `brand` varchar(80) NOT NULL COMMENT 'nhãn hiệu',
  `link_detail` varchar(100) NOT NULL COMMENT 'link(nếu có)',
  `company_id` int(11) UNSIGNED NOT NULL,
  `model_id` int(11) UNSIGNED NOT NULL,
  `manufactured_date` date NOT NULL COMMENT 'ngày sản xuất',
  `type` varchar(50) NOT NULL,
  `sale` int(20) UNSIGNED NOT NULL COMMENT 'giá sale',
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(70) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` tinyint(2) NOT NULL,
  `birthday` date NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `update`) VALUES
(1, 'admin', '2014-08-20 10:54:36'),
(2, 'staff', '2014-08-20 10:54:36'),
(3, 'level 3', '2016-09-13 07:44:29'),
(4, 'customer', '2016-09-13 07:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `id_role` int(11) UNSIGNED NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `token`, `id_role`, `last_login`, `created`, `update`) VALUES
(3, 'minhtest3', '$2a$07$ptm74gg6vIPXuMfmAdl2OuNOb5pRYJ5D7y1fAjb0AiOqp7Be4QS/G', 'f0676c9ff5be22e7bb5dba73c3d2e1de', 1, '0000-00-00 00:00:00', '2016-09-13 19:09:56', '2016-09-13 17:48:56'),
(4, 'minhtest4', '$2a$07$ptm2x5I9x8HWhA4UHi5TMuiF0adq7yRCJ9.cTzdknckFrvkp6L7Vm', '53a1ad474c8eab1c08d53b20bc726e9a', 1, '0000-00-00 00:00:00', '2016-09-13 19:09:57', '2016-09-13 17:57:57'),
(5, 'minhtest5', '$2a$07$ptmST3krtcYWNmqCszXNXe4GzR5PUFQPyiNoeA4jWx/WBkUe7xobK', 'e2099533d490d8549d1750678f247d11', 1, '0000-00-00 00:00:00', '2016-09-13 19:09:04', '2016-09-13 17:59:04'),
(6, 'minhtest6', '$2a$07$ptmoOWLjwgZT6VlImAlYYeV7Fx789/SxtNChznXXcyhlAbiyjsbz2', 'b194f1cf64a8d8a32d1240b6fd261e53', 1, '0000-00-00 00:00:00', '2016-09-13 19:59:55', '2016-09-13 17:59:55'),
(7, 'minhtest7', '$2a$07$ptmqvBEBkpt0XhH6cVGQ3.2V78wmSdm/g9JrJlnnJGUfqWfa8VDkK', 'cb81cd80a6712216a75cc7460d13bb87', 1, '0000-00-00 00:00:00', '2016-09-14 01:22:20', '2016-09-13 18:22:20'),
(8, 'minhtest8', '$2a$07$ptmq5dHVG85giiRDGWzGRO0iQTurIcXLDxyVbmBjeyKeooVCdvL4a', '563f40ddafb7589633158a38b9c5b4b1', 1, '0000-00-00 00:00:00', '2016-09-13 20:24:12', '2016-09-13 18:24:12'),
(9, 'minhtest9', '$2a$07$ptm4VkYjX5Xfx5rICAfpjOWVvNyN5v/pjdggca2JHrBa/gBa.x/wu', '9be11a925645c25d4f1c4d6e6f9e1487', 1, '0000-00-00 00:00:00', '2016-09-14 01:28:13', '2016-09-13 18:28:13'),
(10, 'minhtest10', '$2a$07$ptmRZCosDZmP27YDqZ02W.rFRu6BQQDsavfx.SBWfJA7.06ORx4Iq', '85781e8006fa980178b1471028c055bf', 1, '0000-00-00 00:00:00', '2016-09-14 01:30:28', '2016-09-13 18:30:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`),
  ADD KEY `price` (`price`),
  ADD KEY `brand` (`brand`),
  ADD KEY `user_id` (`user_id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
