-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Mar 2021, 21:33
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bankapk`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `Name` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Surname` text COLLATE utf8mb4_polish_ci NOT NULL,
  `PESEL` varchar(11) COLLATE utf8mb4_polish_ci NOT NULL,
  `account_number` varchar(26) COLLATE utf8mb4_polish_ci NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `clients`
--

INSERT INTO `clients` (`id`, `Name`, `Surname`, `PESEL`, `account_number`, `balance`) VALUES
(1, 'Paweł', 'Kozioł', '74041825506', '72243000071787503131917837', 209),
(2, 'Tadeusz', 'Norek', '90021795454', '98124033638184680404217324', 495),
(3, 'Karol', 'Krawczyk', '76042531644', '13873200003706852240542819', 350),
(4, 'Patryk', 'Pietrek', '89456123456', '11105016161491582021031933', 150),
(5, 'Janek', 'Nowakowski', '85641284561', '74249016164410232021032219', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tranhistory`
--

CREATE TABLE `tranhistory` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recipient_id` int(11) DEFAULT NULL COMMENT 'jeśli jest to przelew to w tym polu informacja o tym do kogo trafił',
  `TType` varchar(1) COLLATE utf8mb4_polish_ci NOT NULL COMMENT 'typ transakcji\r\nd-doładowanie\r\nw-wypłata\r\np-przelew',
  `Date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'data transakcji',
  `Amount` double NOT NULL COMMENT 'kwota transakcji',
  `Balance_user` double NOT NULL COMMENT 'Saldo po transakcji',
  `Balance_recipient` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `tranhistory`
--

INSERT INTO `tranhistory` (`id`, `user_id`, `recipient_id`, `TType`, `Date`, `Amount`, `Balance_user`, `Balance_recipient`) VALUES
(2, 1, NULL, 'D', '2021-03-16 15:08:36', 160, 160, NULL),
(3, 3, NULL, 'D', '2021-03-16 15:09:49', 40, 400, NULL),
(4, 1, NULL, 'W', '2021-03-17 11:38:14', 100.5, 59.5, NULL),
(5, 1, NULL, 'W', '2021-03-17 11:43:54', 5.5, 54, NULL),
(6, 1, NULL, 'D', '2021-03-17 11:52:04', 150, 204, NULL),
(7, 1, 2, 'P', '2021-03-17 11:58:36', 150, 54, 330),
(8, 2, 3, 'P', '2021-03-17 12:08:28', 100, 230, 500),
(9, 3, 2, 'P', '2021-03-17 12:36:13', 200, 300, 430),
(10, 2, NULL, 'D', '2021-03-19 10:26:49', 20, 450, NULL),
(11, 4, NULL, 'D', '2021-03-19 10:27:28', 250, 250, NULL),
(12, 4, NULL, 'W', '2021-03-19 10:27:46', 50, 200, NULL),
(13, 1, NULL, 'D', '2021-03-22 18:35:14', 250, 304, NULL),
(14, 2, 1, 'P', '2021-03-22 19:10:00', 50, 400, 354),
(15, 1, 2, 'P', '2021-03-22 19:10:57', 50, 254, 450),
(16, 4, 3, 'P', '2021-03-22 19:15:08', 50, 150, 350),
(17, 1, NULL, 'D', '2021-03-22 19:22:37', 50, 304, NULL),
(18, 1, NULL, 'W', '2021-03-22 19:22:46', 50, 254, NULL),
(19, 1, 2, 'P', '2021-03-22 19:23:07', 45, 209, 495);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_number` (`account_number`);

--
-- Indeksy dla tabeli `tranhistory`
--
ALTER TABLE `tranhistory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `tranhistory`
--
ALTER TABLE `tranhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
