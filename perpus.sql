-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 04:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_identitas` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `nama`, `no_identitas`, `jenis_kelamin`, `alamat`, `no_hp`, `email`) VALUES
(2, 'Robert', '8801928192891', 'P', 'Lemberang', '038103801', 'rob@ert.co'),
(3, 'Earthgang', '38928392', 'L', 'Sokaraja', '09210390', 'ario@dlakd.co'),
(4, 'Natasha', '320392039', 'P', 'California', '03293930', 'sajks@salj.co'),
(6, 'sasas', 'sasas', 'L', 'sasa', 'sas', 'sasas'),
(8, 'Gelas', '21891', 'P', 'Kembaran', '0821289121', 'ququ@nono.co');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `penulis` varchar(40) NOT NULL,
  `kategori_buku` varchar(30) NOT NULL,
  `tahun_buku` year(4) NOT NULL,
  `sinopsis_buku` text NOT NULL,
  `jumlah_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `isbn`, `judul`, `penerbit`, `penulis`, `kategori_buku`, `tahun_buku`, `sinopsis_buku`, `jumlah_buku`) VALUES
(1, '9789797809331', 'Kisah Tanah Wakaf', 'Gagasmedia', 'Mbah KJ', 'Horror', 2018, 'Buku ini menyeramkan :0																				', 20),
(3, '9789791683746', 'Madilog', 'Narasi', 'Tan Malaka', 'Monograf', 2018, 'Bangsa Indonesia memandang bahwa apa yang terjadi di dunia ini dipengaruhi oleh kekuatan keramat di alam gaib. Cara pandang ini, disebut-sebut oleh Tan Malaka sebagai logika mistika. Logika ini melumpuhkan karena ketimbang menangani sendiri permasalahan yang dihadapi, lebih baik mengharapkan kekuatan-kekuatan gaib itu sendiri. Karena itu, mereka (masyarakat Indonesia) mengadakan mantra, sesajen, dan doa-doa. Melihat kenyataan bangsanya yang masih terkungkung oleh logika mistika itu, Tan Malaka melahirkan Madilog.', 5),
(4, '9786026744470', 'MAAF TUHAN, AKU HAMPIR MENYERAH', 'Sahima', 'Alfialghazi', 'Motivasi', 2020, 'Buku ini ditulis untuk siapa saja yang sedang dirundung duka, yang ragu pada impiannya, yang sedang kehilangan arah, yang tak tahu hidupnya akan dibawa kemana, juga bagi siapa saja yang sedang patah karena cinta, yang masih berusaha menerima takdir-takdir-Nya, dan yang sedang berusaha untuk kembali pada jalan yang di ridhoi-Nya\r\n\r\n \r\n\r\nBuku ini akan menemanimu, dalam jatuh dan bangunmu. Menuntaskan keraguanmu, menguatkan keyakinanmu. Langkahmu hari ini tertatih, sebab kamu sedang dipersiapkan untuk menjadi lebih kuat lagi, hidupmu di tekan sampai titik terendah, agar sabarmu bisa seluas samudera.																		', 10),
(5, '9789791227780', 'Perahu kertas', 'Bentang Pustaka', 'Dee Lestari', 'Novel', 2003, 'Namanya Kugy. Mungil, pengkhayal, dan berantakan. Dari benaknya, mengalir untaian dongeng indah. Keenan belum pernah bertemu manusia seaneh itu. ... Namanya Keenan. Cerdas, artistik, dan penuh kejutan. Dari tangannya, mewujud lukisan-lukisan magis. Kugy belum pernah bertemu manusia seajaib itu. ... Dan kini mereka berhadapan di antara hamparan misteri dan rintangan. Akankah dongeng dan lukisan itu bersatu? Akankah hati dan impian mereka bertemu?																												', 11),
(6, '9786232421431', 'Tuhan ada di hatimu', 'Mizan', 'Husein Ja\'far Al-Hadar', 'Religi', 2020, 'Sejatinya menghadap ke mana pun, kita melihat kebesaran Allah yang membuat kita menyebut nama-Nya. Bukan hanya di Ka‘bah, tapi juga di gubuk-gubuk orang miskin, di rumah-rumah yatim, bahkan di lembaga pemasyarakatan.\r\n\r\nMasjid bisa roboh, Ka‘bah bisa sepi, tapi hati manusia yang beriman akan abadi dalam ketaatan dan kecintaan pada-Nya.																				', 11),
(7, '9786020282534', 'Trading Vs Investing', 'Kazuto a.k.a Harry', 'Ryan Filbert Wijaya, S.Sn, ME', 'Finance', 2016, 'Sebenarnya, mana yang lebih menguntungkan? Investasi saham atau trading saham? Ya, banyak orang yang belum memulai salah satu atau bahkan keduanya, karena bingung mengenai keuntungan yang akan didapat. Namun, pernahkah terpikir dalam benak Anda bahwa Anda dapat melakukan keduanya dalam waktu bersamaan? Trading, untuk hari ini, investasi untuk masa depan.\n\nJika Anda bisa menggunakan keduanya sebagai kendaraan Anda mencapai financial freedom, mengapa harus memilih salah satunya? Bagaimana caranya? Anda sudah melihat buku yang tepat! Selling Point: Dikemas secara ringan dan mudah untuk pemula sekalipun. Ditulis oleh seorang praktisi langsung.', 20),
(8, '9786024411015', 'Stephen Hawking: A Mind Without Limits', 'Mizan', 'Hayley Bennett, dkk.', 'Sains', 2019, '“Lihatlah ke bintang-bintang di atas, bukan ke kakimu di bawah.\r\nPahami apa yang kau lihat, dan bertanyalah tentang apa yang membuat Alam Semesta ini ada. Bertanyalah.”\r\n—Stephen Hawking', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `pinjam_id` int(11) NOT NULL,
  `id_anggota` varchar(255) NOT NULL,
  `id_buku` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  `tgl_balik` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id_pinjam`, `pinjam_id`, `id_anggota`, `id_buku`, `status`, `tgl_pinjam`, `lama_pinjam`, `tgl_balik`, `tgl_kembali`) VALUES
(10, 5, '3', '3', 'dikembalikan', '2021-12-25', 3, '2021-12-28', '2021-12-29'),
(11, 6, '3', '3', 'dipinjam', '2021-12-25', 3, '2021-12-28', '0000-00-00'),
(13, 8, '8', '6', 'dipinjam', '2021-12-25', 6, '2021-12-31', '0000-00-00'),
(14, 9, '4', '5', 'dipinjam', '2021-12-26', 3, '2021-12-29', '0000-00-00'),
(15, 10, '2', '1', 'dikembalikan', '2021-12-25', 2, '2021-12-27', '2022-01-03'),
(18, 11, '4', '3', 'dipinjam', '2021-11-25', 10, '2021-12-05', '0000-00-00'),
(19, 12, '8', '3', 'dikembalikan', '2022-01-03', 7, '2022-01-10', '2022-01-03'),
(20, 13, '4', '4', 'dikembalikan', '2022-07-09', 3, '2022-07-12', '2022-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Super Admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD UNIQUE KEY `pinjam_id` (`pinjam_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
