-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2019 at 09:31 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a`
--

-- --------------------------------------------------------

--
-- Table structure for table `lorem`
--

CREATE TABLE `lorem` (
  `kid` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lorem`
--

INSERT INTO `lorem` (`kid`, `nama`, `deskripsi`) VALUES
(1, 'Alam', 'lorem ipsum lorem ipsum'),
(2, 'Pemandian', 'ufbewiufbeoufcnaosuncwoud'),
(3, 'Kuliner', 'cvbacilsudniDXNlckneacfl');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `ID` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jeniskelamin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`ID`, `nama`, `email`, `username`, `password`, `jeniskelamin`) VALUES
(1, 'denis putra', 'dnstararata@gmail.com', 'dntrata', '123', 'laki-laki'),
(11, 'nona nouggats', 'informaticskiyowo@gmail.com', 'nagetenak', '55555', 'Perempuan'),
(13, 'omi', 'nin@gmail.com', 'heheh', '123 ', 'Perempuan'),
(14, 'Dheanisa', 'syupeo.junieo@gmail.com', '123', 'padahariminggu ', 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wisata_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `comment`, `user_id`, `wisata_id`) VALUES
(1, 'WAW HEBAT SEKALI :)))))', 1, 1),
(2, 'MASYAALLAH WARBYASAH', 1, 1),
(5, 'apikkk', 1, 1),
(12, 'vwvw', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(10) NOT NULL,
  `namaKategori` varchar(30) NOT NULL,
  `kid` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `namaKategori`, `kid`, `nama_wisata`, `deskripsi`) VALUES
