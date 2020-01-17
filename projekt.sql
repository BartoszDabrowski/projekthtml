-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Sty 2020, 11:56
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `nazwa`, `cena`) VALUES
(1, 'wiadreko', 10),
(2, 'wiatrak', 20),
(3, 'szpadel', 30),
(4, 'dywan', 40),
(5, 'lodówka', 50),
(6, 'meblościanka', 60),
(7, 'telewizor', 70),
(8, 'o??wek', 80),
(9, 'krzes?o', 90);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(10) NOT NULL,
  `login` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`) VALUES
(1, 'aaaaaaa', '$argon2id$v=19$m=1024,t=2,p=2$NzFkNnRIZ1Rab0FZNnhVWA$vx3S9lMVNKJHAFPYUIDQmj5TSbWs9/e903sS0OJXVKY', 'jfgkd@gmail.com'),
(2, 'bbbbbbbbb', '$argon2id$v=19$m=1024,t=2,p=2$OXZ6SWovSmdMd2tDZFIxUw$mXimNC6BCOtpBziYA36rGzUjAmVbMCz5NcpjMKH1uXw', 'test@test.pl'),
(3, 'cccccccc', '$argon2id$v=19$m=1024,t=2,p=2$aXptamlFa3lDWThzL21sYw$VzIislR7Lyqj7/6ojdpBi/ZmcLAa72abB+5XUDR/xKY', 'abcd@gmail.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(10) NOT NULL,
  `kupiec` varchar(255) NOT NULL,
  `przedmiot_id` int(10) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id`, `kupiec`, `przedmiot_id`, `ilosc`) VALUES
(1, 'aaaaaaa', 4, 2),
(2, 'aaaaaaa', 3, 2),
(3, 'bbbbbbbbb', 1, 3),
(4, 'aaaaaaa', 3, 1),
(5, 'aaaaaaa', 2, 1),
(6, 'aaaaaaa', 1, 1),
(7, 'aaaaaaa', 5, 1),
(8, 'aaaaaaa', 3, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
