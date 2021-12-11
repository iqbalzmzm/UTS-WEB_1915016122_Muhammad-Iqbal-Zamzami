-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 07:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_vaksin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesertavaksin`
--

CREATE TABLE `pesertavaksin` (
  `id` int(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesertavaksin`
--

INSERT INTO `pesertavaksin` (`id`, `foto`, `nama_lengkap`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nomor_telepon`, `email`, `keterangan`) VALUES
(1, 'popo.jpg', 'lala', 'lala', 'lala', '2021-12-28', 'Perempuan', '123', 'lal@gmai.com', 'Belum Vaksin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pengguna` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `pengguna`) VALUES
(1, 'iqbal', '$2y$10$tOuvkkiDQBdTPqvOfzjpX.mn75/K5A4AAnHYuBRwISqCRa33LqgMy', 'user'),
(2, 'brando', '$2y$10$5BUOjO5kCoXNZt5kq2dW6enM9Y3HduCjDfe20lMcAnGYK0FG8ymx6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesertavaksin`
--
ALTER TABLE `pesertavaksin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesertavaksin`
--
ALTER TABLE `pesertavaksin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
