-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 12 Μάη 2026 στις 10:32:34
-- Έκδοση διακομιστή: 10.4.32-MariaDB
-- Έκδοση PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `ergasia_db`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `weapons`
--

CREATE TABLE `weapons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `stock` int(11) DEFAULT 0,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `weapons`
--

INSERT INTO `weapons` (`id`, `name`, `category`, `stock`, `description`) VALUES
(1, 'Famas', 'Assault Rifle', 10, 'Γαλλικό bullpup αυτόματο τυφέκιο με εξαιρετικά υψηλό ρυθμό βολής.'),
(2, 'MP5k', 'SMG', 110, 'Συμπαγές υποπολυβόλο, ιδανικό για μάχες σε περιορισμένους χώρους.'),
(3, 'M24', 'Sniper Rifle', 500010, 'Στρατιωτικό τυφέκιο ελεύθερου σκοπευτή, γνωστό για την ακρίβεια και την εμβέλειά του.'),
(4, 'AKM', 'Assault Rifle', 10, 'Η εκσυγχρονισμένη έκδοση του AK-47, χρησιμοποιεί σφαίρες 7.62mm με μεγάλη ισχύ.'),
(5, 'Kar98k', 'Sniper Rifle', 10, 'Κλασικό γερμανικό επαναληπτικό τυφέκιο του Β Παγκοσμίου Πολέμου με μεγάλη ιστορία.'),
(6, 'SCAR-L', 'Assault Rifle', 10, 'Σύγχρονο τυφέκιο εφόδου, πολύ σταθερό και αξιόπιστο σε μέσες αποστάσεις.');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `weapons`
--
ALTER TABLE `weapons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
