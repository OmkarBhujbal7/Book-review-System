-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2025 at 08:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`category_id`, `category_name`, `category_status`) VALUES
(2, 'biographical', 1),
(3, 'historical', 1),
(4, 'adventure', 1),
(5, 'fictional', 1),
(6, 'autobiography', 1),
(10, 'Fantasy ', 1),
(11, 'Mythology ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_category` int(11) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `book_rating` varchar(10) NOT NULL,
  `book_review` text NOT NULL,
  `book_logo` varchar(255) NOT NULL,
  `book_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`book_id`, `book_title`, `book_category`, `book_author`, `book_rating`, `book_review`, `book_logo`, `book_status`) VALUES
(17, 'Harry Potter and the Order of the Phoenix', 4, 'J.B.Rowling', '8.2/10', 'Harry Potter is about to start his fifth year at Hogwarts School of Witchcraft and Wizardry. Unlike most schoolboys, Harry never enjoys his summer holidays, but this summer is even worse than usual. The Dursleys, of course, are making his life a misery, but even his best friends, Ron and Hermione, seem to be neglecting him...\r\n\r\nHarry has had enough. He is beginning to think he must do something, anything, to change his situation, when the summer holidays come to an end in a very dramatic fashion. What Harry is about to discover in his new year at Hogwarts will turn his world upside down…   \r\n\r\n \r\n\r\nMy Thoughts\r\n.\r\nPlot.\r\nHarry Potter and the Order of the Phoenix is the chunkiest book in the series. There is a lot going on in this particular book. Despite its size, I still found it easy and entertaining to read as a teenager. However, if I’m honest, I don’t think I fully appreciated the political elements of the storyline until my re-read.\r\n....\r\n\r\nIn previous books, we have had tasters of the more intricate and sinister elements of the plot line. In Harry Potter and the Order of the Phoenix, we see these machinations take centre stage.\r\n\r\n\r\nI love the little books in the series. Although the earlier books are nice and lighthearted, I prefer the depth and grittiness of the narrative that comes with the threat of “he who must not be named”. With this, we get to see more morally ambiguous characters and events, but most importantly, it adds excitement and fear to what would otherwise be a fairly basic storyline.....\r\n\r\n \r\n\r\n', 'harry potter.jpeg', 1),
(18, 'Fire and Blood', 4, 'George R.R. Martin', '9.5/10', '\"Fire & Blood\" by George R.R. Martin is a well-received, historical chronicle of the Targaryen dynasty, offering a deep dive into the world of \"A Song of Ice and Fire\" with a focus on the Targaryen kings and their reign, written in a style that reads like a history textbook, rather than a traditional novel. \r\nHere\'s a more detailed breakdown                                                                            :                                                                                                               \r\nCONTENT:...\r\n                                                                 The book covers the history of House Targaryen, from Aegon the Conqueror to the Dance of the Dragons, a civil war that nearly destroyed the dynasty. \r\nStyle:\r\nIt\'s presented as a historical account, with detailed accounts of events, battles, and the rise and fall of Targaryen kings, rather than a traditional novel with a linear plot. .\r\nReception:..\r\nWhile some find the dry, historical style a bit tedious, others appreciate the depth of world-building and the opportunity to delve into the history of Westeros. .\r\nStrengths:\r\nRich World-Building: \"Fire & Blood\" expands the lore of \"A Song of Ice and Fire,\" offering insights into the Targaryen dynasty and the history of Westeros. .\r\nDetailed Accounts: The book provides a wealth of information about the Targaryen kings, their battles, and their impact on Westeros. .\r\nIllustrations: The book features artwork by Doug Wheatley, which adds to the visual appeal and helps bring the history to life. .\r\nWeaknesses:\r\nDry Historical Style: Some readers find the book\'s historical style to be dry and tedious, making it a challenging read. .\r\nLack of Maps: The absence of maps can make it difficult to visualize the locations and battles described in the book. .\r\nOverall:\r\n\"Fire & Blood\" is a valuable companion piece for fans of \"A Song of Ice and Fire\" who are interested in the history and lore of Westeros. It\'s a detailed and in-depth look at the Targaryen dynasty, but it may not appeal to readers who prefer a more traditional novel format. ', 'fire and blood.jpg', 1),
(19, 'Dhananjay', 3, 'Rajendra Kher', '9.5/10', 'Marathi best-seller novel on the life of Arjuna, the main character from the ancient epic - Mahabharata. Arjuna tells his own life story in first person style. The novel is mainly based on Bhandarkar researched edition (that is supposed to be most authentic) 15 volumes, and Neelakanthi edition: 13 volumes. Also Mr. Kher has researched 100s of other books on Mahabharata. This novel presents many untouched episodes which were not written before in any book or novel based on Mahabharata. . . Many influenced readers think that Karna was great archer than Arjuna or because of Krishna; Arjuna won many wars. Draupadi deny to marry with Karna who addressed him as \'Sutaputra\' But all these events introduced by some other successful novelist are not real. To know reality, one has to read this novel: Dhananjay.\r\n\r\n', 'images.jpg', 1),
(21, 'The Time Machine', 5, 'H.G.Wells ', '8.5/10', 'A Victorian scientist calls himself the Time Traveller as he tries to convince his friends that he was finally able to build a working time machine. They all seem a bit skeptic and don’t believe him, until the day that his time machine vanishes from sight. It seems like time travelling is indeed possible! He takes himself to the year 802.701 AD, and soon finds out life is completely different then. The Time Traveller has a hard time communicating with the inhabitants of this strange future, but he is happy to see that suffering has been replaced by beauty, contentment and peace. But soon enough he starts to discover that the Eloi people are not as advanced as they might seem and are in fact quite weak. The Eloi are afraid of the dark, and with reason, because beneath their paradise live the Morlocks hidden in the deep tunnels. They have evolved in order to survive under the complicated circumstances in the tunnel, and now hunt the very people that used to control them…\r\n', 'time machine.webp', 1),
(22, 'The Story of My Life', 2, 'Helen Keller', '9.5/10', 'An American classic rediscovered by each generation, The Story of My Life is Helen Keller’s account of her triumph over deafness and blindness. Popularized by the stage play and movie The Miracle Worker, Keller’s story has become a symbol of hope for people all over the world. \r\n\r\nThis book–published when Keller was only twenty-two–portrays the wild child who is locked in the dark and silent prison of her own body. With an extraordinary immediacy, Keller reveals her frustrations and rage, and takes the reader on the unforgettable journey of her education and breakthroughs into the world of communication. From the moment Keller recognizes the word “water” when her teacher finger-spells the letters, we share her triumph as “that living word awakened my soul, gave it light, hope, joy, set it free!” An unparalleled chronicle of courage, The Story of My Life remains startlingly fresh and vital more than a century after its first publication, a timeless testament to an indomitable will.', 'helen keller.webp', 1),
(24, 'Shaam chi Aai', 2, 'Sane Guruji', '8.5/10', '\"Shyamchi Aai,\" translated to \"Shyam\'s Mother,\" by Sane Guruji, is a beloved Marathi autobiography that offers a heartwarming glimpse into the life of a young boy and his profound relationship with his mother. The book\'s strength lies in its simplicity, emotional depth, and ability to resonate with readers of all ages. It\'s often described as a nostalgic journey into the rural Indian life of the early 20th century, highlighting the importance of family and the unconditional love of a mother. ', '447187c8d6d3b2a780b64aa88eb87f5a.jpg', 1),
(25, 'hu', 2, 'kk', '9.5/10', 'jkgiu', '81lRJmV6a0L.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cust`
--

CREATE TABLE `tbl_cust` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cust`
--

INSERT INTO `tbl_cust` (`cust_id`, `cust_name`, `cust_email`, `cust_password`) VALUES
(11, 'samarth', 'sam@gmail.com', '$2y$10$71OrgUrnddGez965sq3jr.QMq7T1ShD1YYFcw0JQ92.yIESW1AJY.'),
(12, 'Shivam', 'shinde123@gmail.com', '$2y$10$nxJiyrqoCiOFJElScd56UurUbJdANTszh3yl2xbFuf5F.DPa/4tmS'),
(13, 'Omkar Bhujbal', 'ombhu@gmail.com', '$2y$10$/rxBGyXB3yBqcnsN5UrSSeAh0It1h0j//fcXgA2RzrkAzqi7TuKQG'),
(14, 'Omkar Bhujbal', 'om@gmail.com', '$2y$10$.YtFGUA2ySRSoE66zfacSe2sPm3s64KSLSpSe9mbR2tsMOMVCiZYq'),
(15, 'samarth Sharma', 'sam121@gmail.com', '$2y$10$L5b7lr4d.QjapnW/8Yw85es0.vTi4yMRp2fxNCc20ORf9TXUixOJu'),
(16, 'Omkar Bhujbal', 'bhujbalomkar57@gmail.com', '$2y$10$SttJ.22Pd8TbgjiwOnitBObqy.n4Oi5.alr.PmoHCyV0YicKKNfBW'),
(17, 'Omkar Bhujbal', 'Manav123@gmail.com', '$2y$10$52t/gctNY/A8adp9FI2o8.Mdp9o2KgaC4n2wcSIdDd6FuhoSM0a2i');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `contact`, `password`, `confirm_password`, `user_status`) VALUES
(1, 'book rv', 'book123@gmail.com', '2147483647', '123', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_cust`
--
ALTER TABLE `tbl_cust`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_cust`
--
ALTER TABLE `tbl_cust`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
