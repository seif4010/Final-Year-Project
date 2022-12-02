-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 05:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `re-password` varchar(100) NOT NULL,
  `datatime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `contact`, `city`, `email`, `password`, `re-password`, `datatime`) VALUES
(1, 'yussuf seifudin', 1701699145, 'Nairobi', 'yussufseifudin@gmail.com', '123457', '123457', '2022-04-09 07:45:49'),
(2, 'Ishaque Mahmud', 1346583921, 'Nairobi', 'ishaque@gmail.com', '123456', '123456', '2022-04-09 11:40:24'),
(3, 'Ahmed Farah Ibrahim', 713440108, 'Nairobi', 'ahmad@gmail.com', '9cdcf4961c73be2e970fa024d0900af6a5029556', '9cdcf4961c73be2e970fa024d0900af6a5029556', '2022-10-12 07:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE `cargo` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `driver_id` int(50) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `volume` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `sender_contact` varchar(50) NOT NULL,
  `sender_address` varchar(50) NOT NULL,
  `sender_city` varchar(50) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `receiver_email` varchar(50) NOT NULL,
  `receiver_contact` varchar(50) NOT NULL,
  `receiver_address` varchar(50) NOT NULL,
  `receiver_city` varchar(50) NOT NULL,
  `tracking_id` varchar(50) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`id`, `user_id`, `driver_id`, `weight`, `volume`, `quantity`, `date`, `sender_name`, `sender_email`, `sender_contact`, `sender_address`, `sender_city`, `receiver_name`, `receiver_email`, `receiver_contact`, `receiver_address`, `receiver_city`, `tracking_id`, `status`) VALUES
(1, 1, 1, '80', '60', '10', '2022-04-12', 'Kijana USIU', 'kijanausiut@gmail.com', '01889104482', 'Nairobi', 'Nairobi', 'Mohammed Ahmed', 'ahmed@gmail.com', '01759871555', 'Kiambu', 'Kiambu', '0748aacb01da4dd1aa30ee5083295b7f', 2),
(2, 1, 2, '80', '20', '10', '2022-04-12', 'Mrefu Hassan', 'mrfhassan@gmail.com', '01889104482', 'Nairobi', 'Nairobi', 'Salim Najib', 'salim@gmail.com', '01759275731', 'Kericho', 'Kericho', '6238324c644fc582a0a264c48bdc395a', 2),
(3, 3, 1, '80', '80', '80', '2022-04-12', 'Ishaque Mahmud', 'ishaque@gmail.com', '01834931223', 'Mombasa', 'Mombasa', 'Mrefu Hassan', 'mrfhassan@gmail.com', '01752276521', 'Nairobi', 'Nairobi', '21050382a1a5af889c238f02593b9be8', 2),
(4, 3, 2, '50', '80', '40', '2022-04-12', 'Ishaq Mahmud', 'ishaq@gmail.com', '01834931211', 'Limuru', 'Kisumu', 'Salma Ali', 'salma@gmail.com', '01759871555', 'Nairobi', 'Nairobi', 'da5c98913834fd48ddb77b68e938a3b2', 2),
(5, 8, 1, '60', '20', '10', '2022-04-12', 'Mangi Omar', 'omar@gmail.com', '01832375322', 'Nairobi', 'Nairobi', 'Mrefu Hassan', 'maruf@gmail.com', '01752276521', 'Westlands', 'Nairobi', 'd7c4f9a6cb59af169751018f4f3f4a4e', 2),
(6, 9, 6, '1', '2', '2', '2022-10-16', 'Ahmed', 'ahmedibrahim@gmail.com', '01701996715', 'kiambu', 'Nairobi', 'seif', 'yussufseifudin@gmail.com', '01706991458', 'nairobi', 'Busia', 'a9e3083740a51af56f437d5817c0e00d', 2),
(7, 9, 6, '2', '1', '1', '2022-10-03', 'Yussuf Seifudin', 'seif@gmail.com', '01769914501', 'Ngara', 'Nairobi', 'Farah Ahmed', 'ahmed@gmail.com', '01799292821', 'South C', 'Mombasa', '1043ecaba3553b10794c71eb098e4ca7', 1),
(8, 9, 7, '11', '48', '3', '2022-10-05', 'Mary bruce', 'mary@gmail.com', '01710996541', 'Kitsuru', 'Nairobi', 'Haji Abdi', 'abdi@gmail.com', '01790967854', 'Muthaiga', 'Kericho', 'bf50b56c6706aabbd5629e0e12585736', 1),
(9, 10, 0, '12', '300', '5', '2022-10-06', 'Collins Oduor', 'collins@gmail.com', '01712323452', 'Parklands', 'Nairobi', 'James Ariwo', 'james@gmail.com', '01729378992', 'Peponi', 'Kisumu', 'a301b63227f92ed0f63a6e71e1c5981e', 2),
(10, 23, 0, '6', '2', '2', '2022-10-14', 'Jimbe Kamau', 'jimbe@gmail.com', '01769914501', 'Peponi', 'Mombasa', 'Farah Ahmed', 'ahmed@gmail.com', '01799292821', 'South C', 'Nairobi', '60412ec5d5a943053d4699b008920748', 1),
(11, 23, 0, '7', '24', '3', '2022-10-14', 'Jimbe Kamau', 'jimbe@gmail.com', '01712323452', 'peponi', 'Mombasa', 'James Ariwo', 'james@gmail.com', '01701699145', 'Ring road ', 'Nairobi', '5432882f2ebae8ec742268c883bf04eb', 2),
(12, 23, 0, '11', '12', '2', '2022-10-21', 'Jimbe Kamau', 'jimbe@gmail.com', '01712323452', 'Parklands', 'Nairobi', 'Kim Runner', 'kim@gmail.com', '01729378992', 'Peponi', 'Busia', 'fb75ce628e3810e14656e01e9bb66f2f', 1),
(13, 24, 0, '2', '3', '3', '2022-10-15', 'Kim Runner', 'runner@gmail.com', '01712323452', 'Parklands', 'Nairobi', 'Collins Oduor', 'collins@gmail.com', '01729378992', 'Peponi', 'Nanyuki', '94cca301060adeb3cc625273c9c9cb8b', 1),
(14, 24, 0, '11', '16', '2', '2022-10-16', 'Kim Runner', 'runner@gmail.com', '01712323452', 'Parklands', 'Nairobi', 'Collins Oduor', 'collins@gmail.com', '01729378992', 'Saitama', 'Kericho', '015e7d7df135676526695e726572f09d', 0),
(15, 25, 0, '15', '4', '4', '2022-10-15', 'Kaido Wano', 'wano@gmail.com', '01712323452', 'Garissa', 'Garissa', 'Straw Hat Luffy ', 'luffy@gmail.com', '01701699145', 'Nairobi', 'Nairobi', '028df44365edad9a1460968478281ecb', 1),
(16, 26, 0, '2', '2', '2', '2022-10-15', 'Kim Possible ', 'possible@gmail.com', '01712323452', 'Busia', 'Busia', 'Kim Runner', 'kim@gmail.com', '01729378992', 'Peponi', 'Nairobi', '66447cd533dfb32288d2c41a5469a349', 1),
(17, 27, 0, '14', '5', '5', '2022-10-15', 'Sulieman Haji', 'haji@gmail.com', '01712323452', 'Kisumu', 'Kisumu', 'Mary Bruce', 'marybruce@gmail.com', '01729378992', 'Manga Close', 'Nairobi', 'f8983a988dc1e7fea90d4662b7d1ed68', 1),
(18, 25, 8, '20', '1440', '15', '2022-10-20', 'Kaido Wano', 'wano@gmail.com', '01712323452', 'Garissa', 'Garissa', 'Yussuf Seifudin', 'yusufseifudin@gmail.com', '01701699145', 'Nairobi', 'Nairobi', 'f952ee795eb6f056b4567de2aa31c59a', 2),
(19, 28, 8, '66', '108', '6', '2022-10-20', 'Douglas Bullet', 'bullet@gmail.com', '01769914501', 'Kitsuru', 'Nairobi', 'Yussuf Seifudin', 'seif@gmail.com', '01799292821', '1st avenue', 'Mandera', '541d3facf8c002a22dd5db32240d4412', 2),
(20, 28, 0, '3', '81', '3', '2022-10-20', 'Douglas Bullet', 'bullet@gmail.com', '01769914501', 'Peponi', 'Busia', 'Mary Bruce', 'bruce@gmail.com', '01799229800', '2nd Avenue', 'Nairobi', 'c56e84adb8f0eb6f6a5e1df96913c7e5', 1),
(21, 29, 0, '56', '7', '7', '2022-10-21', 'Orihime Inoue', 'inoue@gmail.com', '01701688901', 'Westlands', 'Nairobi', 'Kurosaki Ichigo', 'ichigo-kun@gmail.com', '01721682911', 'Muthaiga', 'Mombasa', '2371b7680a9aee438a2120886af6ff98', 1),
(22, 30, 0, '54', '512', '64', '2022-10-21', 'Eustass Kidd', 'kidd@gmail.com', '01760916501', 'Manga Close', 'Mombasa', 'Trafargal Law', 'trafargal@gmail.com', '01799292920', 'North Blue street', 'Nairobi', '704e1d98ece116b6f775ecffeeb6ac81', 1),
(23, 29, 0, '14', '3456', '54', '2022-10-21', 'Orihime Inoue', 'inoue@gmail.com', '01769914501', 'Manga Close', 'Nairobi', 'Collins Oduor', 'collins@gmail.com', '01721682911', '2nd Avenue', 'Kisumu', 'eed8488445202f6416c3f46e7d4ea2e0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `re-password` varchar(100) NOT NULL,
  `status` int(50) NOT NULL,
  `amount` int(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `fullname`, `contact`, `email`, `password`, `re-password`, `status`, `amount`, `datetime`) VALUES
(6, 'Yusuf Seifudin', 1701699145, 'seifyusuf@gmail.com', 'yusuf12345', 'yusuf12345', 1, 5000, '2022-10-03 15:17:25'),
(7, 'Yussuf Seifudin', 701699145, 'yussuf@gmail.com', 'a3012460621622466312fc05e8bcdc5362bae8d2', 'a3012460621622466312fc05e8bcdc5362bae8d2', 1, 3000, '2022-10-13 18:00:37'),
(8, 'Collins Oduor', 170901827, 'collins@gmail.com', '63f206a1efb96aa7f379628d55354e332727a7d3', '63f206a1efb96aa7f379628d55354e332727a7d3', 1, 0, '2022-10-16 12:16:15'),
(9, 'Gol Roger', 790145860, 'rogerpirates@gmail.com', '4f44d0bc511e8e6a775eead362d1ef7f870e5d51', '4f44d0bc511e8e6a775eead362d1ef7f870e5d51', 0, 0, '2022-10-20 15:28:04'),
(10, 'Mugiwara Luffy ', 722436020, 'mugiwara@gmail.com', 'b0a2b586d10b729dd3f4b2a0468ea3612ad7e3c9', 'b0a2b586d10b729dd3f4b2a0468ea3612ad7e3c9', 0, 0, '2022-10-21 05:05:19'),
(11, 'Mugiwara Luffy ', 722436020, 'mugiwara@gmail.com', 'b0a2b586d10b729dd3f4b2a0468ea3612ad7e3c9', 'b0a2b586d10b729dd3f4b2a0468ea3612ad7e3c9', 0, 0, '2022-10-21 05:06:32'),
(12, 'Charlotte Linlin', 713703147, 'charlotte@gmail.com', 'c5365dc745c65f4275529d36d539176f18c63526', 'c5365dc745c65f4275529d36d539176f18c63526', 0, 0, '2022-10-21 05:07:54'),
(13, 'Donqioute Doflamingo', 701996541, 'doffy@gmail.com', '5321298401a3248ca3fdfd87692f8defa3bdc306', '5321298401a3248ca3fdfd87692f8defa3bdc306', 0, 0, '2022-10-21 05:09:45'),
(14, 'Hyakujuu No Kaido', 790699451, 'hyakujuu@gmail.com', 'e57e4efcf9ee47aba9199d997953f7877446e1a2', 'e57e4efcf9ee47aba9199d997953f7877446e1a2', 0, 0, '2022-10-21 05:29:02'),
(15, 'Shinji Hirako', 782457690, 'shinji@gmail.com', '9f038d24245ce3cbe6f506a3985bd50de184ea52', '9f038d24245ce3cbe6f506a3985bd50de184ea52', 0, 0, '2022-10-25 11:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'Yussuf Seifudin', 'seif@gmail.com', 'Service is very good :)'),
(3, 'Ibrahim Ahmed', 'ahmed@gmail.com', 'The service is satisfying :)'),
(4, 'Suhieba', 'suhieba@gmail.com', 'The service is awesome :)'),
(6, 'Naima', 'naima@gmail.com', 'The service is very good :)'),
(9, 'Kaido Wano', 'wano@gmail.com', 'lovely service');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `post_code` smallint(4) NOT NULL,
  `city` varchar(50) NOT NULL,
  `division` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `post_code`, `city`, `division`) VALUES
(1, 1230, 'Nairobi', 'Nairobi'),
(2, 6000, 'Mombasa', 'Mombasa'),
(3, 9000, 'Busia', 'Busia'),
(4, 8200, 'Kericho', 'Kericho'),
(5, 3100, 'Mandera', 'Mandera'),
(6, 4000, 'Kisumu', 'Kisumu'),
(7, 5402, 'Kiambu', 'Kiambu'),
(8, 2200, 'Nanyuki', 'Nanyuki'),
(9, 4010, 'Garissa', 'Garissa'),
(10, 1040, 'Machakos', 'Machakos'),
(11, 3310, 'Voi', 'Voi'),
(12, 4380, 'Lamu', 'Lamu');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `cargo_id` int(50) NOT NULL,
  `basic_price` varchar(20) NOT NULL,
  `weight_price` varchar(20) NOT NULL,
  `volume_price` varchar(20) NOT NULL,
  `total_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `user_id`, `cargo_id`, `basic_price`, `weight_price`, `volume_price`, `total_price`) VALUES
