-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2023 at 04:27 PM
-- Server version: 8.0.32
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_duan1_thayho`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `madh` varchar(20) NOT NULL,
  `iduser` int NOT NULL,
  `nguoidat_ten` varchar(50) NOT NULL,
  `nguoidat_email` varchar(50) NOT NULL,
  `nguoidat_tel` varchar(20) NOT NULL,
  `nguoidat_diachi` varchar(100) DEFAULT NULL,
  `nguoinhan_ten` varchar(50) DEFAULT NULL,
  `nguoinhan_diachi` varchar(100) DEFAULT NULL,
  `nguoinhan_tel` varchar(20) NOT NULL,
  `total` int NOT NULL,
  `ship` int NOT NULL DEFAULT '0',
  `vocher` int NOT NULL DEFAULT '0',
  `tongthanhtoan` int NOT NULL,
  `pttt` tinyint(1) NOT NULL COMMENT '0:tiền mặt\r\n1: bank\r\n2: ví điện tử\r\n3:'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `idpro` int NOT NULL,
  `price` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id` int NOT NULL,
  `tenbienthe` varchar(50) NOT NULL,
  `price` int NOT NULL,
  `idpro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noidung` varchar(250) NOT NULL,
  `ngaycomment` datetime(6) NOT NULL,
  `idpro` int NOT NULL,
  `iduser` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `uutien` int NOT NULL,
  `hienthi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendm`, `uutien`, `hienthi`) VALUES
(41, 'điện thoại ', 1, 1),
(42, 'laptop', 2, 2),
(49, 'tivi', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `loaiuser`
--

CREATE TABLE `loaiuser` (
  `id` int NOT NULL,
  `nameloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loaiuser`
--

INSERT INTO `loaiuser` (`id`, `nameloai`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL DEFAULT '0',
  `iddm` int NOT NULL,
  `giacu` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `image`, `price`, `iddm`, `giacu`) VALUES
(73, 'Ip14 ', './uploaded/ip14.webp', 25000000, 41, 30000000),
(74, 'ip11pro max', './uploaded/14_1_9_2_9 (1).webp', 11000000, 41, 12000000),
(75, 'ip13 pro max', './uploaded/ip13pro256gb.webp', 20000000, 41, 22000000),
(76, 'ip11 pro', './uploaded/ip1164gb.webp', 15000000, 41, 18700000),
(77, 'ip11plus', './uploaded/1164.webp', 11000000, 41, 13000000),
(78, 'Macbook air m1', './uploaded/macairm1.webp', 25000000, 42, 30000000),
(79, 'Macbook Pro', './uploaded/MACPRO.webp', 40000000, 42, 43000000),
(80, 'Macbook pro v', './uploaded/macprov.webp', 500000000, 42, 52000000),
(81, 'Macbook air m2', './uploaded/macairm2.webp', 25000000, 42, 27000000),
(98, 'TIVI Samsung', './uploaded/man1.webp', 7000000, 49, 10000000),
(99, 'mac mini', './uploaded/macmini.webp', 25000000, 42, 27000000),
(100, 'TIVI LG', './uploaded/tivi2.webp', 10000000, 49, 12000000),
(101, 'TIVI SONY', './uploaded/TIVI4.webp', 13000000, 49, 15000000),
(102, 'TIVI LCD', './uploaded/tivi1.webp', 6000000, 49, 8000000),
(103, 'TIVI SAMSUNG NÉT', './uploaded/TIVI5.webp', 8000000, 49, 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `id_loaiuser` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `phone`, `email`, `address`, `id_loaiuser`) VALUES
(1, 'admin', '34242', '123', 'admin@gmail.com', 'TP.HCM', 1),
(2, 'Đặng Minh Quân', 'bitpull', '832575905', 'lequelcm@gmail.com', 'Cà Mau', 2),
(4, 'root', '12345678', '12345678', 'root@gmail.com', 'linux', 2),
(5, 'be iu cho anh địa chỉ nhà', 'hau346', '900392483', 'hau@gmail.com', 'Long An', 2),
(6, 'hihi', 'Quel0832575905', '832575905', 'wind76517@gmail.com', 'TPHCM', 2),
(7, 'Trần Huy Giáp', '1243252534', '703121905', 'huygiap@gmail.com', 'Tp.HCM', 2),
(8, 'Nguyễn Văn Nguyên', '3ưohepighivh', '0937456321', 'nguyennguyen@gmail.com', 'TP.HCM', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD KEY `fk_bill_user` (`iduser`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_sanpham` (`idpro`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaiuser`
--
ALTER TABLE `loaiuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_loaiuser` (`id_loaiuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_loaiuser` FOREIGN KEY (`id_loaiuser`) REFERENCES `loaiuser` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
