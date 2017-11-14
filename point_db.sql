-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 06:54 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `point_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `student_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `student_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_phone_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_html_point` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_code`, `student_password`, `student_email`, `student_phone_number`, `student_html_point`, `created`, `modified`) VALUES
(5, '14520928', 'MjMxMDg0MjU4', '14520908@gm.uit.edu.vn', NULL, '<tr><td>EC001</td><td>Kinh tế học đại cương</td><td>   </td> <td> 7.5 </td> <td>   </td> <td> 7.5 </td> <td> 7.5 </td></tr> <tr><td>IS210</td><td>Hệ quản trị cơ sở dữ liệu</td><td>   </td> <td> 7.5 </td> <td> 7.5 </td> <td> 7.5 </td> <td> 7.5 </td></tr> <tr><td>IS232</td><td>Hệ thống thông tin kế toán</td><td> 8 </td> <td> 9 </td> <td>   </td> <td> 8.5 </td> <td> 8.5 </td></tr> <tr><td>IS334</td><td>Thương mại điện tử</td><td> 7 </td> <td>   </td> <td>   </td> <td> 8 </td> <td> 7.5 </td></tr> ', '2017-11-14 15:33:43', '2017-11-14 15:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`) VALUES
(1, 'admin', '123456', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
