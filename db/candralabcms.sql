-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 14. Oktober 2013 jam 12:16
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `candralabcms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(2, 'candralab', '22fb32eae82ff0855bff018433e4723c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `idberita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `isi` text,
  PRIMARY KEY (`idberita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idberita`, `judul`, `gambar`, `tanggal`, `isi`) VALUES
(8, ' consectetur adipiscing elit', '20130830_UGM1.jpg', '2013-09-10 14:56:06', '<p>tiam ac auctor lectus, pharetra blandit orci. Aliquam erat volutpat. Integer at lobortis erat. Vestibulum egestas ante vel justo aliquam, vel faucibus justo eleifend. Mauris aliquam placerat ligula, non suscipit ante accumsan sed. In aliquam sodales leo, a adipiscing urna semper sed. Sed id nisl ac lorem venenatis pulvinar.</p>\r\n<p>Nullam malesuada tortor et massa varius ornare. Pellentesque sed leo magna. Curabitur hendrerit placerat arcu, in rutrum mauris laoreet vitae. Ut sodales pretium nisi vitae vehicula. Praesent elit neque, adipiscing gravida enim non, eleifend adipiscing erat. Nulla luctus, ligula nec varius iaculis, metus arcu faucibus tortor, sed mollis ligula tortor ac erat. Aenean id ultrices elit, eu porta eros. Mauris vitae arcu auctor massa dapibus tincidunt cursus vel felis. Proin nec fermentum enim, at consectetur tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin tellus velit, malesuada vel facilisis ac, dictum ac urna.</p>\r\n<p>Mauris a ipsum placerat, consequat orci sed, accumsan velit. Aenean ornare lacus a ipsum bibendum commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed quis odio sed lectus euismod condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat est lorem, non blandit metus interdum id. Donec interdum sapien sed tincidunt adipiscing. Sed nec rhoncus nibh. Curabitur eget turpis egestas, ullamcorper lectus quis, vestibulum massa. Duis eros metus, blandit elementum tellus a, tincidunt sollicitudin lectus</p>'),
(9, 'UGM Tingkatkan Kerjasama Vokasi dengan Jepang', '', '2013-09-10 14:56:41', '<p>tiam ac auctor lectus, pharetra blandit orci. Aliquam erat volutpat. Integer at lobortis erat. Vestibulum egestas ante vel justo aliquam, vel faucibus justo eleifend. Mauris aliquam placerat ligula, non suscipit ante accumsan sed. In aliquam sodales leo, a adipiscing urna semper sed. Sed id nisl ac lorem venenatis pulvinar.</p>\r\n<p>Nullam malesuada tortor et massa varius ornare. Pellentesque sed leo magna. Curabitur hendrerit placerat arcu, in rutrum mauris laoreet vitae. Ut sodales pretium nisi vitae vehicula. Praesent elit neque, adipiscing gravida enim non, eleifend adipiscing erat. Nulla luctus, ligula nec varius iaculis, metus arcu faucibus tortor, sed mollis ligula tortor ac erat. Aenean id ultrices elit, eu porta eros. Mauris vitae arcu auctor massa dapibus tincidunt cursus vel felis. Proin nec fermentum enim, at consectetur tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin tellus velit, malesuada vel facilisis ac, dictum ac urna.</p>\r\n<p>Mauris a ipsum placerat, consequat orci sed, accumsan velit. Aenean ornare lacus a ipsum bibendum commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed quis odio sed lectus euismod condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat est lorem, non blandit metus interdum id. Donec interdum sapien sed tincidunt adipiscing. Sed nec rhoncus nibh. Curabitur eget turpis egestas, ullamcorper lectus quis, vestibulum massa. Duis eros metus, blandit elementum tellus a, tincidunt sollicitudin lectus</p>'),
(10, 'Workshop Kepala Sekolah From Good To Great School', '20120904_Neila1.jpg', '2013-09-10 14:57:52', '<p>tiam ac auctor lectus, pharetra blandit orci. Aliquam erat volutpat. Integer at lobortis erat. Vestibulum egestas ante vel justo aliquam, vel faucibus justo eleifend. Mauris aliquam placerat ligula, non suscipit ante accumsan sed. In aliquam sodales leo, a adipiscing urna semper sed. Sed id nisl ac lorem venenatis pulvinar.</p>\r\n<p>Nullam malesuada tortor et massa varius ornare. Pellentesque sed leo magna. Curabitur hendrerit placerat arcu, in rutrum mauris laoreet vitae. Ut sodales pretium nisi vitae vehicula. Praesent elit neque, adipiscing gravida enim non, eleifend adipiscing erat. Nulla luctus, ligula nec varius iaculis, metus arcu faucibus tortor, sed mollis ligula tortor ac erat. Aenean id ultrices elit, eu porta eros. Mauris vitae arcu auctor massa dapibus tincidunt cursus vel felis. Proin nec fermentum enim, at consectetur tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin tellus velit, malesuada vel facilisis ac, dictum ac urna.</p>\r\n<p>Mauris a ipsum placerat, consequat orci sed, accumsan velit. Aenean ornare lacus a ipsum bibendum commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed quis odio sed lectus euismod condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat est lorem, non blandit metus interdum id. Donec interdum sapien sed tincidunt adipiscing. Sed nec rhoncus nibh. Curabitur eget turpis egestas, ullamcorper lectus quis, vestibulum massa. Duis eros metus, blandit elementum tellus a, tincidunt sollicitudin lectus</p>'),
(11, 'Perpustakaan Keliling Siap Layani Masyarakat', 'Galangpress.jpg', '2013-09-10 14:58:34', '<p>tiam ac auctor lectus, pharetra blandit orci. Aliquam erat volutpat. Integer at lobortis erat. Vestibulum egestas ante vel justo aliquam, vel faucibus justo eleifend. Mauris aliquam placerat ligula, non suscipit ante accumsan sed. In aliquam sodales leo, a adipiscing urna semper sed. Sed id nisl ac lorem venenatis pulvinar.</p>\r\n<p>Nullam malesuada tortor et massa varius ornare. Pellentesque sed leo magna. Curabitur hendrerit placerat arcu, in rutrum mauris laoreet vitae. Ut sodales pretium nisi vitae vehicula. Praesent elit neque, adipiscing gravida enim non, eleifend adipiscing erat. Nulla luctus, ligula nec varius iaculis, metus arcu faucibus tortor, sed mollis ligula tortor ac erat. Aenean id ultrices elit, eu porta eros. Mauris vitae arcu auctor massa dapibus tincidunt cursus vel felis. Proin nec fermentum enim, at consectetur tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin tellus velit, malesuada vel facilisis ac, dictum ac urna.</p>\r\n<p>Mauris a ipsum placerat, consequat orci sed, accumsan velit. Aenean ornare lacus a ipsum bibendum commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed quis odio sed lectus euismod condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat est lorem, non blandit metus interdum id. Donec interdum sapien sed tincidunt adipiscing. Sed nec rhoncus nibh. Curabitur eget turpis egestas, ullamcorper lectus quis, vestibulum massa. Duis eros metus, blandit elementum tellus a, tincidunt sollicitudin lectus</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `idbukutamu` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`idbukutamu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`idbukutamu`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(1, 'putri', 'putri@yahoo.com', 'wah, bagus sih..tapi kurang fitur nih...', '2012-11-23'),
(3, 'rahma', 'rahmasahla@gmail.com', 'Webnya lumayan bagus...pake bootstrap ya?', '2012-12-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`no`, `foto`, `keterangan`) VALUES
(1, 'aple.jpg', 'apple'),
(2, 'disney.jpg', 'disney'),
(3, 'earth.jpg', 'earth');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE IF NOT EXISTS `halaman` (
  `idhalaman` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `isi` text,
  PRIMARY KEY (`idhalaman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`idhalaman`, `judul`, `gambar`, `tanggal`, `isi`) VALUES
(1, 'Home', '', '2013-07-16 00:59:18', '<p>&nbsp;</p>\r\n<p>CandraLab CMS adalah CMS lokal yang mendukung beberapa fitur :</p>\r\n<ol>\r\n<li>Responsive Web desain</li>\r\n<li>Menggunakan Framework CSS Bootstrap</li>\r\n<li>Validasi jQuery validate &nbsp;(real time validation)</li>\r\n<li>halaman Dinamis</li>\r\n<li>Galleri</li>\r\n<li>Guestbook</li>\r\n</ol>\r\n<p>Download : Coming soon!!!</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><a href="https://code.google.com/p/candralabcms/">https://code.google.com/p/candralabcms/</a></p>'),
(2, 'Profil', '', '2013-07-16 01:02:57', '<p><span>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</span></p>\r\n<p><span><span>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</span></span></p>\r\n<p><span><span><span>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</span><br /></span></span></p>'),
(3, 'Visi misi', '', '2013-10-08 16:42:20', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium ligula a felis ullamcorper, et aliquet erat porta. Praesent sed dictum risus, vel tincidunt leo. Curabitur quis nisl rhoncus, euismod augue id, viverra enim. Curabitur arcu libero, feugiat quis ullamcorper non, tristique sit amet urna. Vivamus id dolor non ante tincidunt vestibulum. Mauris nisl tellus, euismod a nibh in, lobortis interdum augue. Aenean eget pulvinar justo.\r\n<p>\r\n\r\nNullam accumsan nulla sed eros posuere, eu volutpat orci porta. Nullam et metus vestibulum magna pellentesque sagittis. Donec egestas massa a metus sagittis, gravida fringilla ante cursus. Ut imperdiet, neque sed ultrices pretium, tortor massa ornare dui, sit amet ultricies justo lacus eu tellus. Cras dapibus diam eget metus feugiat aliquam. Curabitur commodo velit quis arcu ultricies porttitor. Duis ac vestibulum mauris, at commodo odio. Sed at sollicitudin libero, ornare euismod lorem. Fusce ut mauris adipiscing, vestibulum enim vitae, facilisis ipsum. Fusce a pellentesque magna. Nullam at tortor eros. Vestibulum varius vestibulum auctor. Nulla facilisi. Duis nec ultrices purus. Suspendisse potenti.\r\n<p>\r\nEtiam ac auctor lectus, pharetra blandit orci. Aliquam erat volutpat. Integer at lobortis erat. Vestibulum egestas ante vel justo aliquam, vel faucibus justo eleifend. Mauris aliquam placerat ligula, non suscipit ante accumsan sed. In aliquam sodales leo, a adipiscing urna semper sed. Sed id nisl ac lorem venenatis pulvinar.\r\n<p>\r\nNullam malesuada tortor et massa varius ornare. Pellentesque sed leo magna. Curabitur hendrerit placerat arcu, in rutrum mauris laoreet vitae. Ut sodales pretium nisi vitae vehicula. Praesent elit neque, adipiscing gravida enim non, eleifend adipiscing erat. Nulla luctus, ligula nec varius iaculis, metus arcu faucibus tortor, sed mollis ligula tortor ac erat. Aenean id ultrices elit, eu porta eros. Mauris vitae arcu auctor massa dapibus tincidunt cursus vel felis. Proin nec fermentum enim, at consectetur tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin tellus velit, malesuada vel facilisis ac, dictum ac urna.\r\n<p>\r\nMauris a ipsum placerat, consequat orci sed, accumsan velit. Aenean ornare lacus a ipsum bibendum commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed quis odio sed lectus euismod condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat est lorem, non blandit metus interdum id. Donec interdum sapien sed tincidunt adipiscing. Sed nec rhoncus nibh. Curabitur eget turpis egestas, ullamcorper lectus quis, vestibulum massa. Duis eros metus, blandit elementum tellus a, tincidunt sollicitudin lectus.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `idlinks` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`idlinks`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `links`
--

INSERT INTO `links` (`idlinks`, `nama`, `url`) VALUES
(1, 'Yahoo', 'http://www.yahoo.com'),
(2, 'Google', 'http://www.Google.com'),
(3, 'Candralab Studio', 'http://www.candra.web.id');
