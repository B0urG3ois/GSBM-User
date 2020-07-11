-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 03:53 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `ID_Alternatif` varchar(10) NOT NULL,
  `ID_User` int(5) NOT NULL,
  `Nama_Alternatif` varchar(100) NOT NULL,
  `Alamat_Alternatif` varchar(100) NOT NULL,
  `Telepon_Alternatif` varchar(20) NOT NULL,
  `JamOperasional_Alternatif` varchar(100) NOT NULL,
  `Latitude_Alternatif` float NOT NULL,
  `Longitude_Alternatif` float NOT NULL,
  `Direction` varchar(50) NOT NULL,
  `Gambar_Alternatif` varchar(50) NOT NULL,
  `tanggal_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`ID_Alternatif`, `ID_User`, `Nama_Alternatif`, `Alamat_Alternatif`, `Telepon_Alternatif`, `JamOperasional_Alternatif`, `Latitude_Alternatif`, `Longitude_Alternatif`, `Direction`, `Gambar_Alternatif`, `tanggal_input`) VALUES
('B20201', 0, 'AeroSpeed Racing Gading Serpong', 'Ruko Bolsena Blok E No.33 Gading Serpong, Curug Sangereng, Kelapa Dua, Tangerang, Banten 15810.', '0816-1815-492', 'Setiap Hari 10:00-20:00', -6.26299, 106.616, 'https://goo.gl/maps/PZ2N2JZs5VF9KA9T9', '1a.jpg', '2020-05-29 04:06:12'),
('B202010', 0, 'Gambot Motor', 'Jalan Kelapa Gading Selatan Gading Serpong Ruko Sektor 1G #18 Kelapa dua, Pakulonan Bar., Kec. Klp. ', '0878-4714-34854', 'Setiap Hari 09:00-17:00', -6.2437, 106.619, 'https://goo.gl/maps/Pi8Nx4tYij9GAJgt6', '10a.jpg', '2020-05-29 04:08:53'),
('B202011', 0, 'Keven Motor', 'Ruko Frankfurt Blok B #10 Jalan Boulveard Raya Gading Serpong kelapa dua, Tangerang, Klp. Dua, Kec. ', '(021) 54200784', 'Setiap Hari 08:00-17:00', -6.24863, 106.622, 'https://goo.gl/maps/EwHcNbkHbtvvPAbe6', '11a.jpg', '2020-05-29 04:09:04'),
('B202012', 0, 'Kusuma Motor', 'Ruko Gading Serpong Selatan, Jl. Klp. Gading Sel. Blok AJ 10 No.15, Pakulonan Bar., Kec. Klp. Dua, T', '0818-114-381', 'Senin-Jumat 09:00-17:00\r\nSabtu, Minggu tutup', -6.23666, 106.628, 'https://goo.gl/maps/T12QriQAiAbL2sQt7', '12a.jpg', '2020-05-29 04:09:16'),
('B202013', 0, 'Lotus Motor', 'Komplek Ruko Paramount Center 2, JL Boulevard Raya Gading Serpong, Blok B No. 30, Klp. Dua, Tangeran', '(021) 33009008', 'Setiap Hari 08:00-17:00', -6.23632, 106.622, 'https://goo.gl/maps/jKXagEF3hLsPXeAi7', '13a.jpg', '2020-05-29 04:09:28'),
('B202014', 0, 'Miracle Motor Sport', 'Ruko Fankfurt Blok B No 9 Jalan Boluvard Gading Serpong, Klp. Dua, Kec. Klp. Dua, Tangerang, Banten ', '0813-2136-6755', 'Setiap Hari 08:00-17:00', -6.24863, 106.622, 'https://goo.gl/maps/9KK8L8XXH4YtcFbm9', '14a.jpg', '2020-05-29 04:09:40'),
('B202015', 0, 'Modificazone', 'Gading Serpong, Ruko Bolsena Blok E10 Jalan Raya Bolsena, Curug Sangereng, Kec. Klp. Dua, Tangerang,', '0859-2123-9977', 'Senin-Sabtu 09:00-16:00\r\nMinggu tutup', -6.26297, 106.62, 'https://goo.gl/maps/KiuipW4HHjNBJKCp8', '15a.jpg', '2020-05-29 04:09:52'),
('B202016', 0, 'ROBIN MOTOR', 'Jalan Raya Kelapa Puan Blok AF 1 #5 Sektor 1A Gading Serpong, Pakulonan Bar., Kec. Klp. Dua, Tangera', '(021) 5476126', 'Setiap Hari 08:00-17:00', -6.23228, 106.626, 'https://goo.gl/maps/yd5TCiH53XB9Y1yx5', '16a.jpg', '2020-05-29 04:10:04'),
('B202017', 0, 'Serpong Indah Motor - Yamaha', 'Jl. Raya Serpong, Pakulonan, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15325.', '(021) 53121651', 'Senin-Sabtu 08:00-17:00\r\nMinggu tutup', -6.24863, 106.609, 'https://goo.gl/maps/WqDUVTsgRWfZjjcj8', '17a.jpg', '2020-05-29 04:10:14'),
('B202018', 0, 'TODA', 'Jl. BOULEVARD RAYA M5 NO. 12, GADING SERPONG, Curug Sangereng, TANGERANG, Tangerang, Banten 15810.', '(021) 29001198', 'Senin-Sabtu 08:00-17:00\r\nMinggu 08:00-15:00', -6.24683, 106.627, 'https://goo.gl/maps/3XdDFmz1MyEBxuh67', '18a.jpg', '2020-05-29 04:10:27'),
('B202019', 0, 'UltraspeedRacing GadingSerpong', 'ruko bavaria no.27 gading serpong, Kota Tangerang, Banten.', '0821-4233-8080', 'Setiap Hari 09:00-19:00', -6.24863, 106.622, 'https://goo.gl/maps/uSraTde8bSREDuAJ7', '19a.jpg', '2020-05-29 04:10:36'),
('B20202', 0, 'AHASS Gading Serpong', 'Klp. Dua, Kec. Klp. Dua, Tangerang, Banten 15810.', '(021) 22225734', 'Senin-Jumat 07:30-9:30\r\nSabtu 07:30-17:15\r\nMinggu 07:30-15:00', -6.24496, 106.607, 'https://goo.gl/maps/Q48aTfTAieRY7d9b6', '2a.jpg', '2020-05-29 04:07:01'),
('B202020', 0, 'Viar Motor - Multi Dimensi Baru', 'Ruko Paramount Sparks, Blok B No.1, Jalan Boulevard Raya Gading Serpong, Kelapa Dua, Klp. Dua, Kec. ', '(021) 29015232', 'Senin-Sabtu 20:00-18:00\r\nMinggu tutup', -6.24279, 106.621, 'https://goo.gl/maps/Z1XdaHv8t8NGN3tr8', '20a.jpg', '2020-05-29 04:10:50'),
('B20203', 0, 'Ahong Motor', 'Jl. Klp. Gading Sel., Pakulonan Bar., Kec. Klp. Dua, Tangerang, Banten 15810.', '(021) 54203710', 'Setiap Hari 08:00-17:00', -6.23673, 106.624, 'https://goo.gl/maps/p8A29AdYnsKJCQF4A', '3a.jpg', '2020-05-29 04:07:17'),
('B20204', 0, 'Bengkel Jaya Motor (Honda, Yamaha, Suzuki, Kawasaki, Bajaj)', 'Gading Serpong, No.6, Jalan Kelapa Gading Selatan Blok AJ10, Pakulonan Bar., Kec. Klp. Dua, Tangeran', '0878-7109-7899', 'Sabtu, Minggu 07:30-18:00Senin-Jumat 08:00-17:00', -6.23732, 106.627, 'https://g.page/Heri-Jayamotor?share', '4a.jpg', '2020-06-13 04:03:33'),
('B20205', 0, 'Bengkel Motor Gading Serpong', 'Cihuni, Kec. Pagedangan, Tangerang, Banten 15332.', '-', '-', -6.26082, 106.642, 'https://goo.gl/maps/bFdnVy9ZBm4gwFbx5', '5a.jpg', '2020-05-29 04:07:43'),
('B20206', 0, 'Bengkel Motor 24jam', 'Ciater, Kec. Serpong, Kota Tangerang Selatan, Banten 15310.', '0899-7552-750', 'Setiap hari 24jam', -6.32426, 106.685, 'https://goo.gl/maps/8sUnasmiBM4qsVzZ8', '6a.jpg', '2020-05-29 04:07:54'),
('B20207', 0, 'Bes Motor Honda Bengkel Dan Dealer', 'Jl. Raya Serpong, Pd. Jagung, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15322.', '(021) 53153495', 'Senin-Sabtu 08:00-16:30\r\nMinggu 08:00-14:00', -6.24863, 106.609, 'https://goo.gl/maps/9xRStuD3JLcYzEtx8', '7a.jpg', '2020-05-29 04:08:13'),
('B20208', 0, 'Depot Motor Gading Serpong', 'Jl. Boulevard Raya Gading Serpong, Ruko Blitz, Blk. B No.6, Klp. Dua, Kec. Klp. Dua, Tangerang, Bant', '0819-7960-541', 'Senin-Sabtu 08:30-17:30\r\nMinggu 08:30-1:30', -6.24482, 106.61, 'https://g.page/depot-motor-gading-serpong?share', '8a.jpg', '2020-05-29 04:08:26'),
('B20209', 2, 'Dunia Motor', 'Jalan Kelapa Gading Selatan Blok Ak 1 No 20 Gading serpong, Pakulonan Bar., Kec. Klp. Dua, Tangerang', '(021) 54202251', 'Sabtu-Kamis 08:00-17:00\r\nJumat tutup', -6.23707, 106.623, 'https://goo.gl/maps/chMvJBhfM6qH3DU47', '9a.jpg', '2020-06-15 16:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `email_follow`
--

CREATE TABLE `email_follow` (
  `ID_Follower` int(5) NOT NULL,
  `Email_Follower` varchar(30) NOT NULL,
  `Tanggal_Follow` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_follow`
