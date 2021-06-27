-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 27, 2021 at 02:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_galeri` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ketentuan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_galeri`, `id_ketentuan`, `judul`, `source`, `created_at`, `updated_at`) VALUES
('0cacc00e-f180-4437-9575-b8c842cca91a', 'G2', 'Indonesia Raya 3 Stanza - Vocal Grup Kelas 5', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VtCWWALDsLk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-03-22 16:09:24', '2021-03-22 16:09:24'),
('1a1bcaa4-8dc2-4d75-b819-1d5d15c83542', 'G1', 'Foto Menggambar', '/images/galeri/1a1bcaa4-8dc2-4d75-b819-1d5d15c83542/test-gambar1.jpg', '2021-06-22 14:59:50', '2021-06-22 14:59:50'),
('1d7207f9-462c-4c43-88cc-172cb003fbcc', 'G2', 'Coba Coba', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bLEr8sVcrpY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-03-23 03:42:19', '2021-03-23 03:42:19'),
('376076be-31ec-4bf9-8dc0-ea64cef89446', 'G1', 'Foto Menggambar 2', '/images/galeri/376076be-31ec-4bf9-8dc0-ea64cef89446/test-gambar-2.png', '2021-06-22 16:17:37', '2021-06-22 16:17:37'),
('dd4d825a-fb10-450b-851d-6c2d0b6962e9', 'G2', 'Indonesia Raya 3 Stanza - Vocal Grup Kelas 1', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FSONiLQF59k\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-03-22 16:23:22', '2021-03-22 16:23:22'),
('dfc1ada7-d344-4ecc-96f5-6a2209a3d24a', 'G2', 'Indonesia Raya 3 Stanza - Vocal Solo Level 4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/kDtSi5s1Thk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-03-22 16:08:13', '2021-03-22 16:08:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_galeri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
