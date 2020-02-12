-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 10:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nafi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_table`
--

CREATE TABLE `about_table` (
  `id` int(255) NOT NULL,
  `about_details` longtext NOT NULL,
  `about_photo` varchar(255) NOT NULL DEFAULT 'default_about_photo.jpg',
  `logo_photo` varchar(255) NOT NULL DEFAULT 'default_logo_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_table`
--

INSERT INTO `about_table` (`id`, `about_details`, `about_photo`, `logo_photo`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudtion ullamco laboris nisi ut aliquip ex ea comm. Duis aute irure dolor in reprehrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\r\n\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia desnt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.\r\n\r\nlaudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam uptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.\r\n', '2.jpg', '1579361614.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner_table`
--

CREATE TABLE `banner_table` (
  `id` int(255) NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `banner_name` varchar(255) NOT NULL,
  `banner_details` longtext NOT NULL,
  `banner_photo` varchar(255) NOT NULL DEFAULT 'default_banner_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_table`
--

INSERT INTO `banner_table` (`id`, `banner_title`, `banner_name`, `banner_details`, `banner_photo`) VALUES
(4, 'Best Mobile', 'Collection', 'amar sonar bangla ami tomay valo bashi aro beshi valo basha jay na o amar pran pakhi moyna ', '4.jpg'),
(6, 'Best Mobile', 'Technical Support', 'ami janina actually ami ki chai tomra chalile amake help korte paro', '6.jpg'),
(7, '2021', 'for future collection', 'google translate apps gmail yahoo maps facebook you tube google translate youtube converter mycreativeshop ed korat kashem dashboard add banner', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bg_table`
--

CREATE TABLE `bg_table` (
  `id` int(255) NOT NULL,
  `heading_bg` varchar(255) NOT NULL DEFAULT 'default_heading_bg.jpg',
  `counter_bg` varchar(255) NOT NULL DEFAULT 'default_counter_bg.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bg_table`
--

INSERT INTO `bg_table` (`id`, `heading_bg`, `counter_bg`) VALUES
(1, '1.jpg', '1579192605.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`id`, `category_name`) VALUES
(3, 'Men'),
(4, 'Women'),
(5, 'Children'),
(6, 'Accesorries');

-- --------------------------------------------------------

--
-- Table structure for table `client_message_table`
--

CREATE TABLE `client_message_table` (
  `id` int(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_phone` varchar(255) NOT NULL,
  `client_location` varchar(255) NOT NULL,
  `client_message` longtext NOT NULL,
  `message_status` int(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_message_table`
--

INSERT INTO `client_message_table` (`id`, `client_name`, `client_email`, `client_phone`, `client_location`, `client_message`, `message_status`) VALUES
(4, 'Fuad Alam', 'fuad@alam.com', '123456789', 'Mirpur, Dhaka', 'abul kashem abul kalam sollellla', 2),
(5, 'Nafu Alam', 'nafi@alam.com', '123456789', 'Uttora , Dhaka', 'Lorem ipsum dolor sit amet.', 2),
(6, 'Shuhad Mia', 'shuhad@mia.com', '123456', 'CTG', 'lormen ipsum dolor sit amet', 2),
(7, 'Rafid', 'rafid@mia.com', '123456987', 'ctg', 'lomem ipsum dolor sit amet.', 1),
(8, 'Tahsin Apu', 'tahsin@apu', '321654987', 'Feni', 'lorem ipsum dolor sit amet.', 1),
(9, 'Sami', 'sami@live.org', '321987', 'Boshurhat', 'lorem ipsum dolor sit amet', 2),
(10, 'Najiyah', 'najiyah@live.com', '3215879', 'Boshurhat', 'lorem ipsum dolor sit amet.', 2),
(11, 'Wasi Babu', 'wasi@babu.com', '2546987', 'Boshurhat', 'lorem ipsum dolor sit amet.', 2),
(12, 'Horek Mal', 'horek@mal.com', '12546987', 'Dhaka', 'lorem ipsum dolor sit amet', 2),
(13, 'Bellu Donner', 'bellu@gmail.com', '258644', 'Mirpur, Dhaka', 'ami janina', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`id`, `location`, `phone`, `email`, `web`, `details`) VALUES
(7, 'Sector-10, Uttora, Dhaka', '01789988529', 'nafialam@gmail.com', 'www.noipunna.com', 'predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. ');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `ip_address`, `product_id`) VALUES
(46, '::12', 52),
(47, '::12', 54),
(48, '::12', 55),
(49, '::12', 56),
(58, '::12', 55),
(59, '::120', 57),
(60, '::12', 58),
(65, '::10', 59),
(66, '::13', 59),
(67, '::15', 60),
(68, '::17', 56),
(69, '::18', 54),
(70, '::18', 52),
(71, '::14', 61),
(72, '::17', 62),
(73, '::18', 63),
(74, '::15', 64),
(75, '::18', 67),
(76, '::16', 66),
(77, '::17', 65),
(78, '::15', 66),
(80, '3', 56),
(83, '::16', 54),
(84, '::14254', 52),
(85, '::18252', 55),
(86, '::1828', 57),
(87, '::17452', 58),
(88, '::1852582', 59),
(89, '::18582', 60),
(90, '::122525', 64),
(91, '::142452', 63),
(93, '::15252222222222', 61),
(94, '::188888888888', 65),
(95, '::15555522222222', 67),
(96, '::1828525', 62),
(97, '::1trh', 52),
(98, '::1fgfg', 54),
(99, '::1gfgf', 55),
(100, '::1fgfgghj', 56),
(101, '::1dfdf', 60),
(102, '::1dfdfd', 59),
(103, '::1ddddddddd', 58),
(104, '::1fdfffffff', 57),
(105, '::1ddddddddd', 61),
(106, '::1dfdfdfdwew', 62),
(107, '::1ssdfd5', 63),
(108, '::1ddddddddeeeee', 64),
(109, '::1dfdfdf', 67),
(110, '::1rtrg', 66),
(111, '::1fuad', 65),
(112, '::1dfdf', 55),
(292, '::1292', 52),
(294, '::1294', 52),
(295, '::1295', 52),
(296, '::1296', 52),
(297, '::1297', 52),
(298, '::1298', 52),
(299, '::1299', 52),
(300, '::1300', 52),
(399, '::1', 60),
(450, '::1', 69),
(451, '::1', 61),
(466, '::1', 64),
(476, '::1', 66),
(517, '::1', 59),
(542, '::1', 57),
(581, '::1', 55),
(590, '::1', 54),
(591, '::1', 52),
(592, '::1', 58),
(593, '::1', 67);

-- --------------------------------------------------------

--
-- Table structure for table `member_table`
--

CREATE TABLE `member_table` (
  `id` int(255) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_designation` varchar(255) NOT NULL,
  `member_fb_link` varchar(255) NOT NULL,
  `member_gmail_link` varchar(255) NOT NULL,
  `member_another_link` varchar(255) NOT NULL,
  `member_another_fa_class` varchar(255) NOT NULL,
  `member_photo` varchar(255) NOT NULL DEFAULT 'member_default_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_table`
--

INSERT INTO `member_table` (`id`, `member_name`, `member_designation`, `member_fb_link`, `member_gmail_link`, `member_another_link`, `member_another_fa_class`, `member_photo`) VALUES
(9, 'Nafi Alam', 'Founder', 'www.facebook.com/nafialam.bd', 'koratkashem79@gmail.com', 'www.bicycle.com', 'fa fa-bicycle', '9.jpg'),
(10, 'Shokina Khatun', 'Assistant Member', 'www.facebook.com/shokina.af', 'shokina@khatun.com', 'www.instagram.com', 'fa fa-instagram', '10.jpg'),
(11, 'Habib Mamun', 'Assistant Designer', 'www.facebook.com/haba.kala', 'habu@gmail.com', 'www.instagram.com', 'fa fa-instagram', 'member_default_photo.jpg'),
(12, 'Unknown', 'Member', 'www.facebook.com/unknown', 'unknown@oxilab.com', 'www.instagram.com', 'fa fa-instagram', '12.jpg'),
(13, 'Catrina Kaif', 'Actor', 'www.facebook.com/katrinakaif.bd.nafa', 'catrina@info.com', 'www.instagram.com', 'fa fa-instagram', '13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `m_as_p`
--

CREATE TABLE `m_as_p` (
  `id` int(255) NOT NULL,
  `m_as_p_id` int(255) NOT NULL,
  `m_as_p_name` varchar(255) NOT NULL,
  `m_as_p_email` varchar(255) NOT NULL,
  `m_as_p_phone` varchar(255) NOT NULL,
  `m_as_p_location` varchar(255) NOT NULL,
  `m_as_p_photo` varchar(255) NOT NULL DEFAULT 'defaults_m_as_p_photo.jpg',
  `m_as_p_message` longtext NOT NULL,
  `m_as_p_status` int(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_as_p`
--

INSERT INTO `m_as_p` (`id`, `m_as_p_id`, `m_as_p_name`, `m_as_p_email`, `m_as_p_phone`, `m_as_p_location`, `m_as_p_photo`, `m_as_p_message`, `m_as_p_status`) VALUES
(1, 61, 'belayet', 'dfdf@gmail.com', '34545454', 'Dhaka, Bangladesh', '1.jpg', 'tghfgfhfThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 1),
(2, 61, 'Shuvoda', 'shuvoda@gmail.com', '01832058080', 'Chittagong, Bangladesh', '2.jpg', 'Thank You Vai ok bro you are welcome', 2),
(3, 58, 'Habib', 'habib@info.com', '01789988529', 'Comilla, Bangladesh', '3.jpg', 'Habeb kala parana', 1),
(4, 58, 'Urmi', 'urmi@gmail.com', '01789988529', 'Chowmuhuni, Bangladesh', '4.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 2),
(5, 64, 'Jawad', 'fuad@gmail.com', '34534545', 'Rupnagar R/A, Pallabi, Mirpur, Dhaka-1216', '5.jpg', 'amar sonar bangla ami tomay valo bashi chirodin tomar akash tomar batash amar prane omaamar prane bajay bashi sonar bangla ami tomay valo bashi oma fagune tor amer bone grane pagol kore mori hay hay re oma fagune tor amer bone grane pagol kore ma tor mukher bani amar kane lageamar sonar bangla ami tomay valo bashi chirodin tomar akash tomar batash amar prane omaamar prane bajay bashi sonar bangla ami tomay valo bashi oma fagune tor amer bone grane pagol kore mori hay hay re oma fagune tor amer bone grane pagol kore ma tor mukher bani amar kane lageamar sonar bangla ami tomay valo bashi chirodin tomar akash tomar batash amar prane omaamar prane bajay bashi sonar bangla ami tomay valo bashi oma fagune tor amer bone grane pagol kore mori hay hay re oma fagune tor amer bone grane pagol kore ma tor mukher bani amar kane lage', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_desc` longtext NOT NULL,
  `cat_id` int(255) NOT NULL,
  `p_cat_id` int(255) NOT NULL,
  `product_photo_one` varchar(255) NOT NULL DEFAULT 'default_p_photo.jpg',
  `product_photo_two` varchar(255) NOT NULL DEFAULT 'default_p_photo.jpg',
  `product_photo_three` varchar(255) NOT NULL DEFAULT 'default_p_photo.jpg',
  `product_photo_four` varchar(255) NOT NULL DEFAULT 'default_p_photo.jpg',
  `likes` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `product_name`, `product_price`, `product_desc`, `cat_id`, `p_cat_id`, `product_photo_one`, `product_photo_two`, `product_photo_three`, `product_photo_four`, `likes`) VALUES
(52, 'Watch', 350, 'this is the watch of our country', 5, 1, '52(one)-edited.jpg', '52(two)-edited.jpg', '52(three)-edited.jpg', '52(four)-edited.jpg', 9),
(54, 'Pen', 30, 'this is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi', 3, 2, '54(one).jpg', '54(two)-edited.jpg', '54(three).jpg', '54(four).jpg', 6),
(55, 'Book', 665, 'this is a kind of book in our country like Bangladesh the computer google search is not a google search this is like a search of Bangladeshi  fuzzy search ', 5, 4, 'default_p_photo.jpg', 'default_p_photo.jpg', '55(three).jpg', 'default_p_photo.jpg', 5),
(56, 'Legendary Birikhor', 350, 'amar sonar bangla ami tmi tomay valo bashi chiro din tomar akash tomar batash amar  prane omayamar prane bajay bashi sonar bangla ami tomay valo bashi \r\nki shoba ki chaya go ki sneho ki maya go ki achol bichay eso boter mule nodir kule kule \r\nmator mukher bani amar kane lage shudhar moto mori hay hay re ma tor mukher bani amar kane lage shudhar moto ma \r\ntor bodol khani molin hole ami noyon oma ami noyon jole vashi sonar banlga ami tomay valo bashi', 5, 5, '56(one)-edited.jpg', '56(two)-edited.jpg', '56(three).jpg', '56(four).jpg', 4),
(57, 'Mobile', 33340, 'this is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi', 5, 7, '57(one).jpg', '57(two).jpg', '57(three).jpg', '57(four).jpg', 4),
(58, 'Monitor', 36954, 'this is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi', 4, 1, '58(one).jpg', '58(two).jpg', '58(three).jpg', '58(four).jpg', 4),
(59, 'Wallet', 100, 'amar sonar bangla ami tomay valo bashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi oma amar sonar bangla ami tomay valo bashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi oma amar sonar bangla ami tomay valo bashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi oma amar sonar bangla ami tomay valo bashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi oma ', 6, 9, '59(one).jpg', '59(two).jpg', '59(three).jpg', '59(four).jpg', 4),
(60, 'Key', 36, 'this is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi', 3, 1, '60(one).jpg', '60(two).jpg', '60(three).jpg', '60(four).jpg', 4),
(61, 'Hollywood', 360, 'this is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi', 5, 4, '61(one).jpg', '61(two).jpg', '61(three).jpg', '61(four).jpg', 4),
(62, 'Fire Box', 20, 'this is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi', 4, 9, '62(one).jpg', '62(two).jpg', '62(three).jpg', '62(four).jpg', 2),
(63, 'Water Bottle', 360, 'this is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi', 5, 4, '63(one).jpg', '63(two).jpg', '63(three).jpg', '63(four).jpg', 3),
(64, 'Watch', 580, 'this is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi', 4, 10, '64(one).jpg', '64(two).jpg', '64(three).jpg', '64(four).jpg', 4),
(65, 'Body Spray', 650, 'this is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi', 6, 7, '65(one).jpg', '65(two).jpg', '65(three).jpg', '65(four).jpg', 3),
(66, 'Lighter', 12, 'this is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashithis is the pen of bangladesh or you could say in Indian pen is this amar sonar bangla ami tomay valobashi chirodin tomar akash tomar batash amar prane oma yamar prane bajay bashi sonar bangla ami tomay valo bashi', 3, 1, '66(one)-edited.jpg', '66(two).jpg', '66(three).jpg', '66(four).jpg', 4),
(67, 'Tooth Brush', 30, 'AMR sonar bangla ami tomay valo bashi chirodin tomar akash tomar batash amar prane omayamar prane bajay bashi sonar bangla ami tomay valobashi oma fagune tor amer bone grane pagol kore oma ograne tor bora khete ami noyon omayami noyon jole nar bangla ami tomay valobashi oma fagune tor amer bone grane pagol kore oma ograne tor bora khete ami noyon omayami noyon jole nar bangla ami tomay valobashi oma fagune tor amer bone grane pagol kore oma ograne tor bora khete ami noyon omayami noyon jole ', 6, 4, '67(one).jpg', '67(two).jpg', '67(three).jpg', '67(four).jpg', 4),
(69, 'Closeup', 40, 'The song was written in 1905 during the first partition of Bengal, when the ruling British Empire had an undivided province of Bengal Presidency split into two parts; the decision was announced on 19 July by the then-Viceroy of India Lord Curzon, taking effect on 16 October. ', 4, 9, '69(one).png', '69(two).jpg', '69(three).jpg', 'default_p_photo.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_category_table`
--

CREATE TABLE `p_category_table` (
  `id` int(255) NOT NULL,
  `p_category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_category_table`
--

INSERT INTO `p_category_table` (`id`, `p_category_name`) VALUES
(1, 'Electronices'),
(2, 'Fashion & Lifestyle'),
(4, 'Health & Beauty'),
(5, 'Camera'),
(7, 'Sunglass'),
(9, 'Digital Software'),
(10, 'Watches');

-- --------------------------------------------------------

--
-- Table structure for table `social_link_table`
--

CREATE TABLE `social_link_table` (
  `id` int(255) NOT NULL,
  `social_link` varchar(255) NOT NULL,
  `social_fa_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_link_table`
--

INSERT INTO `social_link_table` (`id`, `social_link`, `social_fa_class`) VALUES
(2, 'http://localhost/nafi/backend_assets/edit_social_link_id.php?id=2', '<i class=\"fa fa-free-code-camp\"></i>'),
(3, 'http://localhost/nafi/backend_assets/icons-fontawesome.html', '<i class=\"fa fa-handshake-o\"></i>'),
(4, 'http://localhost/nafi/backend_assets/icons-fontawesome.html', '<i class=\"fa fa-bluetooth-b\"></i>'),
(6, 'https://www.facebook.com/fuadmia44', '<i class=\"fa fa-eye\"></i>'),
(7, 'https://www.facebook.com/pages/creation/?ref_type=universal_creation_hub', '<i class=\"fa fa-edit\"></i>'),
(8, 'https://www.facebook.com/mohammad.riyad.17?__tn__=%2Cd-]-[-R&eid=ARB4TaWZ0pTCvtGqtGckDxoiqNcgnyUE-QfumzZHiX8FIi0cMsCLRWboKzQPpoEvHbpWgSC11Tjnwwur&hc_location=friend_browser&fref=pymk_jewel', '<i class=\"fa fa-edit\"></i>');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_table`
--

CREATE TABLE `testimonial_table` (
  `id` int(255) NOT NULL,
  `testimonial_name` varchar(255) NOT NULL,
  `testimonial_designation` varchar(255) NOT NULL,
  `testimonial_comment` text NOT NULL,
  `testimonial_signature` varchar(255) NOT NULL,
  `testimonial_photo` varchar(255) NOT NULL DEFAULT 'testimonial_default_photo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial_table`
--

INSERT INTO `testimonial_table` (`id`, `testimonial_name`, `testimonial_designation`, `testimonial_comment`, `testimonial_signature`, `testimonial_photo`) VALUES
(6, 'Nafi Alam', 'Employee', 'This is my first website to made by Fuad vai. This name is Noipunna Craft & Decor. You can buy everything from here like you daily needed products.', 'nafa', '6.jpg'),
(7, 'Belayet Hossain', 'Sperm Donner', 'I am the donner of sperms. If you need sperm please contact with me. I have a lot of sperm in my dick please come on stock less.', 'Bellu', 'testimonial_default_photo.jpg'),
(8, 'Tylor Otwell', 'Laravel Founder', 'Every night in my Dreams I see You I feel You!\r\nThat is how I know you Go on.\r\nNear far however are.', 'Otwell', '8.jpg'),
(9, 'Habib', 'Software Engineer', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown ', 'Habib', '9.jpg'),
(10, 'Catrina Kaif', 'Actors', 'Amar Sonar Bangla ami tomay valobashi. Chirodin tomar akash tomar batash amar prane , Oma amar prane bajay bashi sonar bangla ami tomay valo bashi.', 'Catrinakaif', '10.jpg'),
(11, 'Lena Anderson', 'Porn Star', 'Cut A String To A Specified Length With PHP. Cutting a string to a specified length is accomplished with the substr() function. For example, the following string variable, which we will cut to a maximum of 30 characters. $string = This string is too long and will be cut short.', 'lena', '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_table`
--

CREATE TABLE `upcoming_table` (
  `id` int(255) NOT NULL,
  `upcoming_photo` varchar(255) NOT NULL,
  `upcoming_title` varchar(255) NOT NULL,
  `upcoming_desc` text NOT NULL,
  `upcoming_date` varchar(255) NOT NULL,
  `upcoming_time` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcoming_table`
--

INSERT INTO `upcoming_table` (`id`, `upcoming_photo`, `upcoming_title`, `upcoming_desc`, `upcoming_date`, `upcoming_time`, `status`) VALUES
(3, '3.jpg', 'Laddy Shoes', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.', '2020-02-11', '00-00 am', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`) VALUES
(1, 'localhost'),
(2, 'https::/jdf'),
(3, 'localhost/df'),
(4, '::1'),
(5, 'tumimishe');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL DEFAULT 'user_profile_photo.php'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `email`, `password`, `profile_photo`) VALUES
(11, 'Korat Kashem', 'korat@kashem.com', '123456', '11.jpg'),
(12, 'Abu Kalam', 'abu@kalam.com', '123456', '12.jpg'),
(13, 'Nafi Alom', 'nafi@alam.com', '123456', '13.jpg'),
(14, 'Catrina Kaif', 'catrina@kaif.com', '123456', '14.jpg'),
(15, 'Belayet Hossain', 'bela@toto.com', '123456', 'default_profile_photo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_table`
--
ALTER TABLE `about_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_table`
--
ALTER TABLE `banner_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bg_table`
--
ALTER TABLE `bg_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_message_table`
--
ALTER TABLE `client_message_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_table`
--
ALTER TABLE `member_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_as_p`
--
ALTER TABLE `m_as_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_category_table`
--
ALTER TABLE `p_category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_link_table`
--
ALTER TABLE `social_link_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_table`
--
ALTER TABLE `testimonial_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_table`
--
ALTER TABLE `upcoming_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_table`
--
ALTER TABLE `about_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_table`
--
ALTER TABLE `banner_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bg_table`
--
ALTER TABLE `bg_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client_message_table`
--
ALTER TABLE `client_message_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=594;

--
-- AUTO_INCREMENT for table `member_table`
--
ALTER TABLE `member_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `m_as_p`
--
ALTER TABLE `m_as_p`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `p_category_table`
--
ALTER TABLE `p_category_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `social_link_table`
--
ALTER TABLE `social_link_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonial_table`
--
ALTER TABLE `testimonial_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `upcoming_table`
--
ALTER TABLE `upcoming_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
