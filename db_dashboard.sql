-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Feb 2024 pada 16.34
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dashboard`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_delete`
--

CREATE TABLE `db_delete` (
  `nama` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_register`
--

CREATE TABLE `db_register` (
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_register`
--

INSERT INTO `db_register` (`username`, `email`, `password`) VALUES
('gamz', 'gamz@gmail.com', '123'),
('ibal', 'ibal@gmail.com', '123'),
('nfj', 'mbsbc@gmail.com', '123'),
('gamzsfsf', 'pakyeruli@gmail.com', '123'),
('pakyuli', 'pakyuli@gmail.com', '123'),
('indah', 'rehan@gmail.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_siswa`
--

CREATE TABLE `db_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_siswa`
--

INSERT INTO `db_siswa` (`id`, `nama`, `kelas`, `alamat`) VALUES
(18, 'gamz', '  mmn', 'kjkj'),
(19, 'bha', 'jsgug', 'sfuys');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_delete`
--
ALTER TABLE `db_delete`
  ADD PRIMARY KEY (`nama`);

--
-- Indeks untuk tabel `db_register`
--
ALTER TABLE `db_register`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `db_siswa`
--
ALTER TABLE `db_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_siswa`
--
ALTER TABLE `db_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
