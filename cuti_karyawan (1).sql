-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2021 pada 10.19
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpregpagi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti_karyawan`
--

CREATE TABLE `cuti_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `no_telpn` varchar(20) NOT NULL,
  `mulai_cuti` date NOT NULL,
  `berakhir_cuti` date NOT NULL,
  `sisa_cuti` int(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `jenis_cuti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuti_karyawan`
--

INSERT INTO `cuti_karyawan` (`id_karyawan`, `nik`, `nama_karyawan`, `jenis_kelamin`, `departemen`, `jabatan`, `Alamat`, `no_telpn`, `mulai_cuti`, `berakhir_cuti`, `sisa_cuti`, `keterangan`, `jenis_cuti`) VALUES
(1, '2147485447', 'chaya sausan afrah', 'Perempuan', 'Marketing', 'Manager', 'kp. blok jambu', '085779447817', '2021-12-09', '2021-12-16', 10, 'Melahirkan', 'khusus'),
(2, '21475654337', 'Abu Mansyur zein tuan kotta', 'Laki-laki', 'Produksi', 'Spv', 'Perum. citra surya no 3', '085779447717', '2021-12-21', '2021-12-29', 8, 'Menikah', 'khusus'),
(3, '21474845456647', 'Raisa anggun', 'Perempuan', 'Produksi', 'Staff', 'Perum permai indah', '085813518328', '2022-01-05', '2022-01-12', 5, 'Melahirkan', 'khusus'),
(4, '32012350012', 'Vani amelia', 'Perempuan', 'Marketing', 'manager', 'cisoka', '089602222451', '2021-12-22', '2021-12-24', 6, 'Nikah', 'khusus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
