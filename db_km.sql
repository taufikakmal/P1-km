-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2022 pada 04.20
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_km`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `counterdb`
--

CREATE TABLE `counterdb` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `counter` varchar(20) NOT NULL,
  `browser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `counterdb`
--

INSERT INTO `counterdb` (`id`, `tanggal`, `ip_address`, `counter`, `browser`) VALUES
(4, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(5, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(6, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(8, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(9, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(10, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(11, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(12, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(13, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(14, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(15, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(16, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(17, '2021-10-13', '::1', '1', 'Chrome/Opera'),
(18, '2022-03-11', '::1', '1', 'Chrome/Opera'),
(19, '2022-03-11', '::1', '1', 'Chrome/Opera'),
(20, '2022-03-12', '::1', '1', 'Chrome/Opera'),
(21, '2022-03-12', '::1', '1', 'Chrome/Opera'),
(22, '2022-03-12', '::1', '1', 'Chrome/Opera'),
(23, '2022-03-12', '::1', '1', 'Chrome/Opera'),
(24, '2022-03-12', '::1', '1', 'Chrome/Opera'),
(25, '2022-03-12', '::1', '1', 'Chrome/Opera'),
(26, '2022-03-12', '::1', '1', 'Chrome/Opera'),
(27, '2022-03-14', '::1', '1', 'Chrome/Opera');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Ujang Syahrul', 'admin', '21232f297a57a5a743894a0e4a801fc3', '+6285853630153', 'kontomulyo@gmail.com', 'Jl. Jombang RT. 04/08 Utara Pasar Badas, Kec. Badas, Kab. Kediri.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(13, 'Paving'),
(14, 'Batako'),
(15, 'Loster'),
(16, 'Buis Beton'),
(17, 'Taman'),
(18, 'Dinding');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_page_content`
--

CREATE TABLE `tb_page_content` (
  `content_id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `content_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_page_content`
--

INSERT INTO `tb_page_content` (`content_id`, `page_name`, `content_name`) VALUES
(1, '  Tentang', '<p Style=\"text-align:justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">Sejarah Berdirinya Kontomulyo Tidak Bisa Dilepaskan Dari Sosok Syamsuddin. Awalnya Syamsuddin Hijrah Dari Tasikmalaya (Jawa Barat) Ke Daerah Badas, Kediri (Jawa Timur). Untuk Menghidupi Keluarga Di Badas, Syamsuddin Mencoba Berbagai Usaha Dari Jualan Kecil-kecilan Hingga Membuka Perkreditan Barang Keliling. Namun Merasa Usahanya Nelum Lancer Juga Atau Bekum Bias Mencukupi Akan Kebutuhan Keluarganya. Ide Dating Ketika Syamsuddin Berada Di Terminal Bungurasih Dimana Waktu Itu Terminal Bungurasih Masih Dalam Tahap Pembangunan Lantai Yang Dipasang Paving Block Yang Langsung Didatangkan Dari Tasikmalaya.</span></span></p>\r\n\r\n<p Style=\"text-align:justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">Dari Situ Syamsudin Mempunyai Inisiatif Dan Mencari Cara Bagaimana Untuk Mewujudkan Industry Paving. Pada Tahun 1988 Mulai Mengawali Industry Paving Di Badas. Tidak Mudah Memang Memproduksi Produk Paving Yang Masyarakat Sekitar Masih Asing Dengan Paving. Selama Kurang Lebih 1 Tahun Sejak Dimulainya Produksi Paving Tidak Ada Yang Terjual.</span></span></p>\r\n\r\n<p Style=\"text-align:justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">Keyakinan Yang Kuat Membuatnya Tetap Bertahan. Perlahan-lahan Syamsuddin Dengan Sabar Member Tahu Sekaligus Member Contoh Apa Kegunaan Paving Tersebut Pada Masyarakat Sekitar. Sifat Sabar Dan Keuletan Membuahkan Hasil Yang Dapat Dinikmati Sampai Sekarang. Perkembangan Industry Paving Block Memberikan Dampak Ekonomi Tidak Hanya Bagi Keluarga, Tetapi Juga Masyarakat Dalam Membuka Lapangan Pekerjaan, Sehingga Secara Tidak Langsung Membantu Pemerintah Dalam Menciptakan Lapangan Pekerjaan.Di Wilayah Kediri Terutama Badas, Kontomulyo Termasuk Perintis Industri Paving Block. Hasilnya Sekarang Wilayah Badas Menjadi Pusat Industri Paving Block.</span></span></p>\r\n\r\n<p Style=\"text-align:justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">Nama &lsquo;kontomulyo&rsquo; Bagi Orang Yang Baru Dengar Terkesa Saru. Padahal Tidak. Asal Kontomulyo Diambil Dari Nama Sungai Yang Membelah Desa Badas Dan Menjadi Sumber Pasir, Yaitu Sungai Konto. Nama Kontomulyo Merupakan Pengakuan Bahwa Industri Paving Block Milik Syamsuddin Merupakan Berkah Melimpahnya Pasir Dari Sungai Konto. Selain Itu, Nama Kontomulyo Juga Mudah Diingat, Sekali Sebut Saja Tidak Akan Lupa.</span></span></p>\r\n\r\n<p Style=\"text-align:justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">Pada Tahun 1992, Syamsuddin Mendapatkan Undangan Dari Semen Gresik Untuk Mengikuti Seminar Bersama Dengan Para Pengusaha Industri Beton. Pengetahuan Dan Pengalaman Menjadi Bertambah, Syamsuddin Semakin Yakin Bahwa Industry Paving Ini Akan Maju Dan Berkembang. Salah Satu Kelebiah Paving Block Adalah Tahan Akan Perubahan Cuaca Baik Panas Maupun Dingin.</span></span></p>\r\n\r\n<p Style=\"text-align:justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">Pada Tahun 1993, Kontomulyo Mendapat Pengakuan Dari Pemerintah Dengan Dikeluarkannya Tanda Daftar Perusahaan (TDP) Dan SIUP.</span></span></p>\r\n\r\n<p Style=\"text-align:justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">Pada Tahun 1995, Wilayah Kediri Mulai Bermunculan Perusahaan-perusahaan Baru Yang Berkecimpung Di Industry Paving Block.</span></span></p>\r\n\r\n<p Style=\"text-align:justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">Pada Tahun 1999, Berdiri Indstri-industri Paving Di Wilayah Badas Yang Sampai Sekarang Dapat Kita Temui Di Sepanjang Jalan Wilayah Badas.<br />\r\n<br />\r\n<br />\r\n<strong>VISI</strong><br />\r\nMelayani Pelanggan Dan Menghormati Pesaing.&nbsp;<br />\r\n<br />\r\n<strong>MISI</strong><br />\r\nMembuat Produk Yang Sesuai Keinginan Konsumen; Menciptakan Lapangan Kerja Bagi Karyawan; Menciptakan Kebaikan Bagi Pemilik, Pegawai, Pelanggan Dan Masyarakat Sekitar.&nbsp;<br />\r\n<br />\r\n<strong>TUJUAN</strong><br />\r\nMengoptimalkan Keuntungan Bagi Pemilik, Pegawai, Pelanggan</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, '       Layanan', '<p><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">Kontomulyo Paving Block Melayani Pemesanan Berbagai Macam Model Paving, Roster, Buis Beton, Batako, Grassblock Dan Variasi Bangunan Lainnya.tersedia Juga Berbagai Macam Model Loster Beton Minimalis.</span></span></p>\r\n\r\n<p Style=\"text-align:center\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">Jam Layanan</span></span></p>\r\n\r\n<p Style=\"text-align:center\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">Saturday&nbsp;&nbsp; &nbsp;07:00 &ndash; 16:00<br />\r\nSunday&nbsp;&nbsp; &nbsp;07:00 &ndash; 16:00<br />\r\nMonday&nbsp;&nbsp; &nbsp;07:00 &ndash; 16:00<br />\r\nTuesday&nbsp;&nbsp; &nbsp;07:00 &ndash; 16:00<br />\r\nWednesday&nbsp;&nbsp; &nbsp;07:00 &ndash; 16:00<br />\r\nThursday&nbsp;&nbsp; &nbsp;07:00 &ndash; 16:00<br />\r\nFriday&nbsp;&nbsp; &nbsp;07:00 &ndash; 16:00</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, '         Mitra', '<p Style=\"text-align:justify\"><span Style=\"font-family:Arial,Helvetica,sans-serif\"><span Style=\"font-size:12px\">&nbsp;</span><span Style=\"font-size:14px\"> &nbsp; &nbsp;Selain Itu UD.Kontomulyo Juga Menjaloin Kemitraan Dengan&nbsp;</span></span></p>\r\n\r\n<p Style=\"text-align:justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a Href=\"http://www.loster.id/2020/06/home.html\">Loster.ID</a></span></span></p>\r\n\r\n<p Style=\"text-align:Justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-Alam Hijau Selaras. JL. Raya Juanda SIDOARJO.</span></span></p>\r\n\r\n<p Style=\"text-align:Justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; -UD. Rul. MOJOKERTO.</span></span></p>\r\n\r\n<p Style=\"text-align:Justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; -TB. Sadar Jaya. Buduran -SIDOARJO.</span></span></p>\r\n\r\n<p Style=\"text-align:Justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; -P. Kholik. Waru - SIDOARJO.</span></span></p>\r\n\r\n<p Style=\"text-align:Justify\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; -Bu Nur. Buduran - SIDOARJO.</span></span></p>\r\n\r\n<p Style=\"text-align:Justify\">&nbsp;</p>\r\n\r\n<p Style=\"text-align:Justify\">&nbsp;</p>\r\n'),
(4, '        Portofolio', '<p><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">UD. Kontomulyo Pernah Menjalin Kontrak Untuk Pengadaan Matiral Proyek Diantaranya :</span></span></p>\r\n\r\n<p><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">&nbsp; &nbsp;- Alun-Alun Mojokerto.</span></span></p>\r\n\r\n<p><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">&nbsp; &nbsp;- Pabrik Ternak Bareng.</span></span></p>\r\n\r\n<p><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\">&nbsp; &nbsp;- Pavingisasi Jalan Di Wilayah Kediri Dan Jombang.</span></span></p>\r\n\r\n<p Style=\"text-align:center\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Lihat Lebih Banyak</strong></span></span></p>\r\n\r\n<p Style=\"text-align:center\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\"><a Href=\"https://www.instagram.com/kontomulyo/\">Instagram</a></span></span></p>\r\n\r\n<p Style=\"text-align:center\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\"><a Href=\"https://www.facebook.com/kontomulyo/\">Facebook</a></span></span></p>\r\n\r\n<p Style=\"text-align:center\"><span Style=\"font-size:14px\"><span Style=\"font-family:Arial,Helvetica,sans-serif\"><a Href=\"https://gramhir.com/profile/kontomulyo/8125688757\">Gramhir</a></span></span></p>\r\n\r\n<p Style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p Style=\"text-align:center\">&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `data_created`) VALUES
(23, 15, 'loster motif type ', 15000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647030119.jpg', 1, '2022-03-11 20:21:59'),
(24, 17, 'model blabalbal', 150000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647034406.jpg', 1, '2022-03-11 21:33:26'),
(25, 17, 'Lampu tamapn type 23', 138000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647099068.jpg', 1, '2022-03-12 15:31:09'),
(26, 15, 'loster motif type baja bla bla bla', 175000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647099159.jpg', 1, '2022-03-12 15:32:39'),
(27, 13, 'Paving segi enam', 13000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647099237.jpg', 1, '2022-03-12 15:33:57'),
(28, 14, 'Batako ukuran bla bla bla', 8000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647099283.jpg', 1, '2022-03-12 15:34:43'),
(29, 17, 'Asesoris kolam type ---', 230000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647099411.jpg', 1, '2022-03-12 15:36:51'),
(30, 16, 'Buis beton kecil bal bal bla', 130000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647099467.jpg', 1, '2022-03-12 15:37:47'),
(31, 16, 'Buis beton tipe o ', 93000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647099526.jpg', 1, '2022-03-12 15:38:46'),
(32, 18, 'Hiasan Kaligrafi Dinding', 250000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647099598.jpg', 1, '2022-03-12 15:39:58'),
(33, 18, 'Hiasan dinding gambar burung', 153000, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647099652.jpg', 1, '2022-03-12 15:40:52'),
(34, 13, 'Paving Kotak motif', 10500, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'produk1647099772.jpg', 1, '2022-03-12 15:42:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `counterdb`
--
ALTER TABLE `counterdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tb_page_content`
--
ALTER TABLE `tb_page_content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `counterdb`
--
ALTER TABLE `counterdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_page_content`
--
ALTER TABLE `tb_page_content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
