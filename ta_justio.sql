-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2024 pada 19.19
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
(1, 'harga', 'cost', '25', '0.25', '2024-05-28 08:00:46', '2024-05-28 08:00:46'),
(2, 'daya', 'cost', '15', '0.15', '2024-05-28 08:00:46', '2024-05-28 08:00:46'),
(3, 'berat', 'cost', '20', '0.2', '2024-05-28 08:00:46', '2024-05-28 08:00:46'),
(4, 'tenaga', 'benefit', '20', '0.2', '2024-05-28 08:00:46', '2024-05-28 08:00:46'),
(5, 'kapasitas', 'benefit', '10', '0.1', '2024-05-28 08:00:46', '2024-05-28 08:00:46'),
(6, 'garansi', 'benefit', '10', '0.1', '2024-05-28 08:00:46', '2024-05-28 08:00:46');

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
(1, 'AC DAIKIN FTC 25 NV14 + RC 25 NV14 (1 PK)', 'Rp4,679,000', '1 PK\r\n', '780  Watt\r\n', '16 m2', '10 Tahun', '35 Kg\r\n', NULL, '2024-05-28 15:35:12', '2024-05-28 15:35:17'),
(2, 'AC PANASONIC CSLN9WKJ (1 PK)\r\n', 'Rp3,858,000\r\n', '1 PK\r\n', '760 Watt\r\n', '10 m2\r\n', '3 Tahun\r\n', '27 Kg\r\n', NULL, '2024-05-28 15:35:19', '2024-05-28 15:35:21'),
(3, 'AC LG T09EV5 GOLDFIN DUAL INVERTER R32 (1PK)', 'Rp3,999,000', '1 PK\r\n', '920  Watt\r\n', '10 m2\r\n', '10 Tahun\r\n', '30 Kg\r\n', NULL, '2024-05-28 15:35:22', '2024-05-28 15:35:23');

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
(1, 'AC DAIKIN FTC 25 NV14 + RC 25 NV14 (1 PK)', '3', '2', '4', '3', '5', '4', NULL, '2024-05-28 15:37:24', '2024-05-28 15:37:24'),
(2, 'AC PANASONIC CSLN9WKJ (1 PK)\r\n', '2\r\n', '2', '4', '1\r\n', '3\r\n', '2\r\n', NULL, '2024-05-28 15:37:24', '2024-05-28 15:37:24'),
(3, 'AC LG T09EV5 GOLDFIN DUAL INVERTER R32 (1PK)', '2', '2', '5', '1', '5', '3', NULL, '2024-05-28 15:37:24', '2024-05-28 15:37:24');

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
(7, '2024_05_28_152958_create_konver_table', 1);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konver`
--
ALTER TABLE `konver`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
