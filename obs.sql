-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 05 Nis 2021, 23:52:05
-- Sunucu sürümü: 8.0.21
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `obs`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adresler`
--

DROP TABLE IF EXISTS `adresler`;
CREATE TABLE IF NOT EXISTS `adresler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `il` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `posta_kodu` int NOT NULL,
  `ilce` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mahalle` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `adres_iptal` varchar(5) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `adresler`
--

INSERT INTO `adresler` (`id`, `il`, `posta_kodu`, `ilce`, `mahalle`, `adres_iptal`) VALUES
(6, 'mersin', 33000, 'yenişehir', 'sahilyolu', NULL),
(7, 'bursa', 16000, 'osmangazi', 'yenimahalle 1254 sokak no 20', NULL),
(8, 'batman', 72000, 'merkez', 'fatih mahallesi 1213 sokak no 7', NULL),
(9, 'mersin', 33000, 'yenişehir', 'deniz mahallesi 3213 sokak no 5', NULL),
(10, 'adana', 1000, 'merkez', 'duman mahallesi 526 sokak no 16', NULL),
(13, 'qqqqqq', 99000, 'qqqqq', 'qqq', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolumler`
--

DROP TABLE IF EXISTS `bolumler`;
CREATE TABLE IF NOT EXISTS `bolumler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bolum_adi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `programi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bolumler`
--

INSERT INTO `bolumler` (`id`, `bolum_adi`, `programi`) VALUES
(34, 'qqqq qqq', 'qqq qq'),
(27, 'bilgisayar teknolojileri', 'bilgisayar programcılığı'),
(26, 'inşaat bölümü', 'inşaat teknolojisi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

DROP TABLE IF EXISTS `dersler`;
CREATE TABLE IF NOT EXISTS `dersler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ders_adi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ders_kodu` varchar(7) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kredi` int NOT NULL,
  `bolum_id` int DEFAULT NULL,
  `hoca_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`id`, `ders_adi`, `ders_kodu`, `kredi`, `bolum_id`, `hoca_id`) VALUES
(1, 'BİLGİSAYAR BAKIM ONARIMI', 'BBO', 2, 27, 1),
(2, 'İNTERNET PROGRAMCILIĞI', 'INTP', 4, 27, 2),
(3, 'NESNE TABANLI PROGRAMLAMA', 'NTP', 4, 27, 2),
(4, 'VERİ TABANI', 'VTB', 3, 27, 2),
(5, 'AĞ TEMELLERİ', 'AGT', 2, 27, 1),
(6, 'WEB TASARIM', 'WEBT', 3, 27, 1),
(7, 'GRAFİK VE TASARIM', 'GVT', 2, 27, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

DROP TABLE IF EXISTS `duyurular`;
CREATE TABLE IF NOT EXISTS `duyurular` (
  `id` int NOT NULL AUTO_INCREMENT,
  `konu` varchar(256) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `duyuru` mediumtext CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`id`, `konu`, `duyuru`) VALUES
(6, 'Kyk Bursu Çıkmayan Öğrencilerin Dikkatine', 'YÖKSİS\'te pasif öğrenci olarak göründüğünüzden dolayı başvurunuzun değerlendirilmediği ile ilgili sorunlar giderilmiştir ve sistemde güncellenmiştir.<br />\r\n<br />\r\nKYK, başvurularınızı yeniden değerlendirmiş olup 21 Kasım 2017 (Bugün) saat 23:59\'a kadar KYK Burs Başvurusu sitesinden taahütlerinizi vermeniz gerekmektedir.<br />\r\n<br />\r\nDers kaydı yaptıysanız e-devlet üzerinden öğrenci belgesi alarak durumunuzu kontrol edebilirsiniz.'),
(9, 'sdf', ' sdfsdfsd fsd f'),
(8, 'Ders kayıtları için son tarihler', 'Sevgili Öğrenciler,<br />\r\n<br />\r\n<br />\r\n2017-2018 Eğitim-Öğretim yılı Bahar yarıyılı ders kayıt ve kayıt yenileme tarihleri aşağıda belirtilmiştir. Öğrencilerin ders kayıtları ile ilgili sorun yaşamamaları için ders kayıtlarını belirtilen tarih aralığında yapmaları gerekmektedir.<br />\r\n<br />\r\n<br />\r\nDers Kayıt Başlangıç Zamanı    : 04.12.2017 Saat 00:00<br />\r\n<br />\r\n Ders Kayıt Bitiş Zamanı            : 05.01.2018 Saat 23:45<br />\r\n<br />\r\n Kayıt Yenileme Tarihleri           : 15.01.2018 - 26.01.2018<br />\r\n<br />\r\n<br />\r\nKayıt Yenileme Tarihleri, katkı payı, öğrenim ücreti veya materyal ücret ödemesi bulunan öğrencilerin ödemelerini yapmaları gerektiği tarih aralığıdır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kimlikler`
--

