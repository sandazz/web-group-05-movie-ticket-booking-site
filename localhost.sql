-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2022 at 07:24 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19419824_detail`
--
CREATE DATABASE IF NOT EXISTS `id19419824_detail` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id19419824_detail`;

-- --------------------------------------------------------

--
-- Table structure for table `moviedetails`
--

CREATE TABLE `moviedetails` (
  `movie_id` varchar(10) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `movie_url` varchar(1000) NOT NULL,
  `IMBD_rating` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `directer` varchar(100) NOT NULL,
  `stars` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviedetails`
--

INSERT INTO `moviedetails` (`movie_id`, `movie_name`, `movie_url`, `IMBD_rating`, `description`, `directer`, `stars`) VALUES
('01', 'Avatar', 'movie-images/avatar.jpg', '7.8/10', 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 'James Cameron', 'Sam Worhington,Zoe saldana,Sigourney Weaver,Michelle Rodringuez,Stephan Lang'),
('02', 'Titanic', 'movie-images/titanic.jpg', '7.9/10', 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.', 'James Cameron', 'Leonardo Dicaprio,Kate Winslet,Billy Zane,Kathy Bates,Frances Fisher,GLoria Stuart'),
('03', 'revenant', 'movie-images/revanant.jpg', '8/10', 'A frontiersman on a fur trading expedition in the 1820s fights for survival after being mauled by a bear and left for dead by members of his own hunting team.', 'Alejandro G.Inarritu', 'Leonardo Dicaprio,Tom hardy,Will Poulter'),
('04', 'wolf of wall street', 'movie-images/wolf.jpg', '8.2/10', 'Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government.', 'Martin Scorsese', 'Leonardo Dicaprio,Jonah Hill, Margot Robbie,Matthew McConaughey,Kyle Chandler,Rob Reiner,Jon Berthal'),
('05', 'Django Unchained', 'movie-images/Django.jpg', '8.4/10', 'With the help of a German bounty-hunter, a freed slave sets out to rescue his wife from a brutal plantation-owner in Mississippi.', 'Quentin Tarantino', 'Jamie Foxx,Chritoph Waltz,Leonardo Dicaprio,Kerry Washington,Samuel L.Jackson'),
('06', 'Inception', 'movie-images/inception.jpg', '8.8/10', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O., but his tragic past may doom the project and his team to disaster.', 'Christopher Nolan', 'Leonardo Dicaprio,Joseph Gordon-Levitt,Elliot Page,Ken Watanabe'),
('07', 'Joker', 'movie-images/joker.jpg', '8.4/10', 'A mentally troubled stand-up comedian embarks on a downward spiral that leads to the creation of an iconic villain.', 'Todd Phillips', 'Joaquin Phoenix,Robert De Niro,Zazie Beetz'),
('08', 'Parsite', 'movie-images/parasite.jpg', '8.5/10', 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.', 'Bong Joon Ho', 'Song Kang-ho,Sun-kyun Lee,Cho Yeo-jeong'),
('09', 'Forest Gump', 'movie-images/forestgump.jpg', '8.8/10', 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.', 'Robert Zemeckis', 'Tom Hanks,Robin Wright,Gary Sinise'),
('10', 'The Green Mile', 'movie-images/greenmile.jpg', '8.6/10', 'The lives of guards on Death Row are affected by one of their charges: a black man accused of child murder and rape, yet who has a mysterious gift.', 'Frank Darabont', 'Tom Hanks,Michael Clarke Duncan,David Morse'),
('11', 'Dunkirk', 'movie-images/dunkirk.jpg', '7.8/10', 'Allied soldiers from Belgium, the British Commonwealth and Empire, and France are surrounded by the German Army and evacuated during a fierce battle in World War II.', 'Christopher Nolan', 'Fionn Whitehead,Barry keoghan,Mark Rylance'),
('12', 'Tenet', 'movie-images/tenet.jpg', '7.3/10', 'Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.', 'chrispher Nolan', 'John David Washington,Robert Pattinson,Elizabeth Debicki'),
('13', 'The Martion', 'movie-images/martian.jpg', '8/10', 'An astronaut becomes stranded on Mars after his team assume him dead, and must rely on his ingenuity to find a way to signal to Earth that he is alive and can survive until a potential rescue.', 'Ridley Scott', 'Matt Damon,Jessica Chastain,Kristen Wiig'),
('14', 'Life of PI', 'movie-images/lifeofpi.jpg', '7.9/10', 'A young man who survives a disaster at sea is hurtled into an epic journey of adventure and discovery. While cast away, he forms an unexpected connection with another survivor: a fearsome Bengal tiger.', 'Ang lee', 'Suraj Sharma,Irrfan Khan,Adil Hussain'),
('15', 'Arrival', 'movie-images/arrival.jpg', '7.9/10', 'A linguist works with the military to communicate with alien lifeforms after twelve mysterious spacecraft appear around the world.', 'Denis Villeneuve', 'Amy Adams,Jeremy Renner,Forest whitaker'),
('16', 'Sicario', 'movie-images/sicario.jpg', '7.6/10', 'An idealistic FBI agent is enlisted by a government task force to aid in the escalating war against drugs at the border area between the U.S. and Mexico.', 'Denis Villeneuve', 'Emily Blunt,Josh Brolin,Benicio Del Toro'),
('17', '12 Strong', 'movie-images/12strong.jpg', '6.5/10', '12 Strong tells the story of the first Special Forces team deployed to Afghanistan after 9/11; under the leadership of a new captain, the team must work with an Afghan warlord to take down the Taliban.', 'Nicolai Fuglsig', 'Chris Hemsworth,Michael Shannon,Michael Pena'),
('18', 'The Gray Man', 'movie-images/thegrayman.jpg', '6.5/10', 'When the CIA\'s most skilled operative-whose true identity is known to none-accidentally uncovers dark agency secrets, a psychopathic former colleague puts a bounty on his head, setting off a global manhunt by international assassins.', 'Anthony Russo,Joe Russo', 'Ryan Gosling,Chris Evans,Ana de Aramas'),
('19', 'The Batman', 'movie-images/thebatman.jpg', '7.9/10', 'When a sadistic serial killer begins murdering key political figures in Gotham, Batman is forced to investigate the city\'s hidden corruption and question his family\'s involvement.', 'Matt Reeves', 'Robert Pattinson,Zoe kravitz,jeffrey Wright'),
('20', 'Avengers Endgame', 'movie-images/avengersendgame.jpg', '8.4/10', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.', 'Anthony RussoJoe Russo', 'Robert Downey Jr.,Chris Evans,Mark Ruffalo'),
('21', 'Avengers Infinity War', 'movie-images/infinitywar.jpg', '8.4/10', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', 'Anthony RussoJoe Russo', 'Robert Downey Jr.,Chris Hemsworth,Mark Ruffal'),
('22', 'Thor Ragnarok', 'movie-images/ragnarok.jpg', '7.9/10', 'Imprisoned on the planet Sakaar, Thor must race against time to return to Asgard and stop Ragnarök, the destruction of his world, at the hands of the powerful and ruthless villain Hela.', 'Taika Waititi', 'Chris Hemsworth,Tom Hiddleston,Cate Blanchett'),
('23', 'Captain America: Civil War', 'movie-images/civilwar.jpg', '7.8/10', 'Political involvement in the Avengers\' affairs causes a rift between Captain America and Iron Man.', 'Anthony Russo, Joe Russo', 'Chris Evans, Robert Downey Jr., Scarlett Johansson'),
('24', 'Captain America: The Winter Soldier', 'movie-images/wintersoldier.jpg', '7.8/10', 'As Steve Rogers struggles to embrace his role in the modern world, he teams up with a fellow Avenger and S.H.I.E.L.D agent, Black Widow, to battle a new threat from history: an assassin known as the Winter Soldier.', 'Anthony Russo, Joe Russo', 'Chris Evans, Samuel L. Jackson, Scarlett Johansson'),
('25', 'Avengers: Age of Ultron', 'movie-images/ageofultran.jpg', '7.3/10', 'When Tony Stark and Bruce Banner try to jump-start a dormant peacekeeping program called Ultron, things go horribly wrong and it\'s up to Earth\'s mightiest heroes to stop the villainous Ultron from enacting his terrible plan.', 'Joss Whedon', 'Robert Pattinson,Zoe kravitz,jeffrey Wright'),
('26', 'The Avengers', 'movie-images/theavengers.jpg', '8.0/10', 'Earth\'s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.', 'Joss Whedon', 'Robert Downey Jr., Chris Evans, Scarlett Johansson'),
('27', 'Guardians of the Galaxy', 'movie-images/gog.jpg', '8.0/10', 'A group of intergalactic criminals must pull together to stop a fanatical warrior with plans to purge the universe.', 'James Gunn', 'Chris PrattVin, Diesel(voice), Bradley Cooper(voice)'),
('29', 'Guardians of the Galaxy Vol. 2', 'movie-images/gog2.jpg', '7.6/10', 'The Guardians struggle to keep together as a team while dealing with their personal family issues, notably Star-Lord\'s encounter with his father the ambitious celestial being Ego.', 'James Gunn', 'Chris Pratt, Zoe Saldana, Dave Bautista'),
('30', 'Ant-Man', 'movie-images/antman.jpg', '7.3/10', 'Armed with a super-suit with the astonishing ability to shrink in scale but increase in strength, cat burglar Scott Lang must embrace his inner hero and help his mentor, Dr. Hank Pym, pull off a plan that will save the world.', 'Peyton Reed', 'Paul Rudd, Michael Douglas, Corey Stoll'),
('31', 'Ant-Man and the Wasp', 'movie-images/antmanandwasp.jpg', '7.0/10', 'As Scott Lang balances being both a superhero and a father, Hope van Dyne and Dr. Hank Pym present an urgent new mission that finds the Ant-Man fighting alongside The Wasp to uncover secrets from their past.', 'Peyton Reed', 'Paul Rudd, Evangeline Lilly, Michael Peña');

-- --------------------------------------------------------

--
-- Table structure for table `seatbooking`
--

CREATE TABLE `seatbooking` (
  `userNo` int(11) NOT NULL,
  `userName` varchar(100) DEFAULT NULL,
  `movie` varchar(100) DEFAULT NULL,
  `theators` varchar(50) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `seat` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seatbooking`
--

INSERT INTO `seatbooking` (`userNo`, `userName`, `movie`, `theators`, `time`, `seat`) VALUES
(9, 'nimal', 'spider man', 'BigShow', '7.00', '27,28,29'),
(15, 'nimal', 'spider man', 'Ranil', '10.00', '41,42,43,44,45,46,47,48'),
(68, 'Mohamed', 'Avatar', 'Rigal', '8.00', '01,02,03,04'),
(69, 'Mohamed', 'Avatar', 'Rigal', '8.00', '41,42,43'),
(70, 'Mohamed', 'Avatar', 'Rigal', '8.00', '41,42,43'),
(71, 'Mohamed', 'Avatar', 'Rigal', '8.00', '41,42,43'),
(72, 'Mohamed', 'Avatar', 'Rigal', '8.00', '41,42,43'),
(73, '', 'revenant', 'Rigal', '8.00', '01,02,03'),
(74, '', 'revenant', 'Rigal', '8.00', '01,02,03'),
(75, '', 'revenant', 'Rigal', '8.00', '01,02,03'),
(76, NULL, 'revenant', 'Rigal', '8.00', '01,02,03'),
(77, NULL, 'revenant', 'Rigal', '8.00', '01,02,03'),
(78, NULL, 'revenant', 'Rigal', '8.00', '01,02,03'),
(79, NULL, 'Joker', 'Rigal', '8.00', '43,44'),
(80, NULL, 'Joker', 'Rigal', '8.00', '45,46'),
(87, NULL, 'Avatar', 'Raanil', '12.00', '01,02'),
(88, NULL, 'Avatar', 'Raanil', '12.00', '03,04'),
(89, NULL, 'Avatar', 'Raanil', '12.00', '03,04'),
(90, NULL, 'Avatar', 'Raanil', '12.00', '09,10'),
(94, NULL, 'Django Unchained', 'Rigal', '3.00', '19,20,21'),
(96, NULL, 'revenant', 'Raanil', '12.00', '01,02,03,04,05,06,07,08'),
(97, NULL, 'Avatar', 'Rigal', '8.00', '41,42'),
(98, NULL, 'Avatar', 'Rigal', '8.00', '01,02'),
(99, NULL, 'Avatar', 'Rigal', '8.00', '36,37'),
(100, NULL, 'Joker', 'BigShow', '10.00', '41,42,43,44,45,46,47,48'),
(101, NULL, 'Joker', 'BigShow', '10.00', '01,02,03,04,05,06,07,08'),
(102, NULL, 'Joker', 'BigShow', '10.00', '27,28');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `user_no` int(11) NOT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `useremail` varchar(100) DEFAULT NULL,
  `newpassword` varchar(100) DEFAULT NULL,
  `newcomfirmpassword` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`user_no`, `fullName`, `phone`, `useremail`, `newpassword`, `newcomfirmpassword`) VALUES
