-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2023 pada 19.52
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_brand` int(11) NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `id_brand`, `model`, `stok`, `jenis`, `harga`, `created_at`, `updated_at`) VALUES
(5, 2, 'chino', 10, 'celana', 5000, '2022-10-20 09:35:32', '2022-11-29 08:31:39'),
(6, 7, 'tees', 20, 'kaos', 7000, '2022-10-20 09:37:41', '2022-11-29 14:02:40'),
(7, 3, 'wallet', 13, 'dompet', 1000, '2022-10-20 09:38:28', '2023-01-06 09:35:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_brg_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jml_brg_keluar` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `no_brg_keluar`, `id_barang`, `jml_brg_keluar`, `total`, `created_at`, `updated_at`) VALUES
(1, 'NBK-001', 7, 5, 5000, '2022-10-27 07:03:40', '2022-10-27 07:03:40'),
(2, 'NBK-002', 6, 2, 14000, '2022-11-29 14:02:40', '2022-11-29 14:02:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_brg_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jml_brg_masuk` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `no_brg_masuk`, `id_barang`, `jml_brg_masuk`, `total`, `created_at`, `updated_at`) VALUES
(1, 'NBM-001', 6, 5, 35000, '2022-10-27 06:41:07', '2022-10-27 06:41:07'),
(2, 'NBM-002', 5, 3, 15000, '2022-11-29 08:31:39', '2022-11-29 08:31:39'),
(3, 'NBM-003', 6, 3, 21000, '2022-11-29 08:39:54', '2022-11-29 08:39:54'),
(4, 'NBM-004', 6, 1, 7000, '2022-11-29 08:40:29', '2022-11-29 08:40:29'),
(5, 'NBM-005', 7, 1, 1000, '2022-11-29 08:57:10', '2022-11-29 08:57:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_retur`
--

CREATE TABLE `barang_retur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_brg_retur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jml_brg_retur` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang_retur`
--

INSERT INTO `barang_retur` (`id`, `no_brg_retur`, `id_barang`, `jml_brg_retur`, `total`, `created_at`, `updated_at`) VALUES
(1, 'NBR-001', 5, 3, 15000, '2022-10-27 07:07:16', '2022-10-27 07:07:16'),
(2, 'NBR-002', 7, 3, 3000, '2023-01-06 09:35:59', '2023-01-06 09:35:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

CREATE TABLE `brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`id`, `nama_brand`, `created_at`, `updated_at`) VALUES
(2, 'seventy four', '2022-10-19 15:07:29', '2022-10-19 15:07:29'),
(3, 'magma', '2022-10-19 15:07:37', '2022-10-19 15:07:37'),
(4, 'screamous', '2022-10-19 15:07:55', '2022-10-19 15:07:55'),
(5, 'sch', '2022-10-19 15:08:01', '2022-10-19 15:08:01'),
(6, 'camo', '2022-10-19 15:08:08', '2022-10-19 15:08:08'),
(7, 'warning', '2022-10-19 15:08:24', '2022-10-19 15:08:24'),
(8, 'mexico', '2022-10-19 15:08:31', '2022-10-19 15:08:31');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_10_10_065949_barang', 1),
(4, '2022_10_10_070026_barang_masuk', 1),
(5, '2022_10_10_070117_barang_keluar', 1),
(6, '2022_10_10_070132_barang_retur', 1),
(7, '2022_10_10_070619_brand', 1);

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
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `level`, `password`, `created_at`, `updated_at`) VALUES
(16, 'Edi Zamri', 'admin', 'admin', '$2y$10$tMVj/MHMPUxOBzAJzvVt8.t3GOVeYeI3q/E9zLE166eiimLEORcF2', '2022-10-19 12:07:53', '2023-01-08 14:20:56'),
(17, 'Tania', 'tania', 'karyawan', '$2y$10$9vzEva.K9bKmOq3xSVWFQOHSg/Bq/F.7VbJLuBOl20UUTYaiwwJc.', '2023-01-06 09:33:34', '2023-01-06 09:34:51'),
(18, 'Desy', 'desy', 'karyawan', '$2y$10$JVAu//amK1l.06OLP5UFfOg3d3.6dCLi9opViTAnhCuYbS8ZLCcZe', '2023-01-06 09:33:59', '2023-01-06 09:34:43'),
(19, 'Sahrul', 'sahrul', 'karyawan', '$2y$10$P1a.U6C5chu5JyZe0RC2JO8fQ/1k/WIiekEO2rVnp44uq8.EloVN6', '2023-01-06 09:34:16', '2023-01-06 09:35:02'),
(20, 'Rahman', 'rahman', 'karyawan', '$2y$10$Edg8eE9Ir1FFhJuuPLskPOmINyw8ajrkYbnbyDHy.PBDIa1hCYn1O', '2023-01-06 09:34:33', '2023-01-06 09:34:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang_retur`
--
ALTER TABLE `barang_retur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `barang_retur`
--
ALTER TABLE `barang_retur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
