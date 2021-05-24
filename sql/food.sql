-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 24, 2021 alle 22:50
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `ID` int(11) NOT NULL,
  `ID_Cibo` int(11) NOT NULL,
  `ID_Utente` int(11) NOT NULL DEFAULT 0,
  `Prezzo_Cibo` float NOT NULL DEFAULT 0,
  `Nome_Cibo` varchar(255) NOT NULL DEFAULT '0',
  `Img_Cibo` varchar(255) NOT NULL DEFAULT '0',
  `Quantita` int(11) DEFAULT NULL,
  `Tot` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`ID`, `ID_Cibo`, `ID_Utente`, `Prezzo_Cibo`, `Nome_Cibo`, `Img_Cibo`, `Quantita`, `Tot`) VALUES
(187, 2, 58, 5, 'Pizza', 'img/margherita.jpg', 1, 5),
(189, 12, 58, 10, 'Nigiri', 'img/nigiri.jpg', 1, 10),
(191, 3, 58, 2, 'Arancini', 'img/Arancini.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `checkout`
--

CREATE TABLE `checkout` (
  `ID` int(11) NOT NULL,
  `ID_Utente` int(11) DEFAULT NULL,
  `ID_Cibo` int(11) DEFAULT NULL,
  `Content` varchar(50) DEFAULT NULL,
  `Colonna 5` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `immagini`
--

CREATE TABLE `immagini` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `immagini`
--

INSERT INTO `immagini` (`ID`, `Nome`, `Img`) VALUES
(1, 'KFC', 'img/Kfc.png'),
(2, 'MC', 'img/Mc.png'),
(3, 'STARBUCKS', 'img/Starbucks.png'),
(4, 'CHIPOTLE', 'img/Chipotle.png'),
(5, 'BURGER KING', 'img/BK.png'),
(6, 'PIZZA HUT', 'img/Hut.png'),
(7, 'Carne', 'img/img1.jpg'),
(8, 'Pizza', 'img/Pizza.jpg'),
(9, 'Sushi', 'img/Sushi.jpg'),
(10, 'Hamburger', 'img/Hamburger.jpg'),
(11, 'Tacos', 'img/Tacos.jpg'),
(12, 'Lasagna', 'img/Lasagna.jpg'),
(13, 'Insalata', 'img/Insalata.jpg'),
(14, 'Gyoza', 'img/Gyoza.jpg'),
(15, 'Box', 'img/Friends.jpg'),
(16, 'Header', 'img/Delivery.jpg'),
(17, 'Footer', 'img/Footer.jpg'),
(18, 'Cart_Header', 'img/cart_header.jpg'),
(19, 'Delete', 'img/delete.png'),
(20, 'checkout', 'img/checkout_header.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `menu`
--

CREATE TABLE `menu` (
  `ID_Cibo` int(11) NOT NULL,
  `Tipo` varchar(255) DEFAULT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Descrizione` varchar(255) DEFAULT NULL,
  `Costo` float DEFAULT NULL,
  `Img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `menu`
--

INSERT INTO `menu` (`ID_Cibo`, `Tipo`, `Nome`, `Descrizione`, `Costo`, `Img`) VALUES
(1, 'Italiano', 'Carbonara', 'Ricetta Romana', 8, 'img/carbonara.jpg'),
(2, 'Italiano', 'Pizza', 'Ricetta Napoletana', 5, 'img/margherita.jpg'),
(3, 'Italiano', 'Arancini', 'Ricetta Siciliana', 2, 'img/Arancini.jpg'),
(4, 'Italiano', 'Risotto allo zafferano', 'Ricetta Milanese', 5, 'img/risotto.jpg'),
(5, 'Messicano', 'Tacos', 'Ricetta messicana', 4, 'img/tacos2.jpg'),
(6, 'Messicano', 'Chilaquiles', 'Ricetta messicana', 4, 'img/chilaquiles.jpg'),
(7, 'Messicano', 'Tortillas', 'Ricetta messicana', 3, 'img/tortillas.jpg'),
(8, 'Messicano', 'Tamales', 'Ricetta messicana', 5, 'img/tamales.jpg'),
(9, 'Giapponese', 'Ramen', 'Ricetta Giapponese', 6, 'img/ramen.jpg'),
(10, 'Giappoense', 'Onigiri', 'Ricetta Giapponese', 3, 'img/onigiri.jpg'),
(11, 'Giapponese', 'Sashimi', 'Ricetta Giappoense', 15, 'img/sashimi.jpg'),
(12, 'Giappoense', 'Nigiri', 'Ricetta Giappoense', 10, 'img/nigiri.jpg'),
(13, 'Cinese', 'Gyoza', 'Ricetta Cinese', 6, 'img/gyoza2.jpg'),
(14, 'Cinese', 'Involtini Primavera', 'Ricetta Cinese', 3, 'img/involtini_primavera.jpg'),
(15, 'Cinese', 'Spaghetti Di Riso', 'Ricetta Cinese', 5, 'img/spaghetti_riso.jpg'),
(16, 'Cinese', 'Pollo alle mandorle', 'Ricetta Cinese', 7, 'img/pollo_mandorle.jpg'),
(17, 'Tedesco', 'Sauerbraten', 'Ricetta Tedesca', 12, 'img/Sauerbraten.jpg'),
(18, 'Tedesco', 'Brezel', 'Ricetta Tedesca', 1, 'img/brezel.jpg'),
(19, 'Americano', 'Lobster Roll', 'Ricetta Americana', 20, 'img/lobster.jpg'),
(20, 'Americano', 'Hamburger', 'Ricetta Americana', 7, 'img/hamburger2.jpg'),
(21, 'Americano', 'Lime Pie', 'Ricetta Americana', 4, 'img/lime_pie.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `ID` int(11) NOT NULL,
  `Username` varchar(16) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Cognome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`ID`, `Username`, `Password`, `Email`, `Nome`, `Cognome`) VALUES
(54, 'kamill', '0fe4f43e1dd173abc07ce508a74800e2', 'Camiololuxa991@gmail.com', 'Luca', 'Camiolo'),
(58, 'Xion', 'ade71f706fc7f0e412151b536a4d39d0', 'andrea@gmail.com', 'Andrea', 'Alessandri');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Cibo` (`ID_Cibo`),
  ADD KEY `ID_Utente` (`ID_Utente`);

--
-- Indici per le tabelle `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Utente` (`ID_Utente`),
  ADD KEY `N_Ordine` (`ID_Cibo`) USING BTREE;

--
-- Indici per le tabelle `immagini`
--
ALTER TABLE `immagini`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indici per le tabelle `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID_Cibo`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT per la tabella `checkout`
--
ALTER TABLE `checkout`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `immagini`
--
ALTER TABLE `immagini`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT per la tabella `menu`
--
ALTER TABLE `menu`
  MODIFY `ID_Cibo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `carrello`
--
ALTER TABLE `carrello`
  ADD CONSTRAINT `ciboo` FOREIGN KEY (`ID_Cibo`) REFERENCES `menu` (`ID_Cibo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utentee` FOREIGN KEY (`ID_Utente`) REFERENCES `utente` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `Users` FOREIGN KEY (`ID_Utente`) REFERENCES `utente` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
