-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Oca 2022, 08:45:58
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `phphardwareshop`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `tabbleId` int(11) NOT NULL,
  `Name` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `MainCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`tabbleId`, `Name`, `MainCategoryId`) VALUES
(1, 'PC-Hardware', 0),
(2, 'Graphic Card', 1),
(3, 'Processors', 1),
(4, 'Ana Kartlar', 1),
(5, 'Power Supplies', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `Description` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Img` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`Id`, `Name`, `Price`, `CategoryId`, `Description`, `Img`) VALUES
(1, 'Geforce GTX 1050 TI', 1500, 2, 'For game', 'Nvidia-Geforce-GTX-1050TI.jpg'),
(2, 'AMD Ryzen 5 3600', 4000, 3, 'For Game', 'amd-ryzen-5-3600-alti-cekirdek-3-60-ghz-x.jpg'),
(3, 'AMD Ryzen 5 5600g', 3500, 3, 'For Game', 'amd-ryzen-5-5600g-alti-cekirdek-3-90-ghz-x.jpg'),
(4, 'AMD Ryzen 5 5600X', 3000, 3, 'For Game', 'AMDRyzen5-5600X.jpg'),
(5, 'AMD Ryzen 9 5900X', 4000, 3, 'For Game', 'amd-ryzen-9-5900x-on-iki-cekirdek-3-70-ghz-x.jpg'),
(6, 'Intel I3 10100F', 2000, 3, 'For a work', 'Intel-i3-10100F.jpg'),
(7, 'Intel i5 10400F', 2300, 3, 'For Work', 'intel-i5-10400f-alti-cekirdek-2-90-ghz-x.jpg'),
(8, 'Intel Caleron G530', 2000, 3, 'Çift çekirdek işlemci', 'Intel_Caleron_G530.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `tableID` int(11) NOT NULL,
  `Role` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`tableID`, `Role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `tableID` int(11) NOT NULL,
  `Email` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Password` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `RoleId` int(1) NOT NULL,
  `Name` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Surname` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `Address` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`tableID`, `Email`, `Password`, `RoleId`, `Name`, `Surname`, `Address`) VALUES
(1, 'deneme1@hotmail.com', '123', 2, 'Mustafa Kemal ', 'Demir', 'ankara'),
(2, 'mkd@gmail.com', '123', 1, 'mk', 'd', 'ankara');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`tabbleId`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`tableID`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`tableID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `tabbleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `tableID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `tableID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
