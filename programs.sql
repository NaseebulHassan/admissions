-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 01:18 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iuic_sic`
--

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `process_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payable_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `code`, `name`, `process_fee`, `payable_date`, `created_at`, `updated_at`) VALUES
(1, 'BBA', 'Bachelor of Business Admistration (BBA)', '1500', '2020-08-31', NULL, NULL),
(2, 'BSAF', 'Bachelor of Science in Accounting & Finance BS(AF)', '1500', '2020-08-31', NULL, NULL),
(3, 'BFD', 'Bachelor of Art in Fashion Design (BFD)', '1500', '2020-08-31', NULL, NULL),
(4, 'BTD', 'Bachelor of Art in Textile Design (BTD)', '1500', '2020-08-31', NULL, NULL),
(5, 'BMS', 'Bachelor in Media Studies (BMS)', '1500', '2020-08-31', NULL, NULL),
(6, 'BSCS', 'Bachelor of Science in Computer Science (BSCS)', '1500', '2020-08-31', NULL, NULL),
(7, 'BSSE', 'Bachelor of Science in Software Engineering BS(SE)', '1500', '2020-08-31', NULL, NULL),
(8, 'BSAI', 'Bachelor of Science in Artificial Intelligence BS(AI)', '1500', '2020-08-31', NULL, NULL),
(9, 'BSDS', 'Bachelor of Science in Development Studies (BSDS)', '1500', '2020-08-31', NULL, NULL),
(10, 'BSIR', 'Bachelor of Science in International Relations (BSIR)', '1500', '2020-08-31', NULL, NULL),
(11, 'BSSC', 'Bachelor of Science in Social Science (BSSC)', '1500', '2020-08-31', NULL, NULL),
(12, 'BSECO', 'Bachelor of Science in Economics BS(Eco)', '1500', '2020-08-31', NULL, NULL),
(13, 'MBA(MORNING)', 'Master of Business Administration (MBA MORNING)', '1500', '2020-08-31', NULL, NULL),
(14, 'MBA(EVENING)', 'Master of Business Administration (MBA EVENING)', '1500', '2020-08-31', NULL, NULL),
(15, 'MSBA', 'MS in Business Administration (MSBA)', '1500', '2020-08-31', NULL, NULL),
(16, 'MSSE', 'Master of Science in Software Engineering MS(SE)', '1500', '2020-08-31', NULL, NULL),
(17, 'MSCS', 'Master of Science in Computer Science (MSCS)', '1500', '2020-08-31', NULL, NULL),
(18, 'MSTN', 'Master of Science in Telecommunication and Networking (MSTN)', '1500', '2020-08-31', NULL, NULL),
(19, 'MSc(DS)', 'Master of Science in Development Studies MSc(DS)', '1500', '2020-08-31', NULL, NULL),
(20, 'MSc(IR)', 'Master of Science in International Relations MSc(IR)', '1500', '2020-08-31', NULL, NULL),
(21, 'MPHIL(IDS)', 'MPHIL in international Development Studies (MPHIL(IDS))', '1500', '2020-08-31', NULL, NULL),
(22, 'MPHIL(IR)', 'MPHIL in international Relations (MPHIL(IR))', '1500', '2020-08-31', NULL, NULL),
(23, 'FDFD', 'One Year Diploma in Fashion/Textile Design ', '1500', '2020-08-31', NULL, NULL),
(24, 'ADFD', 'Two year Diploma in Fashion/Textile Designing', '1500', '2020-08-31', NULL, NULL),
(25, 'PhD(CS)', 'PH.D Computer Science (PH.D(CS))', '2000', '2020-08-31', NULL, NULL),
(26, 'PhD(TN)', 'PH.D Telecommunication &amp; Networks (PH.D(TN))', '2000', '2020-08-31', NULL, NULL),
(27, 'PhD(MGT)', 'PhD Management Sciences ', '2000', '2020-08-31', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
