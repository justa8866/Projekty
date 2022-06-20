-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Cze 2022, 12:35
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `nazwisko` varchar(255) NOT NULL,
  `nazwa_firmy` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `kraj` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `miasto` varchar(255) NOT NULL,
  `kod_pocztowy` varchar(255) NOT NULL,
  `numer_telefonu` varchar(255) NOT NULL,
  `komentarz` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `login`
--

INSERT INTO `login` (`id`, `imie`, `nazwisko`, `nazwa_firmy`, `email`, `haslo`, `kraj`, `adres`, `miasto`, `kod_pocztowy`, `numer_telefonu`, `komentarz`) VALUES
(1, 'Justyna', 'Duranowska', 'test', 'justyna.duranowska@gmail.com', '7960edb9cf906814fbc0ff034041456b', 'Polska', 'Podmostowa 12', 'Szczecin', '10-123', '512345678', 'komentarz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `produkt_id` bigint(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `opis` text NOT NULL,
  `cena` decimal(10,0) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `obrazek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`produkt_id`, `nazwa`, `opis`, `cena`, `ilosc`, `obrazek`) VALUES
(1, 'Bluzka w paski', 'Bluzka w biało brązowe paski', '45', 56, 'images/xproduct_1.jpg.pagespeed.ic.tgrFuheWuu.jpg'),
(2, 'Bluzka z kwiatkami', 'Bluzka z kwiatkami', '80', 60, 'images/xproduct_2.jpg.pagespeed.ic.CVMRiUQqJi.jpg'),
(3, 'Bluzka', 'Bluzka z kolorowym niebieskim haftem.  ', '65', 70, 'images/xproduct_3.jpg.pagespeed.ic.zSyiUjoO_2.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiadomosci`
--

CREATE TABLE `wiadomosci` (
  `idwiadomosci` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wiadomosc` text NOT NULL,
  `temat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wiadomosci`
--

INSERT INTO `wiadomosci` (`idwiadomosci`, `name`, `email`, `wiadomosc`, `temat`) VALUES
(1, 'Justyna', 'justa@gmail.com ', 'oki test ', ''),
(2, 'Tom', 'tom@gmail.com', 'test ', ''),
(3, 'Justyna', 'justa8866@gmail.com', 'test', 'spodnie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id_zamowienia` int(11) NOT NULL,
  `produkty` varchar(255) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `data_zamowienia` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id_zamowienia`, `produkty`, `id_klienta`, `data_zamowienia`) VALUES
(1, '[1,2]', 1, '2022-06-15 22:33:34'),
(2, '[1,2]', 1, '2022-06-15 22:51:18'),
(14, '[1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,2]', 1, '2022-06-15 23:08:57'),
(15, '[1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,2]', 1, '2022-06-15 23:09:47'),
(16, '[1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,2]', 1, '2022-06-15 23:10:37'),
(17, '[1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,2]', 1, '2022-06-15 23:10:49'),
(18, '[1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,2]', 1, '2022-06-15 23:10:51'),
(19, '[2,2]', 1, '2022-06-15 23:11:41'),
(20, '[2,2]', 1, '2022-06-15 23:12:16'),
(21, '[2,2]', 1, '2022-06-15 23:12:20'),
(22, '[2,2]', 1, '2022-06-15 23:12:24'),
(23, '[2,2]', 1, '2022-06-15 23:12:47'),
(24, '[2,2]', 1, '2022-06-15 23:12:54'),
(25, '[2,2]', 1, '2022-06-15 23:12:57'),
(26, '[2,2,2,2,3,3,1,1,2,3]', 1, '2022-06-18 12:10:27'),
(27, '[2,2,2,2,3,3,1,1,2,3]', 1, '2022-06-18 12:10:33'),
(28, '[2,2,2,2,3,3,1,1,2,3,1]', 1, '2022-06-18 12:14:55'),
(29, '[1,1]', 1, '2022-06-18 12:16:42'),
(30, '[1,1]', 1, '2022-06-18 12:19:32'),
(31, '[1,1]', 1, '2022-06-18 12:28:21'),
(32, '[1,1]', 1, '2022-06-18 12:29:36'),
(33, '[1,1]', 1, '2022-06-18 12:29:58'),
(34, '[1,1]', 1, '2022-06-18 12:30:22'),
(35, '[1,1]', 1, '2022-06-18 12:30:24'),
(36, '[1,1,2]', 1, '2022-06-18 12:30:39'),
(37, '[1,1,2]', 1, '2022-06-18 12:30:54'),
(38, '[1,1,2]', 1, '2022-06-18 12:31:31'),
(39, '[1,1,2]', 1, '2022-06-18 12:32:49'),
(40, '[1,2]', 1, '2022-06-18 12:33:18');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`produkt_id`);

--
-- Indeksy dla tabeli `wiadomosci`
--
ALTER TABLE `wiadomosci`
  ADD PRIMARY KEY (`idwiadomosci`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id_zamowienia`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `produkt_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `wiadomosci`
--
ALTER TABLE `wiadomosci`
  MODIFY `idwiadomosci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id_zamowienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