(1, 'Mohamed Kamaludeen', '0768523253', 'mohamedkamaludeen', '1234', '1234'),
(2, 'Mohamed Asharudeen', '0777811483', 'mohamedAshar', '5678', '5678'),
(8, 'Mohamed Mujeebudeen', '0342275683', 'mohamedMujeeb', '12345', '12345'),
(9, 'sandaz gimhana', '0777811483', 'sandaz', '45678', '45678'),
(10, 'nimal', '123456789', 'nimalrock', '1234', '1234'),
(11, 'sandaz', '0768511134', 'jhdcvjhdsvjhdv', '0987', '0987'),
(12, 'Mohamed', '0707199345', 'mohamed', 'mohamed123', ''),
(13, 'sanusan', '0771103133', 'sanusank', 'sanusank123', ''),
(14, 'sajith', '8765875', 'sajith', 'sajith123', ''),
(15, 'ravi', '648765', 'ravi', 'ravi123', ''),
(16, 'ravi', '6535478687', 'ravi', 'ravi123', 'ravi123'),
(17, 'ravi', '648765', 'ravi', 'ravi123', 'ravi123'),
(18, 'ravi', '648765', 'ravi', 'ravi123', 'ravi123'),
(19, 'ravi', '648765', 'ravi', 'ravi123', 'ravi123'),
(20, 'john', '76487648', 'john', 'john123', ''),
(21, 'john', '7576786', 'john', 'john123', ''),
(22, 'warner', '567657575', 'warner', 'warner123', 'warner123'),
(23, 'ravi2', '23232323', 'ravi2', 'ravi2123', 'ravi2123'),
(24, 'Sandas gimhana', '768511134', 'sandazzzg1999@gmail.com', 'sandas123', 'sandas123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moviedetails`
--
ALTER TABLE `moviedetails`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `seatbooking`
--
ALTER TABLE `seatbooking`
  ADD PRIMARY KEY (`userNo`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`user_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seatbooking`
--
ALTER TABLE `seatbooking`
  MODIFY `userNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `user_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
