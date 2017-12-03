-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 11:44 AM
-- Server version: 5.7.18-log
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alipasazade_vt`
--

-- --------------------------------------------------------

--
-- Table structure for table `apz_haberler`
--

CREATE TABLE `apz_haberler` (
  `id` int(10) UNSIGNED NOT NULL,
  `haber_resmi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haber_baslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `haber_icerik` varchar(20000) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apz_haberler`
--

INSERT INTO `apz_haberler` (`id`, `haber_resmi`, `haber_baslik`, `haber_icerik`, `created_at`, `updated_at`) VALUES
(1, 'pexels-photo-23978.jpg', 'Seyirci Rekoru Kırılması Beklenen Tottenham - Real Madrid Maçını Cüneyt Çakır Yönetecek', 'MAÇ 21.45\'TE BAŞLAYACAK\r\n\r\n90 bin kişilik Wembley Stadyumunda TSİ 21.45\'te başlayacak maçta Çakır\'ın yardımcılıklarını Bahattin Duran ve Tarık Ongun yapacak. Mustafa Emre Eyisoy\'un dördüncü hakem olacağı karşılaşmada, Hüseyin Göçek ile Barış Şimşek de ilave yardımcı hakem görevinde bulunacak.', '2017-10-30 09:19:57', '2017-10-30 09:19:57'),
(2, 'pexels-photo-30865.jpg', 'CIA Arşivleri Ortalığı Ayağa Kaldırdı: Hitler Savaştan Sonra 10 Yıl Daha Yaşamış', '<p class=\"selectionShareable\" style=\"line-height: 25.5px; margin-top: 15px; margin-bottom: 0px; padding: 0px; border: 0px; font-size: 17px; vertical-align: baseline; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);\"><span style=\"line-height: 28px; margin: 15px 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; font-weight: 600; display: block; width: 810px;\">KOLOMBİYA\'YA KAÇMIŞ</span></p><p class=\"selectionShareable\" style=\"line-height: 25.5px; margin-top: 15px; margin-bottom: 0px; padding: 0px; border: 0px; font-size: 17px; vertical-align: baseline; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);\">Açılan belgeler, Nazi Almanyası diktatörünün ölmediğini ve <a class=\"keyword\" href=\"https://www.haberler.com/guney-amerika/\" title=\"Güney Amerika Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Güney Amerika</a>\'da saklandığını gösteriyor. Bu belgelere dayanılarak, diktatörün <a class=\"keyword\" href=\"https://www.haberler.com/berlin/\" title=\"Berlin Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Berlin</a>\'deki sığınağında intihar etmediği, <a class=\"keyword\" href=\"https://www.haberler.com/kolombiya/\" title=\"Kolombiya Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Kolombiya</a>\'ya kaçtığı iddia edildi.</p><p class=\"selectionShareable\" style=\"line-height: 25.5px; margin-top: 15px; margin-bottom: 0px; padding: 0px; border: 0px; font-size: 17px; vertical-align: baseline; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);\">Cimelody-3 kod adlı ajan, <a class=\"keyword\" href=\"https://www.haberler.com/hitler/\" title=\"Hitler Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Hitler</a>\'in acımasız gizli eski <a class=\"keyword\" href=\"https://www.haberler.com/polis/\" title=\"polis Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">polis</a> üyelerinden birinin \"Hitler\'in hayatta olduğunu\" iddia ettiğini bildirdi. Philip <a class=\"keyword\" href=\"https://www.haberler.com/citren/\" title=\"Citroen Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Citroen</a> adlı askerin, <a class=\"keyword\" href=\"https://www.haberler.com/kolombiya/\" title=\"Kolombiya Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Kolombiya</a>\'da ayda bir kez <a class=\"keyword\" href=\"https://www.haberler.com/hitler/\" title=\"Hitler Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Hitler</a> ile temas kurduğu söyleniyor.</p><p><ins data-publisher=\"adm-pub-140550463727\" data-ad-type=\"inpage\" class=\"adm-ads-area\" data-ad-network=\"170280064928\" data-ad-sid=\"600\" style=\"line-height: 23.8px; margin: 0px; padding: 0px; border: 0px; font-size: 17px; vertical-align: baseline; background-color: rgb(255, 255, 153); color: rgb(0, 0, 0); text-decoration-line: none; font-family: Roboto, ​sans-serif;\"></ins><span style=\"color: rgb(51, 51, 51); font-family: Roboto, ​sans-serif; font-size: 17px; background-color: rgb(255, 255, 255);\"></span></p><p class=\"selectionShareable\" style=\"line-height: 25.5px; margin-top: 15px; margin-bottom: 0px; padding: 0px; border: 0px; font-size: 17px; vertical-align: baseline; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);\"><a class=\"keyword\" href=\"https://www.haberler.com/cia-3937/\" title=\"CIA Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">CIA</a> dokümanı şu şekilde: \"Citroen, <a class=\"keyword\" href=\"https://www.haberler.com/hitler/\" title=\"Hitler Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Hitler</a>\'in <a class=\"keyword\" href=\"https://www.haberler.com/kolombiya/\" title=\"Kolombiya Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Kolombiya</a>\'yı 1955 Ocak ayında terk ettiğini belirtti. <a class=\"keyword\" href=\"https://www.haberler.com/citren/\" title=\"Citroen Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Citroen</a>, İkinci Dünya Savaşı\'nın bitiminden bu yana on yıl geçmesine rağmen, müttefikler artık <a class=\"keyword\" href=\"https://www.haberler.com/hitler/\" title=\"Hitler Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Hitler</a>\'i savaş suçlusu olarak takip edemezlerdi\" dedi.</p>', '2017-10-30 16:25:14', '2017-10-30 16:25:14'),
(3, 'pexels-photo-195859.jpeg', 'DAEŞ, Dünya Kupasını Cristiano Ronaldo\'yla Tehdit Etti', '<p class=\"selectionShareable\" style=\"line-height: 25.5px; margin-top: 15px; margin-bottom: 0px; padding: 0px; border: 0px; font-size: 17px; vertical-align: baseline; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);\">Önümüzdeki yıl <a class=\"keyword\" href=\"https://www.haberler.com/rusya/\" title=\"Rusya Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Rusya</a>\'da düzenlenecek 2018 <a class=\"keyword\" href=\"https://www.haberler.com/fifa-9305/\" title=\"FIFA Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">FIFA</a> Dünya Kupasıyla ilgili korkutan bir tehdit daha geldi.</p><p class=\"selectionShareable\" style=\"line-height: 25.5px; margin-top: 15px; margin-bottom: 0px; padding: 0px; border: 0px; font-size: 17px; vertical-align: baseline; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);\">Daha önce <a class=\"keyword\" href=\"https://www.haberler.com/messi/\" title=\"Messi Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Messi</a>\'yi gözünden kan gelirken, <a class=\"keyword\" href=\"https://www.haberler.com/neymar/\" title=\"Neymar Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Neymar</a>\'ı ise öldürmek üzereyken tasvir eden terör örgütü DAEŞ, bu kez dünyaca ünlü Portekizli futbolcu <a class=\"keyword\" href=\"https://www.haberler.com/cristiano-ronaldo/\" title=\"Cristiano Ronaldo Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Cristiano Ronaldo</a>\'yu hedef aldı.</p>', '2017-10-30 16:40:43', '2017-10-30 16:40:43'),
(4, 'gumruklerde-plaka-okuma-sistemi-1-kasim-da-basliyor-10153069.Jpeg', 'Gümrüklerde plaka okuma sistemi 1 Kasım\'da başlıyor', '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">Gümrük ve Ticaret Bakanı Tüfenkci\'nin Edirne ziyareti sırasında açıkladığı \'taşıt plaka okuma sistemi\'nin hazırlıkları, Trakya Gümrük ve Ticaret Bölge Müdürlüğü\'ne bağlı Türkiye\'nin en büyük kara ulaştırma sınır kapısı olan Kapıkule\'de tamamlandı. Türkiye\'ye giriş veya çıkış yapacak araçların gümrük girişinde plakasını kamaralar sayesinde otomatik olarak kaydedeceği sistem için gümrüğün iki noktasına özel kameralar kuruldu. 1 Kasım\'dan itibaren hizmete girecek sistemin, gümrüklerdeki kayıt yoğunluğunu azaltması ve işlemleri hızlandırması planlanıyor. Uygulamaya göre giriş ya da çıkış yapacak araçlar gümrük kapılarında durdurulmadan kameralar sayesinde otomatik olarak sisteme kaydedilecek. Bunun için ayrıca memur görevlendirilmeyecek. 24 saat kullanılacak sistem sayesinde daha önce memurların \'manuel\' (elle) kayıt yaptıkları sistem de tarihe karışacak.</span><br></p>', '2017-10-30 16:50:20', '2017-10-30 16:50:20'),
(5, 'res.jpg', 'F.Bahçe\'yi yakan karar! Rapor edildi...', '<h2 class=\"news-spot\" style=\"border: 0px; line-height: 30px; margin: 0px 0px 25px; padding: 0px; -webkit-tap-highlight-color: transparent; vertical-align: baseline; -webkit-font-smoothing: antialiased; color: rgb(35, 35, 35); font-size: 20px; background-color: rgb(255, 255, 255);\"><a class=\"inline-keyword\" href=\"http://www.hurriyet.com.tr/index/fenerbahce\" target=\"_blank\" style=\"border: 0px; line-height: 1; margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; vertical-align: baseline; color: rgb(0, 0, 0); -webkit-font-smoothing: antialiased;\">Fenerbahçe</a> - Kayserispor maçının son dakikalarında yaşanan bir pozisyon maçın bütün kaderini değiştirdi. İşte kritik dakikada yaşananlar ve hakemin o kararı...</h2>', '2017-10-31 12:29:48', '2017-10-31 12:29:48'),
(6, 'taksim-deki-yeni-akm-projesinden-ilk-goruntuler-10212384_2936_m.jpg', 'Taksim\'deki Yeni AKM Projesinden İlk Görüntüler', '<p class=\"selectionShareable\" style=\"line-height: 25.5px; margin-top: 15px; margin-bottom: 0px; padding: 0px; border: 0px; font-size: 17px; vertical-align: baseline; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);\"><a class=\"keyword\" href=\"https://www.haberler.com/taksim/\" title=\"Taksim Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Taksim</a>\'deki <a class=\"keyword\" href=\"https://www.haberler.com/ataturk-kultur-merkezi/\" title=\"Atatürk Kültür Merkezi Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Atatürk Kültür Merkezi</a>\'nin (<a class=\"keyword\" href=\"https://www.haberler.com/akm/\" title=\"AKM Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">AKM</a>) kaderi bugün belli oluyor. Projenin tanıtım toplantısı <a class=\"keyword\" href=\"https://www.haberler.com/halic/\" title=\"Haliç Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Haliç</a>Kongre Merkezi\'nde yapılıyor. Proje, ödüllü Mimar Murat Tabanlıoğlu tarafından tasarlandı.</p><p class=\"selectionShareable\" style=\"line-height: 25.5px; margin-top: 15px; margin-bottom: 0px; padding: 0px; border: 0px; font-size: 17px; vertical-align: baseline; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);\"><span style=\"line-height: 28px; margin: 15px 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; font-weight: 600; display: block; width: 810px;\">AKM 48 YIL ÖNCE İNŞA EDİLMİŞTİ</span></p><p class=\"selectionShareable\" style=\"line-height: 25.5px; margin-top: 15px; margin-bottom: 0px; padding: 0px; border: 0px; font-size: 17px; vertical-align: baseline; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);\">Cumhuriyet tarihinin sembol yapılarından biri olan <a class=\"keyword\" href=\"https://www.haberler.com/ataturk-kultur-merkezi/\" title=\"Atatürk Kültür Merkezi Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Atatürk Kültür Merkezi</a> (<a class=\"keyword\" href=\"https://www.haberler.com/akm/\" title=\"AKM Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">AKM</a>), bundan 48 yıl önce inşa edilmişti. Geçmişte birçok etkinliğe ev sahipliği yapan <a class=\"keyword\" href=\"https://www.haberler.com/ataturk-kultur-merkezi/\" title=\"Atatürk Kültür Merkezi Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Atatürk Kültür Merkezi</a>, 1969 yılında hizmete girdiğinde, dünyanın en büyük dördüncü sanat merkeziydi. <a class=\"keyword\" href=\"https://www.haberler.com/akm/\" title=\"AKM Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">AKM</a>, 2008 yılından bu yana kullanılmıyor.</p><p class=\"selectionShareable\" style=\"line-height: 25.5px; margin-top: 15px; margin-bottom: 0px; padding: 0px; border: 0px; font-size: 17px; vertical-align: baseline; font-family: Roboto, sans-serif; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);\"><a class=\"keyword\" href=\"https://www.haberler.com/ataturk-kultur-merkezi/\" title=\"Atatürk Kültür Merkezi Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">Atatürk Kültür Merkezi</a> adı yine <a class=\"keyword\" href=\"https://www.haberler.com/6-kasim/\" title=\"6 Kasım Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">6 Kasım</a> 1971 tarihinde verilmişti. Merkezin daha önceki adı <a class=\"keyword\" href=\"https://www.haberler.com/istanbul/\" title=\"İstanbul Haberleri\" style=\"line-height: 23.8px; font-weight: bold; margin: 15px 0px 0px; color: rgb(51, 51, 51) !important; cursor: pointer !important;\">İstanbul</a> Kültür Sarayı\'ydı.</p>', '2017-11-06 07:21:27', '2017-11-06 07:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `apz_hakkimizda`
--

CREATE TABLE `apz_hakkimizda` (
  `numara` int(10) UNSIGNED NOT NULL,
  `vizyon_baslik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vizyon_aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarih_baslik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarih_aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apz_hakkimizda`
--

INSERT INTO `apz_hakkimizda` (`numara`, `vizyon_baslik`, `vizyon_aciklama`, `tarih_baslik`, `tarih_aciklama`, `created_at`, `updated_at`) VALUES
(1, 'Ürün Odaklı', '<div><br></div><div><h3 style=\"font-family: Tahoma; font-weight: inherit; line-height: inherit; color: rgb(155, 137, 102); margin: 0px; font-size: inherit; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"text-align: start; color: rgb(51, 51, 51); font-family: pt_sansregular, Helvetica, Arial, sans-serif; font-size: 16px;\">18. yıldönümünde düzenlenen panelde konuşan İTÜ Jeoloji Mühendisliği Bölümü Öğretim Üyesi Prof. Dr. Cenk Yaltırak da Bursa Ovası’nda yapılaşmanın önüne geçilmesi gerektiğini söyledi. Bursa’nın yanlış yere kurulduğunu kaydeden Yaltırak, “Bursa tarihsel olarak yanlış yere kurulmuş bir kent. Osmanlı kurulduğu zaman askeri ve stratejik olarak doğru yerdeydi ama doğa bilimleri açısından kent yapılmayacak tek yerdir” dedi.  Nilüfer Belediye Başkanı Mustafa Bozbey, “Deprem açısından son derece güvensiz bir kentteyiz. Bursa, deprem gerçeğinin hâlâ farkına varmamış görünüyor” diyerek bu konuda acilen çalışma yapılması gerektiğini söyledi.</span></h3></div>', 'Tarihsel Bakış olarak biz', '<h3 style=\"font-family: Tahoma; font-weight: inherit; line-height: inherit; color: rgb(155, 137, 102); margin: 0px; font-size: inherit; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"text-align: start; color: rgb(51, 51, 51); font-family: pt_sansregular, Helvetica, Arial, sans-serif; font-size: 16px;\">18. yıldönümünde düzenlenen panelde konuşan İTÜ Jeoloji Mühendisliği Bölümü Öğretim Üyesi Prof. Dr. Cenk Yaltırak da Bursa Ovası’nda yapılaşmanın önüne geçilmesi gerektiğini söyledi. Bursa’nın yanlış yere kurulduğunu kaydeden Yaltırak, “Bursa tarihsel olarak yanlış yere kurulmuş bir kent. Osmanlı kurulduğu zaman askeri ve stratejik olarak doğru yerdeydi ama doğa bilimleri açısından kent yapılmayacak tek yerdir” dedi.  Nilüfer Belediye Başkanı Mustafa Bozbey, “Deprem açısından son derece güvensiz bir kentteyiz. Bursa, deprem gerçeğinin hâlâ farkına varmamış görünüyor” diyerek bu konuda acilen çalışma yapılması gerektiğini söyledi.</span></h3>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apz_iletisim`
--

