-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2026 at 08:01 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `spesialis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `spesialis`) VALUES
('DOK-2026-001', 'dr. Ahmad Hidayat, Sp.A', 'Spesialis Anak'),
('DOK-2026-002', 'dr. Siti Utami, Sp.PD', 'Spesialis Penyakit Dalam'),
('DOK-2026-003', 'dr. Budi Santoso, Sp.JP', 'Spesialis Jantung'),
('DOK-2026-004', 'dr. Dewi Kartika, Sp.OG', 'Spesialis Kandungan'),
('DOK-2026-005', 'dr. Rian Pratama, Sp.M', 'Spesialis Mata'),
('DOK-2026-006', 'dr. Megawati, Sp.THT', 'Spesialis THT'),
('DOK-2026-007', 'dr. Eko Sulistyo, Sp.S', 'Spesialis Saraf'),
('DOK-2026-008', 'dr. Indah Permata, Sp.B', 'Spesialis Bedah'),
('DOK-2026-009', 'dr. Hendra Wijaya, Sp.KK', 'Spesialis Kulit dan Kelamin'),
('DOK-2026-010', 'dr. Citra Lestari, Sp.KJ', 'Spesialis Jiwa'),
('DOK-2026-011', 'dr. Rizky Fauzi', 'Dokter Umum'),
('DOK-2026-012', 'dr. Anisa Rahma, Sp.Gk', 'Spesialis Gizi Klinik'),
('DOK-2026-013', 'dr. Fajar Nugroho, Sp.An', 'Spesialis Anestesi'),
('DOK-2026-014', 'dr. Fitriani, Sp.Rad', 'Spesialis Radiologi'),
('DOK-2026-015', 'dr. Faisal Basri, Sp.OT', 'Spesialis Ortopedi');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_rm` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text,
  `nohp` varchar(15) DEFAULT NULL,
  `jeniskel` enum('L','P') NOT NULL,
  `jenis_layanan` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_rm`, `nama`, `alamat`, `nohp`, `jeniskel`, `jenis_layanan`, `tgl_lahir`) VALUES
('RM-2026-001', 'Budi Santoso', 'Jl. Merdeka No. 12, Jakarta', '081234567890', 'L', 'BPJS', '1985-05-12'),
('RM-2026-002', 'Siti Aminah', 'Jl. Mawar No. 5, Bandung', '081398765432', 'P', 'Umum', '1990-11-23'),
('RM-2026-003', 'Ahmad Fauzi', 'Jl. Sudirman No. 45, Surabaya', '085711223344', 'L', 'Asuransi', '1978-02-28'),
('RM-2026-004', 'Dewi Lestari', 'Jl. Diponegoro No. 8, Yogyakarta', '081955667788', 'P', 'BPJS', '1995-08-17'),
('RM-2026-005', 'Rian Hidayat', 'Jl. Gajah Mada No. 21, Semarang', '082188990011', 'L', 'Umum', '2000-01-05'),
('RM-2026-006', 'Putri Utami', 'Jl. Anggrek No. 14, Medan', '081244556677', 'P', 'BPJS', '1988-04-30'),
('RM-2026-007', 'Eko Prasetyo', 'Jl. Pemuda No. 3, Palembang', '087812345678', 'L', 'Asuransi', '1965-12-15'),
('RM-2026-008', 'Sari Wijaya', 'Jl. Kartini No. 9, Makassar', '085299887766', 'P', 'Umum', '1993-07-22'),
('RM-2026-009', 'Hendra Wijaya', 'Jl. Gatot Subroto No. 55, Bali', '081311112222', 'L', 'BPJS', '1972-09-09'),
('RM-2026-010', 'Mega Silvia', 'Jl. Melati No. 11, Balikpapan', '089677778888', 'P', 'Asuransi', '2002-03-14'),
('RM-2026-011', 'Aris Munandar', 'Jl. Pahlawan No. 17, Malang', '082233334444', 'L', 'Umum', '1980-06-25'),
('RM-2026-012', 'Anisa Rahma', 'Jl. Dahlia No. 2, Solo', '081844445555', 'P', 'BPJS', '1997-10-05'),
('RM-2026-013', 'Fajar Nugroho', 'Jl. Hayam Wuruk No. 88, Jakarta', '085655556666', 'L', 'Umum', '1991-12-01'),
('RM-2026-014', 'Fitri Handayani', 'Jl. Kenanga No. 7, Bogor', '087766667777', 'P', 'Asuransi', '1983-02-19'),
('RM-2026-015', 'Rizky Ramadhan', 'Jl. Veteran No. 40, Padang', '081277778888', 'L', 'BPJS', '2005-08-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_rm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
