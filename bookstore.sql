-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 07:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author`, `discription`, `price`, `quantity`, `image`) VALUES
(20, 'The Powr Your Subconcious Mind', 'Joseph morphy', 'This remarkable book by Dr. Joseph Murphy, one of the pioneering voices of affirmative thinking, will unlock for you the truly staggering powers of your subconscious mind. Combining time-honored spiritual wisdom with cutting edge scientific research, Dr. Murphy explains how the subconscious mind influences every single thing that you do and how, by understanding it and learning to control its incredible force, you can improve the quality of your daily life.Everything, from the promotion that you wanted and the raise you think you deserve, to overcoming phobias and bad habits and strengthening interpersonal relationships, the Power of Your Subconscious Mind will open a world of happiness, success, prosperity and peace for you. It will change your life and your world by changing your beliefs.\r\n', 105, 5, 'book1.jpg'),
(21, 'Be Your Own Sunshine', 'James Allen', 'Be your own sunshine is a collection of four works by James Allen that sum up the Hows, Whys and Whats of Taming the mind and its infinite energies, of channelizing the power of positive thinking, and striking a balance between the inner world of our thoughts as against the outer world of action. As a man Thinketh maps out the way in which our thoughts can affect our physical, mental, emotional and social health. It also discusses ways in which we can use our visions and ideas to lead us to peace of mind. From passion to peace is a step by step discussion on conquering the factors within us that hinder us from achieving success. Man: king of mind, body and circumstance aims at freeing us from the slavery of our negative and binding thoughts, enabling us to conquer our inhibitions and set our spirit free. Foundation stones to happiness and success help us lay the foundation for a stronger self, with the right balance of thoughts, speech and its implementation in action.', 83, 10, 'book3.jpg'),
(22, 'Think And Grow Rich ', 'Napoleon Hill', 'Since its publication in 1937, Napoleon Hill’s seminal Think and Grow Rich has inspired generations of readers to develop their skills and become masters at anything to do. Inspired by Andrew Carnegie himself, Hill’s easy-to-follow guidebook to success is based on thirteen simple ‘steps’: 1. Desire 2. Faith 3. Autosuggestion 4. Specialized Knowledge 5. Imagination 6. Organized Planning 7. Decision 8. Persistence 9. Power of the Master Mind 10. The Mystery of Sex Transmutation 11. The Subconscious Mind 12. The Brain 13. The Sixth Sense Through a mixture of sound advice, income management methods, and personal anecdotes, Hill delivers the ultimate motivational message in Think and Grow Rich—and probably the only one you’ll ever need. Discover for yourself what makes this guidebook to better living one of the bestselling books of all time!', 134, 5, 'book2.jpg'),
(23, 'The Power of A Positive Attitude: Your Road To Success', 'Roger Fritz', 'Have you ever wondered how your attitude can influence your Success and failure? Have you ever considered the power of saying ‘I Can’, ‘I must’, ‘I will’? “I am not saying a positive attitude can make you successful. I am saying a positive attitude will make you successful.” – Norman Vincent Peale from helping you interpret and understand the true nature of your current attitude to building up self-confidence, which is a must for an affirmative attitude, this book details the dos and don’ts in dealing with your boss, provides handy tips for overcoming negative attitude, managing stress, and coping with burnout, and expounds on how converting negative thinking to positive action can bring about a change in life. Packed with powerful information, The power of a positive attitude will help you uncover your hidden abilities and achieve success.', 99, 5, 'book4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `books_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `quantity`, `books_id`) VALUES
(18, 1, 21),
(19, 1, 21),
(20, 1, 21),
(21, 1, 22),
(22, 1, 22),
(23, 1, 21),
(24, 1, 22),
(25, 1, 23);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`) VALUES
(1, 'muhammed', 'P', 'naseefp.hin@gmail.com', 'option1', '1234'),
(3, 'muhammed', 'P', 'naseefp.hin@gmail.com', '1132', 'option1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_id` (`books_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`books_id`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
