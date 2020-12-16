-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Des 2020 pada 01.15
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Cuti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Request_libur`
--

CREATE TABLE `Request_libur` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `alasan` text NOT NULL,
  `lama` int(2) NOT NULL,
  `aprof` int(1) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `Request_libur`
--

INSERT INTO `Request_libur` (`id`, `email`, `tgl_mulai`, `alasan`, `lama`, `aprof`, `tgl_masuk`) VALUES
(18, 'lisa@mika.com', '2020-11-01', 'melahirkan anak ke 3', 123, 2, '2020-11-01'),
(19, 'gariner211@gmail.com', '2020-11-11', 'asdsds', 12, 2, '2020-11-11'),
(20, 'gariner211@gmail.com', '2020-11-09', 'suga sai', 1, 2, '2020-11-09'),
(21, 'lisa@mika.com', '2020-11-17', 'untuk menjenguk teman yang sakit di daerah perbatasan himalaya', 12, 2, '2020-11-17'),
(22, 'admin2@admin.com', '2020-12-17', 'pengen libur', 1, 2, '2020-12-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `id_Pekerja` int(11) NOT NULL,
  `Jenis_Pekerjaan` varchar(2555) NOT NULL,
  `Alamat` text NOT NULL,
  `TGL_Lahir` date NOT NULL,
  `TGL_Diterima` date NOT NULL,
  `Jabatan` varchar(2555) NOT NULL,
  `Pensiun` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `id_Pekerja`, `Jenis_Pekerjaan`, `Alamat`, `TGL_Lahir`, `TGL_Diterima`, `Jabatan`, `Pensiun`) VALUES
(13, 'AGUSTINUS PARDAMEAN LUMBAN TOBING', 'lisa@mika.com', 'Screenshot_from_2020-11-20_05-45-21.png', '$2y$10$U7rZk3pqcj5iQUw0eKjsgu2XAMYzbf/x9yiFZAEauir.KyQbJ3UpO', 2, 1, 1606436668, 66, 'sads', 'dsad', '1928-01-11', '2020-11-06', 'dsdsd', 1),
(14, 'Tanaman 1', 'admin@admin.com', 'default.jpg', '$2y$10$7N575bUMYy4fZgJ.dNgnpuivAMb/lYP3tqrjYlUqef4W5yG08XiwO', 1, 1, 1606438996, 44, 'sds', 'asdsd', '1000-11-01', '2020-11-18', 'sdsd', 1),
(15, 'ADMINISTRATOR', 'gariner211@gmail.com', 'default.jpg', '$2y$10$IlWWuS0KWdbWOwbqk5yuzexneWKOaOkWsWc20xPbQeqwOoSzl6bNG', 2, 1, 1606477770, 2147483647, 'sads', 'dsdsd', '1986-11-03', '2020-12-01', 'Karyawan', 0),
(16, 'AGUSTINUS PARDAMEAN LUMBAN TOBING', 'admin2@admin.com', 'default.jpg', '$2y$10$ojy2keR5CKKCmi80h0Kt6ONrtfpBYOXYJoVLrkZgS3o6bFDbfCMMm', 2, 1, 1608076459, 2147483647, 'Teknisi', 'dsdsd', '1994-01-21', '2020-12-21', 'Karyawan', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(10, 2, 5),
(12, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'CUTI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 5, 'Ajukan Cuti', 'Cuti/libur', 'fas fa-fw fa-user', 1),
(10, 5, 'MY Request', 'Cuti/respon', 'fas fa-fw fa-code-alt', 1),
(11, 1, 'Requst', 'Cuti/admin', 'fas fa-fw fa-code', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Request_libur`
--
ALTER TABLE `Request_libur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `Request_libur`
--
ALTER TABLE `Request_libur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
