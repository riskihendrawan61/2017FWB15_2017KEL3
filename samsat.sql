-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mei 2017 pada 13.50
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samsat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bpkb`
--

CREATE TABLE `bpkb` (
  `id` int(10) UNSIGNED NOT NULL,
  `kendaraan_id` int(10) UNSIGNED NOT NULL,
  `noseri` text COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(10) UNSIGNED NOT NULL,
  `wajibpajak_id` int(10) UNSIGNED NOT NULL,
  `merk` text COLLATE utf8_unicode_ci NOT NULL,
  `jenis` text COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `wajibpajak_id`, `merk`, `jenis`, `updated_at`, `created_at`) VALUES
(1, 2, 'honda', 'roda dua', '2017-05-22 14:16:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_22_050430_buat_tabel_wajibpajak', 1),
('2017_05_22_050504_buat_tabel_kendaraan', 1),
('2017_05_22_050519_buat_tabel_stnk', 1),
('2017_05_22_050632_buat_tabel_bpkb', 1),
('2017_05_22_050647_buat_tabel_plat', 1),
('2017_05_22_050710_buat_tabel_petugas', 1),
('2017_05_22_050721_buat_tabel_tagihanstnk', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `username`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'riski', 'riski123', 'qwedc', 'b6XShaA8OqEXbiT97NWi5cvhUmHvFhQZ93dDTJqM5F4kBlGQ9Gb6PJTTrag6', '2017-05-22 10:05:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plat`
--

CREATE TABLE `plat` (
  `id` int(10) UNSIGNED NOT NULL,
  `kendaraan_id` int(10) UNSIGNED NOT NULL,
  `noplat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tglbuat` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stnk`
--

CREATE TABLE `stnk` (
  `id` int(10) UNSIGNED NOT NULL,
  `kendaraan_id` int(10) UNSIGNED NOT NULL,
  `norangka` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomesin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `silinder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bahanbakar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `warna` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihanstnk`
--

CREATE TABLE `tagihanstnk` (
  `id` int(10) UNSIGNED NOT NULL,
  `stnk_id` int(10) UNSIGNED NOT NULL,
  `petugas_id` int(10) UNSIGNED NOT NULL,
  `tanggalpembayaran` date NOT NULL,
  `nopembayaran` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wajibpajak`
--

CREATE TABLE `wajibpajak` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jekel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `wajibpajak`
--

INSERT INTO `wajibpajak` (`id`, `nama`, `jekel`, `alamat`, `telepon`, `updated_at`, `created_at`) VALUES
(2, 'riski', 'laki laki', 'peramuka', '08981012671', '2017-05-22 14:15:36', '0000-00-00 00:00:00'),
(3, 'fagae', 'laslkd', 'ada', '1234', '2017-05-22 09:54:24', '2017-05-22 09:54:24'),
(4, 'wqeqw', 'weq', 'weqwe', '7887', '2017-05-22 09:56:06', '2017-05-22 09:56:06'),
(5, 'jkl', 'fgh', 'ghj', '345', '2017-05-22 09:57:39', '2017-05-22 09:57:39'),
(6, 'jkl', 'fgh', 'ghj', '34556', '2017-05-22 09:58:23', '2017-05-22 09:58:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpkb`
--
ALTER TABLE `bpkb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bpkb_kendaraan_id_foreign` (`kendaraan_id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kendaraan_wajibpajak_id_foreign` (`wajibpajak_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `petugas_username_unique` (`username`);

--
-- Indexes for table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plat_kendaraan_id_foreign` (`kendaraan_id`);

--
-- Indexes for table `stnk`
--
ALTER TABLE `stnk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stnk_kendaraan_id_foreign` (`kendaraan_id`);

--
-- Indexes for table `tagihanstnk`
--
ALTER TABLE `tagihanstnk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagihanstnk_stnk_id_foreign` (`stnk_id`),
  ADD KEY `tagihanstnk_petugas_id_foreign` (`petugas_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wajibpajak`
--
ALTER TABLE `wajibpajak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpkb`
--
ALTER TABLE `bpkb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `plat`
--
ALTER TABLE `plat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stnk`
--
ALTER TABLE `stnk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tagihanstnk`
--
ALTER TABLE `tagihanstnk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wajibpajak`
--
ALTER TABLE `wajibpajak`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bpkb`
--
ALTER TABLE `bpkb`
  ADD CONSTRAINT `bpkb_kendaraan_id_foreign` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_wajibpajak_id_foreign` FOREIGN KEY (`wajibpajak_id`) REFERENCES `wajibpajak` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `plat`
--
ALTER TABLE `plat`
  ADD CONSTRAINT `plat_kendaraan_id_foreign` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `stnk`
--
ALTER TABLE `stnk`
  ADD CONSTRAINT `stnk_kendaraan_id_foreign` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tagihanstnk`
--
ALTER TABLE `tagihanstnk`
  ADD CONSTRAINT `tagihanstnk_petugas_id_foreign` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tagihanstnk_stnk_id_foreign` FOREIGN KEY (`stnk_id`) REFERENCES `stnk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