(1, 1, 1, '700', '931', '854', '2485'),
(2, 1, 2, '800', '1064', '888', '2752'),
(3, 3, 3, '1500', '1995', '1995', '5490'),
(4, 3, 4, '1500', '1995', '1995', '5490'),
(5, 8, 5, '700', '931', '777', '2408'),
(6, 9, 6, '700', '0', '0', '700'),
(7, 9, 7, '1500', '0', '0', '1500'),
(8, 9, 8, '', '0', '0', '0'),
(9, 10, 9, '900', '1098', '1296', '3294'),
(10, 23, 10, '1500', '1665', '0', '3165'),
(11, 23, 11, '1500', '1665', '1665', '4830'),
(12, 23, 12, '700', '854', '777', '2331'),
(13, 24, 13, '', '0', '0', '0'),
(14, 24, 14, '', '0', '0', ''),
(15, 25, 15, '1000', '1220', '0', '2220'),
(16, 26, 16, '700', '0', '0', '700'),
(17, 27, 17, '900', '1098', '0', '1998'),
(18, 25, 18, '1000', '1220', '1440', '3660'),
(19, 28, 19, '800', '1064', '1064', '2928'),
(20, 28, 20, '700', '0', '931', '1631'),
(21, 29, 21, '1500', '1995', '0', '3495'),
(22, 30, 22, '1500', '1995', '2160', '5655'),
(23, 29, 23, '900', '1098', '1296', '3294');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `tracking_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`id`, `user_id`, `tracking_id`, `status`, `location`, `date`) VALUES
(1, 1, '0748aacb01da4dd1aa30ee5083295b7f', 'delivered', 'Nairobi', '2022-10-03'),
(2, 1, '6238324c644fc582a0a264c48bdc395a', 'delivered', 'Mombasa', '2022-10-03'),
(3, 3, '21050382a1a5af889c238f02593b9be8', 'delivered', 'Nairobi', '2022-10-03'),
(4, 3, 'da5c98913834fd48ddb77b68e938a3b2', 'delivered', 'Nairobi', '2022-10-03'),
(5, 8, 'd7c4f9a6cb59af169751018f4f3f4a4e', 'delivered', 'Busia', '2022-10-03'),
(6, 9, 'a9e3083740a51af56f437d5817c0e00d', 'delivered', 'Mombasa', '2022-10-04'),
(7, 9, '1043ecaba3553b10794c71eb098e4ca7', 'onway', 'Kiambu', '2022-10-04'),
(8, 9, 'bf50b56c6706aabbd5629e0e12585736', 'onway', 'Kiambu', '2022-10-13'),
(9, 10, 'a301b63227f92ed0f63a6e71e1c5981e', 'delivered', 'Kisumu', '2022-10-14'),
(10, 23, '60412ec5d5a943053d4699b008920748', 'pending', '', ''),
(11, 23, '5432882f2ebae8ec742268c883bf04eb', 'delivered', 'Nairobi', '2022-10-17'),
(12, 23, 'fb75ce628e3810e14656e01e9bb66f2f', 'pending', '', ''),
(13, 24, '94cca301060adeb3cc625273c9c9cb8b', 'pending', '', ''),
(14, 24, '015e7d7df135676526695e726572f09d', 'pending', '', ''),
(15, 25, '028df44365edad9a1460968478281ecb', 'pending', '', ''),
(16, 26, '66447cd533dfb32288d2c41a5469a349', 'pending', '', ''),
(17, 27, 'f8983a988dc1e7fea90d4662b7d1ed68', 'pending', '', ''),
(18, 25, 'f952ee795eb6f056b4567de2aa31c59a', 'delivered', 'Nairobi', '2022-10-26'),
(19, 28, '541d3facf8c002a22dd5db32240d4412', 'delivered', 'Mandera', '2022-10-24'),
(20, 28, 'c56e84adb8f0eb6f6a5e1df96913c7e5', 'pending', '', ''),
(21, 29, '2371b7680a9aee438a2120886af6ff98', 'pending', '', ''),
(22, 30, '704e1d98ece116b6f775ecffeeb6ac81', 'pending', '', ''),
(23, 29, 'eed8488445202f6416c3f46e7d4ea2e0', 'pending', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `re-password` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `contact`, `city`, `email`, `password`, `re-password`, `datetime`) VALUES
(1, 'Mrefu Hassan', 1752276521, 'Nairobi', 'mrfhasnat@gmail.com', '123457', '123457', '2022-10-19 13:42:10'),
(3, 'Ishaque Mahmud', 1834931211, 'Kisumu', 'ishaque@gmail.com', '123457', '123457', '2022-10-05 07:58:33'),
(4, 'Salman Dahir', 1723467853, 'Kiambu', 'salman@gmail.com', '123456', '123456', '2022-10-12 07:31:38'),
(7, 'Naima Hassan', 1783819498, 'Kericho', 'nayeem@gmail.com', '123456', '123456', '2022-10-05 07:25:37'),
(8, 'Md. Omar ', 1832375322, 'Nairobi', 'omar@gmail.com', '123456', '123456', '2022-10-12 09:19:47'),
(9, 'Ahmed Ibrahim', 1701464714, 'Nanyuki', 'ahmedibrahim@gmail.com', 'ahmed12345', 'ahmed12345', '2022-10-01 16:03:01'),
(10, 'Collins Oduor', 172229345, 'Mombasa', 'collins@gmail.com', 'collins12345', 'collins12345', '2022-10-06 05:07:00'),
(11, 'Safia Hassan', 701996541, 'Nanyuki', 'safia@gmail.com', 'safia12345', 'safia12345', '2022-10-06 05:28:20'),
(12, 'yusuf Said', 710191828, 'Nanyuki', 'yusufsaid@gmail.com', 'said12345', 'said12345', '2022-10-12 06:27:04'),
(13, 'Kim Possible', 790456271, 'Mandera', 'kimpossible@gmail.com', 'kim12345', 'kim12345', '2022-10-12 06:32:52'),
(14, 'Kurosaki Ichigo', 701827361, 'Kisumu', 'ichigo@gmail.com', 'ichigo12345', 'ichigo12345', '2022-10-12 06:39:09'),
(15, 'Seifudin Yussuf', 701699145, 'Nairobi', 'seifabdihafid36@gmail.com', 'seif12345', 'seif12345', '2022-10-12 06:43:37'),
(17, 'Seifudin Yussuf', 701699145, 'Nairobi', 'seifabdihafid@gmail.com', 'seif12345', 'seif12345', '2022-10-12 06:58:25'),
(18, 'June Esther', 701699514, 'Nairobi', 'june@gmail.com', 'june12345', 'june12345', '2022-10-12 07:04:02'),
(19, 'Seifudin Yussuf', 701996145, 'Nairobi', 'seifabdi@gmail.com', '59c60c852039dd2b54d3ca98d403ce73a3057e38', '59c60c852039dd2b54d3ca98d403ce73a3057e38', '2022-10-12 07:06:01'),
(20, 'douglas Kim', 711689145, 'Mombasa', 'douglas@gmail.com', '59ab0d42e493416d2e15b0d30f08148afe6f4a1b', '59ab0d42e493416d2e15b0d30f08148afe6f4a1b', '2022-10-12 07:16:01'),
(21, 'Bartholomew Kuma', 721690165, 'Busia', 'kuma@gmail.com', '952d80213e54a82e121c6e113db0466f27e56a50', '952d80213e54a82e121c6e113db0466f27e56a50', '2022-10-12 07:21:06'),
(22, 'Douglas Bullet ', 701699145, 'Nairobi', 'bulletdouglas2gmail.com', 'e9d45a15065b33b11cadf0020da905234135dd0a', 'e9d45a15065b33b11cadf0020da905234135dd0a', '2022-10-13 11:21:41'),
(23, 'Jimbe Kamau', 701699145, 'Nairobi', 'jimbe@gmail.com', '2f2fa13bac7d3a1ec70907a4023980c1094775d6', '2f2fa13bac7d3a1ec70907a4023980c1094775d6', '2022-10-13 11:27:48'),
(24, 'kim runner ', 709283783, 'Kiambu', 'runner@gmail.com', '0aed8fb868733bb92506077a33b87dc60b9b2f65', '0aed8fb868733bb92506077a33b87dc60b9b2f65', '2022-10-14 05:55:35'),
(25, 'Kaido Wano', 1701566483, 'Garissa', 'wano@gmail.com', '2f9d2a1fd8163d8ba4373af2cc7e988262f490f5', '2f9d2a1fd8163d8ba4373af2cc7e988262f490f5', '2022-10-15 07:58:17'),
(26, 'Kim Possible', 179238589, 'Busia', 'possible@gmail.com', 'e358745cbefa5844d38b866cb8e058ca67b0e5f3', 'e358745cbefa5844d38b866cb8e058ca67b0e5f3', '2022-10-15 08:21:43'),
(27, 'Suleiman Haji', 701847563, 'Kisumu', 'haji@gmail.com', 'df2f6ffdd5654640ded084ff456bd418d214d718', 'df2f6ffdd5654640ded084ff456bd418d214d718', '2022-10-15 08:44:02'),
(28, 'Douglas Bullet', 1792827364, 'Nairobi', 'bullet@gmail.com', '8fb5cfe922674e0f9faa46a92716f66bd67ad344', '8fb5cfe922674e0f9faa46a92716f66bd67ad344', '2022-10-20 14:46:33'),
(29, 'Orihime Inoue ', 701688901, 'Nairobi', 'inoue@gmail.com', '424d5cf425254916ffb35cef92db79271d8ca0ca', '424d5cf425254916ffb35cef92db79271d8ca0ca', '2022-10-20 15:15:40'),
(30, 'Eustass Kidd ', 720167990, 'Mombasa', 'kidd@gmail.com', 'dc32ffa5c2cda3e45d8e5f57cc7ffaf9897cd108', 'dc32ffa5c2cda3e45d8e5f57cc7ffaf9897cd108', '2022-10-21 05:15:00'),
(31, 'Kenpachi Zaraki', 710929182, 'Nairobi', 'zaraki@gmail.com', '71a563844402443edc5554ab206b407020e1ff77', '71a563844402443edc5554ab206b407020e1ff77', '2022-10-25 04:50:09'),
(32, 'Kuchiki Byakuya', 790896714, 'Mombasa', 'byakuya@gmail.com', '8face5230c9040b1a1ce23fcf3563febfb28dd25', '8face5230c9040b1a1ce23fcf3563febfb28dd25', '2022-10-25 04:55:33'),
(33, 'Uchiha Madara', 780907856, 'Busia', 'madara@gmail.com', '3fbf6836385ae9c92497fad80b06e2e93c2312f2', '3fbf6836385ae9c92497fad80b06e2e93c2312f2', '2022-10-25 04:56:53'),
(34, 'Uchiha Sasuke', 724678990, 'Nairobi', 'sasukeuchiha@gmail.com', 'fb691271b433d3d96450560f2c6dabe854ee31c4', 'fb691271b433d3d96450560f2c6dabe854ee31c4', '2022-10-25 04:58:05'),
(35, 'Hinata Hyuga ', 789347847, 'Kericho', 'hyuga@gmail.com', '0a379819dd2f5b88b3304ad3e3c998bd34f63fbc', '0a379819dd2f5b88b3304ad3e3c998bd34f63fbc', '2022-10-25 05:03:34'),
(36, 'Kakashi Hatake', 786712436, 'Nairobi', 'kakashi@gmail.com', 'e029ac2b27fccdcdc5d2990c4dcc4787b5e3b332', 'e029ac2b27fccdcdc5d2990c4dcc4787b5e3b332', '2022-10-25 05:04:47'),
(37, 'Rukia Kuchiki', 780987654, 'Mandera', 'rukia@gmail.com', '424d5cf425254916ffb35cef92db79271d8ca0ca', '424d5cf425254916ffb35cef92db79271d8ca0ca', '2022-10-25 05:06:46'),
(38, 'Sosuke Aizen', 759384728, 'Mandera', 'Aizen@gmail.com', 'f2e690fafd2e2a0decc79761009f4e94583f8e23', 'f2e690fafd2e2a0decc79761009f4e94583f8e23', '2022-10-25 05:07:55'),
(39, 'Shinji Hirako', 712540602, 'Kisumu', 'hirako@gmail.com', 'b1281bbed57c4b210d8367c9c129c6c5e601d966', 'b1281bbed57c4b210d8367c9c129c6c5e601d966', '2022-10-25 11:49:52'),
(40, 'Urahara Kisuke', 715908970, 'Garissa', 'kisuke@gmail.com', '05cb6a61b79d8f70ea8b00f90d59301a6af3c0fe', '05cb6a61b79d8f70ea8b00f90d59301a6af3c0fe', '2022-10-25 11:50:53'),
(41, 'Uryu Ishida', 714687590, 'Kericho', 'uryu@gmail.com', 'e763cfaf1810987c429039fe512186eb03021394', 'e763cfaf1810987c429039fe512186eb03021394', '2022-10-25 11:51:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
