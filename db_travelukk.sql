-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Feb 2018 pada 16.23
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travelukk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('l','p','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `email`, `gender`) VALUES
(162, 'jondes', 'jondes', '1234', 'gmail', 'l'),
(163, 'asdfafasdf', 'sadf', '3244', 'sdfasf', 'l'),
(164, 'asdfasf', 'sadfasdf', '23423', 'adf', 'l'),
(165, 'asdfsaf', 'asdfsd', '34324', 'sdfsa', 'l'),
(166, 'adfasfasdf', 'asdfas', '34234', 'asdfsadf', 'l'),
(167, 'asdfaf', 'sdf', '324', 'adf', 'p'),
(168, 'as', 'a', 'a', 'a', 'l'),
(169, 'a', 'sasa', '6756', 'sdfasdf', 'l'),
(170, 'asdfad', 'sdfsdf', '3434', 'adf', 'l'),
(171, 'asd', 'sd', '2323', 'asdf', 'l'),
(172, 'asdf', 'asdf', '12312', 'asdf', 'l'),
(173, 'asdfaf', 'adf', '234', 'asdf', 'l');

-- --------------------------------------------------------

--
-- Struktur dari tabel `passengers`
--

CREATE TABLE `passengers` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `reservation_id` int(10) DEFAULT NULL,
  `seat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `passengers`
--

INSERT INTO `passengers` (`id`, `customer_id`, `reservation_id`, `seat`) VALUES
(28, 162, 41, 8),
(29, 163, 42, 1),
(30, 164, 42, 2),
(31, 165, 42, 14),
(32, 166, 42, 12),
(33, 167, 54, 3),
(34, 168, 55, 9),
(35, 169, 56, 66),
(36, 170, 57, 47),
(37, 171, 58, 33),
(38, 172, 59, 33),
(39, 173, 60, 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) NOT NULL,
  `reservation_code` varchar(8) NOT NULL,
  `reservation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) DEFAULT NULL,
  `rute_id` int(10) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `reservation_date`, `user_id`, `rute_id`, `status`) VALUES
(41, 'JO58633', '2018-02-16 16:31:04', 8, 2, 0),
(42, 'JO55015', '2018-02-16 16:34:13', 8, 2, 0),
(43, 'JO47232', '2018-02-16 17:02:01', 8, NULL, 0),
(44, 'JO54637', '2018-02-16 17:02:48', 8, NULL, 0),
(45, 'JO50615', '2018-02-16 17:03:25', 8, NULL, 0),
(46, 'JO94350', '2018-02-16 17:04:07', 8, NULL, 0),
(47, 'JO34208', '2018-02-16 17:04:13', 8, NULL, 0),
(48, 'JO47498', '2018-02-16 17:10:51', 8, NULL, 0),
(49, 'JO20373', '2018-02-16 17:11:15', 8, NULL, 0),
(50, 'JO34775', '2018-02-16 17:19:24', 8, NULL, 0),
(51, 'JO69138', '2018-02-16 17:28:47', 8, NULL, 0),
(52, 'JO39723', '2018-02-16 17:37:53', 8, NULL, 0),
(53, 'JO82585', '2018-02-16 17:38:02', 8, NULL, 0),
(54, 'JO65546', '2018-02-16 17:39:08', 8, 4, 0),
(55, 'JO38353', '2018-02-16 17:42:27', 8, 2, 0),
(56, 'JO89338', '2018-02-16 17:43:11', 8, 2, 0),
(57, 'JO96420', '2018-02-16 19:05:06', 8, 2, 0),
(58, 'JO47265', '2018-02-16 19:06:04', 8, 4, 0),
(59, 'JO87411', '2018-02-17 15:53:26', 8, 2, 0),
(60, 'JO72080', '2018-02-18 15:22:18', 8, 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` int(10) NOT NULL,
  `depart` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `arrive` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rute_from` varchar(50) NOT NULL,
  `rute_to` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `class` enum('First','Economy') NOT NULL,
  `transportation_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id`, `depart`, `arrive`, `rute_from`, `rute_to`, `price`, `class`, `transportation_id`) VALUES
(2, '2018-02-15 11:07:30', '2018-02-22 17:00:00', 'Banjarnegara', 'Purwokerto', 45999, 'First', 2),
(4, '2018-02-15 11:04:04', '2018-02-22 22:05:07', 'Banjarnegara', 'Purwokerto', 55555, 'First', 2),
(5, '2018-02-16 17:28:40', '2018-02-06 20:00:01', 'Banjarnegara', 'Purwokerto', 56345345, 'First', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation`
--

CREATE TABLE `transportation` (
  `id` int(10) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `seat_qty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportation`
--

INSERT INTO `transportation` (`id`, `code`, `description`, `seat_qty`) VALUES
(1, 'Lion Air - JS3E', 'pesawat mabur', '12'),
(2, 'Batik Air -\r\n JS3E', 'gelogelo', '66');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(8, 'jondes', '$2y$10$T41KDj098j7q7mRSh0Vor.j.V/GJVbfH.sxCsvF2wsZjnIm0Wtctm', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `passengers_ibfk_2` (`reservation_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rute_id` (`rute_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_id` (`transportation_id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `passengers`
--
ALTER TABLE `passengers`
  ADD CONSTRAINT `passengers_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `passengers_ibfk_2` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`rute_id`) REFERENCES `rute` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`transportation_id`) REFERENCES `transportation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
