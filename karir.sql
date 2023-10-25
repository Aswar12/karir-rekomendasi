-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 10:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karir`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `bobot` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriterias`
--

INSERT INTO `kriterias` (`id`, `nama_kriteria`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'motivasi', 0.25, '2023-10-22 06:52:30', '2023-10-22 06:52:30'),
(2, 'Skill', 0.60, '2023-10-22 06:52:53', '2023-10-22 06:52:53'),
(3, 'personalitas', 0.10, '2023-10-22 06:53:11', '2023-10-22 06:53:11'),
(4, 'kerapian', 0.05, '2023-10-22 06:54:10', '2023-10-22 06:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_06_145233_create_sessions_table', 1),
(7, '2023_10_07_003858_add_role_to_users_table', 1),
(8, '2023_10_07_011510_create_kriterias_table', 1),
(9, '2023_10_07_011606_create_nilai_mahasiswas_table', 1),
(10, '2023_10_07_011648_create_rekomendasis_table', 1),
(11, '2023_10_10_013532_add_columns_to_users_table', 1),
(12, '2023_10_10_145454_create_subcriteria_table', 1),
(13, '2023_10_15_072633_add_subcriteria_id_on_nilai__mahasiswas', 1),
(14, '2023_10_16_133517_add_skor_alternatif_on_nilai_mahasiswas', 1),
(15, '2023_10_16_143536_make_subcriteria_id_nullable_in_nilai_mahasiswas_table', 1),
(16, '2023_10_17_045714_change_skor_alternatif_column_type', 1),
(17, '2023_10_23_070710_add_table_pekerjaan', 2),
(18, '2023_10_23_071115_add_table_nilai_pekerjaan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_mahasiswas`
--

CREATE TABLE `nilai_mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subcriteria_id` bigint(20) UNSIGNED DEFAULT NULL,
  `skor_alternatif` double(10,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_mahasiswas`
--

INSERT INTO `nilai_mahasiswas` (`id`, `mahasiswa_id`, `kriteria_id`, `nilai`, `created_at`, `updated_at`, `subcriteria_id`, `skor_alternatif`) VALUES
(1, 1, 1, 95.00, '2023-10-22 07:00:29', '2023-10-22 07:00:29', 1, NULL),
(2, 1, 2, 95.00, '2023-10-22 07:00:46', '2023-10-22 07:00:46', 4, NULL),
(3, 1, 3, 50.00, '2023-10-22 07:01:01', '2023-10-22 07:01:01', 8, NULL),
(4, 1, 4, 90.00, '2023-10-22 07:01:15', '2023-10-22 07:01:15', 11, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_pekerjaans`
--

CREATE TABLE `nilai_pekerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pekerjaan_id` bigint(20) NOT NULL,
  `kriteria_id` bigint(20) NOT NULL,
  `subcriteria_id` bigint(20) NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_pekerjaan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasis`
--

CREATE TABLE `rekomendasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `total_skor` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekomendasis`
--

INSERT INTO `rekomendasis` (`id`, `mahasiswa_id`, `total_skor`, `created_at`, `updated_at`) VALUES
(1, 1, 2.00, '2023-10-22 07:01:19', '2023-10-22 07:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5mOxuM7LkJCHO7XtOrfB17ttxMYjA68YAzELCkWr', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiN05HcGphanpNMWh6QUhsT21Ka29yZ1BRV1NUOXp0RUFKZlVVZk5RZyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMzOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcmVrb21lbmRhc2kiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHczWDVjV2VCRExJVmM0dC4uTHl4VC50RDhlSHh5U2RsLmhPRWFGUUVVbHpGLjlNWEQ4dnpTIjt9', 1697990388);

-- --------------------------------------------------------

--
-- Table structure for table `subcriterias`
--

CREATE TABLE `subcriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kriteria` bigint(20) DEFAULT NULL,
  `nama_subkriteria` varchar(255) NOT NULL,
  `bobot` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcriterias`
--

INSERT INTO `subcriterias` (`id`, `id_kriteria`, `nama_subkriteria`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 1, 'A+', 0.50, '2023-10-22 06:55:44', '2023-10-22 06:55:44'),
(2, 1, 'A', 0.30, '2023-10-22 06:56:19', '2023-10-22 06:56:19'),
(3, 1, 'B+', 0.20, '2023-10-22 06:56:44', '2023-10-22 06:56:44'),
(4, 2, 'PEMROGRAMAN', 0.25, '2023-10-22 06:57:57', '2023-10-22 06:57:57'),
(5, 2, 'DESAIN GRAFIS', 0.25, '2023-10-22 06:58:17', '2023-10-22 06:58:17'),
(6, 2, 'EDITING', 0.25, '2023-10-22 06:58:29', '2023-10-22 06:58:29'),
(7, 2, 'OLAH DATA', 0.25, '2023-10-22 06:58:51', '2023-10-22 06:58:51'),
(8, 3, 'A+', 0.50, '2023-10-22 06:59:11', '2023-10-22 06:59:11'),
(9, 3, 'A', 0.30, '2023-10-22 06:59:23', '2023-10-22 06:59:23'),
(10, 3, 'B+', 0.20, '2023-10-22 06:59:35', '2023-10-22 06:59:35'),
(11, 4, 'A+', 0.50, '2023-10-22 06:59:44', '2023-10-22 06:59:44'),
(12, 4, 'A', 0.30, '2023-10-22 06:59:55', '2023-10-22 06:59:55'),
(13, 4, 'B+', 0.20, '2023-10-22 07:00:07', '2023-10-22 07:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) NOT NULL DEFAULT 'mahasiswa',
  `jurusan` varchar(255) DEFAULT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `tahun_masuk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `roles`, `jurusan`, `nim`, `tahun_masuk`) VALUES
(1, 'firmansyah', 'firmansyah@gmail.com', NULL, '$2y$10$w3X5cWeBDLIVc4t..LyxT.tD8eHxySdl.hOEaFQEUlzF.9MXD8vzS', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-22 06:47:33', '2023-10-22 06:48:10', 'mahasiswa', 'Teknik Informatika', '20182205086', 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_mahasiswas`
--
ALTER TABLE `nilai_mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_mahasiswas_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `nilai_mahasiswas_kriteria_id_foreign` (`kriteria_id`);

--
-- Indexes for table `nilai_pekerjaans`
--
ALTER TABLE `nilai_pekerjaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rekomendasis`
--
ALTER TABLE `rekomendasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rekomendasis_mahasiswa_id_foreign` (`mahasiswa_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subcriterias`
--
ALTER TABLE `subcriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nim_unique` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nilai_mahasiswas`
--
ALTER TABLE `nilai_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai_pekerjaans`
--
ALTER TABLE `nilai_pekerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekomendasis`
--
ALTER TABLE `rekomendasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcriterias`
--
ALTER TABLE `subcriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai_mahasiswas`
--
ALTER TABLE `nilai_mahasiswas`
  ADD CONSTRAINT `nilai_mahasiswas_kriteria_id_foreign` FOREIGN KEY (`kriteria_id`) REFERENCES `kriterias` (`id`),
  ADD CONSTRAINT `nilai_mahasiswas_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rekomendasis`
--
ALTER TABLE `rekomendasis`
  ADD CONSTRAINT `rekomendasis_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
