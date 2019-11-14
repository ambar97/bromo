-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2019 at 03:56 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
  `nama` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
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
  `bukti_pembayaran` text DEFAULT NULL,
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
(9, 'Hubungi Kami', 'Hubungi kami bla bla', '08214561456', 'Asd@asd.com', '9778674353', 's343d', 'a4fvzx', 'adXA', 'CZCDAZ', '', '', 'adfsfs');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `idcustomers` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`idcustomers`, `nama`, `alamat`, `email`, `no_telp`) VALUES
(1, 'Anas', 'gbhjk', 'Anas@mai.com', '4567890');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_fasilitas`
--

CREATE TABLE `daftar_fasilitas` (
  `id_fasilitas` int(12) NOT NULL,
  `icon` text NOT NULL,
  `nama_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_fasilitas`
--

INSERT INTO `daftar_fasilitas` (`id_fasilitas`, `icon`, `nama_fasilitas`) VALUES
(1, 'fa fa-university', 'Gedung'),
(2, 'fa fa-bed', 'Penginapan'),
(3, 'fa fa-taxi', 'Transportasi'),
(4, 'fa fa-cutlery', 'Restaurant'),
(5, 'fa fa-user', 'Guide');

-- --------------------------------------------------------

--
-- Table structure for table `detail_booking`
--

CREATE TABLE `detail_booking` (
  `iddetail_booking` int(11) NOT NULL,
  `paket_wisata` text DEFAULT NULL,
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
  `id_paket` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `icon`, `id_wisata`, `id_hotel`, `id_paket`) VALUES
(1, 'fa fa-bed', 5, NULL, NULL),
(2, 'fa fa-plane', 5, NULL, NULL),
(3, 'fa fa-user', 9, NULL, NULL),
(4, 'fa fa-bed', 9, NULL, NULL),
(5, 'fa fa-cutlery', 9, NULL, NULL),
(6, 'fa fa-university', 10, NULL, NULL),
(7, 'fa fa-bed', 10, NULL, NULL),
(8, 'fa fa-taxi', 10, NULL, NULL),
(9, 'fa fa-cutlery', 10, NULL, NULL),
(10, 'fa fa-user', 10, NULL, NULL),
(41, 'fa fa-bed', NULL, 7, NULL),
(42, 'fa fa-taxi', NULL, 7, NULL),
(43, 'fa fa-bed', NULL, 8, NULL),
(44, 'fa fa-cutlery', NULL, 8, NULL),
(45, 'fa fa-university', 1, NULL, NULL),
(46, 'fa fa-bed', 1, NULL, NULL),
(47, 'fa fa-taxi', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `idgalery` int(11) NOT NULL,
  `gambar` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `wisata_idwisata` int(11) DEFAULT NULL,
  `hotel_idhotel` int(11) DEFAULT NULL,
  `paket_idpaket` int(12) DEFAULT NULL,
  `tipe` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`idgalery`, `gambar`, `deskripsi`, `tag`, `wisata_idwisata`, `hotel_idhotel`, `paket_idpaket`, `tipe`) VALUES
(21, '7asd.jpg', NULL, NULL, NULL, 7, NULL, ''),
(22, 'bromo1.jpg', NULL, NULL, NULL, 8, NULL, ''),
(23, '7Red.jpg', NULL, NULL, NULL, 7, NULL, ''),
(25, 'gallery/wisata/bromo1.jpg', NULL, NULL, 1, NULL, NULL, ''),
(26, 'gallery/galeri/Bukti_Transfer.jpeg', 'ghjkmk', NULL, NULL, NULL, NULL, NULL),
(27, 'gallery/galeri/IMG-20170819-WA0005.jpg', 'Asdbnm,', NULL, NULL, NULL, NULL, NULL),
(30, 'gallery/slider/bg-mobile-fallback.jpg', 'hbjnk', 'vgbhnjmkl;', NULL, NULL, NULL, 'slider'),
(31, 'gallery/slider/b3.jpg', 'Broo Mountain', 'Perjalan baik dan menyenangkan', NULL, NULL, NULL, 'slider'),
(32, '1Bromo_Tour_Program3.jpg', NULL, NULL, NULL, NULL, 1, NULL),
(33, '2Wow1.jpg', NULL, NULL, NULL, NULL, 2, NULL),
(34, '1asd.jpg', NULL, NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `idhotel` int(11) NOT NULL,
  `nama_hotel` text DEFAULT NULL,
  `rating` int(12) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `harga_eng` int(11) DEFAULT NULL,
  `deskripsi_eng` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`idhotel`, `nama_hotel`, `rating`, `deskripsi`, `harga`, `lokasi`, `harga_eng`, `deskripsi_eng`) VALUES
(7, 'Red', 4, 'Untuk pelayanannya baik. Hanya saja satpam disana kurang tanggap. Untuk makanannya cukup enak. Kamarnya untuk hari pertama tidak ada masalah tetapi hari berikutnya tiba-tiba AC tidak dingin dan bocor. Kamar mandinya sedikit licin dibagian bawah shower. Untuk kolam renang, cukup bersih meskipun jacuzzi nya tidak menyala.', 1200000, NULL, NULL, NULL),
(8, 'Blue', NULL, 'Tidak disediakan air mineral di dalam kamar. Harus ambil di luar kamar kurang suka rasanya dan malas kalau harus ambil di luar kamar pakai dispenser.', 2000000, NULL, NULL, NULL);

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
  `nama_paket` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `durasi` text DEFAULT NULL,
  `include` text DEFAULT NULL,
  `exclude` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`idpaket_wisata`, `nama_paket`, `harga`, `keterangan`, `durasi`, `include`, `exclude`) VALUES
(1, 'Bromo Tour Program', 1200000, 'Day 1 = Surabaya or Malang - Cemara Lawang (Bromo area)\r\n    Picking up in Surabaya or Malang Airport or train station or hotel\r\n    Transport to Cemara Lawang, length of travel is about 4 hours and then check in to the hotel\r\n    Check in to the hotel at Bromo Permai or Cafe Lava or Cemara Indah (* Standard room with breakfast, hot and cold shower)\r\n    Relaxing program\r\n\r\nDay 2 = Bromo Tour - Surabaya or Malang\r\n\r\n    At 3:30 a.m., You have to get ready in the reception room or restaurant for Bromo tour\r\n    By using a hartop 4wd jeep, You will start the bromo tour from the hotel to Penanjakan Peak 1 in 1 hour driving, to see the sunrise and the scenery around Mount Bromo from the highest peak\r\n    You will enjoy this view until around 6 o\'clock in the morning\r\n    Afterwards, by using a 4wd jeep, You will visit the sea of ??sand and jeep will be parked in the parking lot of visitors to Mount Bromo crater\r\n    To go to The Bromo crater, You can walk to the up stair of Mount Bromo for 30 minutes, or can rent a horse\r\n    Then You use the down stairs to get to the edge of the crater of Mount Bromo\r\n    You can walk on the edge of Mount Bromo but please be careful\r\n    After that You go back to the jeep parking lot and travel back to the hotel\r\n    You have to take a bath in the private bathroom which has been provided by the hotel, so You are ready for breakfast\r\n    The breakfast program was finished around 9:30 a.m., and preparations to check out at 10 a.m.\r\n    Travel back to Surabaya or Malang for 4 hours\r\n    Tour is complete', '2 Days 1 Night (2D / 1N)', '    Transport accommodation for 2 days 1 night, including driver, fuel, toll fees, and parking 4wd Jeep for Bromo Tour\r\n    1 night stay at Bromo Permai or Cafe Lava or Cemara Indah Hotel (* Standard room with breakfast, hot shower and cold water)\r\n    Mineral water\r\n    1x breakfast (hotel)\r\n', '    Bromo entrance ticket\r\n    Lunch and dinner\r\n    Horse in Bromo\r\n    Travel insurance\r\n    Personal expenses\r\n'),
(2, 'Wow', 1200000, 'asd', '3 hari 2 malam ', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) UNSIGNED ZEROFILL NOT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `status_verifikasi` int(11) DEFAULT NULL,
  `customers_idcustomers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `username`, `password`, `status_verifikasi`, `customers_idcustomers`) VALUES
(00000000001, 'anas', '76eb649c047cbecad7c36e71374bc9a5', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `idwisata` int(11) NOT NULL,
  `nama_wisata` text DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT NULL,
  `deskripsi_w` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `deskripsi_eng` text DEFAULT NULL,
  `harga_2` int(11) DEFAULT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`idwisata`, `nama_wisata`, `rating`, `deskripsi_w`, `harga`, `lokasi`, `deskripsi_eng`, `harga_2`, `no_telp`) VALUES
(1, 'asd', '4.0', '<p>asd</p>', 123123, 'asd', NULL, NULL, '123213');

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
-- Indexes for table `daftar_fasilitas`
--
ALTER TABLE `daftar_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

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
  MODIFY `idcustomers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daftar_fasilitas`
--
ALTER TABLE `daftar_fasilitas`
  MODIFY `id_fasilitas` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_booking`
--
ALTER TABLE `detail_booking`
  MODIFY `iddetail_booking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `idgalery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `idhotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `idMessage` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `idpaket_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `idwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
