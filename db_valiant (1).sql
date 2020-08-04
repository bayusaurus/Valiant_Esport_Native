-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 06:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_valiant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `email`, `avatar`, `status`) VALUES
('dendi', '$2y$10$eGb4OvPrQdNzmf70jZ9wBuNDDxb2q5atynZYMKqzR.IZKwQDFZ8D2', 'Dendi Hartono', 'dendihartono@gmail.com', 'dendi.jpg', 1),
('kimbora', '$2y$10$6DsK2HVTZEQbvqcbk7kia.z00mt0qsMisTopkI/VAcUSApQS9G4ZW', 'Kim Bora', 'kimbora@gmail.co.id', 'EaE0aCfXkAAqRh4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `thumbnail` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `username`, `judul`, `thumbnail`, `tanggal`, `isi`, `hapus`) VALUES
(4, 'dendi', 'Ceb Is Back', 'dendi.jpg', '2020-08-04', '<p>Sébastien “Ceb” Debs, pillar of OG esports and best offlane player in the world is coming back to play in our Dota team as our position 3, as Sumail will be removed from our roster.&nbsp;</p><p>Sébastien has decided to jump back into the player role that he started to miss too much. When he decided to step back, he took some time to reflect on where his actual drive came from throughout his journey. At first, the dream of a lifetime was winning a TI with his boys. Check. After that, he figured that being the first team to achieve it twice would be pretty cool. Check. But what about now?&nbsp;</p><p>While working on helping all of our teams for the past few months as Head Of Performance, it was an occasion for Ceb to reflect and try to answer that very complex question for himself. As the days and milestones went on at OG, he realized that what drives him today is, well… the performance itself. “I honestly kinda take offense in the simple fact that other teams think that they can beat us”, Ceb tells us. He is, like everyone at OG, a competitor at heart.&nbsp;</p><p>But even more than performance, what ultimately drove him to make that decision is what made him switch from coach to player in the first place. Ceb simply missed playing with his friends.</p><p>“I actually missed them a lot. We’ve been through everything together. Every game they play in which I’m not playing felt like a waste of my time. I enjoy playing with them more than anything else”, Ceb says. Flowers and friendship are what ultimately drives all of us at OG, Ceb is no exception.&nbsp;</p><p><br></p><p>We’re more than ecstatic to have our pillar back on board and we’re ready to face all the upcoming challenges as a team.</p><p>Sumail is one of the best players in the world, as well as a fantastic person to work with. We would like to thank him for his time spent with us and wish him the best.</p><p>Our updated Dota 2 roster will start playing together in the DotaPit tournament on the 27th of July. Don’t forget to come support us there, as there are some teams to beat and as usual, some great Dota to be played.&nbsp;</p><p><br></p><p>#DreamOG?</p>', 0),
(5, 'dendi', 'Sumail is one of the best players in the world', '34809601945_b959391f80_b.jpg', '2020-08-04', '<p>Sébastien “Ceb” Debs, pillar of OG esports and best offlane player in the world is coming back to play in our Dota team as our position 3, as Sumail will be removed from our roster.&nbsp;</p><p>Sébastien has decided to jump back into the player role that he started to miss too much. When he decided to step back, he took some time to reflect on where his actual drive came from throughout his journey. At first, the dream of a lifetime was winning a TI with his boys. Check. After that, he figured that being the first team to achieve it twice would be pretty cool. Check. But what about now?&nbsp;</p><p>While working on helping all of our teams for the past few months as Head Of Performance, it was an occasion for Ceb to reflect and try to answer that very complex question for himself. As the days and milestones went on at OG, he realized that what drives him today is, well… the performance itself. “I honestly kinda take offense in the simple fact that other teams think that they can beat us”, Ceb tells us. He is, like everyone at OG, a competitor at heart.&nbsp;</p><p>But even more than performance, what ultimately drove him to make that decision is what made him switch from coach to player in the first place. Ceb simply missed playing with his friends.</p><p>“I actually missed them a lot. We’ve been through everything together. Every game they play in which I’m not playing felt like a waste of my time. I enjoy playing with them more than anything else”, Ceb says. Flowers and friendship are what ultimately drives all of us at OG, Ceb is no exception.&nbsp;</p><p><br></p><p>We’re more than ecstatic to have our pillar back on board and we’re ready to face all the upcoming challenges as a team.</p><p>Sumail is one of the best players in the world, as well as a fantastic person to work with. We would like to thank him for his time spent with us and wish him the best.</p><p>Our updated Dota 2 roster will start playing together in the DotaPit tournament on the 27th of July. Don’t forget to come support us there, as there are some teams to beat and as usual, some great Dota to be played.&nbsp;</p><p><br></p><p>#DreamOG?</p>', 0),
(6, 'dendi', 'Our updated Dota 2 roster will start playing together in the DotaPit tournament', 'images.jpg', '2020-08-04', '<p>Sébastien “Ceb” Debs, pillar of OG esports and best offlane player in the world is coming back to play in our Dota team as our position 3, as Sumail will be removed from our roster.&nbsp;</p><p>Sébastien has decided to jump back into the player role that he started to miss too much. When he decided to step back, he took some time to reflect on where his actual drive came from throughout his journey. At first, the dream of a lifetime was winning a TI with his boys. Check. After that, he figured that being the first team to achieve it twice would be pretty cool. Check. But what about now?&nbsp;</p><p>While working on helping all of our teams for the past few months as Head Of Performance, it was an occasion for Ceb to reflect and try to answer that very complex question for himself. As the days and milestones went on at OG, he realized that what drives him today is, well… the performance itself. “I honestly kinda take offense in the simple fact that other teams think that they can beat us”, Ceb tells us. He is, like everyone at OG, a competitor at heart.&nbsp;</p><p>But even more than performance, what ultimately drove him to make that decision is what made him switch from coach to player in the first place. Ceb simply missed playing with his friends.</p><p>“I actually missed them a lot. We’ve been through everything together. Every game they play in which I’m not playing felt like a waste of my time. I enjoy playing with them more than anything else”, Ceb says. Flowers and friendship are what ultimately drives all of us at OG, Ceb is no exception.&nbsp;</p><p><br></p><p>We’re more than ecstatic to have our pillar back on board and we’re ready to face all the upcoming challenges as a team.</p><p>Sumail is one of the best players in the world, as well as a fantastic person to work with. We would like to thank him for his time spent with us and wish him the best.</p><p>Our updated Dota 2 roster will start playing together in the DotaPit tournament on the 27th of July. Don’t forget to come support us there, as there are some teams to beat and as usual, some great Dota to be played.&nbsp;</p><p><br></p><p>#DreamOG?</p>', 0),
(7, 'dendi', 'We’re more than ecstatic to have our pillar back on board', 'asus-logo-hd-photo-15.png', '2020-08-04', '<p>Sébastien “Ceb” Debs, pillar of OG esports and best offlane player in the world is coming back to play in our Dota team as our position 3, as Sumail will be removed from our roster.&nbsp;</p><p>Sébastien has decided to jump back into the player role that he started to miss too much. When he decided to step back, he took some time to reflect on where his actual drive came from throughout his journey. At first, the dream of a lifetime was winning a TI with his boys. Check. After that, he figured that being the first team to achieve it twice would be pretty cool. Check. But what about now?&nbsp;</p><p>While working on helping all of our teams for the past few months as Head Of Performance, it was an occasion for Ceb to reflect and try to answer that very complex question for himself. As the days and milestones went on at OG, he realized that what drives him today is, well… the performance itself. “I honestly kinda take offense in the simple fact that other teams think that they can beat us”, Ceb tells us. He is, like everyone at OG, a competitor at heart.&nbsp;</p><p>But even more than performance, what ultimately drove him to make that decision is what made him switch from coach to player in the first place. Ceb simply missed playing with his friends.</p><p>“I actually missed them a lot. We’ve been through everything together. Every game they play in which I’m not playing felt like a waste of my time. I enjoy playing with them more than anything else”, Ceb says. Flowers and friendship are what ultimately drives all of us at OG, Ceb is no exception.&nbsp;</p><p>We’re more than ecstatic to have our pillar back on board and we’re ready to face all the upcoming challenges as a team.</p><p>Sumail is one of the best players in the world, as well as a fantastic person to work with. We would like to thank him for his time spent with us and wish him the best.</p><p>Our updated Dota 2 roster will start playing together in the DotaPit tournament on the 27th of July. Don’t forget to come support us there, as there are some teams to beat and as usual, some great Dota to be played.&nbsp;</p><p><br></p><p>#DreamOG?</p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` tinytext NOT NULL,
  `avatar` varchar(30) NOT NULL,
  `link` varchar(50) NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id_partner`, `nama`, `deskripsi`, `avatar`, `link`, `hapus`) VALUES
(5, 'Amazon', 'Amazon.com, Inc.[7] (/ˈæməzɒn/), is an American multinational technology company based in Seattle that focuses on e-commerce, cloud computing, digital streaming, and artificial intelligence. It is considered one of the Big Four technology companies, a', 'sponsor-amazon.svg', 'amazon.com', 0),
(6, 'Booking.com', 'Whoever you are, whatever you\'re looking for, we have the perfect place for you. Our 29,659,631 listings include 6,703,205 listings of homes, apartments, and other unique places to stay, and are located in 154,167 destinations in 225 countries and territo', 'sponsor-boking.svg', 'Booking', 0),
(7, 'Champion', 'Get inspired and check out our selection of athletic apparel, sportswear, and more at the official Champion store! Shop Tees, Hoodies, Socks & More now!', 'sponsor-champione1.svg', 'champion.com', 0),
(8, 'Coca-Cola', 'Coca-Cola adalah minuman ringan berkarbonasi yang dijual di toko, restoran dan mesin penjual di lebih dari 200 negara. Minuman ini diproduksi oleh The Coca-Cola Company asal Atlanta, Georgia, dan sering disebut Coke saja.', 'sponsor-cocola.svg', 'coca-cola.com', 0),
(9, 'Kentucky Fried Chicken', 'Garingnya kulit ayam goreng krispy KFC emang gak ada duanya! Kombinasi gurih dan sedikit pedas, ditambah kerenyahannya bikin kangen dan terngiang ...Garingnya kulit ayam goreng krispy KFC emang gak ada duanya! Kombinasi gurih dan sedikit pedas, ditambah k', 'sponsor-kfc.svg', 'kfc.com', 0),
(10, 'Ryzen', 'Everyone deserves a powerful processor. Uncompromising features and smooth performance are finally the standard for every gamer and artist. Including models with advanced Radeon™ graphics built-in.Everyone deserves a powerful processor. Uncompromising f', 'sponsor-ryzen1.svg', 'amd.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id_player` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nick` varchar(30) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id_player`, `id_team`, `nama`, `nick`, `foto`, `hapus`) VALUES
(26, 6, 'Yeik Nai Zheng', 'MidOne', 'player-midone.png', 0),
(27, 6, 'Johan Sudstein', 'N0tail', 'player-notail.png', 0),
(28, 6, 'Martin Sazdov', 'Saksa', 'player-saksa.png', 0),
(29, 6, 'Topias Taavitsainen', 'Topson', 'player-topson.png', 0),
(30, 6, 'Sumail Hassan', 'Suma1L', 'player-sumail.png', 0),
(31, 7, 'Yoon Se Ri', 'SeRi', 'player-notail1.png', 0),
(32, 7, 'Hyunbin', 'Hyunnnn', 'player-topson1.png', 0),
(33, 8, 'Jojo', 'Star Platinum', 'EaE0aCfXkAAqRh4.jpg', 0),
(34, 8, 'Polnareff', 'Chariot', 'suyoo.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `game` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `hapus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `nama`, `game`, `foto`, `hapus`) VALUES
(6, 'Valiant Red Flame', 'DOTA 2', '2118979077.jpg', 0),
(7, 'Valiant Demolisher', 'League Of Legends', '19330015_303.jpg', 0),
(8, 'Valiant Heavy Punch', 'CS : GO', 'maxresdefault.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id_player`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id_player` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`username`) REFERENCES `admin` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
