-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 05:37 PM
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_30_104128_onlineapplicants', 1),
(5, '2020_05_31_195937_create_student__programs_table', 1),
(6, '2020_05_31_200149_create_student__basicinfos_table', 1),
(7, '2020_05_31_200313_create_student__academics_table', 1),
(8, '2020_06_05_162257_create_uploads_table', 1);

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
-- Table structure for table `student__academics`
--

CREATE TABLE `student__academics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
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

INSERT INTO `student__academics` (`id`, `student_id`, `qualification`, `board_university`, `year`, `division`, `grade`, `obtain_marks`, `total_marks`, `created_at`, `updated_at`) VALUES
(1, 1, 'Matric', 'hsjdfhh', '2015', '1st', 'A+', '852', '4568', NULL, NULL),
(2, 1, 'Matric', 'hsjdfhh', '2015', '1st', 'A+', '852', '4568', NULL, NULL),
(3, 1, 'Matric', 'hsjdfhh', '2015', '1st', 'A+', '852', '4568', NULL, NULL),
(4, 1, 'Matric', 'hsjdfhh', '2015', '1st', 'A+', '852', '4568', NULL, NULL),
(5, 2, 'Matric', 'Multan', '2013', '1st', 'A+', '852', '1050', NULL, NULL),
(6, 2, 'FSC', 'Federal', '2015', '2nd', 'B', '625', '1100', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student__basicinfos`
--

CREATE TABLE `student__basicinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
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

INSERT INTO `student__basicinfos` (`id`, `student_id`, `student_name`, `student_cnic`, `father_name`, `father_cnic`, `guardian_name`, `guardian_cnic`, `gender`, `martial_status`, `domicile_province`, `domicile_district`, `date_of_birth`, `place_of_birth`, `nationality1`, `nationality2`, `present_address`, `present_tel`, `present_mobile`, `permanent_address`, `perm_tel`, `perm_mobile`, `student_email`, `father_occupation`, `fbusiness_address`, `father_tel`, `father_mobile`, `father_email`, `applicant_designation`, `organisation_name`, `disability`, `special_arrangement`, `emergency_name`, `relation_applicant`, `em_telephone`, `em_mobile`, `em_address`, `created_at`, `updated_at`) VALUES
(5, 1, 'sfadgf', '43256-7364764-3', 'dfgfdhgf', '43262-8476238-6', 'ghggfhh', '36218-7467823-6', 'Male', 'single', 'ashhfh', 'fhsdhgf', '2020-08-05', 'haskdaskg', 'hghfgshgf', NULL, 'sjkfjsafhsaj', '4335-3465475', '4333-5345345', 'jjafgdhfsdjfhagdajf', '3232-5325346', '4353-4534543', 'naseeb@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-20 04:18:52', '2020-08-20 04:18:52'),
(6, 1, 'cjfhjksfa', '36876-4783265-8', 'jkfgsdjgfk', '72648-7326863-2', 'kgksgfkgdsk', '32687-3265873-2', 'Male', 'single', 'gdsjfgsjdghja', 'hjsgfsdhgfdh', '2020-08-06', 'fjdsgjfajdf', 'gyufegygrfwueyf', NULL, 'fhsagfjhasgfh', '2178-6478214', '7364-6274563', 'jhshfgshhagfhs', '7364-8723646', '2342-3874623', 'naseeb@gmail.com', 'asbjhasfhas', 'ajsfkjsagfj', '3274672146162', '732268476', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-20 05:26:44', '2020-08-20 05:26:44'),
(7, 2, 'Hassan', '23834-5327495-3', 'Ahmed', '23894-8237589-2', 'Umer', '92864-8236482-3', 'Male', 'single', 'Punjab', 'Rawalpindi', '2020-08-05', 'Rawalpindi', 'Pakistani', NULL, 'House Cd-621, st# 123, mohalla multani , cantt rawlpindi', '3243-2432433', '2344-3243242', 'same as above', '3242-3432432', '2342-3424324', 'hassan@gmail.com', 'Farmer', 'Farmer', '231323123123', '432423432432', NULL, NULL, NULL, NULL, NULL, 'ALi', 'brother', '3213232131', '23243242342324', 'same as above', '2020-08-21 01:36:03', '2020-08-21 01:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `student__programs`
--

CREATE TABLE `student__programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
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
  `board_university` date DEFAULT NULL,
  `roll_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disciplinary_issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disciplinary_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_did_come` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student__programs`
--

INSERT INTO `student__programs` (`id`, `student_id`, `campus`, `registration_no`, `pre_program`, `reason_leaving`, `institution_attended`, `cgpa`, `credit_hours`, `program`, `tr_reason_leaving`, `awaiting_result`, `board_university`, `roll_number`, `year`, `disciplinary_issue`, `disciplinary_details`, `how_did_come`, `student_status`, `program1`, `program2`, `program3`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Result Awaiting', 'BS(ECO)', NULL, NULL, '2020-08-20 04:22:03', '2020-08-20 04:22:03'),
(2, 2, 'Islamabad', '556', 'BS Computer science', 'Left the city', 'PMAS', '3.5', '120', 'BS CS', 'Left the city', NULL, NULL, NULL, NULL, 'no', NULL, 'Internet', 'Result Awaiting', 'BS(CS)', 'None', 'None', '2020-08-21 01:39:27', '2020-08-21 01:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
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
(1, 'Naseb ul Hassan', 'naseeb@gmail.com', NULL, '$2y$10$mfnYVbxees9PBPR7tow15O.7AGaVx.8mEMLI6r6AnYI1fIeUKoZQa', NULL, '2020-08-20 01:33:32', '2020-08-20 01:33:32'),
(2, 'Hassan', 'hassan@gmail.com', NULL, '$2y$10$AGrts6ZWBTcu6ROd2kudQeEmOGaKeGC6n9ykPizSjbIuUU3esuXqy', NULL, '2020-08-21 01:31:28', '2020-08-21 01:31:28'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$OwVbXW3j2K/ZAvJLV2SLu.hNRrZpcxJ9zsxaGBPESwR1udNTRM2U2', NULL, '2020-08-22 00:00:46', '2020-08-22 00:00:46');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `onlineapplicants`
--
ALTER TABLE `onlineapplicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student__academics`
--
ALTER TABLE `student__academics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student__basicinfos`
--
ALTER TABLE `student__basicinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
