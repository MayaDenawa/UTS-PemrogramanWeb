-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 10:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_2201010348`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_2201010348`
--

CREATE TABLE `tb_buku_2201010348` (
  `id_buku_2201010348` char(10) NOT NULL,
  `judul_buku_2201010348` varchar(100) NOT NULL,
  `kategori_buku_2201010348` varchar(100) NOT NULL,
  `penerbit_2201010348` varchar(50) NOT NULL,
  `penulis_2201010348` varchar(100) NOT NULL,
  `stok_2201010348` int(11) NOT NULL,
  `harga_2201010348` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_buku_2201010348`
--

INSERT INTO `tb_buku_2201010348` (`id_buku_2201010348`, `judul_buku_2201010348`, `kategori_buku_2201010348`, `penerbit_2201010348`, `penulis_2201010348`, `stok_2201010348`, `harga_2201010348`) VALUES
('1111111111', 'The Live Of Dwagung Raka', 'BIOGRAFI', 'Puri Agung Dwaraka', 'Ida Dwagung Putra', 1, 100000000),
('2109876543', 'Animal Farm', 'FIKSI', 'Secker and Warburg', 'George Orwell', 35, 90000),
('2345678401', 'Jago Jualan di Instagram', 'PEMBELAJARAN', 'Elex Media Komputindo', 'Ivan Yulivan', 22, 75000),
('3454789012', 'The Art of War', 'PEMBELAJARAN', 'Sunzi Bingfa Press', 'Sun Tzu', 18, 75000),
('3456789012', 'The Art of Computer Programming', 'KOMPUTER', 'Addison-Wesley', 'Donald Knuth', 10, 200000),
('4324098765', 'The Five People You Meet in Heaven', 'FIKSI', 'Hyperion Books', 'Mitch Albom', 8, 89000),
('4567890123', 'The Diary of a Young Girl', 'BIOGRAFI', 'Otto Frank', 'Anne Frank', 30, 100000),
('5432109876', 'The Selfish Gene', 'KARYA ILMIAH', 'Oxford University Press', 'Richard Dawkins', 20, 175000),
('5432139876', 'The Lean Startup', 'KARYA ILMIAH', 'Penguin Group', 'Eric Ries', 6, 98000),
('5678909234', 'My Hero Academia, Vol. 1', 'KARTUN', 'VIZ Media LLC', 'Kohei Horikoshi', 14, 55000),
('6543210487', 'The Lord of The Rings', 'FIKSI', 'Gramedia Pustaka', 'J.R.R. Tolkien', 25, 135000),
('6543210987', 'Think and Grow Rich', 'Pembelajaran', 'Ralston Society', 'Napoleon Hill', 10, 80000),
('7654321098', 'The Alchemist', 'FIKSI', 'HarperCollins', 'Paulo Coelho', 20, 85000),
('7654621098', 'The Catcher in the Rye', 'FIKSI', 'Little, Brown and Company', 'J.D. Salinger', 25, 110000),
('7890123456', 'The Da Vinci Code', 'FIKSI', 'Doubleday', 'Dan Brown', 40, 175000),
('7890123956', 'The Complete Guide to Raspberry Pi', 'KOMPUTER', 'Apress', 'Gray Girling', 10, 155000),
('8765432109', 'The Lean Startup', 'KOMPUTER', 'Crown Business', 'Eric Ries', 15, 150000),
('8765432149', 'The Hitchhiker’s Guide to the Galaxy', 'FIKSI', 'Bentang Pustaka', 'Douglas Adams', 15, 98000),
('8765492101', 'Alice’s Adventures in Wonderland', 'KARTUN', 'Macmillan Publishers', 'Lewis Carroll', 13, 65000),
('8901234567', 'A Brief History of Time', 'KARYA ILMIAH', 'Bantam Books', 'Stephen Hawking', 5, 250000),
('9012345678', 'The Dog in the Cell', 'DONGENG', 'Random House', 'Dr. Seuss', 10, 50000),
('9015345678', 'The Cat in The Hat', 'KARTUN', 'Harper Collins', 'Dr. Seuss', 12, 45000),
('987654321', '1984', 'FIKSI', 'Secker and Warburg', 'George Orwell', 40, 95000),
('9934867348', 'Asena The King Of Taman Bali', 'BIOGRAFI', 'Puri Bangli', 'Dwagung Putra', 100, 10000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku_2201010348`
--
ALTER TABLE `tb_buku_2201010348`
  ADD PRIMARY KEY (`id_buku_2201010348`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