--

INSERT INTO `email_follow` (`ID_Follower`, `Email_Follower`, `Tanggal_Follow`) VALUES
(0, 'septa@gmail.com', '2020-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ID_Kategori` int(5) NOT NULL,
  `Nama_Kategori` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID_Kategori`, `Nama_Kategori`, `slug`) VALUES
(1, 'Layanan Darurat', 'layanan-darurat'),
(2, 'Layanan Umum', 'layanan-umum'),
(3, 'Onderdil Standar', 'onderdil-standar'),
(4, 'Onderdil Variasi', 'onderdil-variasi'),
(5, 'Bodypart Motor', 'bodypart-motor'),
(6, 'Aksesoris Motor', 'aksesoris-motor'),
(7, 'Pelumas Motor', 'pelumas-motor'),
(8, 'Ban / Velg Motor', 'ban-velg-motor');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_detail`
--

CREATE TABLE `kategori_detail` (
  `ID_Kategori_Detail` int(5) NOT NULL,
  `ID_User` int(5) NOT NULL,
  `ID_Kategori` int(5) NOT NULL,
  `ID_JL` int(5) NOT NULL,
  `ID_JO` int(5) NOT NULL,
  `ID_TM` int(5) NOT NULL,
  `ID_MO` int(5) NOT NULL,
  `Isi_Kategori` varchar(100) NOT NULL,
  `Harga_Kategori` int(15) NOT NULL,
  `Isi_Deskripsi` text NOT NULL,
  `Gambar_Isi_Kategori` varchar(50) NOT NULL,
  `ID_Alternatif` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_detail`
--

INSERT INTO `kategori_detail` (`ID_Kategori_Detail`, `ID_User`, `ID_Kategori`, `ID_JL`, `ID_JO`, `ID_TM`, `ID_MO`, `Isi_Kategori`, `Harga_Kategori`, `Isi_Deskripsi`, `Gambar_Isi_Kategori`, `ID_Alternatif`) VALUES
(1, 0, 1, 1, 0, 0, 0, 'Isi Angin', 2000, 'Ban merupakan komponen pada sepeda motor yang bersentuhan langsung dengan aspal. Oleh sebab itu, kualitas kan komposisi ban, baik dari bagian luar hingga dalamnya sangat penting untuk diperhatikan. Tidak hanya kualitas kompon, tekanan angin ban motor juga perlu diperhatikan.\r\n\r\nTekanan angin ban motor tentunya sangat penting dalam berkendara. Tekanan angin yang terlalu tinggi membuat tapak ban yang kontak dengan permukaan jalan menjadi tidak merata. Namun jika tekanan angin ban motor kurang dari batas minimal, bisa mengakibatkan benjol hingga pecah ban!\r\n\r\nTekanan angin ban yang tidak sesuai juga akan berpengaruh pada kenyamanan berkendara terutama pengaturan kemudi stir motor. Ketidaknyamanan tersebut dapat mengakibatkan oleng sehingga sepeda motor sulit dikendalikan. Fatalnya, dapat menjadi penyebab kecelakaan.\r\n\r\nAda banyak penyebab tekanan angin ban motor menjadi berkurang. Idealnya, tekanan angin pada ban motor tidak akan berkurang jika tidak ada kebocoran yang disebabkan olieh tusukan benda tajam, kerusakan pada pentil ban atau kerusakan pada velg seperti bengkok yang mengakibatkan angin keluar melalui celah antara ban dan velg.\r\n\r\nJika tekanan angin ban motor Anda berkurang, Anda juga harus tahu tekanan angin yang ideal untuk ban motor Anda. Setiap motor berbeda-beda ukuran tekanan anginnya. Perbedaan ukuran tekanan angin tergantung dari ukuran ban yang digunakan serta jenis motornya. Semakin besar ukuran ban dan motor, maka bisa semakin besar juga tekanan angin ban motor yang dibutuhkan.', 'isiangin_1a.jpg', 'B20203'),
(2, 0, 1, 2, 0, 0, 0, 'Tambal Ban Biasa', 10000, 'Kalau bocor pada telapak atau kerusakan dengan dimensi tertentu masih bisa ditambal. Dan tambalan yang terbaik adalah tambalan dari dalam ban atau istilah umumnya tambalan payung.', 'tambalbanbiasa_1b.jpg', 'B20204'),
(3, 0, 1, 2, 0, 0, 0, 'Tambal Ban Biasa', 12000, 'Kalau bocor pada telapak atau kerusakan dengan dimensi tertentu masih bisa ditambal. Dan tambalan yang terbaik adalah tambalan dari dalam ban atau istilah umumnya tambalan payung.', 'tambalbanbiasa_1c.jpg', 'B20203'),
(4, 0, 1, 2, 0, 0, 0, 'Tambal Ban Tubeless', 15000, 'Banyak orang menggunakan ban tubeless karena lebih nyaman dan aman. Pasalnya, ban ini tidak langsung kempis ketika tertusuk benda tajam.\r\n', 'tambalbantubles_1a.jpg', 'B20204'),
(5, 0, 2, 3, 0, 0, 0, 'Ganti Oli Mesin', 45000, 'Sepeda motor jarang dipakai atau lebih sering berada di garasi tetap membutuhkan perawatan. Salah satu cara termudah ialah, dengan mengganti oli agar proses pelumasan pada mesin tetap optimal.\r\n', 'gantioli_1a.jpg', 'B20202'),
(12, 0, 3, 0, 2, 12, 1, 'Bohlam Depan 12V/32W Satria F115, Nex, Address', 36000, 'BOHLAM DEPAN ALL SUZUKI ORIGINAL SUZUKI Kualitas ori 100 %', 'bohlam_1a.jpg', 'B20205'),
(13, 0, 3, 0, 2, 12, 1, 'Bohlam KM 12V/3,4W Satria F115 Star, Addres', 9000, '', 'bohlam_2a.jpg', 'B20206'),
(14, 0, 3, 0, 2, 15, 1, 'Bohlam Depan Led M02D Ac/Dc 3 Sisi Scarlet', 112500, 'Lampu motor Sobat redup? Coba diganti dengan Bohlam LED agar menjadi lebih terang dan sobat bisa mengendarai kendaraan dengan aman serta nyaman. Jangan menyepelekan perannya bohlam ya Sob karena walaupun bohlam komponen kecil di dalam kendaraan tetapi perannya sangatlah penting Sob.\r\n\r\n\r\n\r\nSpesifikasi Bohlam Depan LED M02D AC/DC 3 sisi:\r\n\r\nTYPE: Universal\r\nMERK: SCARLET\r\nBRIGHTNESS: 3000LM\r\nVOLTAGE: Ac/Dc 10-30V\r\nPOWER: 35 Watt\r\nLIFESPAN: 30.000 Hours\r\nTerdapat kipas pendingin internal\r\nMampu mengeluarkan panas di area head lamp dengan cepat sehingga sirkulasi udara terjaga.', 'bohlam_3a.jpg', 'B20207'),
(15, 0, 3, 0, 3, 7, 3, 'Komstir Mio MHM', 40000, 'Komstir Racing CRF 150 L MHM\r\n	\r\nLaher Komstir Racing Untuk Motor CRF 150\r\n\r\nMerk MHM', 'komstir_1a.jpg', 'B20208'),
(16, 0, 3, 0, 3, 16, 4, 'Komstir Satria F150 STR', 45000, 'Komstir atau steering head adalah komponen penting bagi kenyamanan berkendara sepeda motor. Fungsinya menyeimbangkan dan menstabilkan stang motor serta meminimalisir getaran agar kinerjanya maksimal, kekencangan komstir harus diatur sedemikian rupa. Oleh karena itu, komstir STR hadir untuk memberikan kenyamanan pengendara dan memberikan rasa aman kepada pengendara.\r\n\r\n\r\n\r\nSpesifikasi:\r\n\r\nDibuat Melalui Teknologi Terkini\r\nKomstir STR dibuat dengan high end technology yang secara ekstensif memberikan kinerja dan performa yang optimal untuk pemakaian harian.\r\nSetara dengan O.E.M\r\nKomstir STR diproduksi dari pabrikan pilihan yang memasok setara O.E.M dan mudah untuk dipasang.\r\nKualitas Komstir STR\r\nTelah melewati berbagai uji dan riset yang diformulasikan untuk ketahanan yang telah terjamin tinggi.\r\nGaransi 30 hari\r\nProduk STR yang cacat pada bahan atau produksi pabrikan selama 30 hari dari tanggal pembelian, maka akan digantikan secara cuma-cuma dan bebas biaya dengan melampirkan nota pembelian asli.', 'komstir_2a.jpg', 'B20208'),
(17, 0, 3, 0, 3, 16, 4, 'Komstir Satria F150 STR', 45000, 'Komstir atau steering head adalah komponen penting bagi kenyamanan berkendara sepeda motor. Fungsinya menyeimbangkan dan menstabilkan stang motor serta meminimalisir getaran agar kinerjanya maksimal, kekencangan komstir harus diatur sedemikian rupa. Oleh karena itu, komstir STR hadir untuk memberikan kenyamanan pengendara dan memberikan rasa aman kepada pengendara.\r\n\r\n\r\n\r\nSpesifikasi:\r\n\r\nDibuat Melalui Teknologi Terkini\r\nKomstir STR dibuat dengan high end technology yang secara ekstensif memberikan kinerja dan performa yang optimal untuk pemakaian harian.\r\nSetara dengan O.E.M\r\nKomstir STR diproduksi dari pabrikan pilihan yang memasok setara O.E.M dan mudah untuk dipasang.\r\nKualitas Komstir STR\r\nTelah melewati berbagai uji dan riset yang diformulasikan untuk ketahanan yang telah terjamin tinggi.\r\nGaransi 30 hari\r\nProduk STR yang cacat pada bahan atau produksi pabrikan selama 30 hari dari tanggal pembelian, maka akan digantikan secara cuma-cuma dan bebas biaya dengan melampirkan nota pembelian asli.', 'komstir_2c.jpg', 'B20209'),
(18, 0, 3, 0, 3, 17, 3, 'Komstir KLX MHM', 66500, 'Komstir Racing CRF 150 L MHM\r\n	\r\nLaher Komstir Racing Untuk Motor CRF 150\r\n\r\nMerk MHM', 'komstir_1b.jpg', 'B202010'),
(19, 0, 3, 0, 3, 17, 4, 'Komstir KLX STR', 75000, 'Komstir atau steering head adalah komponen penting bagi kenyamanan berkendara sepeda motor. Fungsinya menyeimbangkan dan menstabilkan stang motor serta meminimalisir getaran agar kinerjanya maksimal, kekencangan komstir harus diatur sedemikian rupa. Oleh karena itu, komstir STR hadir untuk memberikan kenyamanan pengendara dan memberikan rasa aman kepada pengendara.\r\n\r\n\r\n\r\nSpesifikasi:\r\n\r\nDibuat Melalui Teknologi Terkini\r\nKomstir STR dibuat dengan high end technology yang secara ekstensif memberikan kinerja dan performa yang optimal untuk pemakaian harian.\r\nSetara dengan O.E.M\r\nKomstir STR diproduksi dari pabrikan pilihan yang memasok setara O.E.M dan mudah untuk dipasang.\r\nKualitas Komstir STR\r\nTelah melewati berbagai uji dan riset yang diformulasikan untuk ketahanan yang telah terjamin tinggi.\r\nGaransi 30 hari\r\nProduk STR yang cacat pada bahan atau produksi pabrikan selama 30 hari dari tanggal pembelian, maka akan digantikan secara cuma-cuma dan bebas biaya dengan melampirkan nota pembelian asli.', 'komstir_3a.jpg', 'B202011'),
(20, 0, 3, 0, 3, 14, 2, 'Accu (LiFePO4) Battery TLFP-7L 12V TDR', 943000, 'Keuntungan dari TDR Lithium Iron Phosphate (LiFePO4) Baterai\r\n\r\n- Performa Suhu Dingin: Daya engkol dingin luar biasa yang mengungguli produk lain.\r\n\r\n- Dynamic Charge Acceptance: Tingkat pengisian super cepat melalui arus tinggi.\r\n\r\n- Debit diri rendah: Mampu menyalakan kendaraan setelah penyimpanan 12 bulan.\r\n\r\n- Berat Lebih Ringan: Hingga 60% lebih ringan dari baterai timbal-asam yang sebanding, cocok untuk sepeda balap.\r\n\r\n- Robust Brass Terminal: Menawarkan kinerja listrik dan mekanik yang ditingkatkan.\r\n\r\n- Tahan Panas: 230C tahan suhu tinggi diformulasikan kasus tahan api.\r\n\r\n- Desain Tahan Air: Silicone sealant membuat kinerja penyegelan yang sangat baik.\r\n\r\n- Keselamatan & Tanggung Jawab Sosial: Tidak beracun, tidak mengandung asam, tanpa risiko timbal, ramah lingkungan.\r\n\r\nSpesifikasi\r\n\r\nTegangan 12v - 24wh\r\n\r\nMengisi Standar Saat Ini 1A Maksimum 4A\r\n\r\nDimensi 11 x 5,5 x 9 cm (Hanya Baterai)', 'accu_1a.jpg', 'B202012'),
(21, 0, 4, 0, 4, 14, 2, 'Accu (LiFePO4) Battery TLFP-14BL 12V TDR', 1587000, 'Keuntungan dari TDR Lithium Iron Phosphate (LiFePO4) Baterai\r\n\r\n- Performa Suhu Dingin: Daya engkol dingin luar biasa yang mengungguli produk lain.\r\n\r\n- Dynamic Charge Acceptance: Tingkat pengisian super cepat melalui arus tinggi.\r\n\r\n- Debit diri rendah: Mampu menyalakan kendaraan setelah penyimpanan 12 bulan.\r\n\r\n- Berat Lebih Ringan: Hingga 60% lebih ringan dari baterai timbal-asam yang sebanding, cocok untuk sepeda balap.\r\n\r\n- Robust Brass Terminal: Menawarkan kinerja listrik dan mekanik yang ditingkatkan.\r\n\r\n- Tahan Panas: 230C tahan suhu tinggi diformulasikan kasus tahan api.\r\n\r\n- Desain Tahan Air: Silicone sealant membuat kinerja penyegelan yang sangat baik.\r\n\r\n- Keselamatan & Tanggung Jawab Sosial: Tidak beracun, tidak mengandung asam, tanpa risiko timbal, ramah lingkungan.\r\n\r\nSpesifikasi\r\n\r\nTegangan 12v - 48wh\r\n\r\nMengisi Standar Saat Ini 2A Maksimum 8A\r\n\r\nDimensi 13,5 x 6,5 x 9,5 cm (Hanya Baterai)', 'accu_1b.jpg', 'B202013'),
(22, 0, 4, 0, 4, 18, 7, 'Piggyback Universal Kawahara', 1330000, 'PIGGY BACK KAWAHARA FOR HONDA SONIC\r\n- INCLUD CABLE & INSTRUCTION\r\n\r\nPiggyback adalah alat tambahan yang kebanyakan dibuat oleh pemasar aftermarket yang berguna untuk memanipulasi data, sehingga dapat mengatur atau mengontrol perngapian, dan semprotan jumah bahan bakar.', 'piggyback_1a.jpg', 'B202014'),
(23, 0, 4, 0, 5, 3, 7, 'Clutch Brake On Road Beat Kawahara', 460000, 'Deskripsi CLUTCH BRAKE ON ROAD BEAT\r\nClutch brake on road Beat\r\n\r\n100% Original Kawahara', 'clutch_1a.jpg', 'B202015'),
(24, 0, 4, 0, 5, 3, 8, 'Kampas Kopling/ Clutch Only Beat (All Type) ELIG', 140000, 'Kampas Kopling/ Clutch Only Beat (All Type) ELIG\r\n\r\nKelebihan Centrifugal Kevlar Clutch Merk Elig:\r\nKopling ganda dengan tingkat stabilitas dan daya cengkram maksimal untuk meningkatkan akselerasi. Ecofriendly Formula - Material Kevlar - 100% Non Asbestos', 'kampaskopling_1a.jpg', 'B202016'),
(25, 0, 4, 0, 5, 5, 2, 'Ganda Kopling Modify Vario TDR', 720000, 'Ganda Kopling merupakan sistem kopling yang biasa ditemukan pada motor bebek dan matic. Ganda kopling terdiri dari dua komponen yaitu, kampas kopling ganda, dan rumah kopling yang keduanya berfungsi untuk memutus tenaga mesin ke transmisi, sehingga meskipun mesin hidup, motor tidak akan bergerak. Ganda kopling biasa disebut kopling otomatis.\r\n\r\nGanda kopling yang berkualitas merupakan hal yang wajib, demi menjaga performa motor yang optimal. Ganda Kopling TDR didesain dengan sepatu kopling yang lebih panjang untuk menambah performa dan memaksimalkan performa mesin. Ganda Kopling TDR juga sangat cocok digunakan dalam berbagai kondisi.\r\n\r\n\r\n\r\nSepatu kopling yang lebih panjang\r\nGanda Kopling TDR didesain dengan sepatu kopling yang lebih panjang yang cocok untuk meningkatkan akselerasi.\r\nMemaksimalkan performa motor\r\nGanda Kopling TDR dapat memaksimalkan power mesin ke roda motor.\r\nCocok untuk berbagai penggunaan\r\nGanda Kopling TDR cocok digunakan untuk pemakaian sehari-hari maupun balapan.', 'gandakopling_1a.jpg', 'B202017'),
(26, 0, 4, 0, 5, 5, 7, 'Ganda Kopling Drag Vario Kawahara', 450000, 'KAWAHARA KAMPAS KOPLING GANDA\r\nTYPE DRAG\r\nUNTUK MOTOR.\r\n-vario 110 karbu\r\n-vario techno 110 karbu', 'kampasganda_1a.jpg', 'B202018'),
(27, 0, 4, 0, 5, 7, 2, 'Ganda Kopling Std Clutch Housing Mio 200CC TDR', 475000, 'Ganda Kopling merupakan sistem kopling yang biasa ditemukan pada motor bebek dan matic. Ganda kopling terdiri dari dua komponen yaitu, kampas kopling ganda, dan rumah kopling yang keduanya berfungsi untuk memutus tenaga mesin ke transmisi, sehingga meskipun mesin hidup, motor tidak akan bergerak. Ganda kopling biasa disebut kopling otomatis.\r\n\r\nGanda kopling yang berkualitas merupakan hal yang wajib, demi menjaga performa motor yang optimal. Ganda Kopling TDR didesain dengan sepatu kopling yang lebih panjang untuk menambah performa dan memaksimalkan performa mesin. Ganda Kopling TDR juga sangat cocok digunakan dalam berbagai kondisi.\r\n\r\n\r\n\r\n\r\n\r\nSepatu kopling yang lebih panjang\r\nGanda Kopling TDR didesain dengan sepatu kopling yang lebih panjang yang cocok untuk meningkatkan akselerasi.\r\nMemaksimalkan performa motor\r\nGanda Kopling TDR dapat memaksimalkan power mesin ke roda motor.\r\nCocok untuk berbagai penggunaan\r\nGanda Kopling TDR cocok digunakan untuk pemakaian sehari-hari maupun balapan.\r\n\r\nRacing Clutch Carrier Assy', 'gandakopling_1b.jpg', 'B202019'),
(28, 0, 4, 0, 5, 7, 7, 'Clutch Drax Spring Mio 1000/1500/2000 RPM', 64000, 'PER KAMPAS GANDA KAWAHARA RACING\r\nRpm 1000\r\nRpm 1500\r\nRpm 20000\r\nUntuk motor\r\n-mio\r\n-mio soul\r\n-nouvo\r\n-fino karbu\r\nper satu set ( isi 3pcs )', 'clutch_2a.jpg', 'B202020'),
(29, 0, 4, 0, 6, 14, 6, 'Stabilizer Roll 1055 CNC Merah Scarlet', 105000, 'Penstabil stang dan shock depan\r\nMenggunakan sistem hidraulik agar mencapai kestabilan saat dalam kecepatan tinggi mapun menuver ditikungan\r\nMembuat stang stabil dikala kecepatan tinggi dan saat menikung juga akan stabil walau kecepatan tinggi\r\nMenambah kesan racing pada motor Sobat\r\n\r\nSpesifikasi Stabilizer\r\nMERK: SCARLET\r\nTYPE: Universal\r\nMATERIAL: Alumunium Berkualitas\r\nISI: 1 Pcs\r\nBERAT: 1 Kg\r\nREADY STOCK: Gold, Red, Silver', 'stabilizer_1c.jpg', 'B20201'),
(30, 0, 4, 0, 6, 14, 6, 'Stabilizer Roll 622 Gold Scarlet', 99000, 'Penstabil stang dan shock depan\r\nMenggunakan sistem hidraulik agar mencapai kestabilan saat dalam kecepatan tinggi mapun menuver ditikungan\r\nMembuat stang stabil dikala kecepatan tinggi dan saat menikung juga akan stabil walau kecepatan tinggi\r\nMenambah kesan racing pada motor Sobat\r\n\r\nSpesifikasi Stabilizer\r\nMERK: SCARLET\r\nTYPE: Universal\r\nMATERIAL: Alumunium Berkualitas\r\nISI: 1 Pcs\r\nBERAT: 1 Kg\r\nREADY STOCK: Black, Blue, Red, Silver, Orange', 'stabilizer_2a.jpg', 'B20202'),
(31, 0, 4, 0, 6, 14, 2, 'Rantai 415ER - 130L Hijau Neon TDR', 233000, '', 'rantai_1a.jpg', 'B20203'),
(32, 0, 4, 0, 6, 14, 2, 'Rantai 428AD x 108L TDR', 102000, '', 'rantai_2a.jpg', 'B20204'),
(33, 0, 4, 0, 6, 19, 9, 'Stelan Rantai Vixion Bronze Cyber Work', 40000, 'Best Seller Bronze Anting Setelan Rantai Motor for Yamaha Jupiter MX\r\n\r\nBest Seller Bronze Anting Setelan Rantai Motor for Yamaha Jupiter MX merupakan anting setelan rantai yang berguna untuk menyetel kencang-kendurnya rantai motor Anda. Tampil dengan variasi warna membuat motor Anda makin trendy. Terbuat dari bahan berkualitas & Good Quality.', 'rantai_3b.jpg', 'B20205'),
(34, 0, 4, 0, 6, 19, 9, 'Stelan Rantai Vixion Silver Cyber Work', 40000, 'Setelan rantai / anting rantai untuk motor Yamaha :\r\n\r\n- Vixion\r\n\r\n- dan sejenisnya\r\n\r\n\r\n\r\nsepasang / 2 pcs (untuk kiri dan kanan)', 'rantai_4a.jpg', 'B20206'),
(35, 0, 5, 0, 7, 3, 10, 'Batok Lampu Belakang Beat Hitam Paravira', 18500, '', 'batok_1a.jpg', 'B20207'),
(36, 0, 5, 0, 7, 3, 10, 'Batok Lampu Depan Beat Biru Muda Paravira', 52000, '', 'batok_2a.jpg', 'B20208'),
(37, 0, 5, 0, 8, 3, 10, 'Cover Body Beat Hitam Paravira', 143000, '', 'cover_1a.jpg', 'B20209'),
(38, 0, 5, 0, 8, 3, 10, 'Cover Body Beat Biru Candy Paravira', 171000, '', 'cover_2a.jpg', 'B202010'),
(39, 0, 5, 0, 8, 2, 10, 'Cover Body Scoopy Merah Maroon Paravira', 138000, '', 'cover_3a.jpg', 'B202011'),
(40, 0, 5, 0, 8, 2, 10, 'Cover Body Scoopy Violet Paravira', 138000, '', 'cover_4a.jpg', 'B202012'),
(41, 0, 5, 0, 8, 2, 10, 'Cover Body + Pad Atas + Bawah Vario Hitam', 196000, '', 'cover_5a.jpg', 'B202013'),
(42, 0, 5, 0, 8, 8, 11, 'Cover Cover Body 14967 NMax YGP', 224000, '', 'cover_6a.jpg', 'B202014'),
(43, 0, 5, 0, 8, 20, 10, 'Cover Body Smash Biru Paravira', 197000, '', 'cover_7a.jpg', 'B202015'),
(44, 0, 5, 0, 8, 20, 10, 'Cover Body Smash Hitam Paravira', 174000, '', 'cover_8a.jpg', 'B202015'),
(47, 0, 5, 0, 9, 18, 12, 'Spion Mdl Supra Fit-N (Yamaha) Yamakawa', 32000, '', 'spion_1a.jpg', 'B202016'),
(48, 0, 5, 0, 9, 18, 12, 'Spion Mdl Supra-X 125 (Suzuki) Yamakawa', 42000, '', 'spion_2a.jpg', 'B202017'),
(49, 0, 5, 0, 9, 3, 3, 'Spion Standar Beat / F1 MHM', 32500, '', 'spion_3a.jpg', 'B202018'),
(50, 0, 5, 0, 9, 3, 4, 'Spion Std Beat STR', 40500, '', 'spion_4a.jpg', 'B202019'),
(51, 0, 5, 0, 9, 7, 3, 'Spion Standar Mio MHM', 32500, 'Menggunakan Cermin Cembung\r\nUntuk semua Motor Yamaha (Non fairing)\r\nDesain Menarik', 'spion_5a.jpg', 'B202020'),
(52, 0, 5, 0, 9, 8, 11, 'Spion Standar 14677 Nmax YGP', 90000, '', 'spion_6a.jpg', 'B202020'),
(53, 0, 3, 0, 1, 14, 2, 'Busi Ballistic 061R TDR', 40000, '\r\nBusi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri\r\n', 'busi_9a.jpg', 'B20201'),
(54, 0, 3, 0, 1, 14, 2, 'Busi Ballistic 071R TDR', 40000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_10a.jpg', 'B20202'),
(55, 0, 3, 0, 1, 14, 2, 'Busi Twin Iridium 071T TDR', 175000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_8a.jpg', 'B20203'),
(56, 0, 3, 0, 1, 14, 2, 'Busi Twin Iridium 071T TDR', 177000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.', 'busi_8b.jpg', 'B20204'),
(57, 0, 3, 0, 1, 14, 2, 'Busi Ballistic 061R TDR', 40000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri\r\n', 'busi_9a.jpg', 'B20205'),
(58, 0, 3, 0, 1, 14, 2, 'Busi Ballistic 061R TDR', 40000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_9b.jpg', 'B20206'),
(59, 0, 3, 0, 1, 14, 2, 'Busi Ballistic 061R TDR', 41000, '\r\nBusi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri\r\n', 'busi_9c.jpg', 'B20207'),
(60, 0, 3, 0, 1, 14, 2, 'Busi Ballistic 071R TDR', 39000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_10a.jpg', 'B20208'),
(61, 0, 3, 0, 1, 14, 2, 'Busi Ballistic 071R TDR', 40000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_10c.jpg', 'B20209'),
(62, 0, 3, 0, 1, 14, 2, 'Busi Ballistic 071R TDR', 42000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_10b.jpg', 'B202010'),
(63, 0, 3, 0, 1, 14, 2, 'Busi Twin Iridium 071T TDR', 176000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_8c.jpg', 'B202011'),
(64, 0, 3, 0, 1, 14, 2, 'Busi Twin Iridium 071T TDR', 175000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_8b.jpg', 'B202012'),
(65, 0, 3, 0, 1, 14, 2, 'Busi Twin Iridium 071T TDR', 175500, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_8a.jpg', 'B202013'),
(66, 0, 3, 0, 1, 14, 2, 'Busi Twin Iridium 071T TDR', 176000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.', 'busi_8b.jpg', 'B202014'),
(67, 0, 3, 0, 1, 14, 2, 'Busi Twin Iridium 071T TDR', 178000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.', 'busi_8a.jpg', 'B202015'),
(68, 0, 3, 0, 1, 14, 2, 'Busi Ballistic 071R TDR', 39000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_10a.jpg', 'B202016'),
(69, 0, 3, 0, 1, 14, 2, 'usi Ballistic 071R TDR', 42000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_10b.jpg', 'B202017'),
(70, 0, 3, 0, 1, 14, 2, 'Busi Twin Iridium 071T TDR', 176000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri', 'busi_8c.jpg', 'B202018'),
(71, 0, 3, 0, 1, 14, 2, 'Busi Ballistic 061R TDR', 43000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri\r\n', 'busi_9a.jpg', 'B202019'),
(72, 0, 3, 0, 1, 14, 2, 'Busi Ballistic 061R TDR', 40000, 'Busi memegang peranan penting dalam sistem pengapian. Busi bertugas sebagai pemantik campuran bahan bakar dan udara, sehingga terjadi pembakaran dalam ruang bakar. Terdapat beberapa jenis busi di pasaran, salah satunya busi iridium. Busi iridium mempunyai konduksi yang lebih baik dan tangguh dalam suhu ekstrim. Busi Iridium TDR merupakan busi yang dibuat oleh TDR Industries menggunakan tapered iridium demi menghasilkan horse power tinggi. Selain itu, busi ini juga bisa menghemat bahan bakar motor anda.\r\n\r\n\r\n\r\nDidesain menggunakan Iridium yang diruncingkan\r\nBusi Iridium TDR didesain menggunakan Iridium yang ujungnya diruncingkan sehingga dapat menghasilkan bunga api yang kuat untuk horse power yang tinggi dan berfokus pada peningkatan api busi\r\nDidesain dengan ujung yang dibengkokan\r\nBusi Iridium TDR didesain dengan ujung yang dibengkokkan untuk memenuhi kebutuhan kompresi tinggi\r\nHemat bahan bakar\r\nPada pemakaian sehari-hari Busi Iridium TDR dapat menghemat bahan bakar motor anda\r\nDikembangkan dengan teknologi mutakhir dan dirakit oleh TDR Industri\r\n', 'busi_9c.jpg', 'B202020'),
(73, 3, 1, 1, 0, 0, 0, 'Isi Angin 10 Ban', 5000, 'Isi Angin 10 Ban untuk 5 kendaraan sekaligus', 'test.jpg', 'B20209'),
(74, 3, 8, 0, 17, 2, 7, 'Jari', 50000, 'good job', 'test.jpg', 'B20209'),
(75, 3, 6, 0, 10, 18, 7, 'handuk tour', 25000, 'Handuk Nyaman', 'test.jpg', 'B20209'),
(76, 3, 2, 2, 0, 0, 0, 'Isi Angin dua Ban', 4000, 'yes yes yes', 'test.jpg', 'B20209'),
(77, 3, 2, 1, 0, 0, 0, 'Isi Angin 200 Ban', 10000000, 'uhuy yaya', 'test.jpg', 'B20209'),
(78, 3, 4, 0, 6, 2, 3, 'Jari', 25000, 'hihi yy', 'test.jpg', 'B20209'),
(79, 3, 2, 3, 0, 0, 0, 'hahahhaa yes', 4000, 'haha hs', 'test.jpg', 'B20209'),
(80, 2, 1, 1, 0, 0, 0, 'Isi Angin dua Ban', 6000, 'hahaha', 'test.jpg', 'B20209'),
(81, 2, 3, 0, 2, 2, 4, 'Jari', 7000, 'hahaha', 'test.jpg', 'B20209');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `ID_Kriteria` int(5) NOT NULL,
  `Nama_Kriteria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`ID_Kriteria`, `Nama_Kriteria`) VALUES
(1, 'Pelayanan'),
(2, 'Kecepatan'),
(3, 'Kenyamanan Tempat Tunggu'),
(4, 'Harga');

-- --------------------------------------------------------

--
-- Table structure for table `matrix`
--

CREATE TABLE `matrix` (
  `ID_Matrix` int(5) NOT NULL,
  `ID_Alternatif` varchar(10) NOT NULL,
  `ID_Kriteria` int(5) NOT NULL,
  `Data_Point` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matrix`
--

INSERT INTO `matrix` (`ID_Matrix`, `ID_Alternatif`, `ID_Kriteria`, `Data_Point`) VALUES
(1, 'B20201', 1, 5),
(2, 'B20201', 2, 4),
(3, 'B20201', 3, 5),
(4, 'B20201', 4, 5),
(5, 'B20202', 1, 2),
(6, 'B20202', 2, 3),
(7, 'B20202', 3, 5),
(8, 'B20202', 4, 2),
(9, 'B20203', 1, 3),
(10, 'B20203', 2, 5),
(11, 'B20203', 3, 3),
(12, 'B20203', 4, 4),
(13, 'B20204', 1, 5),
(14, 'B20204', 2, 4),
(15, 'B20204', 3, 3),
(16, 'B20204', 4, 4),
(17, 'B20205', 1, 4),
(18, 'B20205', 2, 4),
(19, 'B20205', 3, 3),
(20, 'B20205', 4, 3),
(21, 'B20206', 1, 5),
(22, 'B20206', 2, 5),
(23, 'B20206', 3, 4),
(24, 'B20206', 4, 5),
(25, 'B20207', 1, 4),
(26, 'B20207', 2, 4),
(27, 'B20207', 3, 4),
(28, 'B20207', 4, 3),
(29, 'B20208', 1, 5),
(30, 'B20208', 2, 5),
(31, 'B20208', 3, 5),
(32, 'B20208', 4, 5),
(33, 'B20209', 1, 4),
(34, 'B20209', 2, 5),
(35, 'B20209', 3, 3),
(36, 'B20209', 4, 4),
(37, 'B202010', 1, 5),
(38, 'B202010', 2, 4),
(39, 'B202010', 3, 4),
(40, 'B202010', 4, 4),
(41, 'B202011', 1, 4),
(42, 'B202011', 2, 4),
(43, 'B202011', 3, 4),
(44, 'B202011', 4, 4),
(45, 'B202012', 1, 5),
(46, 'B202012', 2, 5),
(47, 'B202012', 3, 4),
(48, 'B202012', 4, 4),
(49, 'B202013', 1, 3),
(50, 'B202013', 2, 3),
(51, 'B202013', 3, 4),
(52, 'B202013', 4, 4),
(53, 'B202014', 1, 5),
(54, 'B202014', 2, 5),
(55, 'B202014', 3, 4),
(56, 'B202014', 4, 4),
(57, 'B202015', 1, 5),
(58, 'B202015', 2, 5),
(59, 'B202015', 3, 5),
(60, 'B202015', 4, 5),
(61, 'B202016', 1, 4),
(62, 'B202016', 2, 4),
(63, 'B202016', 3, 3),
(64, 'B202016', 4, 4),
(65, 'B202017', 1, 4),
(66, 'B202017', 2, 4),
(67, 'B202017', 3, 4),
(68, 'B202017', 4, 4),
(69, 'B202018', 1, 5),
(70, 'B202018', 2, 5),
(71, 'B202018', 3, 5),
(72, 'B202018', 4, 4),
(73, 'B202019', 1, 5),
(74, 'B202019', 2, 5),
(75, 'B202019', 3, 5),
(76, 'B202019', 4, 4),
(77, 'B202020', 1, 4),
(78, 'B202020', 2, 5),
(79, 'B202020', 3, 4),
(80, 'B202020', 4, 4),
(81, 'B202021', 0, 1),
(82, 'B202021', 1, 2),
(83, 'B202021', 2, 3),
(84, 'B202021', 3, 4),
(85, 'B202021', 0, 1),
(86, 'B202021', 1, 2),
(87, 'B202021', 2, 3),
(88, 'B202021', 3, 4),
(89, 'B202021', 0, 1),
(90, 'B202021', 1, 4),
(91, 'B202021', 2, 3),
(92, 'B202021', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `ID_Pengajuan` int(11) NOT NULL,
  `ID_Pengguna` int(6) NOT NULL,
  `Nama_User` varchar(255) NOT NULL,
  `Email_User` varchar(60) NOT NULL,
  `Telepon_User` varchar(20) NOT NULL,
  `Nama_Bengkel` varchar(255) NOT NULL,
  `Alamat_Bengkel` varchar(255) NOT NULL,
  `Telepon_Bengkel` varchar(20) NOT NULL,
  `JamOperasional_Bengkel` varchar(255) NOT NULL,
  `ID_Alternatif` int(11) NOT NULL,
  `Jenis_Layanan` varchar(255) NOT NULL,
  `Nama_layanan` varchar(255) NOT NULL,
  `Harga_Layanan` int(15) NOT NULL,
  `Jenis_Onderdil` varchar(255) NOT NULL,
  `Nama_Onderdil` varchar(255) NOT NULL,
  `Merek_Motor` varchar(255) NOT NULL,
  `Tipe_Motor` varchar(255) NOT NULL,
  `Merek_Onderdil` varchar(255) NOT NULL,
  `Harga_Onderdil` int(15) NOT NULL,
  `Gambar_Objek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`ID_Pengajuan`, `ID_Pengguna`, `Nama_User`, `Email_User`, `Telepon_User`, `Nama_Bengkel`, `Alamat_Bengkel`, `Telepon_Bengkel`, `JamOperasional_Bengkel`, `ID_Alternatif`, `Jenis_Layanan`, `Nama_layanan`, `Harga_Layanan`, `Jenis_Onderdil`, `Nama_Onderdil`, `Merek_Motor`, `Tipe_Motor`, `Merek_Onderdil`, `Harga_Onderdil`, `Gambar_Objek`) VALUES
(1, 111111, 'Momo', 'momo@gmail.com', '081000000000', 'Bengkel Maju', 'Jalan A.Yani no. 15 Gading Serpong Tangerang', '02199999', 'Setiap hari 08:00-17:00', 0, '', '', 0, '', '', '', '', '', 0, ''),
(2, 122222, 'Luna', 'Luna@gmail.com', '085555555555', 'Merdeka Bengkel', 'Jalan Scientia Boulevard No.30 Gading Serpong', '02111122', 'Senin-Jumat 10:00-19:00\r\nSabtu-Minggu 10-00-16:00', 0, '', '', 0, '', '', '', '', '', 0, ''),
(3, 111111, '', '', '', '', '', '', '', 21, 'Tambal Ban', 'Tambal Ban Tubles', 25000, '', '', '', '', '', 0, ''),
(4, 111111, '', '', '', '', '', '', '', 21, 'Pompa Ban', 'Pomba Ban (per ban)', 1000, '', '', '', '', '', 0, ''),
(5, 111111, '', '', '', '', '', '', '', 21, '', '', 0, 'Ban', 'Ban Dalam Swallow', 'Umum', 'Umum', 'Swallow', 40000, ''),
(6, 122222, '', '', '', '', '', '', '', 22, '', '', 0, 'Busi', 'Busi tahan lama kualitas ORI', 'Yamaha', 'Mio', 'MerekApaAja', 32000, ''),
(7, 122222, '', '', '', '', '', '', '', 22, '', '', 0, 'Spion', 'Satu set spion anti srempetan', 'Honda', 'Beat', 'TesMerek', 50000, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_layanan`
--

CREATE TABLE `pengajuan_layanan` (
  `ID_Pengajuan_L` int(5) NOT NULL,
  `ID_Alternatif` varchar(10) NOT NULL,
  `ID_User` int(5) NOT NULL,
  `ID_Kategori` int(5) NOT NULL,
  `Jenis_Layanan` int(5) NOT NULL,
  `Nama_Layanan` varchar(100) NOT NULL,
  `Deskripsi_Layanan` text NOT NULL,
  `Harga_Layanan` int(15) NOT NULL,
  `Gambar_Objek1` varchar(255) NOT NULL,
  `Gambar_Objek2` varchar(255) NOT NULL,
  `Gambar_Objek3` varchar(255) NOT NULL,
  `Tanggal_Input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_layanan`
--

INSERT INTO `pengajuan_layanan` (`ID_Pengajuan_L`, `ID_Alternatif`, `ID_User`, `ID_Kategori`, `Jenis_Layanan`, `Nama_Layanan`, `Deskripsi_Layanan`, `Harga_Layanan`, `Gambar_Objek1`, `Gambar_Objek2`, `Gambar_Objek3`, `Tanggal_Input`) VALUES
(1, 'B202021', 0, 0, 2, 'Ban Tubles', 'Tambal Ban Paling Ampuh', 25000, '', '', '', '2020-06-04 15:15:15'),
(2, 'B202022', 0, 0, 2, 'Ban Super', 'BAN MOTOR', 10000, '', '', '', '2020-06-04 15:15:15'),
(3, 'B202022', 0, 0, 1, 'aaaa', 'aaaa', 5000, '', '', '', '2020-06-04 15:15:15'),
(4, 'undefined', 0, 1, 1, 'sssssssss', 'sssssssss', 2000, '', '', '', '2020-06-04 15:15:15'),
(5, 'undefined', 0, 1, 1, 'ppppppp', 'ppppppp', 40000, '', '', '', '2020-06-04 15:15:15'),
(6, 'undefined', 0, 1, 2, 'tambal ban mantul', 'mantul bat', 1000, '', '', '', '2020-06-04 15:15:15'),
(7, 'B202021', 0, 1, 2, 'Tambal ban biasa', 'Merupakan tambal ban biasa yang sangat tahan lama', 15000, '', '', '', '2020-06-04 15:15:15'),
(8, 'undefined', 0, 1, 2, 'Tambal Ban Tubles', 'Merupakan tambal ban tubles', 25000, '', '', '', '2020-06-04 15:15:15'),
(9, 'B202021', 0, 1, 1, 'Isi Angin per Ban', 'Merupakan isi angin untuk satu ban saja', 2000, '', '', '', '2020-06-04 15:15:15'),
(10, 'B202022', 0, 1, 1, 'Isi Angin dua Ban', 'Isi angin balablala', 4000, '', '', '', '2020-06-04 15:15:15'),
(11, 'B20209', 3, 1, 1, 'Isi Angin 10 Ban', 'Isi Angin 10 Ban untuk 5 kendaraan sekaligus', 5002, 'test.jpg', 'test.jpg', 'test.jpg', '2020-06-15 09:11:59'),
(12, 'B20209', 3, 1, 1, 'Isi Angin 10 Ban', 'Isi Angin 10 Ban untuk 5 kendaraan sekaligus', 5000, 'test.jpg', 'test.jpg', 'test.jpg', '2020-06-15 09:12:30'),
(13, 'B20209', 3, 1, 1, 'Isi Angin 10 Ban', 'Isi Angin 10 Ban untuk 5 kendaraan sekaligus', 5000, 'test.jpg', 'test.jpg', 'test.jpg', '2020-06-15 09:12:49'),
(14, 'B20209', 3, 1, 1, 'Isi Angin 10 Ban', 'Isi Angin 10 Ban untuk 5 kendaraan sekaligus', 5000, 'test.jpg', 'test.jpg', 'test.jpg', '2020-06-15 09:12:59'),
(15, 'B20209', 3, 1, 1, 'Isi Angin 10 Ban', 'Isi Angin 10 Ban untuk 5 kendaraan sekaligus', 5000, 'test.jpg', 'test.jpg', 'test.jpg', '2020-06-15 09:14:26'),
(16, 'B20209', 3, 2, 2, 'Isi Angin dua Ban', 'yes yes yes', 4000, 'test.jpg', '', '', '2020-06-15 09:22:15'),
(17, 'B20209', 3, 2, 1, 'Isi Angin 200 Ban', 'uhuy yaya', 10000000, 'test.jpg', '', '', '2020-06-15 09:22:37'),
(18, 'B20209', 3, 2, 3, 'hahahhaa yes', 'haha hs', 4000, 'test.jpg', '', '', '2020-06-15 09:26:01'),
(19, 'B20209', 2, 1, 1, 'Isi Angin dua Ban', 'hahaha', 6000, 'test.jpg', 'test.jpg', 'test.jpg', '2020-06-15 17:03:50'),
(20, 'B20209', 2, 1, 1, 'Isi Angin dua Ban', 'hahaha', 6000, 'test.jpg', 'test.jpg', 'test.jpg', '2020-06-15 17:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_onderdil`
--

CREATE TABLE `pengajuan_onderdil` (
  `ID_Pengajuan_O` int(5) NOT NULL,
  `ID_Alternatif` varchar(10) NOT NULL,
  `ID_User` int(5) NOT NULL,
  `ID_Kategori` int(5) NOT NULL,
  `Jenis_Onderdil` int(5) NOT NULL,
  `Nama_Onderdil` varchar(100) NOT NULL,
  `Merek_Motor` varchar(50) NOT NULL,
  `Tipe_Motor` varchar(50) NOT NULL,
  `Merek_Onderdil` varchar(50) NOT NULL,
  `Deskripsi_Onderdil` text NOT NULL,
  `Harga_Onderdil` int(15) NOT NULL,
  `Gambar_Objek1` varchar(50) NOT NULL,
  `Tanggal_Input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_onderdil`
--

INSERT INTO `pengajuan_onderdil` (`ID_Pengajuan_O`, `ID_Alternatif`, `ID_User`, `ID_Kategori`, `Jenis_Onderdil`, `Nama_Onderdil`, `Merek_Motor`, `Tipe_Motor`, `Merek_Onderdil`, `Deskripsi_Onderdil`, `Harga_Onderdil`, `Gambar_Objek1`, `Tanggal_Input`) VALUES
(1, 'B202021', 0, 0, 1, '0', '1', '1', '2', 'Motor terkeren', 150000, '', '2020-06-04 15:29:34'),
(2, 'B202022', 0, 0, 1, '0', '1', '3', '8', 'Merek Tenar', 50000, '', '2020-06-04 15:29:34'),
(3, 'undefined', 0, 0, 3, '0', '1', '6', '6', 'komstir satu', 200000, '', '2020-06-04 15:29:34'),
(4, 'undefined', 0, 0, 3, '0', '2', '2', '3', 'komstir dua', 200000, '', '2020-06-04 15:29:34'),
(5, 'undefined', 0, 3, 3, '0', '1', '15', '7', 'komstir tiga', 200000, '', '2020-06-04 15:29:34'),
(6, 'B202021', 0, 3, 2, '0', '1', '2', '3', 'Bohlam yang sangat awet', 25000, '', '2020-06-04 15:29:34'),
(7, 'B20209', 3, 8, 17, 'Jari', '1', '2', '7', 'good job', 50000, 'test.jpg', '2020-06-15 09:19:09'),
(8, 'B20209', 3, 8, 17, 'Jari', '1', '2', '7', 'good job', 50000, 'test.jpg', '2020-06-15 09:19:26'),
(9, 'B20209', 3, 6, 10, 'handuk tour', '5', '18', '7', 'Handuk Nyaman', 25000, 'test.jpg', '2020-06-15 09:20:48'),
(10, 'B20209', 3, 4, 6, 'Jari', '1', '2', '3', 'hihi yy', 25000, 'test.jpg', '2020-06-15 09:24:07'),
(11, 'B20209', 2, 3, 2, 'Jari', '1', '2', '4', 'hahaha', 7000, 'test.jpg', '2020-06-15 17:09:55'),
(12, 'B20209', 2, 3, 2, 'Jari', '1', '2', '4', 'hahaha', 7000, 'test.jpg', '2020-06-15 17:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_temp`
--

CREATE TABLE `pengajuan_temp` (
  `ID_Pengajuan` int(5) NOT NULL,
  `ID_User` int(5) NOT NULL,
  `Nama_Bengkel` varchar(100) NOT NULL,
  `Alamat_Bengkel` varchar(100) NOT NULL,
  `Telepon_Bengkel` varchar(20) NOT NULL,
  `JamOperasional_Bengkel` varchar(100) NOT NULL,
  `Gambar_Objek1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_temp`
--

INSERT INTO `pengajuan_temp` (`ID_Pengajuan`, `ID_User`, `Nama_Bengkel`, `Alamat_Bengkel`, `Telepon_Bengkel`, `JamOperasional_Bengkel`, `Gambar_Objek1`) VALUES
(6, 0, 'MDL 1', 'MDL 1', '123456789', '10.00-15.00', 'Test Doang.jpg'),
(8, 0, 'Momo Beng', 'Modernland', '02111111', '08:00-21:00', 'Test Doang.jpg'),
(9, 0, 'Pev Beng', 'CImone', '02222222', '08:00-17:00', 'Test Doang.jpg'),
(10, 0, 'test1', 'test1', '02111111111', 'test1', 'Test Doang.jpg'),
(11, 0, 'test2', 'test2', '000000', 'test2', 'Test Doang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `saring`
--

CREATE TABLE `saring` (
  `ID_Saring` int(5) NOT NULL,
  `Nama_Saring` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saring`
--

INSERT INTO `saring` (`ID_Saring`, `Nama_Saring`) VALUES
(1, 'Jenis Layanan'),
(2, 'Jenis Onderdil'),
(3, 'Merek Motor'),
(4, 'Tipe Motor'),
(5, 'Merek Onderdil');

-- --------------------------------------------------------

--
-- Table structure for table `saring_jenis_layanan`
--

CREATE TABLE `saring_jenis_layanan` (
  `ID_JL` int(5) NOT NULL,
  `ID_Kategori` int(5) NOT NULL,
  `Nama_JL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saring_jenis_layanan`
--

INSERT INTO `saring_jenis_layanan` (`ID_JL`, `ID_Kategori`, `Nama_JL`) VALUES
(1, 1, 'Isi Angin'),
(2, 1, 'Tambal Ban'),
(3, 2, 'Ganti Oli');

-- --------------------------------------------------------

--
-- Table structure for table `saring_jenis_onderdil`
--

CREATE TABLE `saring_jenis_onderdil` (
  `ID_JO` int(5) NOT NULL,
  `ID_Kategori` int(5) NOT NULL,
  `Nama_JO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saring_jenis_onderdil`
--

INSERT INTO `saring_jenis_onderdil` (`ID_JO`, `ID_Kategori`, `Nama_JO`) VALUES
(1, 3, 'Busi'),
(2, 3, 'Bohlam'),
(3, 3, 'Komstir'),
(4, 4, 'Accu'),
(5, 4, 'Kopling'),
(6, 4, 'Rantai'),
(7, 5, 'Batok Lampu'),
(8, 5, 'Cover Body'),
(9, 5, 'Spion'),
(10, 6, 'Apparel'),
(11, 6, 'Plat Motor'),
(12, 6, 'Sarung Motor'),
(13, 7, 'Minyak Rem'),
(14, 7, 'Oli'),
(15, 7, 'Pelumas Rantai'),
(16, 8, 'Ban'),
(17, 8, 'Jari-jari'),
(18, 8, 'Velg');

-- --------------------------------------------------------

--
-- Table structure for table `saring_merek_motor`
--

CREATE TABLE `saring_merek_motor` (
  `ID_MM` int(5) NOT NULL,
  `Nama_MM` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saring_merek_motor`
--

INSERT INTO `saring_merek_motor` (`ID_MM`, `Nama_MM`) VALUES
(1, 'Honda'),
(2, 'Yamaha'),
(3, 'Kawasaki'),
(4, 'Suzuki'),
(5, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `saring_merek_onderdil`
--

CREATE TABLE `saring_merek_onderdil` (
  `ID_MO` int(5) NOT NULL,
  `Nama_MO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saring_merek_onderdil`
--

INSERT INTO `saring_merek_onderdil` (`ID_MO`, `Nama_MO`) VALUES
(1, 'Suzuki Genuin Part'),
(2, 'TDR'),
(3, 'MHM'),
(4, 'STR'),
(5, 'Buana'),
(6, 'Scarlet'),
(7, 'Kawahara'),
(8, 'ELIG'),
(9, 'Cyber Work'),
(10, 'Paravira'),
(11, 'Yamaha Genuine Part'),
(12, 'Yamakawa');

-- --------------------------------------------------------

--
-- Table structure for table `saring_tipe_motor`
--

CREATE TABLE `saring_tipe_motor` (
  `ID_TM` int(5) NOT NULL,
  `ID_MM` int(5) NOT NULL,
  `Nama_TM` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saring_tipe_motor`
--

INSERT INTO `saring_tipe_motor` (`ID_TM`, `ID_MM`, `Nama_TM`) VALUES
(1, 1, 'Vario'),
(2, 1, 'Scoopy'),
(3, 1, 'Beat'),
(4, 1, 'Tiger'),
(5, 1, 'Vario'),
(6, 2, 'Aerox'),
(7, 2, 'Mio'),
(8, 2, 'NMAX'),
(9, 3, 'Ninja'),
(10, 3, 'Ninja 150'),
(11, 3, 'Ninja 150 RR'),
(12, 4, 'Address'),
(13, 4, 'Nex'),
(14, 1, 'Umum'),
(15, 3, 'Umum'),
(16, 4, 'Satria F150'),
(17, 3, 'KLX'),
(18, 5, 'Umum'),
(19, 2, 'Vixion'),
(20, 4, 'Smash'),
(21, 1, 'Grand'),
(22, 4, 'Thunder 125'),
(23, 2, 'Umum'),
(24, 3, 'Ninja 150R');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` int(5) NOT NULL,
  `RoleID_User` int(5) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Email_User` varchar(50) NOT NULL,
  `Telepon_User` varchar(20) NOT NULL,
  `Password_User` varchar(32) NOT NULL,
  `Tanggal_Buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_User`, `RoleID_User`, `Nama_User`, `Email_User`, `Telepon_User`, `Password_User`, `Tanggal_Buat`) VALUES
(1, 1, 'Admin', 'admin@gsbm.com', '123456789', '21232f297a57a5a743894a0e4a801fc3', '2020-06-02 18:09:50'),
(2, 2, 'TestDoang', 'test.doang@gmail.com', '123456789123', '25f9e794323b453885f5181f1b624d0b', '2020-06-02 19:00:28'),
(3, 2, 'TestDoangDoang', 'test.doang2@gmail.cm', '987654321123', '25f9e794323b453885f5181f1b624d0b', '2020-06-02 23:55:45'),
(4, 2, 'TestCoba', 'test.coba@gmail.com', '987654321987', '25f9e794323b453885f5181f1b624d0b', '2020-06-02 23:56:58'),
(5, 2, 'coba1', 'coba1@gmail.com', '081111111111', '36571e5329f2efe106dc5a397a997259', '2020-06-04 20:48:39'),
(6, 2, 'coba2', 'coba2@gmail.com', '083333333333', '4f0b36a34946153c358f8b243428a1eb', '2020-06-15 16:58:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`ID_Alternatif`),
  ADD UNIQUE KEY `Nama_Alternatif` (`Nama_Alternatif`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ID_Kategori`);

--
-- Indexes for table `kategori_detail`
--
ALTER TABLE `kategori_detail`
  ADD PRIMARY KEY (`ID_Kategori_Detail`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`ID_Kriteria`);

--
-- Indexes for table `matrix`
--
ALTER TABLE `matrix`
  ADD PRIMARY KEY (`ID_Matrix`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`ID_Pengajuan`);

--
-- Indexes for table `pengajuan_layanan`
--
ALTER TABLE `pengajuan_layanan`
  ADD PRIMARY KEY (`ID_Pengajuan_L`);

--
-- Indexes for table `pengajuan_onderdil`
--
ALTER TABLE `pengajuan_onderdil`
  ADD PRIMARY KEY (`ID_Pengajuan_O`);

--
-- Indexes for table `pengajuan_temp`
--
ALTER TABLE `pengajuan_temp`
  ADD PRIMARY KEY (`ID_Pengajuan`);

--
-- Indexes for table `saring`
--
ALTER TABLE `saring`
  ADD PRIMARY KEY (`ID_Saring`);

--
-- Indexes for table `saring_jenis_layanan`
--
ALTER TABLE `saring_jenis_layanan`
  ADD PRIMARY KEY (`ID_JL`);

--
-- Indexes for table `saring_jenis_onderdil`
--
ALTER TABLE `saring_jenis_onderdil`
  ADD PRIMARY KEY (`ID_JO`);

--
-- Indexes for table `saring_merek_motor`
--
ALTER TABLE `saring_merek_motor`
  ADD PRIMARY KEY (`ID_MM`);

--
-- Indexes for table `saring_merek_onderdil`
--
ALTER TABLE `saring_merek_onderdil`
  ADD PRIMARY KEY (`ID_MO`);

--
-- Indexes for table `saring_tipe_motor`
--
ALTER TABLE `saring_tipe_motor`
  ADD PRIMARY KEY (`ID_TM`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `ID_Kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori_detail`
--
ALTER TABLE `kategori_detail`
  MODIFY `ID_Kategori_Detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `ID_Kriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `matrix`
--
ALTER TABLE `matrix`
  MODIFY `ID_Matrix` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `ID_Pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengajuan_layanan`
--
ALTER TABLE `pengajuan_layanan`
  MODIFY `ID_Pengajuan_L` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengajuan_onderdil`
--
ALTER TABLE `pengajuan_onderdil`
  MODIFY `ID_Pengajuan_O` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengajuan_temp`
--
ALTER TABLE `pengajuan_temp`
  MODIFY `ID_Pengajuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `saring`
--
ALTER TABLE `saring`
  MODIFY `ID_Saring` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `saring_jenis_layanan`
--
ALTER TABLE `saring_jenis_layanan`
  MODIFY `ID_JL` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `saring_jenis_onderdil`
--
ALTER TABLE `saring_jenis_onderdil`
  MODIFY `ID_JO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `saring_merek_motor`
--
ALTER TABLE `saring_merek_motor`
  MODIFY `ID_MM` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `saring_merek_onderdil`
--
ALTER TABLE `saring_merek_onderdil`
  MODIFY `ID_MO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `saring_tipe_motor`
--
ALTER TABLE `saring_tipe_motor`
  MODIFY `ID_TM` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
