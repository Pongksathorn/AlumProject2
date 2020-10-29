-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2020 at 03:29 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `top1`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `s_id` int(11) NOT NULL,
  `s_gender` varchar(100) NOT NULL,
  `s_title` varchar(100) NOT NULL,
  `s_fname` varchar(100) NOT NULL,
  `s_lname` varchar(100) NOT NULL,
  `s_nickname` varchar(100) NOT NULL,
  `s_bday` date NOT NULL,
  `s_facebook` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_password` varchar(100) NOT NULL,
  `s_repassword` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `address3` varchar(100) NOT NULL,
  `address4` varchar(100) NOT NULL,
  `address5` varchar(100) NOT NULL,
  `s_generation` varchar(100) NOT NULL,
  `s_address` varchar(100) NOT NULL,
  `s_position` varchar(100) NOT NULL,
  `status` enum('Admin','User') DEFAULT 'User',
  `s_phone` varchar(10) NOT NULL,
  `fileupload` varchar(200) NOT NULL,
  `s_year` varchar(40) NOT NULL,
  `s_class` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`s_id`, `s_gender`, `s_title`, `s_fname`, `s_lname`, `s_nickname`, `s_bday`, `s_facebook`, `s_email`, `s_password`, `s_repassword`, `address1`, `address2`, `address3`, `address4`, `address5`, `s_generation`, `s_address`, `s_position`, `status`, `s_phone`, `fileupload`, `s_year`, `s_class`) VALUES
(96, 'ชาย', 'นาย', 'สรวิชญ์', 'เอกณรงค์พันธ์', 'เจมส์', '2020-10-23', 'Sorrawit Eaknarongpan', '614259055@webmail.npru.ac.th', '12345678', '12345678', '48/4 หมู่2', 'นครปฐม', 'เมืองนครปฐม', 'นครปฐม', '73000', '614259055', '48/4 หมู่2 ', 'นักศึกษา', 'User', '0863616258', 'my1.jpg', '2562', '61/47'),
(97, 'ชาย', 'นาย', 'พงศธร', 'จันทร์หา', 'กอล์ฟ', '2020-10-21', 'golfeiei', '614259020@webmail.npru.ac.th', '12345678', '12345678', '48/4 หมู่2', 'นครปฐม', 'เมืองนครปฐม', 'กรุงเทพ', '73000', '614259020', '48/4', 'นักศึกษา', 'User', '0898985856', 'imgpage32.jpg', '2550', '61/47'),
(98, 'ชาย', 'นาย', 'สราวุธ', 'เอกณรงค์พันธ์', 'เบ็นซ์', '2020-10-21', 'Sarawut', '614259099@webmail.npru.ac.th', '12345678', '12345678', '48/4 หมู่2', 'เชียงใหม่', 'เมืองนครปฐม', 'นครปฐม', '73000', '614259099', '48', 'น.ศ', 'User', '0999999999', 'l23.png', '2561', '61/100'),
(99, 'ชาย', 'นาย', 'เอื้อคุณ', 'บุตรศรีด้วง', 'วุฒิ', '2020-10-21', 'วุฒิซ่าน่ารัก', '614259031@webmail.npru.ac.th', '12345678', '12345678', '48/4 หมู่2', 'เชียงดาว', 'เมืองนครปฐม', 'เชียงใหม่', '73000', '614259031', '48/4', 'นักศึกษา', 'User', '0111111111', 'l4.png', '2561', '61/100'),
(100, 'หญิง', 'นางสาว', 'ประยุทธ์', 'จันโอชา', 'ตูบ', '2020-10-21', 'TuzaKuy', 'Tuza55@gmail.com', '12345678', '12345678', '48/4 หมู่2', 'นครปฐม', 'เมืองนครปฐม', 'ยะลา', '73000', '614259011', '48', 'นักศึกษา', 'User', '0111111111', 'l5.png', '2561', '61/100'),
(101, 'ชาย', 'นาง', 'ประวิทย์', 'วงษ์สุวรรณ', '', '2020-10-29', 'ป้อมนอนน้อย', 'Porm66@hotmail.com', '12345678', '12345678', '48/4 หมู่2', 'นครปฐม', 'เมืองนครปฐม', 'กระบี่', '73000', '614259098', '48/4', 'รองรัฐมนตรี', 'User', '0989898989', 'er.jpg', '2559', '61/47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
