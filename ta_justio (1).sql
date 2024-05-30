-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2024 pada 19.56
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_justio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`id`, `kriteria`, `tipe`, `bobot`, `w`, `created_at`, `updated_at`) VALUES
(1, 'harga', 'cost', '10', '0.1', '2024-05-30 09:54:34', '2024-05-30 09:54:34'),
(2, 'daya', 'cost', '10', '0.1', '2024-05-30 09:54:34', '2024-05-30 09:54:34'),
(3, 'berat', 'cost', '20', '0.2', '2024-05-30 09:54:34', '2024-05-30 09:54:34'),
(4, 'tenaga', 'benefit', '10', '0.1', '2024-05-30 09:54:34', '2024-05-30 09:54:34'),
(5, 'kapasitas', 'benefit', '30', '0.3', '2024-05-30 09:54:34', '2024-05-30 09:54:34'),
(6, 'garansi', 'benefit', '20', '0.2', '2024-05-30 09:54:34', '2024-05-30 09:54:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `alternatif`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `v`, `created_at`, `updated_at`) VALUES
(1, 'AC DAIKIN BREEZE MALAYSIA R32 FTP15AV14 (0,5 PK)', '3620000', '0.5\r\n', '390', '10', '4', '26', NULL, '2024-05-30 09:54:14', '2024-05-30 09:54:14'),
(2, 'AC DAIKIN FTC 25 NV14 + RC 25 NV14 (1 PK)', '4679000', '1', '780', '16', '10', '35', NULL, '2024-05-30 09:54:14', '2024-05-30 09:54:14'),
(3, 'AC DAIKIN 1,5 PK THAILAND FTC35NV14 (1,5 PK)', '5799000', '1.5', '933', '21', '4', '39', NULL, '2024-05-30 09:54:14', '2024-05-30 09:54:14'),
(4, 'AC DAIKIN 2 PK STANDART THAILAND STC-50NV14 (2 PK)						', '7729000', '2', '1524', '32', '4', '50', NULL, '2024-05-30 09:54:14', '2024-05-30 09:54:14'),
(5, 'AC DAIKIN 2.5 PK STANDARD THAILAND (STC60NV)', '10990000', '2.5\r\n', '1912', '45\r\n', '3', '28', NULL, '2024-05-30 09:54:14', '2024-05-30 09:54:14');

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
-- Struktur dari tabel `konver`
--

CREATE TABLE `konver` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `konver`
--

INSERT INTO `konver` (`id`, `alternatif`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `v`, `created_at`, `updated_at`) VALUES
(1, 'AC DAIKIN BREEZE MALAYSIA R32 FTP15AV14 (0,5 PK)', '2', '1', '2', '1', '3', '2', NULL, '2024-05-30 09:54:14', '2024-05-30 09:54:14'),
(2, 'AC DAIKIN FTC 25 NV14 + RC 25 NV14 (1 PK)', '3', '2', '4', '3', '5', '4', NULL, '2024-05-30 09:54:14', '2024-05-30 09:54:14'),
(3, 'AC DAIKIN 1,5 PK THAILAND FTC35NV14 (1,5 PK)', '4', '3', '5', '3', '3', '5', NULL, '2024-05-30 09:54:14', '2024-05-30 09:54:14'),
(4, 'AC DAIKIN 2 PK STANDART THAILAND STC-50NV14 (2 PK)						', '5', '4', '5', '5', '3', '5', NULL, '2024-05-30 09:54:14', '2024-05-30 09:54:14'),
(5, 'AC DAIKIN 2.5 PK STANDARD THAILAND (STC60NV)', '5', '5', '5', '5', '3', '2', NULL, '2024-05-30 09:54:14', '2024-05-30 09:54:14');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_28_145505_create_bobot_table', 1),
(6, '2024_05_28_152726_create_data_table', 1),
(7, '2024_05_28_152958_create_konver_table', 1),
(8, '2024_05_30_040059_create_real_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `real`
--

CREATE TABLE `real` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `real`
--

INSERT INTO `real` (`id`, `alternatif`, `merek`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `v`, `created_at`, `updated_at`) VALUES
(1, 'AC DAIKIN BREEZE MALAYSIA R32 FTP15AV14 (0,5 PK)', 'Daikin', '3620000', '0.5\r\n', '390', '10', '4', '26', NULL, NULL, NULL),
(2, 'AC DAIKIN FTC 25 NV14 + RC 25 NV14 (1 PK)', 'Daikin', '4679000', '1', '780', '16', '10', '35', NULL, NULL, NULL),
(3, 'AC DAIKIN 1,5 PK THAILAND FTC35NV14 (1,5 PK)', 'Daikin', '5799000', '1.5', '933', '21', '4', '39', NULL, NULL, NULL),
(4, 'AC DAIKIN 2 PK STANDART THAILAND STC-50NV14 (2 PK)						', 'Daikin', '7729000', '2', '1524', '32', '4', '50', NULL, NULL, NULL),
(5, 'AC DAIKIN 2.5 PK STANDARD THAILAND (STC60NV)', 'Daikin', '10990000', '2.5\r\n', '1912', '45\r\n', '3', '28', NULL, NULL, NULL),
(6, 'AC PANASONIC CS/CU-YN5WKJ AC Split (0.5 PK)\r\n', 'Panasonic', '3200000', '0.5\r\n', '410\r\n', '11', '4\r\n', '27', NULL, NULL, NULL),
(7, 'AC PANASONIC 1PK CSLN9WKJ (1PK)\r\n', 'Panasonic', '3858000', '1', '550', '10', '3\r\n', '26 ', NULL, NULL, NULL),
(8, 'AC PANASONIC CS/CU PU 5 XKJ 1/2 PK INVERTER\r\n', 'Panasonic', '4790000', '1.5', '760\r\n', '9', '4\r\n', '26', NULL, NULL, NULL),
(9, 'AC PANASONIC SPLIT CS YN18WKJ - 2PK', 'Panasonic', '6250000', '2', '1660', '34', '1', '26', NULL, NULL, NULL),
(10, 'AC PANASONIC 2.5 PK GO DOWN YN24WKJ', 'Panasonic', '8879000', '2.5', '2140', '43', '1', '41', NULL, NULL, NULL),
(11, 'AC LG FRA126 H05TN4 AC Split (0 5PK)', 'LG', '3029000', '0.5', '370', '9', '3', '20', NULL, NULL, NULL),
(12, 'AC LG 1 PK T09EV5 1 PK GOLDFIN DUAL INVERTER R32', 'LG', '3999000', '1', '920', '10', '10', '30', NULL, NULL, NULL),
(13, 'AC LG 1/2 PK DUAL COOL INVERTER T06EV4', 'LG', '4199000', '1.5', '420', '12', '10', '31', NULL, NULL, NULL),
(14, 'AC LG 2 PK H18TN4 NEW HERCULES STANDARD (2 PK)', 'LG', '6189000', '2', '1617', '34', '3', '34', NULL, NULL, NULL),
(15, 'AC LG T18EV5 AC Split 2,5 PK Dual Inverter dengan watt control', 'LG', '7368000', '2.5', '1840', '36', '10', '31', NULL, NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `konver`
--
ALTER TABLE `konver`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `real`
--
ALTER TABLE `real`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konver`
--
ALTER TABLE `konver`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `real`
--
ALTER TABLE `real`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
