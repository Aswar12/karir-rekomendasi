-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2023 pada 04.50
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karir_rekomendasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriterias`
--

INSERT INTO `kriterias` (`id`, `nama_kriteria`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'iusto', 0.61, '2023-10-06 20:50:14', '2023-10-06 20:50:14'),
(2, 'exercitationem', 0.06, '2023-10-06 20:50:14', '2023-10-06 20:50:14'),
(3, 'sed', 0.93, '2023-10-06 20:50:14', '2023-10-06 20:50:14'),
(4, 'explicabo', 0.84, '2023-10-06 20:50:14', '2023-10-06 20:50:14'),
(5, 'voluptatibus', 0.44, '2023-10-06 20:50:14', '2023-10-06 20:50:14'),
(6, 'voluptas', 0.05, '2023-10-06 20:50:14', '2023-10-06 20:50:14'),
(7, 'quis', 0.93, '2023-10-06 20:50:14', '2023-10-06 20:50:14'),
(8, 'qui', 0.55, '2023-10-06 20:50:14', '2023-10-06 20:50:14'),
(9, 'et', 0.83, '2023-10-06 20:50:14', '2023-10-06 20:50:14'),
(10, 'in', 0.57, '2023-10-06 20:50:14', '2023-10-06 20:50:14'),
(11, 'asf', 12.00, '2023-10-08 22:04:48', '2023-10-08 22:04:48'),
(12, 'asf', 12.00, '2023-10-08 22:05:10', '2023-10-08 22:05:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_06_145233_create_sessions_table', 1),
(7, '2023_10_07_003858_add_role_to_users_table', 2),
(8, '2023_10_07_011510_create_kriterias_table', 3),
(9, '2023_10_07_011606_create_nilai_mahasiswas_table', 3),
(10, '2023_10_07_011648_create_rekomendasis_table', 3),
(11, '2023_10_10_013532_add_columns_to_users_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_mahasiswas`
--

CREATE TABLE `nilai_mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_mahasiswas`
--

INSERT INTO `nilai_mahasiswas` (`id`, `mahasiswa_id`, `kriteria_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 98.36, '2023-10-06 20:56:50', '2023-10-06 20:56:50'),
(2, 1, 3, 77.10, '2023-10-06 20:56:50', '2023-10-06 20:56:50'),
(3, 1, 3, 1.51, '2023-10-06 20:56:50', '2023-10-06 20:56:50'),
(4, 1, 8, 25.45, '2023-10-06 20:56:50', '2023-10-06 20:56:50'),
(5, 1, 6, 74.83, '2023-10-06 20:56:50', '2023-10-06 20:56:50'),
(6, 1, 5, 39.03, '2023-10-06 20:56:50', '2023-10-06 20:56:50'),
(7, 1, 4, 65.11, '2023-10-06 20:56:50', '2023-10-06 20:56:50'),
(8, 1, 2, 39.50, '2023-10-06 20:56:50', '2023-10-06 20:56:50'),
(9, 1, 1, 45.67, '2023-10-06 20:56:50', '2023-10-06 20:56:50'),
(10, 1, 4, 73.75, '2023-10-06 20:56:50', '2023-10-06 20:56:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekomendasis`
--

CREATE TABLE `rekomendasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `total_skor` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rekomendasis`
--

INSERT INTO `rekomendasis` (`id`, `mahasiswa_id`, `total_skor`, `created_at`, `updated_at`) VALUES
(1, 1, 89.09, '2023-10-06 21:02:12', '2023-10-06 21:02:12'),
(2, 1, 36.61, '2023-10-06 21:02:12', '2023-10-06 21:02:12'),
(3, 1, 28.49, '2023-10-06 21:02:12', '2023-10-06 21:02:12'),
(4, 1, 49.34, '2023-10-06 21:02:12', '2023-10-06 21:02:12'),
(5, 1, 4.22, '2023-10-06 21:02:12', '2023-10-06 21:02:12'),
(6, 1, 30.18, '2023-10-06 21:02:12', '2023-10-06 21:02:12'),
(7, 1, 30.03, '2023-10-06 21:02:12', '2023-10-06 21:02:12'),
(8, 1, 11.19, '2023-10-06 21:02:12', '2023-10-06 21:02:12'),
(9, 1, 27.81, '2023-10-06 21:02:12', '2023-10-06 21:02:12'),
(10, 1, 82.76, '2023-10-06 21:02:12', '2023-10-06 21:02:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('o15E3lNAFOLvjEcvMeL5S5E1r60XC8810BjuDHQp', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiekFJNkFtVHZEWDJqOVZRa2tHTHczZUNEdTV2TlpDcnF6QlpxVllYayI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL21haGFzaXN3YXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRpcG5FZG05R1c1L2JTNTNyQ1JRTmdPZU1IVTRiSW1BNDRvOUVNcklmdzBVeU5WTWlTWHNSRyI7fQ==', 1696906173);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'mahasiswa',
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_masuk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `roles`, `jurusan`, `NIM`, `tahun_masuk`) VALUES
(1, 'ASWAR SUMARLIN', 'aswarthedoctor@gmail.com', NULL, '$2y$10$ipnEdm9GW5/bS53rCRQNgOeMHU4bImA44o9EMrIfw0UyNVMiSXsRG', NULL, NULL, NULL, 'PgDvpflI5IurNFKs8maL1QLk990rhw1yIJCcSgMXLHLem0lTAN5vJ4YIcG5t', NULL, NULL, '2023-10-06 07:01:24', '2023-10-06 07:01:24', 'mahasiswa', 'Teknik Informatika', '20182205083', 2018);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_mahasiswas`
--
ALTER TABLE `nilai_mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_mahasiswas_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `nilai_mahasiswas_kriteria_id_foreign` (`kriteria_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rekomendasis`
--
ALTER TABLE `rekomendasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rekomendasis_mahasiswa_id_foreign` (`mahasiswa_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nim_unique` (`NIM`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `nilai_mahasiswas`
--
ALTER TABLE `nilai_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rekomendasis`
--
ALTER TABLE `rekomendasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nilai_mahasiswas`
--
ALTER TABLE `nilai_mahasiswas`
  ADD CONSTRAINT `nilai_mahasiswas_kriteria_id_foreign` FOREIGN KEY (`kriteria_id`) REFERENCES `kriterias` (`id`),
  ADD CONSTRAINT `nilai_mahasiswas_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `rekomendasis`
--
ALTER TABLE `rekomendasis`
  ADD CONSTRAINT `rekomendasis_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