(1, 'Wisata alam', 1, 'Coban Talun', 'Coban Talun adalah sebuah air terjun yang terdapat di desa Tulungrejo. Kecamatan Bumiaji, Kota Batu, Malang. Untuk dapat mencapai lokasi wisata ini wisatawan harus menempuh perjalanan sejauh kurang lebih 15 km atau 1,5 jam dari pusat kota Malang.\r\n\r\nNamun, tidak perlu khawatir karena wisatawan dapat mencapai lokasi dengan menggunakan Angkot jurusan sesuai dengan tujuan ke Selecta, yakni menggunakan Angkot berwarna biru dengan code AL (Arjosari-Landungsari) atau ADL (Arjosari-Dinoyo-Landungsari) dengan biaya sebesar Rp 3.000,- turun di Terminal Landungsari. Dari Landungsari, wisatawan melanjutkan perjalanan dengan Angkot berwarna Pink atau Ungu tujuan ke Terminal Batu dengan biaya sebesar Rp 4.000,- .\r\n\r\nSesampainya di Terminal Batu, wisatawan lalu melanjutkan perjalanan dengan menggunakan Angkot berwarna Orange tujuan Selecta-Coban Talun dengan biaya sebesar Rp 4.000,-. Nah, dengan menggunakan Angkot ini, wisatawan langsung akan diturunkan di pintu masuk lokasi wisata Coban Talun. Jalan menuju ke lokasi bisa dikatakan sudah cukup rusak meskipun beraspal. Namun, tetap bisa dilalui kendaraan bermotor. Di sepanjang perjalanan wisatawan akan disuguhi pemandangan yang sangat indah, dengan kanan dan kiri pohon apel yang banyak ditanam oleh warga sekitar.\r\n\r\nDari pintu masuk tersebut, wisatawan harus berjalan kaki sejauh kurang lebih 50 meter hingga sampai ke pintu gerbang atau loket pembayaran karcis masuk air terjun Coban Talun.\r\n\r\nDari lokasi parkir, perjalanan dilanjutkan dengan jalan kaki menyusuri hutan pinus yang sangat eksotik. Namun sebelum itu, harus menyebrangi dua aliran sungai, disini wisatawan perlu jeli dalam menentukan pijakan. Karena apabila tidak jeli bisa-bisa pijakan tersebut sangat dalam selutut orang dewasa. Untuk mempermudah perjalanan wisatawan menuju lokasi wisata, pengelola telah membuat tanda-tanda di beberapa batang pohon. Perjalanan memakan waktu sekitar 30-60 menit perjalanan. Memang sudah dipasang tanda oleh pengelola namun trek yang sedikit berlumpur dan jalan yang cukup menurun akan menyulitkan para wisatawan sekalian. Jadi, tetap diperlukan kehati-hatian dan tenaga ekstra untuk dapat mencapai air terjun Coban Talun tersebut.\r\n\r\nDi sepertiga jalan menuju lokasi wisata, ada dua jalan yang bercabang. Jalan sebelah kanan adalah jalan menuju air terjun Coban Talun di bagian atas sedangkan jika wisatawan tetap mengikuti arah jalan tersebut maka akan berada di bagian bawah aliran sungai dari air terjun tersebut. Meskipun demikian kedua jalan tersebut akan memberikan keindahan air terjun setinggu kurang lebih 75 meter. Keindahan lain dari air terjun ini adalah terdapatnya batua-batuan pegunungan yang sangat besar yang tentunya menambah keeksotikan air terjun Coban Taun ini.\r\n\r\nSelain itu, apabila kondisi cuaca sedang cerah maka butiran air yang terhempas angin akan menimbulkan warna pelangi yang sangat indah dan mempesona. \r\nBiaya tiket masuk ticket fee\r\nBiaya untuk sekali masuk dipatok sebesar Rp 5.000,- per orang. Dari loket pembayaran ini wisatawan melanjutkan perjalanan sejauh kurang lebih 50 meter hingga sampai tempat parkir. Biaya untuk parkir sendiri sekitar Rp 2.000,- (roda dua) dan Rp 4.000,- (roda empat).\r\n    '),
(2, 'Wisata Alam', 1, 'Coban Rondo', 'Wisata Air terjun Coban Rondo Malang ini merupakan salah satu destinasi wisata yang sangat populer di kalangan wisatawan baik domestik maupun mancanegara. Air terjun setinggi 84 meter dan berada di ketinggian 1.135 MDPL ini berasal dari sumber mata air Cemoro Dudo yang terletak di lereng Gunung Kawi  dengan debit 150 liter per detik pada musim hujan dan 90 liter per detik di musim kemarau.\r\n\r\nPanorama air terjun yang menghembuskan butir-butir air yang dibalut dengan keindahan alam dan disempurnakan dengan udara sejuk pegunungan yang masih sangat alami ini memang menjadi daya tarik yang luar biasa bagi para wisatawan. Pada akhir pekan atau hari libur nasional, tempat ini banyak dikunjungi oleh para wisatawan baik dari dalam maupun luar negeri.'),
(3, 'Wisata Pemandian', 2, 'Wisata Pemandian Air Panas Cangar', 'Ada banyak sekali tempat wisata yang menarik di batu malang. Ada wisata edukasi, wisata alam, wisata permainan dan lain sebagainya. Jika anda bosan berkunjung ke museum angkut, jatim park atau wisata lainnya, Anda bisa mengunjungi pemandian air panas. Melepas lelah dengan berendam di air panas alami. Salah satu pemandian air panas yang terkenal di batu malang adalah pemandian air panas cangar. Lokasinya berada di kawasan cangar, lereng gunung arjuno welirang. Letak tempat wisata ini masih alami, sehingga anda bisa berendam di dalam air panas dengan suasana pegunungan yang sejuk dan asri. Di pemandian air panas cangar ini sudah disediakan kolam-kolam yang digunakan untuk berendam. Ada banyak jenis kolam. Ada kolam khusus wanita, kolam yang tertutup (privasi), kolam khusus berendam dan lainnya. Ada kolam yang didesain seperti tempat saunan di jepang. Jadi satu kamar mandi hanya digunakan untuk satu orang saja. Jadi anda tak perlu malu untuk berenang dengan orang lain. Di sekitar sumber mata air dikelilingi oleh pepohonan yang hijau. Selain itu ada goa-goa peninggalan jepang. Tempatnya yang masih alami, membuat banyak gerombolan monyet yang tinggal disini. Jadi anda tak perlu kaget, jika tiba-tiba bertemu dengan gerombolan monyet. Jika ingin nyaman, datang pada weekdays karena pada saat liburan tempat ini sangat ramai. Tempat wisata ini biaya masuknya tidak mahal, apalagi keadaannya yang masih alami dan hanya dikelola oleh masyarakat sekitar. Tiket masuk ke pemandian air panas cangar ini sangat terjangkau. Harga tiket masuknya hanya Rp.5.500,- per orang. Lalu harga parkir sepeda motor Rp.3000,- per kendaraan dan untuk parkir mobil Rp.5000,- per mobil. Harga ini bisa berubah kapan saja. Pada saat hari libur nasional, biasanya ada sedikit kenaikan. Dengan biaya masuk yang sangat terjangkau, anda bisa berendam di air panas sepuasnya dan melihat pemandangan gunung yang alami dan asri.'),
(4, 'Wisata Pemandian', 2, 'Pemandian Air Panas Alami Songgoriti', 'Pemandian Air Panas Songgoriti adalah salah satu obyek wisata bahari yang terletak di desa Songgokerto, Kabupaten Batu, di bawah lereng bukit Gunung Panderman dan memiliki kolam air panas. Ada kuil Songgoriti dan Patung Ganesha sebagai kelalaian kerajaan Singosari dan zaman Belanda. Kuil Songgoriti terletak di sebuah dale yang memisahkan antara pegunungan Arjuna dengan gunung Kawi. Candi ini telah dibangun dengan mata air panas, yang diyakini bisa menyembuhkan berbagai penyakit. Dilihat dari gaya arsitekturnya yang sederhana, candi ini tergolong candi tertua di Jawa Tengah dan disainnya menggambarkan Jawa Tengah. Objek wisata Songgoriti ini dikelilingi oleh pemandangan alam, sehingga memiliki udara segar dan sejuk. Objek ini sangat menarik bagi siapa saja yang ingin berkeliling karena santai atau merasakan nuansa alamiah. Dan tentu saja hal yang paling banyak diminati oleh para wisatawan di tempat ini sendiri adalah kolam pemandian air panasnya. Dari sumber air panas yang ada di bawah Candi Songgoroti lalu dialirkan menuju ke pemandian denagn pipa. Konon sejarahnya sumber tersebut dulunya dipakai untuk mensucikan keris pusaka milik Raja Sindoh yaitu Raja kerajaan Singosari pada abad ke-5 M.\r\n\r\nSelain bisa menikmati kolam pemandiannya, anda juga bisa memanfaatkan wahana outbound yang tersedia, ada juga taman-taman yang mempesona dan juga anda bisa ziarah ke makam Empu Supo dan mbah Pathok yang mempunyai sejarah tersendiri. Jika anda gemar berbelanja, anda juga bisa datang ke pasar wisata yang ada di Songgoriti yang menjual berbagai pernak-pernik dan oleh-oleh khas Malang. Di sana juga ada sebuah danau yang bisa anda nikmati pemandangannya dengan berkeliling menggunakan sepeda air.'),
(5, 'Wisata Kuliner', 3, 'Bakso President', ' Bakso yang ditawarkan Bakso President cukup beragam mulai dari Bakso Biasa, Bakso Urat, Bakso Telor, Bakso Bakar, Bakso Goreng, Bakso Udang dan ditambah dengan pangsit kering/basah, siomay, ati ampela, tahu, lontong, mie. Wah, komplit lah pokoknya sampai Bakso President ini dijuluki \"pelopor bakso Malang asli full variasi\". Baksonya dijual per satuan, jadi lihat papan menu dulu ya sebelum memesan. Ada juga sih Bakso yang sudah paket, seperti paket campur hemat/campur spesial, tapi lebih enak milih sendiri sih, sesuai selera. Bakso President menyediakan dua tempat untuk makan. Di dalam ruangan atau di tepi rel. Saya sih lebih senang makan di luar soalnya adem dan bisa lihat macem-macem. Bakso President ini jadi kesayangan banyak kalangan mulai dari yang pas-pasan sampai berdompet tebal karena harga baksonya yang bersahabat. Terbukti dari ramainya pajangan foto karyawan Bakso President dengan artis-artis Ibukota. Selain bakso, kita juga bisa beli cemilan Keripik Bakso Spesial. Enak, gurih  renyah dan rasa bakso. Hahaha. Keripik Bakso ini dijual dengan harga 15000 per bungkus. Bertambah lagi deh variasi oleh-oleh dari Malang. Gak cuma keripik buah dan keripik kentang lagi karena sekarang ada keripik bakso'),
(6, 'Wisata Kuliner', 3, 'Kober Mie Setan', 'Mie Setan, pastinya yang ada dibenak Anda adalah mienya para “Setan”. Namun, istilah “Setan” tersebut diberikan untuk menggambarkan rasa pedas yang terdapat di kuliner unik satu ini. Mie Setan sendiri berlokasi di Jalan Bromo Kota Malang tepatnya dekat dengan Gereja Bromo. Mie Setan tergolong kuliner baru di daerah Malang, walaupun masih belum genap setahun Mie Setan ini disambut antusias gembira para pecinta kuliner masakan pedas di Kota Malang. Mie Setan sendiri buka mulai pukul 16.00 – 24.00 dan semakin malam tempat ini bukannya semakin sepi malah semakin ramai dikunjungi oleh para pengunjung terutam kaum muda di Kota Malang.\r\n\r\nKeunikan sajian menu di Mie Setan ini adalah Mienya yang terkenal dengan banyak pilihan level kepedasan mi. Setiap tahapan level memiliki tingkat kepedasan yang berbeda dan pastinya siap membuat Anda menjerit kepedasan. Mie Setan sendiri memiliki 5 tingkatan level kepedasan'),
(7, 'Wisata alam', 1, 'Coban Jahe', 'Coban Jahe ini adalah salah satu tempat wisata air terjun di Malang yang bisa kalian kunjungi. Ya, Malang memang salah satu kota di Jawa Timur yang cukup terkenal dengan daya tarik wisatanya. Terutama dalam daya tarik wisata alam dan kulinernya. Selain mencoba cafe di Malang dan beberapa kulinernya yang unik dan enak, kalian tentu juga harus mencoba wisata air terjunnya.\r\n\r\nAir Terjun yang ada di Malang ini juga dikenal dengan nama lain Air Terjun Begawan. Air Terjun ini memiliki ketinggian sekitar 45 m. Penampakannya terlihat makin menantang dengan keberadaan batu-batu cadas berukuran raksasa di tebing juga kolam kecil di bawahnya. Air terjun Coban Jahe ini sendiri masih berada dalam kawasan Perhutani Unit II RPH Sukopuro-Jabung.\r\n\r\nLokasi dari Air Terjun Coban Jahe ini berada pada sekitar 23 km dari Kota Malang. Untuk menuju salah satu air terjun di Malang ini, kalian dapat menempuhnya dengan kendaraan roda empat. Ambil saja arah ke Tumpang, dan sesampainya di Tumpang kalian belok ke kiri ke arah Desa Pandansari Lor, Dusun Begawan hingga menemukan pintu masuk ke Coban Jahe.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lorem`
--
ALTER TABLE `lorem`
  ADD PRIMARY KEY (`kid`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `wisata_id` (`wisata_id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kid` (`kid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lorem`
--
ALTER TABLE `lorem`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`ID`);

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `lorem` (`kid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
