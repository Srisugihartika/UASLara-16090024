-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 14.47
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caradaftars`
--

CREATE TABLE `caradaftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `caradaftars`
--

INSERT INTO `caradaftars` (`id`, `nama`, `alamat`, `no_hp`, `email`, `basis`, `foto`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bintang Lestari', 'Tegal', '089235899990', 'bintang@gmail.com', 'Bagama', 'images1.jpg', '1702-4314-1-SM.pdf', '2019-07-14 12:46:33', '2019-07-14 12:58:39', NULL),
(2, 'Jono Kasino', 'Tegal', '08962345678', 'jono@gmail.com', 'Bkomunitas', '1563134279_wallpaper1.jpg', '1563134279_12217300.pdf', '2019-07-14 12:57:59', '2019-07-14 12:57:59', NULL),
(3, 'Lina Marlina', 'Tegal', '0892345677', 'lina@gmail.com', 'Bdisabilitas', '1563134407_pamflet.jpg', '1563134407_19179.pdf', '2019-07-14 13:00:07', '2019-07-14 13:18:20', '2019-07-14 13:18:20'),
(4, 'Bulan malam satu', 'Tegal', '08962345678', 'bulan@gmail.com', 'Bagama', 'ss1.png', '1702-4314-1-SM.pdf', '2019-07-15 03:07:28', '2019-07-15 03:08:53', '2019-07-15 03:08:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_03_134112_create_table_profiladmin', 1),
(4, '2019_07_07_083709_create_pengumumen_table', 1),
(5, '2019_07_07_084211_create_profiladmins_table', 1),
(6, '2019_07_07_084717_create_caradaftars_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumumen`
--

CREATE TABLE `pengumumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengumumen`
--

INSERT INTO `pengumumen` (`id`, `nama`, `tanggal`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Surat Pemberitahuan', '2019-07-16', '1702-4314-1-SM.pdf', '2019-07-14 11:57:18', '2019-07-14 11:57:56', NULL),
(2, 'Surat Undangan', '2019-07-15', '1563130702_2097-5480-1-PB.pdf', '2019-07-14 11:58:22', '2019-07-14 11:58:22', NULL),
(3, 'Pengumuman Relasi', '2019-08-12', '1563130815_6651-Article Text-4596-1-10-20181122.pdf', '2019-07-14 12:00:15', '2019-07-14 12:12:19', '2019-07-14 12:12:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiladmins`
--

CREATE TABLE `profiladmins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profiladmins`
--

INSERT INTO `profiladmins` (`id`, `nama`, `alamat`, `no_hp`, `email`, `jabatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Adit', 'Tegal', '089623083339', 'adit@gmail.com', 'Admin', NULL, NULL, NULL),
(2, 'Paijo', 'Tegal', '08923087654', 'Ijo@gmail.com', 'Sekretaris', NULL, '2019-07-14 12:20:19', '2019-07-14 12:20:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiladmin_tbl`
--

CREATE TABLE `profiladmin_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caradaftars`
--
ALTER TABLE `caradaftars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `caradaftars_email_unique` (`email`);

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
-- Indeks untuk tabel `pengumumen`
--
ALTER TABLE `pengumumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profiladmins`
--
ALTER TABLE `profiladmins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiladmins_email_unique` (`email`);

--
-- Indeks untuk tabel `profiladmin_tbl`
--
ALTER TABLE `profiladmin_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiladmin_tbl_email_unique` (`email`);

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
-- AUTO_INCREMENT untuk tabel `caradaftars`
--
ALTER TABLE `caradaftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengumumen`
--
ALTER TABLE `pengumumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profiladmins`
--
ALTER TABLE `profiladmins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profiladmin_tbl`
--
ALTER TABLE `profiladmin_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
