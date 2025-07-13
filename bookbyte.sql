-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2025 at 01:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookbyte`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `publisher` varchar(250) DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `cover_page_path` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `price`, `quantity`, `description`, `category_id`, `publisher`, `publication_date`, `cover_page_path`, `created_at`) VALUES
(1, 'The Devil\'s Man', 'Karen Dodd', '499.00', 6, 'A gripping crime thriller featuring Moretti Stone investigating dark secrets in a small Italian town.', 2, 'Karen Dodd Publications', '2021-05-15', 'f3.jpg', '2025-04-26 08:46:44'),
(2, 'Caged Butterfly', 'Lakayla Allen', '399.00', 6, 'A beautiful story of freedom and transformation as a butterfly fights to escape captivity.', 2, 'Lakayla Allen Press', '2020-11-20', 'f2.jpg', '2025-04-26 08:46:44'),
(3, 'The Psychic Academy', 'R. K. Goff', '599.00', 6, 'A thrilling adventure into a hidden world where psychic talents are real and the stakes are deadly.', 2, 'Goff Publishing', '2022-03-10', 'f1.jpg', '2025-04-26 08:46:44'),
(4, 'Never Give Up', 'E.Z. Jones', '299.00', 6, 'An inspiring book that encourages persistence and determination in the face of challenges.', 1, 'Motivational Press', '2022-05-10', 'nf1.jpg', '2025-04-26 10:02:36'),
(5, 'The Story of Money', 'Sean Cover', '499.00', 6, 'A journey through the history of money from ancient barter systems to modern-day Bitcoin.', 1, 'Finance World Publications', '2021-08-15', 'nf2.jpg', '2025-04-26 10:02:36'),
(6, 'Lev Av Talentene Dine', 'Sonia Loinsworth', '399.00', 6, 'A guide for artists and creative entrepreneurs on how to live off their talents.', 1, 'Sono', '2020-11-20', 'nf3.jpg', '2025-04-26 10:02:36'),
(7, 'One Piece', 'Eiichiro Oda', '499.00', 6, 'An epic adventure of Monkey D. Luffy and his quest to become the Pirate King.', 6, 'Shueisha', '1997-07-22', '', '2025-04-26 10:17:05'),
(8, 'Naruto', 'Masashi Kishimoto', '450.00', 6, 'The journey of Naruto Uzumaki, a young ninja striving to become the strongest.', 6, 'Shueisha', '1999-09-21', '', '2025-04-26 10:17:05'),
(9, 'Attack on Titan', 'Hajime Isayama', '480.00', 6, 'Humanity fights for survival against giant humanoid creatures known as Titans.', 6, 'Kodansha', '2009-09-09', '', '2025-04-26 10:17:05'),
(10, 'Batman: The Killing Joke', 'Alan Moore', '350.00', 6, 'A dark exploration of the Joker\'s origin and his confrontation with Batman.', 6, 'DC Comics', '1988-03-29', '', '2025-04-26 10:17:05'),
(11, 'Spider-Man: Blue', 'Jeph Loeb', '320.00', 6, 'Peter Parker reminisces about his early days and his love for Gwen Stacy.', 6, 'Marvel Comics', '2002-07-10', '', '2025-04-26 10:17:05'),
(12, 'Watchmen', 'Alan Moore', '400.00', 6, 'A complex, multi-layered mystery adventure set in an alternate history.', 6, 'DC Comics', '1986-09-01', '', '2025-04-26 10:17:05'),
(13, 'Charlotte\'s Web', 'E.B. White', '280.00', 6, 'A touching story of friendship between a pig named Wilbur and a spider named Charlotte.', 6, 'Harper & Brothers', '1952-10-15', '', '2025-04-26 10:17:05'),
(14, 'The Da Vinci Code', 'Dan Brown', '399.00', 6, 'A symbologist uncovers a religious mystery protected by a secret society.', 6, 'Doubleday', '2003-03-18', '', '2025-04-26 10:17:05'),
(15, 'Sapiens: A Brief History of Humankind', 'Yuval Noah Harari', '450.00', 6, 'An exploration of human history from the Stone Age to the modern era.', 6, 'Harvill Secker', '2011-06-04', '', '2025-04-26 10:17:05'),
(16, 'Dinner Time University', 'Rick Kettner', '399.00', 6, 'How to raise kids that thrive in unpredictable times.', 3, 'Self Published', '2021-06-15', 'c1.jpg', '2025-04-26 10:23:54'),
(17, 'Nursery School', 'Various Authors', '350.00', 6, 'A colorful guide to nursery education and activities for young kids aged 3 to 5.', 3, 'KidsWorld Publishers', '2022-02-10', 'c2.jpg', '2025-04-26 10:23:54'),
(18, 'Back to School', 'Emily Carter', '299.00', 6, 'An illustrated children\'s book about returning to school with fun and excitement.', 3, 'BrightStar Books', '2022-08-01', 'c3.jpg', '2025-04-26 10:23:54'),
(19, 'One Piece', 'Eiichiro Oda', '499.00', 6, 'A legendary pirate adventure following Monkey D. Luffy and his quest to find the One Piece.', 4, 'Shueisha', '1997-07-22', '', '2025-04-26 10:27:57'),
(20, 'Naruto', 'Masashi Kishimoto', '450.00', 6, 'The journey of Naruto Uzumaki, a young ninja who seeks recognition and dreams of becoming Hokage.', 4, 'Shueisha', '1999-09-21', '', '2025-04-26 10:27:57'),
(21, 'Attack on Titan', 'Hajime Isayama', '480.00', 6, 'A gripping story where humanity fights for survival against giant humanoid Titans.', 4, 'Kodansha', '2009-09-09', '', '2025-04-26 10:27:57'),
(22, 'Comic Heroes', 'Various Authors', '320.00', 6, 'A collection of the most iconic comic heroes.', 5, 'Marvel', '2024-01-01', 'co1.jpg', '2025-04-26 10:33:01'),
(23, 'Cartoon Comics', 'John Doe', '380.00', 3, 'A series of fun and engaging cartoon comics for all ages.', 5, 'DC Comics', '2024-02-15', 'co3.jpg', '2025-04-26 10:33:01'),
(24, 'Awesome Comics', 'Jane Smith', '350.00', 6, 'Awesome and thrilling comics filled with action and adventure.', 5, 'Image Comics', '2024-03-10', 'co6.jpg', '2025-04-26 10:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_name`, `book_id`) VALUES
(5, 'jay', 7),
(6, 'jay', 7),
(7, 'jay', 9);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(6, 'Best-Seller'),
(3, 'Children'),
(5, 'Comics'),
(2, 'Fiction'),
(4, 'Manga'),
(1, 'Non-Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_status` enum('pending','delivered','cancelled') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_name`, `total_price`, `order_status`, `created_at`) VALUES
(15, 'jay', '1140.00', 'pending', '2025-04-26 07:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_at_purchase` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `book_id`, `quantity`, `price_at_purchase`) VALUES
(12, 15, 23, 3, '380.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_status` enum('pending','completed','failed') NOT NULL,
  `payment_method` enum('credit/debit card','upi','cod') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `transaction_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `order_id`, `user_name`, `amount`, `payment_status`, `payment_method`, `created_at`, `transaction_id`) VALUES
(4, 15, 'jay', '1140.00', 'completed', 'cod', '2025-04-26 10:42:36', 'TXN_680cb89c5844d');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(255) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `address` text DEFAULT NULL,
  `role` enum('customer','admin') NOT NULL DEFAULT 'customer',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `full_name`, `email`, `password`, `phone_number`, `address`, `role`, `created_at`) VALUES
('admin', 'Admin', 'admin@gmail.com', 'admin@123', '9999999999', 'kscxowinckncw', 'admin', '2025-04-26 08:29:52'),
('jay', 'jaylodhia', 'jay@gmail.com', 'abc123', '12345', 'wkefnoeinf', 'customer', '2025-04-25 09:40:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
