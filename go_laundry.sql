-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2020 pada 06.46
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(20) NOT NULL,
  `id_transaksi` int(20) NOT NULL,
  `id_paket` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama`, `alamat`, `jenis_kelamin`, `telepon`) VALUES
(1, 'Raihan Ramadhan', 'kp. Sukamaju', 'L', '0877652748923'),
(2, 'Santi', 'kp. Citatah', 'P', '089745838239'),
(4, 'M. Aji Maulana Yusuf', 'Jln. Raya Cipatat', 'L', '089726373882'),
(5, 'Agung Saputra', 'kp. Kaum dekat MTS Al Mukhtariyah', 'L', '089376372388'),
(6, 'Syamsudin', 'Jln. Raya Cipatat', 'L', '089347482337'),
(7, 'Nanda Munandar', 'kp. Babakan Bandung', 'L', '089348458348');

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlet`
--

CREATE TABLE `outlet` (
  `id_outlet` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `nama`, `alamat`, `telepon`) VALUES
(101, 'Kaum Laundry', 'Kaum Dekat MTS Al-Mukhtariyah Rajamandala', '0896527391709'),
(102, 'Rajamandala Laundry', 'Jln Raya Rajamandala Dekat Alfamart', '0897264848997'),
(103, 'Sukarame', 'Komplek Griya Sukarame ', '0821283990422'),
(104, 'Cipatat Laundry', 'Jln Raya Cipatat NO. 28F', '0877625474859'),
(105, 'Citatah Laundry', 'Jln Raya Citatah Cibogo Indah', '081234958678'),
(106, 'Haurwangi Laundry', 'Jln Raya PJR No.26', '089747588483');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(20) NOT NULL,
  `id_outlet` int(20) NOT NULL,
  `jenis_paket` enum('kiloan','selimut','bed_cover','kaos','lain') NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `id_outlet`, `jenis_paket`, `nama_paket`, `harga`) VALUES
(901, 101, 'kiloan', 'Haurwangi BedCover', 8000),
(902, 101, 'selimut', 'Kaum Selimut', 12000),
(903, 101, 'kaos', 'Kaum Kaos ', 9000),
(905, 102, 'kiloan', 'Rajamandala Kilo', 7500),
(906, 102, 'selimut', 'Rajamandala Selimut', 11500),
(907, 102, 'kaos', 'Rajamandala Kaos', 9000),
(908, 103, 'kiloan', 'Sukarame Kilo', 8500),
(909, 103, 'selimut', 'Sukarame Selimut', 13000),
(910, 103, 'kaos', 'Sukarame Kaos', 9000),
(911, 104, 'kiloan', 'Cipatat Kilo', 8000),
(912, 104, 'selimut', 'Cipatat Selimut', 12000),
(913, 105, 'kiloan', 'Citatah Kilo', 7500),
(914, 105, 'selimut', 'Citatah Selimut', 12500),
(915, 106, 'kiloan', 'Haurwangi Kiloan', 9000),
(916, 106, 'selimut', 'Haurwangi Selimut', 13000),
(918, 106, 'bed_cover', 'Haurwangi BedCover', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `id_outlet` int(20) NOT NULL,
  `id_member` int(20) NOT NULL,
  `kode_invoice` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `batas_waktu` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `biaya_tambahan` int(20) NOT NULL,
  `diskon` int(20) NOT NULL,
  `pajak` int(20) NOT NULL,
  `status` enum('baru','proses','selesai','diambil') NOT NULL,
  `pembayaran` enum('dibayar','belum_dibayar') NOT NULL,
  `id_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_outlet`, `id_member`, `kode_invoice`, `tanggal`, `batas_waktu`, `tgl_bayar`, `biaya_tambahan`, `diskon`, `pajak`, `status`, `pembayaran`, `id_user`) VALUES
(674186593, 102, 5, '764034895', '2020-04-20', '2020-04-24', '2020-04-23', 5000, 0, 3000, 'baru', 'belum_dibayar', 551),
(1264221307, 104, 6, '1723412615', '2020-04-18', '2020-04-22', '2020-04-21', 5000, 0, 3000, 'baru', 'belum_dibayar', 551);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `id_outlet` int(20) NOT NULL,
  `role` enum('admin','kasir','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `id_outlet`, `role`) VALUES
(551, 'Fachri Dwi Prasetya', 'admin1', 'admin1', 102, 'admin'),
(552, 'Iis Kartini', 'owner1', 'owner1', 102, 'owner'),
(553, 'Nanda Munandar', 'kasir1', 'kasir1', 102, 'kasir'),
(995, 'Muhammad Rifqi', 'mrifqi2', '', 106, 'owner');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id_outlet` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=919;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1264221308;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=996;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`);

--
-- Ketidakleluasaan untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `outlet` (`id_outlet`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `outlet` (`id_outlet`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `outlet` (`id_outlet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
