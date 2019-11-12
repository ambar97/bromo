-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 05:33 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bromo_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `nama` text,
  `username` text,
  `password` text,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `kode_booking` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `tanggal_berangkat` date DEFAULT NULL,
  `tanggal_pulang` date DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `customers_idcustomers` int(11) NOT NULL,
  `status_booking` int(11) DEFAULT NULL,
  `bukti_pembayaran` text,
  `admin_idadmin` int(11) DEFAULT NULL,
  `tanggal_upload` datetime DEFAULT NULL,
  `tanggal_verifikasi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idcontact` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `noWa` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noTelp` varchar(12) NOT NULL,
  `idWchat` varchar(20) NOT NULL,
  `idLine` varchar(20) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `redirectFb` text NOT NULL,
  `redirectIg` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idcontact`, `judul`, `isi`, `noWa`, `email`, `noTelp`, `idWchat`, `idLine`, `facebook`, `ig`, `redirectFb`, `redirectIg`, `alamat`) VALUES
(9, 'Hubungi Kami', 'Hubungi kami bla bla', '08214561456', 'Asd@asd.com12121', '9778674353', 's343d', 'a4fvzx', 'adXA', 'CZCDAZ', '', '', 'adfsfs');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `idcustomers` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `email` text,
  `no_telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_booking`
--

CREATE TABLE `detail_booking` (
  `iddetail_booking` int(11) NOT NULL,
  `paket_wisata` text,
  `jml_dewasa` int(11) DEFAULT NULL,
  `jml_anak` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `booking_kode_booking` varchar(10) NOT NULL,
  `jenis` int(11) DEFAULT NULL,
  `menginap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(9) NOT NULL,
  `icon` varchar(90) NOT NULL,
  `id_wisata` int(9) DEFAULT NULL,
  `id_hotel` int(9) DEFAULT NULL,
  `id_paket` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `icon`, `id_wisata`, `id_hotel`, `id_paket`) VALUES
(1, 'fa fa-bed', 5, NULL, 0),
(2, 'fa fa-plane', 5, NULL, 0),
(3, 'fa fa-user', 9, NULL, 0),
(4, 'fa fa-bed', 9, NULL, 0),
(5, 'fa fa-cutlery', 9, NULL, 0),
(6, 'fa fa-university', 10, NULL, 0),
(7, 'fa fa-bed', 10, NULL, 0),
(8, 'fa fa-taxi', 10, NULL, 0),
(9, 'fa fa-cutlery', 10, NULL, 0),
(10, 'fa fa-user', 10, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `idgalery` int(11) NOT NULL,
  `gambar` text,
  `deskripsi` text,
  `tag` text,
  `wisata_idwisata` int(11) DEFAULT NULL,
  `hotel_idhotel` int(11) DEFAULT NULL,
  `paket_idpaket` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`idgalery`, `gambar`, `deskripsi`, `tag`, `wisata_idwisata`, `hotel_idhotel`, `paket_idpaket`) VALUES
(6, 'gallery/wisata/b1.jpg', NULL, NULL, 10, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `idhotel` int(11) NOT NULL,
  `nama_hotel` text,
  `rating` text,
  `deskripsi` text,
  `harga` int(11) DEFAULT NULL,
  `lokasi` text,
  `harga_eng` int(11) DEFAULT NULL,
  `deskripsi_eng` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `idMessage` int(12) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`idMessage`, `nama`, `email`, `title`, `isi`) VALUES
(1, 'asas', 'asa@mi', 'sds', 'sza');

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `idpaket_wisata` int(11) NOT NULL,
  `nama_paket` text,
  `harga` int(11) DEFAULT NULL,
  `keterangan` text,
  `durasi` text,
  `include` text,
  `exclude` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `username` text,
  `password` text,
  `status_verifikasi` int(11) DEFAULT NULL,
  `customers_idcustomers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `idwisata` int(11) NOT NULL,
  `nama_wisata` text,
  `rating` decimal(2,1) DEFAULT NULL,
  `deskripsi_w` text,
  `harga` int(11) DEFAULT NULL,
  `lokasi` text,
  `deskripsi_eng` text,
  `harga_2` int(11) DEFAULT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`idwisata`, `nama_wisata`, `rating`, `deskripsi_w`, `harga`, `lokasi`, `deskripsi_eng`, `harga_2`, `no_telp`) VALUES
(10, 'Bromo Mountain', '3.0', '<p>qwesscsf</p>', 50000, NULL, NULL, NULL, '086723322');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`kode_booking`),
  ADD KEY `fk_booking_customers1_idx` (`customers_idcustomers`),
  ADD KEY `fk_booking_admin1_idx` (`admin_idadmin`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idcontact`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`idcustomers`);

--
-- Indexes for table `detail_booking`
--
ALTER TABLE `detail_booking`
  ADD PRIMARY KEY (`iddetail_booking`),
  ADD KEY `fk_detail_booking_booking1_idx` (`booking_kode_booking`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `id_wisata` (`id_wisata`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`idgalery`),
  ADD KEY `fk_galery_wisata_idx` (`wisata_idwisata`),
  ADD KEY `hotel_idhotel` (`hotel_idhotel`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`idhotel`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idMessage`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`idpaket_wisata`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`),
  ADD KEY `fk_users_customers1_idx` (`customers_idcustomers`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`idwisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `idcustomers` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_booking`
--
ALTER TABLE `detail_booking`
  MODIFY `iddetail_booking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `idgalery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `idhotel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `idMessage` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `idpaket_wisata` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `idwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_admin1` FOREIGN KEY (`admin_idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_customers1` FOREIGN KEY (`customers_idcustomers`) REFERENCES `customers` (`idcustomers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_booking`
--
ALTER TABLE `detail_booking`
  ADD CONSTRAINT `fk_detail_booking_booking1` FOREIGN KEY (`booking_kode_booking`) REFERENCES `booking` (`kode_booking`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `fk_galery_wisata` FOREIGN KEY (`wisata_idwisata`) REFERENCES `wisata` (`idwisata`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`hotel_idhotel`) REFERENCES `hotel` (`idhotel`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_customers1` FOREIGN KEY (`customers_idcustomers`) REFERENCES `customers` (`idcustomers`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