CREATE TABLE `apz_iletisim` (
  `numara` int(10) UNSIGNED NOT NULL,
  `sirket_adi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adres` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apz_iletisim`
--

INSERT INTO `apz_iletisim` (`numara`, `sirket_adi`, `adres`, `telefon`, `created_at`, `updated_at`) VALUES
(2, 'Ali paşazade Lokum LTD. ŞTİ.', 'İzzettin Mahallesi Doburca Sokak No:23  Çatalca / İSTANBUL', '02127950494', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apz_musteriler`
--

CREATE TABLE `apz_musteriler` (
  `numara` int(10) UNSIGNED NOT NULL,
  `ad` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soyad` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adres` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eposta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesaj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apz_musteriler`
--

INSERT INTO `apz_musteriler` (`numara`, `ad`, `soyad`, `telefon`, `adres`, `eposta`, `mesaj`, `created_at`, `updated_at`) VALUES
(6, 'Emin', 'Demir', '2127950494', 'esenler istanbul', 'emindem@yahoo.com', 'sizin ile iletişime geçmek istiyorum', '2017-10-31 07:18:02', '2017-10-31 07:18:02'),
(7, 'Semih', 'Tınaztepe', '0538 548 96 54', 'aydın kuşadası', 'tinaztepe@gmail.com', 'baharatlar hakkında fuara katılmanızı istiyoruz..', '2017-10-31 07:37:36', '2017-10-31 07:37:36'),
(8, 'Ramazan', 'Duman', '0456 215 98 65', 'sinop merkez', 'rduman@mynet.com', 'Lokum almak istiyorum 2 konteynır dolusu hemde', '2017-10-31 07:38:20', '2017-10-31 07:38:20'),
(9, 'Fatih', 'Kiraz', '0456 658 78 54', 'turgutreis - esenler', 'kirazas@mynet.com', 'sizin ile ticari bir anlaşma yapmak istiyorum', '2017-10-31 13:15:43', '2017-10-31 13:15:43'),
(11, 'hakan', 'taşıyan', '0456 358 96 45', 'ankara mamak', 'tasiyanhol@gmail.com', 'büyük bir alım için sizinle iletişime geçmek istiyorum', '2017-11-01 09:47:15', '2017-11-01 09:47:15'),
(12, 'ramazan', 'duman', '0564 878 12 65', 'birlik mahallesi istanbul', 'ramazanduman@mynet.com', 'calısmaya devam', '2017-11-01 09:49:54', '2017-11-01 09:49:54'),
(13, 'Kemaletttin', 'Sagdudak', '0312 456 98 54', 'ankara mamak', 'kemal.ata@gmail.com', 'sizin ile yurtdışı alım satım konusunda konuşmak istiyorum', '2017-11-06 08:02:07', '2017-11-06 08:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `apz_sosyalmedya`
--

CREATE TABLE `apz_sosyalmedya` (
  `numara` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tumblr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vimeo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flickr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apz_sosyalmedya`
--

INSERT INTO `apz_sosyalmedya` (`numara`, `facebook`, `instagram`, `twitter`, `googleplus`, `youtube`, `tumblr`, `pinterest`, `vimeo`, `linkedin`, `flickr`, `vk`, `created_at`, `updated_at`) VALUES
(4, NULL, 'yow', NULL, 'gec', NULL, NULL, NULL, 'patladi gitti', 'seyyar', NULL, 'para', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apz_urunler`
--

CREATE TABLE `apz_urunler` (
  `numara` int(10) UNSIGNED NOT NULL,
  `urun_adi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_kodu` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_aciklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urun_eklenmedurumu` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok_durumu` int(10) NOT NULL,
  `vitrin_resmi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apz_urunler`
--

INSERT INTO `apz_urunler` (`numara`, `urun_adi`, `urun_kodu`, `urun_aciklama`, `urun_eklenmedurumu`, `stok_durumu`, `vitrin_resmi`, `created_at`, `updated_at`) VALUES
(2, 'Turkish Delight with Strawberry Tea and Pıstachıo and Pomegranate', 'aksi-34', 'nalet bir durum insanlarin olmesı cok üzücü be', '21/03/2017', 0, 'pexels-photo-52609.jpeg', NULL, NULL),
(3, 'Turkish Delight with Cinseng Tea and Pomegranate and Pıstachıo', 'UMUT-45', 'cicekli caddeler', '1/10/2016', 0, 'pexels-photo-52609.jpeg', NULL, NULL),
(4, 'Turkish Delight with Mastic', 'seni', 'secti', '8/04/2015', 2, 'pexels-photo-57767.jpeg', NULL, NULL),
(5, 'Turkish Delight Double with Almond', 'vvv', 'ddd', '', 0, 'pexels-photo-106184.jpeg', NULL, NULL),
(6, 'Turkish Delight Extra Double with Milk and Pistachıo', 'NZK-45', 'Badem Özlü çikolataya batırılmış lokum', '23-10-17', 2, 'pexels-photo-40133.jpeg', NULL, NULL),
(9, 'Turkish Delight with Rose and Pıstachıo', 'qqq', '<p>sdsdf</p>', '26-10-17', 2, 'road-sky-clouds-cloudy.jpg', NULL, NULL),
(13, 'Turkish Delight Atom with Hazelnut', 'eeee', '<p>sssss</p>', '31-10-17', 1, '1-pexels-photo-395132.jpeg', NULL, NULL),
(14, 'Cerezli Naneli Lokum', 'LKM-45-123', '<p>Ürün hakkında istek bilgi verilir</p>', '02-11-17', 1, '1-pexels-photo-132824.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_10_05_201946_urunler', 1),
(2, '2017_10_05_202239_sosyalmedya', 1),
(3, '2017_10_05_204339_musteriler', 1),
(4, '2017_10_05_204939_iletisimBilgileri', 1),
(5, '2017_10_06_124530_hakkimizda', 1),
(6, '2014_10_12_000000_create_users_table', 2),
(7, '2014_10_12_100000_create_password_resets_table', 2),
(8, '2017_10_30_115151_HaberlerMigration', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aktiflik` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `aktiflik`) VALUES
(1, 'java', 'sercan.goger@mynet.com', '$2y$10$kxuJ.F4fYvKj87GyMSMakO8dqrl4llbTitsMBxsddHL9zTBsnGIra', '2rWXCvf1A68q3uSc83HZ1wS7oASvqZb2orzp86B64U5tZJIj7B0g3VwJR1yM', '2017-10-26 04:49:50', '2017-10-30 14:34:59', 0),
(2, 'derine', 'gul.goger@mynet.com', '$2y$10$BdAwOdfDYC5wTNFfM3WQg.qWzicgCSp/GNsUSVzmSAwqIVNCq.QDe', 'IK1cTFmwpn7kg5NgVEO1t8o8mQeF5dagxRo1rPdwTRT2OS5m2t9rmKT6J8Wy', '2017-10-30 13:10:15', '2017-10-30 13:37:18', 1),
(3, 'sultan', 'sultan.firat@gmail.com', '$2y$10$rgq6CH9wznAlPBZyoBy3Eemf4SrNoD0iOdCHJ87ekZjr12SnX690m', 'VoeMlzg8SgbsX9ZTjH9Hw7uSQgXZjxWZhT8kjan8hmnjoGlG7OJAlwJaTUUE', '2017-10-30 13:11:07', '2017-10-30 13:37:18', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apz_haberler`
--
ALTER TABLE `apz_haberler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apz_hakkimizda`
--
ALTER TABLE `apz_hakkimizda`
  ADD PRIMARY KEY (`numara`);

--
-- Indexes for table `apz_iletisim`
--
ALTER TABLE `apz_iletisim`
  ADD PRIMARY KEY (`numara`);

--
-- Indexes for table `apz_musteriler`
--
ALTER TABLE `apz_musteriler`
  ADD PRIMARY KEY (`numara`),
  ADD UNIQUE KEY `apz_musteriler_eposta_unique` (`eposta`);

--
-- Indexes for table `apz_sosyalmedya`
--
ALTER TABLE `apz_sosyalmedya`
  ADD PRIMARY KEY (`numara`);

--
-- Indexes for table `apz_urunler`
--
ALTER TABLE `apz_urunler`
  ADD PRIMARY KEY (`numara`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apz_haberler`
--
ALTER TABLE `apz_haberler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `apz_hakkimizda`
--
ALTER TABLE `apz_hakkimizda`
  MODIFY `numara` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `apz_iletisim`
--
ALTER TABLE `apz_iletisim`
  MODIFY `numara` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `apz_musteriler`
--
ALTER TABLE `apz_musteriler`
  MODIFY `numara` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `apz_sosyalmedya`
--
ALTER TABLE `apz_sosyalmedya`
  MODIFY `numara` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `apz_urunler`
--
ALTER TABLE `apz_urunler`
  MODIFY `numara` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
