-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 07:58 PM
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
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` char(4) NOT NULL,
  `adminNAMA` varchar(50) NOT NULL,
  `adminEMAIL` varchar(100) NOT NULL,
  `adminPASSWORD` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminNAMA`, `adminEMAIL`, `adminPASSWORD`) VALUES
('AD01', 'Jihoon', 'tifani@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `KodeDrink` varchar(4) NOT NULL,
  `NamaDrink` longtext NOT NULL,
  `Deskripsi` longtext NOT NULL,
  `Bahan2` longtext NOT NULL,
  `Instruksi` longtext NOT NULL,
  `PhotoDrink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`KodeDrink`, `NamaDrink`, `Deskripsi`, `Bahan2`, `Instruksi`, `PhotoDrink`) VALUES
('DR01', 'Turmeric latte', 'Membuat latte kunyit Anda sendiri sangat mudah dengan resep kami. Seduh bersama dan dapatkan manfaat dari efek anti-inflamasi dan antioksidan dari kurkumin', '1. 350 ml susu almond (atau susu apa pun yang Anda inginkan)\r\n\r\n2. ¼ sdt kunyit bubuk\r\n\r\n3. ¼ sdt kayu manis bubuk\r\n\r\n4. ¼ sdt jahe bubuk\r\n\r\n5. ½ sdt ekstrak vanili\r\n\r\n6. 1 sendok teh sirup maple\r\n\r\n7. grind of black pepper', 'LANGKAH 1\r\nMasukkan semua bahan ke dalam panci dan kocok terus dengan api kecil, idealnya dengan pembuih susu jika ada. Setelah panas, tuang ke dalam cangkir dan taburi dengan sedikit kayu manis untuk disajikan.', 'fotomin1.png'),
('DR02', 'Avocado & strawberry smoothie', 'Perpaduan krim untuk sarapan yang tinggi kalsium dan rendah kalori', '1. ½ buah alpukat, dibuang bijinya, dikupas dan dipotong-potong\r\n\r\n2. 150 gram stroberi, dibelah dua\r\n\r\n3. 4 sdm yogurt alami rendah lemak\r\n\r\n5. 200 ml susu semi-skim\r\nair perasan lemon atau jeruk nipis, secukupnya\r\n\r\n6. madu, secukupnya', 'LANGKAH 1\r\nMasukkan semua bahan ke dalam blender dan kocok hingga halus. Jika konsistensinya terlalu kental, tambahkan sedikit air.', 'fotomin2.png'),
('DR03', 'Lemon & ginger tea', 'Kombinasikan lemon dengan jahe untuk membuat teh lemon dan jahe yang menyegarkan dan merupakan alternatif yang bagus untuk minuman berkafein. Maniskan dengan madu jika Anda suka', '1. 1 buah lemon\r\n\r\n2. 2 cm potongan jahe, iris halus\r\n\r\n3. madu secukupnya', 'LANGKAH 1\r\nPotong lemon menjadi dua. Peras airnya dari satu bagian dan iris sisanya. Bagi air perasan dan irisan lemon di antara 2 cangkir, bersama dengan irisan jahe.\r\n\r\nLANGKAH 2\r\nIsi cangkir dengan air mendidih dan biarkan terendam selama 3 menit atau hingga cukup dingin untuk diminum. Maniskan dengan madu jika Anda suka.', 'fotomin3.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_vid`
--

CREATE TABLE `kategori_vid` (
  `kategori_ID` varchar(4) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_vid`
--

INSERT INTO `kategori_vid` (`kategori_ID`, `nama_kategori`) VALUES
('KV01', 'Beginner (pemula)'),
('KV02', 'Fat Burn'),
('KV03', 'Full Body'),
('KV04', 'Upper Body'),
('KV05', 'Lose Weight');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `KodeResep` varchar(4) NOT NULL,
  `NamaResep` varchar(500) NOT NULL,
  `Deskripsi` longtext NOT NULL,
  `Bahan2` longtext NOT NULL,
  `Instruksi` longtext NOT NULL,
  `PhotoRecipe` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`KodeResep`, `NamaResep`, `Deskripsi`, `Bahan2`, `Instruksi`, `PhotoRecipe`) VALUES
('RC01', 'Artichoke & aubergine rice', 'Selain lezat, terong dan artichoke ini juga rendah lemak, rendah kalori dan hemat biaya. Buatlah dalam jumlah besar dan makanlah dalam keadaan dingin keesokan harinya', '1. 60 ml minyak zaitun\r\n\r\n2. 2 buah terong, potong-potong\r\n\r\n3. 1 bawang bombay besar, cincang halus\r\n\r\n4. 2 siung bawang putih, hancurkan\r\n\r\n5. peterseli kemasan kecil, petik daunnya, cincang halus batangnya\r\n\r\n6. 2 sdt paprika asap\r\n\r\n7. 2 sendok teh kunyit\r\n\r\n8. 400 gram nasi paella\r\n\r\n9. 1 ½ liter kaldu sayuran\r\n\r\n10. 2 bungkus artichoke panggang seberat 175 gram\r\n\r\n11. 2 buah lemon, 1 buah dijus, 1 buah dipotong-potong untuk disajikan', 'LANGKAH 1\r\nPanaskan 2 sdm minyak dalam wajan anti lengket atau wajan paella yang besar. Goreng terong hingga semua sisinya berwarna kecokelatan (tambahkan 1 sdm minyak lagi jika terong mulai terlalu banyak), lalu angkat dan sisihkan. Tambahkan satu sendok makan minyak lagi ke dalam wajan dan goreng bawang bombay selama 2-3 menit atau sampai lunak. Tambahkan bawang putih dan batang peterseli, masak selama beberapa menit lagi, lalu masukkan bumbu dan nasi hingga semuanya tercampur rata. Panaskan selama 2 menit, tambahkan setengah kaldu dan masak, tanpa tutup, dengan api sedang selama 20 menit, aduk sesekali agar tidak lengket.\r\n\r\nLANGKAH 2\r\nMasukkan terong dan artichoke ke dalam campuran, tuangkan sisa kaldu dan masak selama 20 menit atau sampai nasi matang. Potong daun peterseli, aduk dengan air jeruk nipis dan bumbui dengan baik. Bawa seluruh wajan ke meja dan sendokkan ke dalam mangkuk, dengan irisan lemon di sampingnya.', 'foto1.png'),
('RC02', 'Tomato, pepper & bean one pot', 'Buatlah rebusan ini di akhir pekan, lalu dinginkan atau bekukan dalam beberapa porsi untuk makan siang yang mudah di tengah minggu. Lihat topping kami yang berbeda untuk membuatnya tetap menarik', '1. 1 sdm minyak zaitun\r\n\r\n2. 1 buah bawang bombay besar, cincang halus\r\n\r\n3. 2 batang seledri, cincang halus\r\n\r\n4. 3 buah wortel, cincang halus\r\n\r\n5. 3 buah paprika merah, iris\r\n\r\n6. 2 siung bawang putih, hancurkan\r\n\r\n7. 2 sdm pure tomat\r\n\r\n8. 400g kacang cannellini kaleng, bilas dan tiriskan\r\n\r\n9. 400g kacang pinto, bilas dan tiriskan\r\n\r\n10. 400g kacang borlotti, bilas dan tiriskan\r\n\r\n11. 2 kaleng tomat cincang berukuran 400g\r\n\r\n12. 1 kaldu sayuran kubus (periksa labelnya jika Anda seorang vegan)\r\n\r\n13. 2 lembar daun salam\r\n\r\n14. 1 sdm gula merah\r\n\r\n15. ½ sdm cuka anggur merah', 'LANGKAH 1\r\nPanaskan minyak dalam wajan besar atau casserole dengan api sedang. Goreng bawang bombay, seledri dan wortel selama 10 menit hingga lunak dan berwarna keemasan, lalu tambahkan paprika dan goreng selama 5 menit.\r\n\r\nLANGKAH 2\r\nAduk bawang putih selama satu menit, lalu tambahkan pure tomat, semua buncis dan tomat cincang, lalu aduk kaleng tomat dengan sedikit air dan tambahkan ke dalam panci dengan kaldu kubus, daun salam, gula dan cuka. Bumbui dan biarkan mendidih, tanpa ditutup, selama 25 menit sampai saus menyusut hingga melapisi kacang dan paprika menjadi lunak. Biarkan dingin sebelum disimpan dalam wadah yang mudah dibawa. Dapat disimpan di lemari es selama 3 - 4 hari atau dibekukan dalam beberapa bagian dan dicairkan di lemari es semalaman.\r\n\r\nPilih topping Anda\r\n- Manis & pedas :\r\nTambahkan aprikot kering potong dadu dan 1 sdm harissa. Taburi dengan yogurt yang diaduk dengan lebih banyak harissa, dan almond serpihan panggang.\r\n- Tex-Mex :\r\nAduk ½ - 1 sdm pasta chipotle, suwiran sisa ayam panggang jika ada, dan taburi dengan alpukat potong dadu, parutan keju dan ketumbar.\r\n- Smokey BBQ Beans :\r\nAduk 1 sdm saus Smokey BBQ dan taburkan di atas daging asap yang dibeli di toko, sesendok krim asam atau yogurt, dan beberapa bumbu cincang.\r\n- Menambahkan sayuran :\r\nMasukkan bayam dan taburi dengan irisan telur rebus.\r\n- Kacang di atas roti panggang :\r\nSajikan kacang di atas roti panggang atau roti, tambahkan sedikit Tabasco atau serpihan cabai, taburkan di atas keju feta dan taburi dengan minyak zaitun.\r\n- Italian-inspired:\r\nTaburi dengan crouton panggang, potongan rosemary, kulit lemon dan parmesan.', 'foto2.png'),
('RC03', 'Bucatini with Spring Vegetables and a Poached Egg', 'Bucatini dengan Sayuran Musim Semi dan Telur Rebus dari Chef Megan Mitchell memberikan pengalaman memasak gourmet di rumah. Pasta ini dibuat dengan mentega asin Organic Valley (tautan eksternal) dan telur organik untuk meningkatkan nilai gizi makanan Anda sekaligus mendukung praktik pertanian yang melindungi planet kita', '1. Garam kosher, secukupnya\r\n\r\n2. 2 sdm. cuka putih suling\r\n\r\n3. 6 butir telur Lembah Organik\r\n\r\n4. 1 pon bucatini\r\n\r\n5. 1/2 cangkir mentega tawar Organic Valley\r\n\r\n6. 4 batang daun bawang, iris tipis\r\n\r\n7. 2 siung bawang putih, parut atau cincang halus\r\n\r\n8. 2 buah lemon\r\n\r\n9. 1 ikat asparagus, potong menjadi tombak berukuran 2 inci dengan bias yang keras\r\n\r\n10. 1 ikat bayam, cuci bersih dan potong batangnya \r\n\r\n11. 10 ons kacang polong manis beku\r\n\r\n12. Irisan parmesan, untuk hiasan', '1. Didihkan sepanci besar air hingga mendidih. Bumbui dengan garam secukupnya.\r\n\r\n2. Sementara itu, isi panci berukuran sedang 3/4 penuh dengan air. Didihkan hingga mendidih lalu tambahkan cuka. Air akan mulai mendidih dan terlihat seperti air soda. 2. Pecahkan 1 butir telur ke dalam mangkuk kecil. Dengan menggunakan sendok berlubang, buat pusaran air di tengah panci lalu tuangkan telur secara perlahan. Masak selama 2-3 menit atau hingga putihnya mengeras namun kuning telurnya masih encer.\r\n\r\n3. Pindahkan ke piring dan lanjutkan dengan sisa telur. Sisihkan sementara Anda membuat pasta, jaga agar air tetap hangat dengan api kecil. \r\n\r\n4. Masukkan pasta dan masak sesuai petunjuk kemasan hingga al dente.\r\n\r\n5. Saat pasta dimasak, panaskan wajan setinggi 12 inci dengan api sedang. Tambahkan mentega, setelah meleleh tambahkan daun bawang, bawang putih dan kulit lemon. Masak selama 2 menit lalu tambahkan bayam. Masak hingga layu, aduk terus, sekitar 2 menit. Bumbui dengan garam dan merica.\r\n\r\n6. Jika sudah siap, tambahkan pasta ke dalam wajan bersama dengan asparagus dan kacang polong. Aduk agar tercampur, lalu tambahkan jus lemon dan bumbui dengan garam dan merica. Aduk-aduk dan cicipi rasa bumbunya. \r\n\r\n7. Untuk menyajikannya, masukkan sebagian pasta ke dalam piring dangkal. Tambahkan 1 butir telur ke dalam air hangat hingga panas lalu letakkan di atas pasta. Taburi dengan lada hitam dan parmesan. Lanjutkan dengan mangkuk yang tersisa. Sebagai alternatif, untuk menyajikan gaya keluarga, tuangkan pasta ke dalam mangkuk besar yang dangkal. Tambahkan semua telur ke dalam air hangat selama 30 detik untuk memanaskannya, lalu letakkan di atas pasta. Sajikan segera.', 'foto3.jpg'),
('RC04', 'No Bake Fruit and Yogurt Granola Tart', 'No Bake Fruit and Yogurt Granola Tart yang lezat dari Chef Megan Mitchell cukup serbaguna untuk disantap untuk sarapan, brunch, atau hidangan penutup! Taburi kulit granola yang renyah dan isian yogurt yang lembut dengan buah musiman untuk sajian klasik sepanjang tahun.', 'Untuk isian:\r\n\r\n2 cangkir yogurt susu murni\r\n\r\n3 sdm. madu bunga jeruk\r\n\r\n1/2 sdt. kayu manis bubuk \r\n\r\nSejumput garam laut halus\r\n\r\n \r\n\r\nUntuk crust:\r\n\r\n3 cangkir Oat & Madu Granola dari Cascadian Farm\r\n\r\n1/2 cangkir selai kacang yang lembut dan tidak diaduk\r\n\r\n3 sdm. madu bunga jeruk\r\n\r\n2 sdm. minyak kelapa cair\r\n\r\n \r\n\r\nUntuk topping:\r\n\r\n1 1/2 cangkir stroberi, iris tipis\r\n\r\n1 buah persik kuning besar, iris tipis\r\n\r\nMadu bunga jeruk, untuk gerimis \r\n\r\nDaun mint, untuk hiasan\r\n\r\n \r\n\r\nPilihan untuk topping:\r\n\r\nNanas potong dadu, irisan mangga, dan serpihan kelapa\r\n\r\nBlackberry, blueberry, raspberry, dan irisan stroberi\r\n\r\nBuah ara, apel dan pir rebus', '1. Lapisi saringan halus dengan tisu dapur dan letakkan di atas mangkuk sedang. Tambahkan yogurt ke dalam saringan dan diamkan selama setidaknya 30 menit, hingga 1 jam.\r\n\r\n2. Dalam mangkuk sedang, tambahkan granola bersama selai kacang, madu dan minyak kelapa. Aduk rata lalu tuangkan ke dalam loyang tart yang dapat dilepas pasang berukuran 10 inci. Tekan dengan kuat dan merata ke bagian bawah loyang. Tempatkan di lemari es setidaknya selama 1 jam. Simpan dalam lemari es sampai dibutuhkan. \r\n\r\n3. Buang cairan yang telah disaring dari yogurt. Sendokkan yogurt ke dalam mangkuk bersih lalu tambahkan madu, kayu manis dan garam. Kocok hingga halus dan lembut.\r\n\r\n4. Jika sudah siap untuk dirakit, keluarkan kulit kue tart dengan hati-hati dan letakkan di atas piring atau penyangga kue. Tuang di atas isian yogurt, sisakan batas 1 inci untuk kerak. Taburi dengan irisan buah, sedikit madu dan daun mint sebagai hiasan. Iris menjadi irisan dan sajikan segera. Simpan dalam lemari es hingga siap disajikan.', 'foto4.jpg'),
('RC05', 'Smoky cod, broccoli & orzo bake', 'Nikmati traybake ikan kod, brokoli, dan orzo yang mudah dan cepat ini di malam hari yang sibuk. Makanan ini sehat dan rendah lemak, dan karena ini adalah traybake, maka Anda tidak perlu mencucinya lagi!', '1. ½ sdm minyak zaitun\r\n\r\n2. 1 bawang bombay, cincang\r\n\r\n3. 1 sdt paprika asap, ditambah sedikit\r\n\r\n4. ½-1 sdm pasta chipotle\r\n\r\n5. 200 gram brokoli batang panjang\r\n\r\n6. 400 ml kaldu sayuran panas\r\n\r\n7. 150g orzo\r\n\r\n8. ½ ikat kecil adas manis, cincang\r\n\r\n9. ½ ikat kecil peterseli, cincang\r\n\r\n10. 50 gram kacang polong beku\r\n\r\n11. 2 fillet ikan kod tanpa kulit\r\n\r\n12. 4 sdm yogurt bebas lemak', 'LANGKAH 1\r\nPanaskan oven dengan suhu 200C/180C kipas angin/gas 6. Panaskan minyak dalam wajan tahan oven, lalu goreng bawang bombay selama 5 menit hingga empuk. Tambahkan paprika, pasta chipotle, brokoli, dan kaldu. Masukkan orzo, dan pindahkan ke dalam oven selama 10 menit.\r\n\r\nLANGKAH 2\r\nAduk setengah bagian bumbu dan kacang polong, lalu masukkan ikan ke dalam orzo. Taburkan sejumput paprika dan gerimis dengan minyak, lalu bumbui. Masak selama 8-10 menit hingga ikan matang dan orzo empuk. Campur sisa bumbu dengan yogurt. Kendurkan dengan sedikit air jika perlu, lalu sajikan dengan orzo dan ikan.', 'foto5.png'),
('RC06', 'Tuna, caper & chilli spaghetti', 'Campurkan tuna, caper dan roket dengan bawang putih, cabai dan spageti untuk membuat makan malam yang mudah dan sehat ini. Hanya butuh 25 menit untuk membuatnya', '1. 150 gram spaghetti atau linguine\r\n\r\n2. 1 sdm minyak zaitun\r\n\r\n3. 1 siung bawang putih, iris\r\n\r\n4. 1 buah cabai merah, buang bijinya dan cincang halus \r\ncincang, ditambah ekstra untuk disajikan (opsional)\r\n\r\n5. 1 sdm caper yang sudah dikeringkan\r\n\r\n6. seikat kecil peterseli, cincang halus (termasuk batangnya)\r\n\r\n7. 145g tuna dalam air tawar, tiriskan\r\n\r\n8. 90g daun bayam atau bayam muda\r\n\r\n9. ½ buah lemon, peras', 'LANGKAH 1\r\nMasak spageti selama 9-11 menit dalam panci besar berisi air yang sudah diberi garam hingga matang.\r\n\r\nLANGKAH 2\r\nPanaskan minyak dalam wajan lebar dengan api yang sangat kecil, lalu masak bawang putih dan cabai secara perlahan hingga meresap ke dalam minyak. Angkat dari api jika bawang putih berubah warna menjadi keemasan, karena akan membuatnya pahit.\r\n\r\nLANGKAH 3\r\nTiriskan pasta, sisakan secangkir air rebusan, dan masukkan spageti ke dalam penggorengan. Aduk pasta dalam minyak di atas api kecil, tambahkan sedikit air pasta untuk mengemulsi saus yang melapisi pasta, lalu masukkan caper, peterseli, tuna, dan sedikit bumbu. Jangan mengaduk terlalu kuat - Anda ingin mempertahankan potongan tuna yang lebih besar. Aduk roket dan jus lemon ke dalam spageti, dan sajikan dengan tambahan cabai, jika Anda suka.', 'foto6.png'),
('RC07', 'Strawberry frozen yogurt', 'Yoghurt beku stroberi kami yang mudah dibuat memiliki rasa buah yang kuat dan sangat lembut, cocok untuk camilan manis musim panas yang sederhana', '1. 140g stroberi\r\n\r\n2. ½ x 405g kaleng susu kental manis\r\n\r\n3. 500g tub 0%-fat Greek yogurt', 'LANGKAH 1\r\nCincang kasar setengah bagian stroberi dan kocok sisanya dalam food processor atau dengan blender hingga menjadi bubur.\r\n\r\nLANGKAH 2\r\nDalam mangkuk besar, aduk susu kental manis ke dalam stroberi yang sudah dihaluskan, lalu masukkan yogurt secara perlahan hingga tercampur rata. Lipat stroberi yang sudah dipotong-potong.\r\n\r\nLANGKAH 3\r\nKikis campuran ke dalam loyang roti atau wadah, buka tutupnya atau bungkus dengan cling film dan bekukan semalaman, sampai padat. Keluarkan dari freezer sekitar 10-15 menit sebelum Anda ingin menyajikan yogurt beku. Dapat dibekukan hingga 1 bulan.', 'dessert1.png'),
('RC08', 'Chocolate & berry mousse pots', 'Dessert does not have to be devilish as this good-for-you pud proves', '1. 75 gram cokelat hitam parut 70%\r\n\r\n2. 4 sdm yogurt rendah lemak\r\n\r\n3. 2 putih telur ukuran besar\r\n\r\n4. 2 sendok teh gula kastor\r\n\r\n5. 350 gram buah beri (cobalah blueberry, raspberry, ceri, atau campurannya)', 'LANGKAH 1\r\nLelehkan cokelat di dalam mangkuk tahan panas di atas panci berisi air mendidih, pastikan mangkuk tidak menyentuh air secara langsung. Setelah meleleh, biarkan dingin selama 5-10 menit, lalu masukkan yogurt.\r\n\r\nLANGKAH 2\r\nKocok putih telur hingga kaku, lalu masukkan gula dan kocok hingga kaku lagi. Lipat putih telur ke dalam campuran cokelat - kendurkan adonan terlebih dahulu dengan sesendok putih telur, lalu masukkan sisanya dengan hati-hati, jaga agar tidak ada udara yang masuk.\r\n\r\nLANGKAH 3\r\nMasukkan buah beri ke dalam gelas kecil atau ramekin, lalu bagi mousse di atasnya. Dinginkan di lemari es sampai mengeras.', 'dessert2.png'),
('RC09', 'Instant frozen berry yogurt', 'Hanya tiga bahan dan dua menit yang Anda perlukan untuk membuat sajian yogurt beku rendah lemak dan rendah kalori ini, yang ideal untuk disantap setelah berolahraga atau sebagai hidangan penutup.', '1. 250g buah beri campuran beku\r\n\r\n2. 250 gram yogurt Yunani tanpa lemak\r\n\r\n3. 1 sdm madu atau sirup agave', 'LANGKAH 1\r\nBlender buah beri, yogurt, dan madu atau sirup agave dalam food processor selama 20 detik hingga menjadi tekstur es krim yang halus. Sendokkan ke dalam mangkuk dan sajikan.', 'dessert3.png');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `Kode` varchar(4) NOT NULL,
  `Judul` longtext NOT NULL,
  `Kategori` varchar(100) NOT NULL,
  `Tanggal` varchar(50) NOT NULL,
  `Penerbit` longtext NOT NULL,
  `URL` longtext NOT NULL,
  `Foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`Kode`, `Judul`, `Kategori`, `Tanggal`, `Penerbit`, `URL`, `Foto`) VALUES
('S001', 'Healthy food choices are happy food choices: Evidence from a real life sample using smartphone based assessments', 'Food Reseach', '06 December 2017', 'Deborah R Wahl, Karoline Villinger, Laura M König, Katrin Ziesemer, Harald T Schupp, Britta Renner', 'https://www.nature.com/articles/s41598-017-17262-9', 'res1.png'),
('S002', 'THE INFLUENCE OF STUDENTS’ KNOWLEDGE AND ATTITUDE TOWARD FUNCTIONAL FOODS CONSUMPTION BEHAVIOR', 'Healthy Life', '2018', 'Siti Afina, Retnaningsih', 'https://journal.ipb.ac.id/index.php/jcs/article/view/20416/14153', 'res2.png'),
('S003', 'The importance of high quality good health old age people.', 'Healthy Food', '30 January 2023', 'Jennifer Harris', 'https://www.alliedacademies.org/articles/the-importance-of-high-quality-good-health-old-age-people.pdf', 'res3.png'),
('S004', 'Recent findings on cell and sub-atomic instruments of activity of novel food', 'Healthy Food', '30 January 2023', 'David Feifer', 'https://www.alliedacademies.org/articles/recent-findings-on-cell-and-subatomic-instruments-of-activity-of-novel-food.pdf', 'res3.png'),
('S005', 'Presence of Pesticide Residue in Fruits and Vegetables and Their Effect on Human Health: A Review', 'Healthy Food', '08 November 2022', 'Dahikar SB, Bhutada SA, Girase MS', 'https://www.alliedacademies.org/articles/presence-of-pesticide-residue-in-fruits-and-vegetables-and-their-effect-on-human-health-a-review.pdf', 'res4.png'),
('S006', 'The Oral health beliefs, knowledge, and behaviours', 'Healthy Food', '23 January 2023', 'Pompilia Lazureanu', 'https://www.alliedacademies.org/articles/the-oral-health-beliefs-knowledge-and-behaviours.pdf', 'res3.png');

-- --------------------------------------------------------

--
-- Table structure for table `video_workout`
--

CREATE TABLE `video_workout` (
  `video_ID` varchar(4) NOT NULL,
  `judul_vid` varchar(100) NOT NULL,
  `kategori_ID` varchar(30) NOT NULL,
  `link_vid` text NOT NULL,
  `foto_cover` text NOT NULL,
  `deskripsi_ket` text NOT NULL,
  `kreator_vid` varchar(25) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_workout`
--

INSERT INTO `video_workout` (`video_ID`, `judul_vid`, `kategori_ID`, `link_vid`, `foto_cover`, `deskripsi_ket`, `kreator_vid`, `tgl_upload`) VALUES
('V001', '30 min Full Body Fat Burn HIIT (NO JUMPING)', 'KV02', 'https://youtu.be/W4eKVKwf3rQ', 'https://img.youtube.com/vi/W4eKVKwf3rQ/maxresdefault.jpg', 'Video workout ini berguna untuk mengurangi lemak di seluruh bagian tubuh dan terdiri dari 35 gerakan', 'Emi Wong', '2019-10-09'),
('V002', 'BEST 15 min Beginner Workout for Fat Burning', 'KV01', 'https://youtu.be/bleOTMDa3_4', 'https://img.youtube.com/vi/bleOTMDa3_4/maxresdefault.jpg', 'Video workout untuk membakar lemak bagi pemula berdurasi 15 menit dan terdiri dari 15 gerakan', 'Emi Wong', '2018-08-08'),
('V003', '30 Menit Full Body Workout! Gerakan Olahraga', 'KV01', 'https://youtu.be/JHmTr6tOW2w', 'https://img.freepik.com/free-photo/fit-blond-woman-with-perfect-smile-stylish-sportswear-looking-camera-holding-bottle-water-white-wall-demonstrate-muscles_273443-4534.jpg?size=626&ext=jpg&uid=R86211982&ga=GA1.1.1026175169.1676827005&semt=robertav1_2_sidr', 'Tahu nggak sih kalau Full body workout itu mampu meningkatkan aktivasi gen yang berguna mempercepat laju metabolisme pada otot? Nah video workout 30 menit ini cocok banget kamu! Langsung aja yuk workout bareng! Share di kolom komentar ya buat kamu yang udah coba workout ini bareng SKWAD Fitness!', 'SKWAD Fitness', '2021-10-24'),
('V004', '20 MIN MORNING WORKOUT (NO EQUIPMENT BODYWEIGHT WORKOUT!)', 'KV03', 'https://youtu.be/IeGrTqW5lek', 'https://img.youtube.com/vi/IeGrTqW5lek/maxresdefault.jpg', 'Get ready for one of the best Home Workouts of your LIFE! Let\'s do this! A 20 minute full body workout that you can do whenever and wherever you like... even first thing in the morning! You don\'t need any equipment or weight.', 'Fraser Wilson', '2019-04-04'),
('V005', 'Do This Everyday To Lose Weight | 2 Weeks Shred Challenge', 'KV05', 'https://youtu.be/2MoGxae-zyo', 'https://img.youtube.com/vi/2MoGxae-zyo/maxresdefault.jpg', 'First episode of my new program for this month! I realised from the latest before/after results video that a lot of people tend to do just 1-2 weeks instead of the whole 4 weeks programs. You obviously won\'t lose as much weight or get as much results, but a 2 weeks program is easier to commit to, and you can always do it twice!\r\n\r\nEnjoy the workout guys! ', 'Chloe Ting', '2019-08-08'),
('V006', '30 minute fat burning home workout for beginners. Achievable, low impact results.', 'KV01', 'https://youtu.be/gC_L9qAHVJ8', 'https://img.youtube.com/vi/gC_L9qAHVJ8/maxresdefault.jpg', 'This workout is part of Real Start and Real Start Plus - a workout plan made for real people with real people. \r\n\r\nAll workouts in this plan are low impact, realistic and effective.', 'Body Project', '2019-03-25'),
('V007', 'Full UPPER BODY Workout (Tone & Sculpt) - 15 min At Home', 'KV04', 'https://youtu.be/0zhvUV1bAVQ', 'https://img.youtube.com/vi/0zhvUV1bAVQ/maxresdefault.jpg', 'Try this 15 min dumbbell upper body circuit at home! Tone, sculpt, and build the arms, chest, back, and shoulders!', 'MadFit', '2020-02-21'),
('V008', '10 MIN UPPER BODY WORKOUT (CHEST, BACK, ABS, ARMS & SHOULDERS / NO EQUIPMENT)', 'KV04', 'https://youtu.be/wRDMFP3ihkE', 'https://img.youtube.com/vi/wRDMFP3ihkE/maxresdefault.jpg', 'Upper body workouts can be a great option for those of you who are short on time and wanted to get the most out of your home workouts!\r\n\r\nWe all have different goals, circumstances and preferences. Some of us like to workout more often others less, some of us are training purely for performance or health benefits and others maybe have a more aesthetic goal in mind.\r\n\r\nAs such your training routine should always be engineered for your life, ultimately creating a pathway to your goal that you will actually enjoy walking', 'Fraser Wilson', '2021-10-14'),
('V009', '30 MIN PILATES FOR WEIGHT LOSS | best calories burn', 'KV05', 'https://youtu.be/Q-n2SOnyr1Y', 'https://img.youtube.com/vi/Q-n2SOnyr1Y/maxresdefault.jpg', 'Perfect 30 min Pilates for Weight Loss to heat up your heart and burn quick calories. My body feels amazing after 30 minutes doing this weight loss workout and yours will definitely feel the same way 🥰🔥🤗 Happy burn!!', 'Moving Mango Pilates', '2021-11-27'),
('V010', 'The #1 Exercise To Lose Belly Fat (FOR GOOD!)', 'KV05', 'https://youtu.be/mEmynZt2SwY', 'https://img.youtube.com/vi/mEmynZt2SwY/maxresdefault.jpg', '“How to lose belly fat” is one of the most common questions out there. And that’s understandable. Belly fat is really easy to gain and notoriously hard to lose. It can seem as though no matter what exercises you try to lose belly fat and no matter how well you eat, the belly fat just won’t budge. And unfortunately, with exception to surgery, there is currently no proven method of being able to spot reduce fat from the belly. There is an exercise, however, that is incredibly underutilized yet powerfully effective when it comes to losing even the most stubborn belly fat. Today I’ll share what that is and how you can start using it right away to lose belly fat.', ' Jeremy Ethier', '2022-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`count`) VALUES
(718);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`KodeDrink`);

--
-- Indexes for table `kategori_vid`
--
ALTER TABLE `kategori_vid`
  ADD PRIMARY KEY (`kategori_ID`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`KodeResep`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `video_workout`
--
ALTER TABLE `video_workout`
  ADD PRIMARY KEY (`video_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