DROP TABLE IF EXISTS `kimlikler`;
CREATE TABLE IF NOT EXISTS `kimlikler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(25) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(25) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tc` bigint NOT NULL,
  `dogum_tarihi` date DEFAULT NULL,
  `cinsiyet` varchar(5) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `dogum_yeri` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `medeni_hal` varchar(5) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kimlikler`
--

INSERT INTO `kimlikler` (`id`, `ad`, `soyad`, `tc`, `dogum_tarihi`, `cinsiyet`, `dogum_yeri`, `medeni_hal`) VALUES
(1, 'muhammed', 'emen', 36531263648, '1995-08-25', 'erkek', 'batman', 'bekar'),
(2, 'ece', 'sevim', 45561582215, '1997-05-15', 'kadın', 'mersin', 'bekar'),
(12, 'yaren', 'yüce', 56495454949, '1996-04-05', 'kadın', 'mersin', 'bekar'),
(20, 'qqqqq', 'qqqqqq', 23432142332, '1999-11-11', 'kadın', 'qqqqqqq', 'bekar'),
(17, 'serhat', 'güneş', 48465416616, '1998-01-08', 'erkek', 'batman', 'bekar'),
(16, 'elif', 'sevgi', 61651651651, '1995-05-18', 'kadın', 'bursa', 'evli');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

DROP TABLE IF EXISTS `ogrenciler`;
CREATE TABLE IF NOT EXISTS `ogrenciler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ogrencino` int NOT NULL,
  `sinif` int NOT NULL,
  `ayrilma_tarihi` date DEFAULT NULL,
  `bolum_id` int DEFAULT NULL,
  `kimlik_id` int DEFAULT NULL,
  `adres_id` int DEFAULT NULL,
  `ogrencisifre` varchar(27) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`id`, `ogrencino`, `sinif`, `ayrilma_tarihi`, `bolum_id`, `kimlik_id`, `adres_id`, `ogrencisifre`) VALUES
(1, 1035288, 1, NULL, 27, 1, 6, '123456'),
(2, 1035266, 2, NULL, 26, 2, 10, '123123'),
(6, 1035262, 1, NULL, 27, 16, 7, '123456'),
(4, 1035212, 2, NULL, 27, 17, 8, '123456'),
(5, 1035252, 1, NULL, 27, 16, 9, '123456'),
(8, 1035231, 1, NULL, 34, 20, 13, '999999');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci_ders`
--

DROP TABLE IF EXISTS `ogrenci_ders`;
CREATE TABLE IF NOT EXISTS `ogrenci_ders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ogrenci_id` int NOT NULL,
  `ders_id` int NOT NULL,
  `yariyil` varchar(5) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `vize` int DEFAULT NULL,
  `final` int DEFAULT NULL,
  `not_ortalama` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogrenci_ders`
--

INSERT INTO `ogrenci_ders` (`id`, `ogrenci_id`, `ders_id`, `yariyil`, `vize`, `final`, `not_ortalama`) VALUES
(3, 1, 1, '1', 5, 80, 50),
(4, 1, 2, '1', 80, 40, 56),
(5, 1, 3, '1', 50, 70, 31),
(13, 4, 2, '2', 30, 40, 36),
(14, 4, 3, '2', 50, 55, 53),
(15, 4, 6, '2', 65, 50, 56),
(16, 2, 4, '2', 75, 80, 78),
(17, 2, 5, '2', 65, 60, 62),
(18, 2, 2, '2', 80, 60, 68);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretmenler`
--

DROP TABLE IF EXISTS `ogretmenler`;
CREATE TABLE IF NOT EXISTS `ogretmenler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(27) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `soyad` varchar(27) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `ogretmenno` int NOT NULL,
  `ogretmensifre` varchar(27) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `bolum_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ogretmenler`
--

INSERT INTO `ogretmenler` (`id`, `ad`, `soyad`, `ogretmenno`, `ogretmensifre`, `bolum_id`) VALUES
(1, 'Ahmet', 'Yıldırım', 1035222, 'admin', 27),
(2, 'Zeynep', 'Onur', 1035241, '123456', 26);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
