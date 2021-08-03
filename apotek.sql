-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 05:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(100) NOT NULL,
  `nama` varchar(59) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Fizhil Muhammad Pramadana', 'jl. tegal sari', '2021-08-02 13:39:18', '2021-08-03 13:39:18'),
(4, 'Amatullah Shafiyyah', 'Jl. Keliling, Pekanbaru', '2021-08-02 21:27:41', '2021-08-03 21:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `stok` int(50) NOT NULL,
  `harga_obat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` varchar(50) NOT NULL,
  `gambar` varchar(500) CHARACTER SET latin1 NOT NULL,
  `detail_obat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok`, `harga_obat`, `status`, `gambar`, `detail_obat`) VALUES
(1, 'Antasida Doen', 8, '10000', 'tersedia', 'antasida-doen-9ca351b4f4c335f6b3ba8a843154289a.jpg', 'Antasida Doen adalah obat dalam bentuk tablet kunyah dan suspensi yang digunakan untuk mengatasi peningkatan kadar asam di lambung yang dapat memicu maag, kembung, serta gangguan pencernaan lainnya. Obat ini tergolong sebagai obat bebas yang tergolong aman dan dapat digunakan tanpa resep dokter.'),
(2, 'Asam Mefenamat', 49, '5000', 'tersedia', 'asam-mefenamat-strip-24-kapsul-43b88f7a96b77e52d4bdc31a28a6060b1.jpg', 'Asmef atau asam mefenamat bekerja dengan menghambat enzim yang memproduksi prostaglandin, yaitu senyawa penyebab rasa sakit dan peradangan. Dalam mengatasi nyeri, asmef sebaiknya digunakan sesuai dengan anjuran dokter dan tidak lebih dari tujuh hari.'),
(5, 'Ambroxol', 10, '10000', 'tersedia', 'ambroxol-c7a9ad29f80d393942d403005daff63e1.jpg', 'Ambroxol HCl (hidroklorida), atau lebih dikenal dengan ambroxol adalah obat dari golongan mukolitik. obat mukolitik berfungsi untuk mengecerkan dahak yang banyak dan kental hingga menyumbat saluran pernapasan.'),
(6, 'Allopurinol', 10, '20000', 'tersedia', 'allopurinol-landson-100mg-tab-100s-1.jpg', 'Allopurinol adalah obat untuk mengobati asam urat dan beberapa jenis batu ginjal. Obat ini juga digunakan untuk mencegah peningkatan kadar asam urat pada pasien yang menerima kemoterapi kanker. Pasien kemoterapi kanker dapat mengalami peningkatan kadar asam urat akibat pelepasan asam urat dari sel kanker yang mati.'),
(7, 'Acarbose', 10, '20000', 'tersedia', '386981_11-7-2019_11-54-26.jpg', 'Acarbose adalah glucosidase inhibitor. Acarbose bekerja dengan cara memperlambat enzim yang berubah dari karbohidrat menjadi glukosa. Hal ini menurunkan kadar gula dalam darah. Acarbose kadang digunakan bersamaan dengan obat diabetes lainnya yang dikonsumsi secara oral (melalui mulut).'),
(8, 'Ampicillin', 100, '20000', 'tersedia', 'ampicillin-kf-500mg-tab-1.jpg', 'Ampicillin adalah obat antibiotik yang digunakan untuk mengatasi infeksi bakteri pada berbagai bagian tubuh, seperti saluran pernapasan, saluran pencernaan, saluran kemih, kelamin, telinga, dan jantung. Ampicillin termasuk ke dalam antibiotik golongan penisilin. Obat ini bekerja dengan cara membunuh bakteri penyebab infeksi. Obat ini tidak dapat digunakan untuk mengobati infeksi virus, seperti flu dan pilek.'),
(9, 'acyclovir', 100, '30000', 'tersedia', '7393247_07821257-383a-4986-8f8f-3296236c90ab.jpg', 'Acyclovir adalah obat antivirus yang sering digunakan untuk mengobati luka di sekitar mulut yang disebabkan oleh virus herpes simpleks, herpes zoster, dan cacar air. Obat ini juga dapat digunakan untuk mengobati herpes genital.'),
(10, 'Griseofulvin', 20, '5500', 'tersedia', 'GRISEOFULVIN-384.jpg', 'Griseofulvin adalah obat untuk mengatasi infeksi jamur di kulit kepala, selangkangan atau lipat paha, kaki, atau kuku. Griseofulvin termasuk dalam golongan obat antijamur.'),
(11, 'Paracetamol', 30, '5000', 'tersedia', 'PARACETAMOL-GAB.jpg', 'Acetaminophen atau paracetamol adalah obat untuk penurun demam dan pereda nyeri, seperti nyeri haid dan sakit gigi. Paracetamol tersedia dalam bentuk tablet 500 mg dan 600 mg, sirup, drop, suppositoria, dan infus. Paracetamol bekerja dengan cara mengurangi produksi zat penyebab peradangan, yaitu prostaglandin.'),
(12, 'Oxytetracycline', 10, '15000', 'tersedia', 'OXYTETRACYCLINE-GAB-395.jpg', 'Oxytetracycline adalah obat antibiotik untuk mengatasi berbagai penyakit akibat infeksi bakteri, jerawat, dan rosacea. Obat ini termasuk ke dalam golongan antibiotik tetrasiklin. Oxytetracycline bekerja dengan cara menghambat dan menghentikan pertumbuhan bakteri penyebab infeksi di dalam tubuh.');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) CHARACTER SET latin1 NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') CHARACTER SET latin1 NOT NULL,
  `telepon` varchar(15) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `telepon`, `alamat`) VALUES
(1, 'Fizhil', 'Perempuan', '081282938296', 'Pekanbaru'),
(2, 'Amatullah', 'Perempuan', '082346852511', 'Jl. Keliling, Pekanbaru'),
(3, 'Ridho', 'Laki-laki', '018230812238', 'jl. sekolah'),
(4, 'Nadia', 'Laki-laki', '018230812249', 'jl. jalan');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_obat`, `nama_obat`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 1, 'Antasida Doen', 1, 10000, ''),
(2, 1, 2, 'Asam Mefenamat', 1, 5000, ''),
(3, 1, 5, 'Ambroxol', 1, 10000, ''),
(5, 4, 1, 'Antasida Doen', 2, 10000, ''),
(6, 4, 2, 'Asam Mefenamat', 1, 5000, '');

--
-- Triggers `pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
	UPDATE obat SET stok= stok - NEW.jumlah 
    WHERE id_obat = NEW.id_obat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(5, 'admin', 'admin', '123', 1),
(6, 'fizhil', 'fizhil', '123', 2),
(8, 'Ridho', 'ridho', '123', 2),
(9, 'joko', 'joko', '123', 2),
(10, 'joko', 'ujang', '123', 2),
(11, 'Amatullah', 'ama', '123', 2),
(12, 'Nadia', 'nadia', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
