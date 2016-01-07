-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2016 pada 16.53
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `apilaptop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptops`
--

CREATE TABLE IF NOT EXISTS `laptops` (
  `id_laptop` int(4) NOT NULL AUTO_INCREMENT,
  `brand` varchar(100) NOT NULL,
  `model` varchar(200) NOT NULL,
  `release` varchar(5) NOT NULL,
  PRIMARY KEY (`id_laptop`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `laptops`
--

INSERT INTO `laptops` (`id_laptop`, `brand`, `model`, `release`) VALUES
(1, 'asus', 'x44c', '2011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
  `id_part` int(4) NOT NULL AUTO_INCREMENT,
  `id_laptop` int(4) NOT NULL,
  `id_cat` int(4) NOT NULL,
  `part_number` varchar(200) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_part`),
  KEY `idx_laptop` (`id_laptop`),
  KEY `idx_cat` (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `part_cat`
--

CREATE TABLE IF NOT EXISTS `part_cat` (
  `id_cat` int(4) NOT NULL DEFAULT '0',
  `cat_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `parts`
--
ALTER TABLE `parts`
  ADD CONSTRAINT `parts_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `part_cat` (`id_cat`),
  ADD CONSTRAINT `parts_ibfk_1` FOREIGN KEY (`id_laptop`) REFERENCES `laptops` (`id_laptop`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
