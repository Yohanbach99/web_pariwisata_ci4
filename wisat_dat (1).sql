-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 10:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisat_dat`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `description`, `image`, `created_at`) VALUES
(25, 'CANDI PRAMBANAN', 'Prambanan adalah candi Hindu terbesar dan termegah yang pernah dibangun di Jawa kuno, pembangunan candi Hindu kerajaan ini dimulai oleh Sri Maharaja Rakai Pikatan sebagai tandingan candi Buddha Borobudur dan juga candi Sewu yang terletak tak jauh dari Prambanan.\r\nLokasi : Jawa Tengah', '1685389624_6636a77cbaef4a940330.jpg', '2023-05-29 19:47:04'),
(26, 'CANDI BOROBUDUR', 'Candi Borobudur merupakan candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah. Candi ini terletak kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat daya Surakarta, dan 40 km di sebelah barat laut Yogyakarta.\r\nLokasi : Jawa Tengah', '1685389709_dd960aabee37af73561c.jpg', '2023-05-29 19:48:29'),
(27, 'PANTAI KLAYAR', 'Pantai Klayar adalah sebuah pantai dengan pasir putih dan batu karang serta tebing-tebing batu yang mengelilingi. Pantai ini terletak di Pacitan, Jawa Timur dan berbatasan dengan Wonogiri, Jawa Tengah. Tepatnya berada di Desa Sendang, Kecamatan Donorojo, Kabupaten Pacitan, Provinsi Jawa Timur.\r\nLokasi : Jawa Timur', '1685390843_f73c7305c07ce0c6fb2d.jpg', '2023-05-29 19:49:52'),
(28, 'TELAGA SARANGAN', 'Telaga Sarangan, juga dikenal sebagai Telaga Pasir adalah telaga alami yang berada di ketinggian 1.200 meter di atas permukaan laut dan terletak di lereng Gunung Lawu,Kecamatan Plaosan,Kabupaten Magetan,Jawa Timur. Telaga ini berjarak sekitar 16 kilometer arah barat kota Magetan.\r\nLokasi : Jawa Timur', '1685389850_5e55f55bf7cd8668716e.jpg', '2023-05-29 19:50:50'),
(29, 'PANTAI PARANGTRITIS', 'Pantai Parangtritis hanya berjarak 27 km dari pusat Kota Yogyakarta. Pantai ini terkenal dengan pemandangan sunset yang romantis. Selain itu, Pantai Parangtritis ini merupakan pantai yang paling terkenal di antara pantai-pantai lain yang tersebar di wilayah Yogyakarta.\r\nLokasi : DIY Yogyakarta', '1685390880_a591d63de3bfbcdbca3a.jpg', '2023-05-29 19:52:06'),
(30, 'GUNUNG LAWU', 'Gunung Lawu (Hanacaraka:ꦒꦸꦤꦸꦁ​ꦭꦮꦸ) adalah sebuah gunung berapi aktif yang terletak di Pulau Jawa, tepatnya di perbatasan Jawa Tengah dan Jawa Timur, Indonesia. Gunung Lawu memiliki ketinggian sekitar 3.265 mdpl. \r\nLokasi : Perbatasan Jawa Timur Dan Jawa Tengah', '1685391651_9a246e54c3b9dae9c3bf.jpg', '2023-05-29 19:54:04'),
(31, 'GUNUNG BROMO', 'Gunung Bromo adalah salah satu gunung api yang masih aktif di Indonesia. Gunung yang memiliki ketinggian 2.392 meter di atas permukaan laut ini merupakan destinasi andalan Jawa Timur. Gunung Bromo berdiri gagah dikelilingi kaldera atau lautan pasir seluas 10 kilometer persegi.\r\nLokasi : Jawa Timur', '1685390111_700af13b2e100cf09c8a.jpg', '2023-05-29 19:55:11'),
(32, 'PANTAI PANDAWA', 'Pantai Pandawa memiliki panorama yang menakjubkan dengan suasana yang tenang dan damai. Saat memasuki kawasan pantai, kita akan dibuat takjub dengan panorama indah tebing tinggi yang mengapit jalan sepanjang 1,5 km.\r\nLokasi : Bali', '1685390177_61ca8fe2f58aa4eb615f.jpg', '2023-05-29 19:56:18'),
(33, 'RAJA AMPAT', 'Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung (Vogelkoop) Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat.\r\nLokasi : Kab. Raja Ampat', '1685390252_5ba4e66fd1f97f561d2d.jpg', '2023-05-29 19:57:32'),
(34, 'TAMAN NASIONAL BUNAKEN', 'Taman Nasional Bunaken adalah taman laut yang terletak di Sulawesi Utara, Indonesia. Taman ini terletak di Segitiga Terumbu Karang yang menjadi habitat bagi 390 spesies terumbu karang dan juga berbagai spesies ikan, moluska, reptil, dan mamalia laut.\r\nLokasi : Sulawesi Utara', '1685391208_a443ab772813ca41c6d9.jpg', '2023-05-29 20:13:28'),
(35, 'PULAU WAIGEO', 'Pulau Waigeo adalah pulau yang berada di Papua Barat Daya di bagian timur Indonesia. Pulau ini dikenal juga dengan nama Amberi atau Waigiu. Pulau Waigeo adalah pulau terbesar dari empat pulau utama dari Kepulauan Raja Ampat.\r\nLokasi : Prov. Papua Barat Daya', '1685391518_40bb33512bc078c1229f.jpg', '2023-05-29 20:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(1, '', 'yoh@gmail.com', '$2y$10$ZPNDgMBQaUwidjnOEnjmluFro8Z6Z6qOWWcZCdrGbmziczHpvR11a', 'admin', '2023-05-26 16:03:12'),
(2, '', 'yoha@gmail.com', '$2y$10$YyOmfphHXl.I0xqOD4FKTeKNVF/vYgkea9ORrLyD9bm/xNuWkPHw6', 'user', '2023-05-26 16:16:22'),
(3, '', 'yo@gmail.com', '$2y$10$nO7z77EZk2SxH90JjLgaQu7TTJ0OCbRnow99OYbsoD6dIsL3u1OW.', 'user', '2023-05-26 17:01:10'),
(4, '', 'yohanbachtiar2001@gmail.com', '$2y$10$4KkHZnTe4dKThZ1bk9IqU.a9YXR3EANoRixt86Su66vbqRAy.1ypa', 'user', '2023-05-26 18:22:08'),
(6, '', 'yohanbachtiar2x001@gmail.com', '$2y$10$cxJEabB5srmM7devh25p..OF7.8MxQ.F7rUEHXtx6tovfIUuOFKCO', 'user', '2023-05-26 18:23:38'),
(7, '', 'yohanbachtiar1@gmail.com', '$2y$10$tCFj/XHmIpqoQcQoYNxlguxpCBRl9VsomzQqhe8Vc7yqt4UR61URq', 'user', '2023-05-26 18:47:24'),
(9, '', 'y@gmail.com', '$2y$10$V4nZ9OpE8MHqHQQAl4IlnuMKt2lvL6pwLxTPHc1T8kVKV3B..ljYm', 'user', '2023-05-26 23:59:32'),
(11, '', 'yohh@gmail.com', '$2y$10$WorfY0dJJauFKE1GcJE2x.Yw2T/SYoHTktfgPR2F0Xs/h0TUcU1sy', 'user', '2023-05-27 08:47:16'),
(12, '', 'yohzz@gmail.com', '$2y$10$DLeO6Alb9C3u3k29cUfTb./ZDvpHjCJr2ZEL3WPqnwo.uhnVTh5vK', 'user', '2023-05-27 08:58:55'),
(13, 'baa', 'yohanbachtiar20011@gmail.com', '$2y$10$UccJfTg.BE50B9QoorlDPOrC6OhQILUOLIB5iByTunXuu2bywuaUK', 'user', '2023-05-27 09:02:11'),
(14, 'yooo', 'yoah@gmail.com', '$2y$10$p7CnQeC./DK6Laoxt7VYQOlVN7JHmOOyupn3PWdNx.WwwjSMgHPn.', 'user', '2023-05-28 07:39:13'),
(15, 'Yohan Dwi Bachtiar', '202165008@Student.unipa.ac.id', '$2y$10$kxE2NrpZ4yKIdgKTFfCGB.KCDy.Fo5O9l/9A.xQ6SwBGI34ahlCaS', 'user', '2023-05-30 01:02:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
