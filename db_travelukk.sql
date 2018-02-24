-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Feb 2018 pada 13.33
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
(198, 'asd', 'dfa', '2323', 'adf', 'l'),
(199, 'jondes', 'jondes', '9283', 'dfdf', 'l'),
(200, 'sdf', 'asdf', '23', 'adf', 'l'),
(201, 'sdfasdf', 'asdfaf', '3242343', 'sdfsadf', 'l'),
(202, 'asdfa', 'asdf', '324', 'sdf', 'l'),
(203, 'jondes', 'purwokerto', '23232', 'jondes@gmail.com', 'l'),
(204, 'apu', 'pu', '2323', 'apu@gmail.com', 'l'),
(205, 'sdf', 'sad', '232', 'sadas', 'l'),
(206, 'sdf', 'asdf', '453453', 'sdfsad', 'l'),
(207, 'jondes', 'jondes', '2323', '', 'l'),
(208, 'jondes', 'jondes', '1212', 'asdf', 'l');

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
(64, 198, 80, 28),
(65, 199, 81, 28),
(66, 200, 82, 36),
(67, 201, 83, 3),
(68, 202, 84, 10),
(69, 203, 85, 24),
(70, 204, 86, 11),
(71, 205, 87, 16),
(72, 206, 88, 9),
(73, 207, 89, 2),
(74, 208, 90, 51);

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
  `status` int(1) NOT NULL DEFAULT '0',
  `proof_of_payment` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `reservation_date`, `user_id`, `rute_id`, `status`, `proof_of_payment`) VALUES
(80, 'JO65241', '2018-02-24 05:04:01', 8, 5, 0, '56ff48b457f041612af86b8d01e99b811b424d5e9837c7f95a4d14a67470e5af.jpg'),
(81, 'JO91484', '2018-02-24 05:11:56', 8, 6, 1, 'c384824e5d150703423bcf5a8896a3f8079c22748d4a070d6f93ba17d34cfc07.JPG'),
(82, 'JO91378', '2018-02-24 06:05:14', 8, 2, 0, NULL),
(83, 'JO97729', '2018-02-24 06:59:49', 8, 2, 0, NULL),
(84, 'JO52900', '2018-02-24 07:03:45', 8, 2, 0, '1be78b8def797f0ac5a82fe0a9f664c009ef93e950c92b2f5e3987ceba88da5d.JPG'),
(85, 'JO70289', '2018-02-24 07:23:41', 8, 2, 0, NULL),
(86, 'JO95593', '2018-02-24 08:56:29', 12, 2, 0, '62dffb2929638dc96b6bfcfb425c1294a4f0c65cc7590795e039a8198b70629e.png'),
(87, 'JO34643', '2018-02-24 09:57:12', 8, 2, 0, '82a9b322f81d53220cd72c66706166987f8377aa999beaf4eabf82be560c0a66.jpg'),
(88, 'JO78444', '2018-02-24 11:16:34', 8, 2, 0, NULL),
(89, 'JO33857', '2018-02-24 11:31:50', 8, 2, 0, NULL),
(90, 'JO35149', '2018-02-24 11:33:04', 12, 2, 0, NULL);

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
(5, '2018-02-16 17:28:40', '2018-02-06 20:00:01', 'Banjarnegara', 'Purwokerto', 56345345, 'First', 1),
(6, '2018-02-24 05:11:22', '2018-02-26 06:06:07', 'Wonosobo', 'Cilacap', 444444, 'Economy', 1);

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
(1, 'Lion Air - JS3E', 'pesawat mabur', '66'),
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
(8, 'jondes', '$2y$10$T41KDj098j7q7mRSh0Vor.j.V/GJVbfH.sxCsvF2wsZjnIm0Wtctm', 1),
(12, 'apu', '$2y$10$0cRlF/ZahwjapSjIrMl1Y.bWc2uDdPxNUupVV/SR/R8S4bt6..AgO', 1),
(13, 'mbuh', '$2y$10$ZqimX84V59fX2gy9Bdykne/QUDMm1bD/qEE6KsmB1C.dWldQTD3aS', 1),
(14, 'sfgsdfg', '$2y$10$dY5.Wrk3QD27gOppL6qcfu6Hgp7WfK92PlnkWYE6KnTPLcEoOIoE2', 1),
(20, 'dsf', '$2y$10$NB/OImEPv6O9/gaef/S7a.HlQmvJtmdYKLWWtHLQVpe8wGBMujuZi', 1),
(22, 'hel', '$2y$10$R/BeEE1D7kkDFUx0oKpXnu9RXiVWxMTU04P7XooACS5Jz42n7bI9e', 1),
(23, 'pu', '$2y$10$mq7HeOpLJcviX9DOrcDIFuR1M/RMLNsCP8BYokwHkG19OwmEyE9Dm', 1);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
