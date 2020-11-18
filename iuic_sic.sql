-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 08:18 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, 'admin321', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_30_104128_onlineapplicants', 1),
(5, '2020_05_31_195937_create_student__programs_table', 1),
(6, '2020_05_31_200149_create_student__basicinfos_table', 1),
(7, '2020_05_31_200313_create_student__academics_table', 1),
(8, '2020_06_05_162257_create_uploads_table', 1),
(11, '2020_08_27_084353_create_vouchers_table', 1),
(12, '2020_08_27_082603_create_programs_table', 2),
(13, '2020_08_27_082629_create_semesters_table', 2),
(16, '2020_11_11_082035_create_admins_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `onlineapplicants`
--

CREATE TABLE `onlineapplicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `martial_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicile_province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicile_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perm_tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perm_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fbusiness_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisation_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disability` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_arrangement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_applicant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `em_telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `em_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `em_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `process_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `code`, `name`, `process_fee`, `created_at`, `updated_at`) VALUES
(1, 'BBA', 'Bachelor of Business Admistration (BBA)', '1500', '2020-11-10 19:00:00', '2020-11-10 19:00:00'),
(2, 'BSAF', 'Bachelor of Science in Accounting & Finance BS(AF)', '1500', NULL, NULL),
(3, 'BFD', 'Bachelor of Art in Fashion Design (BFD)', '1500', NULL, NULL),
(4, 'BTD', 'Bachelor of Art in Textile Design (BTD)', '1500', NULL, NULL),
(5, 'BMS', 'Bachelor in Media Studies (BMS)', '1500', NULL, NULL),
(6, 'BSCS', 'Bachelor of Science in Computer Science (BSCS)', '1500', NULL, NULL),
(7, 'BSSE', 'Bachelor of Science in Software Engineering BS(SE)', '1500', NULL, NULL),
(8, 'BSAI', 'Bachelor of Science in Artificial Intelligence BS(AI)', '1500', NULL, NULL),
(9, 'BSDS', 'Bachelor of Science in Development Studies (BSDS)', '1500', NULL, NULL),
(10, 'BSIR', 'Bachelor of Science in International Relations (BSIR)', '1500', NULL, NULL),
(11, 'BSSC', 'Bachelor of Science in Social Science (BSSC)', '1500', NULL, NULL),
(12, 'BSECO', 'Bachelor of Science in Economics BS(Eco)', '1500', NULL, NULL),
(13, 'MBA(MORNING)', 'Master of Business Administration (MBA MORNING)', '1500', NULL, NULL),
(14, 'MBA(EVENING)', 'Master of Business Administration (MBA EVENING)', '1500', NULL, NULL),
(15, 'MSBA', 'MS in Business Administration (MSBA)', '1500', NULL, NULL),
(16, 'MSSE', 'Master of Science in Software Engineering MS(SE)', '1500', NULL, NULL),
(17, 'MSCS', 'Master of Science in Computer Science (MSCS)', '1500', NULL, NULL),
(18, 'MSTN', 'Master of Science in Telecommunication and Networking (MSTN)', '1500', NULL, NULL),
(19, 'MSc(DS)', 'Master of Science in Development Studies MSc(DS)', '1500', NULL, NULL),
(20, 'MSc(IR)', 'Master of Science in International Relations MSc(IR)', '1500', NULL, NULL),
(21, 'MPHIL(IDS)', 'MPHIL in international Development Studies (MPHIL(IDS))', '1500', NULL, NULL),
(22, 'MPHIL(IR)', 'MPHIL in international Relations (MPHIL(IR))', '1500', NULL, NULL),
(23, 'FDFD', 'One Year Diploma in Fashion/Textile Design ', '1500', NULL, NULL),
(24, 'ADFD', 'Two year Diploma in Fashion/Textile Designing', '1500', NULL, NULL),
(25, 'PhD(CS)', 'PH.D Computer Science (PH.D(CS))', '2000', NULL, NULL),
(26, 'PhD(TN)', 'PH.D Telecommunication &amp; Networks (PH.D(TN))', '2000', NULL, NULL),
(27, 'PhD(MGT)', 'PhD Management Sciences ', '2000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payable_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `session`, `payable_date`, `created_at`, `updated_at`) VALUES
(1, 'SPRING-20', '2020-11-19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student__academics`
--

CREATE TABLE `student__academics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `formno` int(11) NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board_university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obtain_marks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_marks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student__academics`
--

INSERT INTO `student__academics` (`id`, `formno`, `qualification`, `board_university`, `year`, `division`, `grade`, `obtain_marks`, `total_marks`, `created_at`, `updated_at`) VALUES
(1, 2020400, 'Matric', 'federal', '2015', '1st', 'A+', '3256', '4566', NULL, NULL),
(2, 2020400, 'FSC', 'federal', '2017', '2nd', 'B+', '625', '1100', NULL, NULL),
(3, 2020401, 'Matric', 'safas', 'fass', '1st', 'B+', '852', '1050', NULL, NULL),
(4, 2020401, 'FSC', 'sadas', 'dsadsd', '2nd', 'B+', '625', '1100', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student__basicinfos`
--

CREATE TABLE `student__basicinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `formno` int(11) NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `martial_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicile_province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicile_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fbusiness_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applicant_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organisation_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disability` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_arrangement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_applicant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student__basicinfos`
--

INSERT INTO `student__basicinfos` (`id`, `formno`, `student_name`, `student_cnic`, `father_name`, `father_cnic`, `guardian_name`, `guardian_cnic`, `gender`, `martial_status`, `domicile_province`, `domicile_district`, `date_of_birth`, `place_of_birth`, `nationality1`, `nationality2`, `present_address`, `present_tel`, `present_mobile`, `permanent_address`, `student_email`, `father_occupation`, `fbusiness_address`, `father_tel`, `father_mobile`, `applicant_designation`, `organisation_name`, `disability`, `special_arrangement`, `emergency_name`, `relation_applicant`, `em_telephone`, `em_mobile`, `em_address`, `created_at`, `updated_at`) VALUES
(1, 2020400, 'Naseeb ul Hassan', '535545646465464', 'dfsgfdgsg', '546546546454665', '5fdsfds', 's56546789797867', 'Male', 'single', 'Punjab', 'vehari', '2020-11-04', 'Rawapndi', 'Pakistani', NULL, 'dfdsadgsdsf', '14564564646', '216445646468', 'dfdsadgsdsf', 'naseeb@gmail.com', 'dgsdgsdfg', 'SDFASDGDSAG', '65456465454', '87897978797', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-07 12:13:43', '2020-11-07 12:13:43'),
(2, 2020401, 'asdasfaa', 'dfsasdg', 'dssfsdfsdf', 'fsdfsdfsdfsdfsd', 'sdfsdfsdf', 'fssdfsdfsdf', 'Male', 'single', 'Punjab', 'fsdsdfsdf', '2020-11-09', 'sdfdgdsg', 'Pakistani', 'Pakistani', 'fsdfsdagafdhsg', 'fsdsdfsdfds', 'sdfdssdfsdf', 'fsdfsdagafdhsg', 'abc@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdfdfasd', 'Friend', 'dsfsdf', 'dsfsdf', 'fsdfsdfsd', '2020-11-10 07:42:41', '2020-11-10 07:42:41'),
(3, 2020403, 'sadhsjfh', '4654546546456', 'sfasdfa', '546546546464', 'sdfsdfsdfsdf', '645466556454646', 'Male', 'single', 'Sindh', 'rwp', '2020-11-02', 'rwp', 'Pakistani', NULL, 'iqrauni', '54646546556', '245646546564', 'iqrauni', 'ali@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-11 06:35:17', '2020-11-11 06:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `student__programs`
--

CREATE TABLE `student__programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `formno` int(11) NOT NULL,
  `campus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_leaving` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_attended` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_reason_leaving` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `awaiting_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board_university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disciplinary_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disciplinary_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_did_come` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program1` int(11) NOT NULL,
  `program2` int(11) DEFAULT NULL,
  `program3` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student__programs`
--

INSERT INTO `student__programs` (`id`, `formno`, `campus`, `registration_no`, `pre_program`, `reason_leaving`, `institution_attended`, `cgpa`, `credit_hours`, `program`, `tr_reason_leaving`, `awaiting_result`, `board_university`, `roll_number`, `year`, `disciplinary_issue`, `disciplinary_details`, `how_did_come`, `student_status`, `semester`, `program1`, `program2`, `program3`, `created_at`, `updated_at`) VALUES
(1, 2020400, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Newspaper', 'Fresh Applicant', '1', 8, NULL, NULL, '2020-11-07 13:04:38', '2020-11-07 13:04:38'),
(2, 2020401, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Internet', 'Result Awaiting', '1', 8, NULL, NULL, '2020-11-10 07:43:15', '2020-11-10 07:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `formno` int(11) NOT NULL,
  `student_cnic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matric_degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inter_degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bachelor_degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `master_degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equivalence_degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nts_score_sheet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2020400, 'naseeb', 'naseeb@gmail.com', NULL, '$2y$10$1c399nLeRWLetsKBjuHreeEPewGiAfw3Y9rfj0yQiFveAwKk1n.EK', NULL, '2020-11-07 12:09:23', '2020-11-07 12:09:23'),
(2020401, 'abc', 'abc@gmail.com', NULL, '$2y$10$9bT.pt9vnh58Lpzsdm27mu8jPyS84/2JVLrFGjtDQDDbwyycUGL.G', NULL, '2020-11-07 14:24:14', '2020-11-07 14:24:14'),
(2020402, 'admin', 'admin@gmail.com', NULL, '$2y$10$FMHtx7GxfW60SVB2/DCP0uHSXrs5ZMgFMHJIMCSwkHFXyygJB8agS', NULL, '2020-11-10 07:52:46', '2020-11-10 07:52:46'),
(2020403, 'ali', 'ali@gmail.com', NULL, '$2y$10$cT2baI1K6KrhkF8GTeqX9u.FqFAGHDb38lKoirbL2BPCNmsBXpi5a', NULL, '2020-11-11 06:31:07', '2020-11-11 06:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `vchno` int(10) UNSIGNED NOT NULL,
  `formno` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`vchno`, `formno`, `created_at`, `updated_at`) VALUES
(2020200, 2020400, '2020-11-07 13:56:11', '2020-11-07 13:56:11'),
(2020201, 2020400, '2020-11-07 14:00:00', '2020-11-07 14:00:00'),
(2020202, 2020400, '2020-11-07 14:03:42', '2020-11-07 14:03:42'),
(2020203, 2020400, '2020-11-07 14:38:39', '2020-11-07 14:38:39'),
(2020204, 2020400, '2020-11-07 14:39:01', '2020-11-07 14:39:01'),
(2020205, 2020400, '2020-11-07 14:56:16', '2020-11-07 14:56:16'),
(2020206, 2020400, '2020-11-07 15:14:20', '2020-11-07 15:14:20'),
(2020207, 2020400, '2020-11-07 15:15:58', '2020-11-07 15:15:58'),
(2020208, 2020400, '2020-11-07 15:16:49', '2020-11-07 15:16:49'),
(2020209, 2020400, '2020-11-07 15:17:26', '2020-11-07 15:17:26'),
(2020210, 2020400, '2020-11-07 15:17:31', '2020-11-07 15:17:31'),
(2020211, 2020400, '2020-11-07 15:18:53', '2020-11-07 15:18:53'),
(2020212, 2020400, '2020-11-07 15:19:34', '2020-11-07 15:19:34'),
(2020213, 2020400, '2020-11-07 15:22:57', '2020-11-07 15:22:57'),
(2020214, 2020400, '2020-11-07 15:28:04', '2020-11-07 15:28:04'),
(2020215, 2020400, '2020-11-07 15:28:40', '2020-11-07 15:28:40'),
(2020216, 2020400, '2020-11-07 15:29:25', '2020-11-07 15:29:25'),
(2020217, 2020400, '2020-11-07 15:30:20', '2020-11-07 15:30:20'),
(2020218, 2020400, '2020-11-07 15:30:23', '2020-11-07 15:30:23'),
(2020219, 2020400, '2020-11-07 15:30:39', '2020-11-07 15:30:39'),
(2020220, 2020400, '2020-11-07 15:31:39', '2020-11-07 15:31:39'),
(2020221, 2020400, '2020-11-07 15:31:44', '2020-11-07 15:31:44'),
(2020222, 2020400, '2020-11-07 15:31:54', '2020-11-07 15:31:54'),
(2020223, 2020400, '2020-11-07 15:33:23', '2020-11-07 15:33:23'),
(2020224, 2020401, '2020-11-10 07:43:44', '2020-11-10 07:43:44'),
(2020225, 2020401, '2020-11-10 07:44:38', '2020-11-10 07:44:38'),
(2020226, 2020401, '2020-11-10 07:45:04', '2020-11-10 07:45:04'),
(2020227, 2020401, '2020-11-10 07:46:11', '2020-11-10 07:46:11'),
(2020228, 2020401, '2020-11-10 07:47:19', '2020-11-10 07:47:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onlineapplicants`
--
ALTER TABLE `onlineapplicants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `onlineapplicants_student_cnic_unique` (`student_cnic`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student__academics`
--
ALTER TABLE `student__academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student__basicinfos`
--
ALTER TABLE `student__basicinfos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student__basicinfos_student_cnic_unique` (`student_cnic`);

--
-- Indexes for table `student__programs`
--
ALTER TABLE `student__programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`vchno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `onlineapplicants`
--
ALTER TABLE `onlineapplicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student__academics`
--
ALTER TABLE `student__academics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student__basicinfos`
--
ALTER TABLE `student__basicinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student__programs`
--
ALTER TABLE `student__programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020404;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `vchno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020229;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
