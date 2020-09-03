-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 09:27 PM
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
(61, '2014_10_12_000000_create_users_table', 1),
(62, '2014_10_12_100000_create_password_resets_table', 1),
(63, '2019_08_19_000000_create_failed_jobs_table', 1),
(64, '2020_05_30_104128_onlineapplicants', 1),
(66, '2020_05_31_200149_create_student__basicinfos_table', 1),
(67, '2020_05_31_200313_create_student__academics_table', 1),
(68, '2020_06_05_162257_create_uploads_table', 1),
(69, '2020_08_27_082603_create_programs_table', 1),
(70, '2020_08_27_082629_create_semesters_table', 1),
(71, '2020_08_27_084353_create_vouchers_table', 1),
(72, '2020_05_31_195937_create_student__programs_table', 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `session`, `created_at`, `updated_at`) VALUES
(1, 'FALL-20', NULL, NULL);

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
(1, 10001, 'Matric', 'multan', '2013', '1st', 'A+', '852', '1050', NULL, NULL),
(2, 10001, 'FSC', 'federal', '2015', '2nd', 'B', '625', '1100', NULL, NULL);

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
  `perm_tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perm_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fbusiness_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `student__basicinfos` (`id`, `formno`, `student_name`, `student_cnic`, `father_name`, `father_cnic`, `guardian_name`, `guardian_cnic`, `gender`, `martial_status`, `domicile_province`, `domicile_district`, `date_of_birth`, `place_of_birth`, `nationality1`, `nationality2`, `present_address`, `present_tel`, `present_mobile`, `permanent_address`, `perm_tel`, `perm_mobile`, `student_email`, `father_occupation`, `fbusiness_address`, `father_tel`, `father_mobile`, `father_email`, `applicant_designation`, `organisation_name`, `disability`, `special_arrangement`, `emergency_name`, `relation_applicant`, `em_telephone`, `em_mobile`, `em_address`, `created_at`, `updated_at`) VALUES
(1, 10001, 'Naseeb ul Hassan', '86835-3765736-2', 'Khushi muhammad', '64723-8678238-4', 'abc', '68726-7527836-5', 'Male', 'single', 'Punjab', 'Vehari', '2020-08-05', 'rwp', 'Pakistani', NULL, 'dsfhgsdahfghadsgfjja', '666-5675554', '4564-5645645', 'dsfhgsdahfghadsgfjja', '666-5675554', '4564-5645645', 'abc@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-31 05:47:10', '2020-08-31 05:47:10');

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
(1, 10001, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Newspaper', 'Result Awaiting', 'FALL-20', 17, NULL, NULL, '2020-08-31 05:48:29', '2020-08-31 05:48:29');

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
(10001, 'naseeb', 'abc@gmail.com', NULL, '$2y$10$vtvlznfbqOCMGGD1.ypeVe893U0btD3/Tm22q312VvljMtm9j15c2', NULL, '2020-08-31 05:46:09', '2020-08-31 05:46:09');

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
(20001, 10001, '2020-08-31 05:49:15', '2020-08-31 05:49:15'),
(20002, 10001, '2020-08-31 06:42:02', '2020-08-31 06:42:02'),
(20003, 10001, '2020-09-01 04:28:03', '2020-09-01 04:28:03'),
(20004, 10001, '2020-09-01 05:05:37', '2020-09-01 05:05:37'),
(20005, 10001, '2020-09-01 07:03:20', '2020-09-01 07:03:20'),
(20006, 10001, '2020-09-01 07:04:15', '2020-09-01 07:04:15'),
(20007, 10001, '2020-09-01 07:05:38', '2020-09-01 07:05:38'),
(20008, 10001, '2020-09-01 07:06:05', '2020-09-01 07:06:05'),
(20009, 10001, '2020-09-01 07:06:08', '2020-09-01 07:06:08'),
(20010, 10001, '2020-09-01 07:10:30', '2020-09-01 07:10:30'),
(20011, 10001, '2020-09-01 07:48:05', '2020-09-01 07:48:05'),
(20012, 10001, '2020-09-01 07:54:39', '2020-09-01 07:54:39');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student__basicinfos`
--
ALTER TABLE `student__basicinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student__programs`
--
ALTER TABLE `student__programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `vchno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20013;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
