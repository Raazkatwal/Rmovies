-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220909.746d1696b7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2022 at 02:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streaming_site`
--
CREATE DATABASE IF NOT EXISTS `streaming_site` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `streaming_site`;

-- --------------------------------------------------------

--
-- Table structure for table `movieinfo`
--

CREATE TABLE `movieinfo` (
  `S.N` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `quality` varchar(3) NOT NULL,
  `imdb` float NOT NULL,
  `Released` varchar(15) NOT NULL,
  `release_year` varchar(4) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Casts` varchar(100) NOT NULL,
  `Duration` varchar(10) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Production` varchar(300) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movieinfo`
--

INSERT INTO `movieinfo` (`S.N`, `title`, `img`, `quality`, `imdb`, `Released`, `release_year`, `Genre`, `Casts`, `Duration`, `Country`, `Production`, `link`) VALUES
(1, 'Jurassic World Dominion', 'jurassic-world.jpg', 'HD', 5.7, '2022-06-01', '2022', 'Adventure, Action, Science Fiction, Thriller', 'Chris Pratt, Bryce Dallas Howard, Isabella Sermon, Laura Dern, Sam Neill', '147 min', 'United States of America', 'Amblin Entertainment, Universal Pictures, Perfect World Pictures, Legendary Entertainment', 'https://dood.wf/e/xl0imfd9b2hyspj9000pgtkjyce110ew'),
(2, 'Thor: Love and Thunder', 'thor-love-and-thunder.jpg', 'CAM', 6.7, '2022-07-07', '2022', 'Action, Comedy, Science Fiction, Adventure, Fantasy', ' Taika Waititi, Natalie Portman, Chris Pratt, Chris Hemsworth, Tessa Thompson', '150 min', 'United States of America', 'Marvel Studios', 'https://dood.wf/e/5sde59vlgw9tnp4ijgf237en7t37u5yv'),
(3, 'Doctor Strange in the Multiverse of Madness', 'Dr.strange-MOM.jpg', 'HD', 7, '2022-05-04', '2022', 'Horror, Adventure, Action, Science Fiction, Thriller, Fantasy', 'Chiwetel Ejiofor, Elizabeth Olsen, Benedict Cumberbatch, Benedict Wong, Rachel McAdams', '180 min', 'United States of America', 'Marvel Studios', 'https://dood.wf/e/hk3i2wdk232v8wi0jgkvfuj8y2njmk5d'),
(4, 'Minions: The Rise of Gru', 'Minions.png', 'HD', 6.6, '2022-06-16', '2022', 'Family, Adventure, Animation, Comedy, Action', 'Russell Brand, Alan Arkin, Taraji P. Henson, Steve Carell, Pierre Coffin', '87 min', 'United States of America, France, Japan', 'Universal Pictures, Illumination Entertainment', 'https://dood.wf/e/diq5fhgzj8al8rm3klgtlrno59xmvhwc'),
(5, 'Sinister', 'sinister.jpg', 'HD', 6.8, '2012-03-29', '2012', 'Horror, Thriller, Mystery', 'Ethan Hawke, Juliet Rylance, Vincent D\'Onofrio, James Ransone, Fred Dalton Thompson', '110 min', 'United States of America', 'Automatik Entertainment, Blumhouse Productions, Alliance Films, IM Global, Possessed Pictures', 'https://dood.wf/e/ihh8ofml42byh3kmb8qdfmxawsdper5c'),
(6, 'The Sea Beast', 'sea-beast.jpg', 'HD', 7.1, '2022-06-24', '2022', 'Family, Adventure, Fantasy, Animation', 'Jared Harris, Karl Urban, Zaris-Angel Hator, Marianne Jean-Baptiste, Kathy Burke', '115 min', 'United States of America, Canada', 'Sony Pictures Imageworks (SPI)', 'https://dood.wf/e/29sigvsptl7wkrmkr3r2912xd3dm5zfj'),
(7, 'Prey', 'prey.jpg', 'HD', 7.2, '2022-08-05', '2022', 'Science Fiction, Action, Horror', 'Amber Midthunder, Michelle Thrush, Stefany Mathias, Julian Black Antelope, Nelson Leis', '120 min', 'United States of America', '20th Century Studios, Davis Entertainment', 'https://dood.wf/e/whirvrl0bwiqrbt713jsp5rce4c4oz1y'),
(8, 'Girl in the Picture', 'girl-in-the-picture.jpg', 'HD', 7.2, '2022-07-06', '2022', 'Crime, Documentary', 'Sarah French, Natalie De Vincentiis, Mark Chinnery, Robert Christopher Smith, Meg Schimelpfenig', '101 min', 'United States of America', 'Main Event Media, Top Knot Films, All3Media America', 'https://dood.wf/e/ffdpv6ssgi3a3pyimpwsh4qm2uq28dvl'),
(9, 'Top Gun: Maverick', 'top-gun.jpg', 'HD', 8.5, '2022-05-24', '2022', 'War, Action, Drama', 'Tom Cruise, Val Kilmer, Miles Teller, Jennifer Connelly, Glen Powell', '131 min', 'United States of America', 'Jerry Bruckheimer Films, Paramount, Skydance Media, TC Productions, Tencent Pictures, Don Simpson/Jerry Bruckheimer Films, New Republic Pictures', 'https://dood.wf/e/h1fzpxz4zj3q76y99bvnkiapi6elx10k'),
(10, 'Everything Everywhere All at Once', 'everything-everywhere-all-at-once.jpg', 'HD', 8.2, '2022-03-24', '2022', 'Science Fiction, Action, Fantasy, Comedy, Adventure', 'James Hong, Jenny Slate, Michelle Yeoh, Peter Banifaz, Sunita Mani', '139 min', 'United States of America', 'AGBO, Ley Line Entertainment, IAC Films, A24, Year of the Rat Productions', 'https://dood.wf/e/d07qkkoqvv6rixwwdkmzlzf61foi0da2'),
(11, 'Spider-Man: No Way Home', 'no-way-home.jpg', 'HD', 8.3, '2021-12-15', '2021', 'Action, Science Fiction, Adventure, Fantasy', 'Marisa Tomei, Martin Starr, Jamie Foxx, J.K. Simmons, Harry Holland', '148 min', 'United States of America', 'Sony Pictures, Pascal Pictures, Marvel Studios, Columbia Pictures', 'https://dood.wf/e/8g7xxhqcyw4nu48vaov3q9wyc0ewc5h2'),
(12, 'Fantastic Beasts: The Secrets of Dumbledore', 'fantastic-beasts.jpg', 'HD', 6.2, '2022-04-07', '2022', 'Fantasy, Adventure', 'Eddie Redmayne, Jude Law, Mads Mikkelsen, Ezra Miller, Jessica Williams', '136 min', 'United States of America, United Kingdom', 'Heyday Films, Warner Bros. Pictures', 'https://dood.wf/e/tv8wt5nipg8t9ns7fgovfulkqx8me0xx'),
(13, 'The Batman', 'batman.jpg', 'HD', 7.9, '2022-03-01', '2022', 'Drama, Action, Crime, Mystery, Fantasy, Thriller', 'Robert Pattinson, Vanessa Kirby, Jeffrey Wright, Jonah Hill, Peter Sarsgaard', '176 min', 'United States of America', 'DC Entertainment, Branded Entertainment/Batfilm Productions, Atlas Entertainment, Cruel & Unusual Films, Warner Bros. Pictures, 6th & Idaho Productions, Mad Ghost Productions, DC Comics, DC Films, Dylan Clark Productions', 'https://dood.wf/e/1e4cngvmbsetle9k4ayxzqfw30tm6j7z'),
(14, 'Vendetta', 'vendetta.jpg', 'HD', 3.7, '2022-05-17', '2022', 'Action, Crime, Thriller', 'Thomas Jane, Kurt Yue, Bruce Willis, Clive Standen, Lauren Buglioli', '96 min', 'United States of America', '308 Ent, Redbox Entertainment, The Exchange, T.N.G. Capital Corp, Media Capital Group, B.A.R. None Productions, Vector Film Services', 'https://dood.wf/e/oh03f7g71wc3inwk1cl8nxxr8f09xlc2'),
(15, 'The Northman', 'northman.jpg', 'HD', 7.2, '2022-04-01', '2022', 'Thriller, Adventure, Drama, Action', 'Eldar Skar, Claes Bang, Alexander Skarsgård, Ethan Hawke, Willem Dafoe', '137 min', 'United States of America', 'New Regency Pictures, Perfect World Pictures, Focus Features, Square Peg', 'https://dood.wf/e/n3mdlf3h7pt1zpdqcaptr10k8gzonbgd'),
(16, 'Hot Seat', 'hotseat.jpg', 'HD', 4.5, '2022-07-01', '2022', 'Action, Thriller', 'Mel Gibson, Kevin Dillon, Shannen Doherty, Anna Harr, Sam Asghari', '87 min', 'United States of America', 'Highland Film Group (HFG), Grindstone Entertainment Group, Lionsgate', 'https://dood.wf/e/76bgwzb2jvnbeldyc1ikmpbojb4v68cb'),
(17, 'The Man From Toronto', 'man-from-toronto.jpg', 'HD', 5.8, '2022-06-24', '2022', 'Action, Comedy', 'Kevin Hart, Woody Harrelson, Kaley Cuoco, Lela Loren, Pierson Fode', '110 min', 'United States of America', 'Escape Artists, Sony Pictures', 'https://dood.wf/e/jnnql03dfm5eju7fwvr21m5bl95u50a2'),
(18, 'The Lost City', 'lost-city.jpg', 'HD', 6.1, '2022-03-24', '2022', 'Romance, Comedy, Action, Adventure', 'Channing Tatum, Brad Pitt, Daniel Radcliffe, Sandra Bullock, Patti Harrison', '112 min', 'United States of America', 'Exhibit A Film, Paramount, Fortis Films, 3dot Productions', 'https://dood.wf/e/b1pgb3je943wbqqnddjpb02ppi9spqkg'),
(19, 'Elvis', 'elvis.jpg', 'HD', 7.6, '2022-06-22', '2022', 'Music, Drama, History', 'Dacre Montgomery, Austin Butler, Kelvin Harrison Jr., Tom Hanks, Olivia DeJonge', '159 min', ' United States of America, Australia', 'Bazmark Films, The Jackal Group', 'https://dood.wf/e/gnyd0xgdn3wq5qef45luxsdmxtw1pjlk'),
(20, 'Lightyear', 'lightyear.jpg', 'HD', 5.8, '2022-06-15', '2022', 'Adventure, Animation, Action, Science Fiction, Family', 'Chris Evans, Keke Palmer, Uzo Aduba, Peter Sohn, James Brolin', '105 min', 'United States of America', 'Walt Disney Pictures, Pixar', 'https://dood.wf/e/rzeejtpp6jnyecqnetz8xapu6nc8tnbp'),
(21, 'Morbius', 'Morbius.jpg', 'HD', 5.2, '2022-03-30', '2022', 'Horror, Thriller, Science Fiction, Action, Fantasy', 'Bern Collaço, Jared Leto, J.K. Simmons, Matt Smith, Adria Arjona', '104 min', 'United States of America', 'Columbia Pictures, Sony Pictures, Marvel Entertainment', 'https://dood.wf/e/mcraf80091ko0570279siz8gb3kwr0dt'),
(22, 'Sonic the Hedgehog 2', 'sonic.jpg', 'HD', 6.5, '2022-03-30', '2022', 'Family, Action, Comedy, Science Fiction', 'Tom Butler, Elfina Luk, Lee Majdoub, Jim Carrey, Colleen O\'Shaughnessey', '122 min', 'United States of America', 'Marza Animation Planet, Original Film, Blur Studios, Paramount, Sega', 'https://dood.wf/e/x9j4fc9azdttwyrtb4onejy9rzpjpm63'),
(23, 'Code Name Banshee', 'code-name-banshee.jpg', 'HD', 3.4, '2022-07-01', '2022', 'Action, Thriller', 'Jaime King, Antonio Banderas, Tommy Flanagan, Wayne Pyle, Catherine Davis', '93 min', 'United States of America', 'Buffalo 8 Productions, Yale Productions, BondIt Media Capital', 'https://dood.wf/e/rrsojea4ec80356wscz7kziwyiqd0gt0'),
(24, 'The Black Phone', 'The-black-phone.jpg', 'HD', 7, '2022-05-29', '2022', 'Thriller, Horror', 'Ethan Hawke, Madeleine McGraw, Jeremy Davies, E. Roger Mitchell, James Ransone', '102 min', 'United States of America', 'Blumhouse Productions, Universal Pictures', 'https://dood.wf/e/fsdd97utdbd15no50z19e9r8sj77h9n8'),
(25, 'Bridges', 'bridges.jpg', 'HD', 4.7, '2021-03-07', '2021', 'Drama', 'Maria Corina Ramirez, Marialejandra Martin, Fernando Yvosky, Nathalia Lares, Julissa Calderon', '72 min', 'United States of America', 'N/A', 'https://dood.wf/e/mexjhi4l5mfqll07w8ly9nluflybz7g7'),
(26, 'Brian and Charles', 'brian-and-charles.jpg', 'HD', 6.7, '2022-06-17', '2022', 'Science Fiction, Comedy', 'Louise Brealey, David Earl, Jamie Michie, Nina Sosanya, Sunil Patel', '90 min', 'United Kingdom', 'British Film Institute (BFI), Film4 Productions, Bankside Films, Great Point Media', 'https://dood.wf/e/4oxcdj066q08mj49lbb0vez9ktx6rpks'),
(27, 'Block Party', 'block-party.jpg', 'HD', 5.9, '2022-06-08', '2022', 'Comedy', 'Margaret Avery, Antoinette Robertson, Gary Anthony Williams, Luenell, Golden Brooks', '90 min', 'United States of America', 'Iconic Events Releasing, Branch Out Productions', 'https://dood.wf/e/htejqaugcbikjfboxevcte8ddwt7qx9a'),
(28, 'Transformers: Dark of the Moon', 'transformers.jpg', 'HD', 6.2, '2011-06-28', '2011', 'Action, Science Fiction, Adventure', 'Shia LaBeouf, John Malkovich, Ken Jeong, Frances McDormand, Josh Duhamel', '154 min', 'United States of America', 'Hasbro Studios, Paramount, Di Bonaventura Pictures, Indochina Productions', 'https://dood.wf/e/oh2r9smlomblklq6a0qfnz41ny4vf175'),
(29, 'Tenet', 'tenet.jpg', 'HD', 7.3, '2020-08-22', '2020', 'Science Fiction, Action, Thriller', 'Jess Weber, Rich Ceraulo, Dimple Kapadia, Andrew Howard, Laurie Shepherd', '150 min', 'Canada, Norway, United Kingdom, United States of America, Estonia', 'Syncopy, Warner Bros. Pictures', 'https://dood.wf/e/qu0m2bhmqd6w854qhp78g992pecg3i2c'),
(30, 'Gangs of Wasseypur - Part 1', 'wasseypur-1.jpg', 'HD', 8.2, '2012-06-22', '2012', 'Action, Thriller, Crime', 'Manoj Bajpayee, Richa Chadda, Tigmanshu Dhulia, Nawazuddin Siddiqui, Reema Sen', '160 min', 'India', 'Anurag Kashyap Films, Jar Pictures', 'https://dood.wf/e/dmndy26armguhxxrsq7o9z23d9bf962e'),
(31, 'Take the Night', 'take-the-night.jpg', 'HD', 5.6, '2022-07-08', '2022', 'Thriller, Crime', 'Ashwin Gore, Brennan Keel Cook, Roy Huang, Kelvin Han Yee, Bryan Fitzgerald', '82 min', 'United States of America', 'SM10 Films, TDP FILMS, Samaco Productions', 'https://dood.wf/e/et9e4or3sngxf8onqwsisig9ib0f8shu'),
(32, 'The Drover\'s Wife: The Legend of Molly Johnson', 'the-drovers-wife.jpg', 'HD', 6.2, '2022-05-05', '2022', 'Western, Drama, Thriller', 'Leah Purcell, Rob Collins, Sam Reid, Victoria Haralabidou, Jessica De Gouw', '109 min', 'Australia', 'Bunya Productions, oombarra productions', 'https://dood.wf/e/eig6efb326zonis8f3jkk0xq8pw7a05x'),
(33, 'The Prestige', 'the-prestige.jpg', 'HD', 8.5, '2006-10-19', '2006', 'Drama, Mystery, Thriller', 'Hugh Jackman, Michael Caine, Christian Bale, Scarlett Johansson, Andy Serkis', '130 min', 'United States of America', 'Touchstone Pictures, Syncopy, Warner Bros. Pictures', 'https://dood.wf/e/pni34t4n237kxv8yybu02ufyo1hdmjxh\n'),
(34, 'Samaritan', 'samaritan.jpg', 'HD', 5.9, '2022-08-26', '2022', 'Science Fiction, Drama, Action, Fantasy', 'Sylvester Stallone, Moisés Arias, Javon \'Wanna\' Walton, Martin Starr, Pilou Asbæk', '99 min', 'United States of America', 'Metro-Goldwyn-Mayer, Balboa Productions', 'https://dood.wf/e/a4u5234isj2n3yxjdgh64z8reyv8solg'),
(35, 'The Summoned', 'the-summoned.jpg', 'HD', 4.3, '2022-07-07', '2022', 'Thriller, Horror', 'Emma Fitzpatrick, J. Quinton Johnson, Angela Gulner, Mark Meir, Salvador Chacon', '86 min', 'United States of America', 'Wicked Myth Films, Happy Little Guillotine Studios', 'https://dood.wf/e/7zqkbi339jywqwgwwe96ybup520adwil'),
(36, 'Gangs of Wasseypur - Part 2', 'wasseypur-2.jpg', 'HD', 8.2, '2012-08-08', '2012', 'Action, Crime, Thriller', 'Nawazuddin Siddiqui, Huma Qureshi, Richa Chadda, Rajkummar Rao, Tigmanshu Dhulia', '160 min', 'India', 'Viacom 18 Motion Pictures, Anurag Kashyap Films, Jar Pictures', 'https://dood.wf/e/zzpl5y84jsy2vhd6p2ysac8pk45wuiv0'),
(37, 'Wayward', 'wayward.jpg', 'HD', 4.6, '2022-06-14', '2022', 'Drama, Thriller, Horror', 'Megan McCormick, Stephanie Moore, J.J. Green, Darius McCrary, Barton Fitzpatrick', '75 min', 'United States of America', 'In the Works Productions', 'https://dood.wf/e/vvlp3r8irv1g0ou4xz55pomvarecm8pf'),
(38, 'Rubikon', 'rubikon.jpg', 'HD', 4.7, '2022-07-01', '2022', 'Thriller, Science Fiction', 'Julia Franz Richter, Mark Ivanir, Jonas Emilian Gerzabek, Nicholas Monu, Lupo Grujcic', '110 min', 'Austria', 'Graf Film, Samsara Filmproduktion', 'https://dood.wf/e/c2goub0s85x3yczqv34ngndb5r8p5y7t'),
(39, 'Endangered', 'endangered.jpg', 'HD', 6.2, '2022-06-12', '2022', 'Documentary', 'N/A', '90 min', 'United States of America', 'HBO Documentary Films, Loki Films, Ronan Production Group', 'https://dood.wf/e/2wl29j7hg6esp5171e74frew5kpp4bgi'),
(40, 'Blasted', 'blasted.jpg', 'HD', 4.8, '2022-06-22', '2022', 'Comedy, Science Fiction', 'Fredrik Skogsrud, Axel Bøyum, Trim Balaj, Ingrid Bolsø Berdal, André Sørum', '114 min', 'Norway', 'Miso Film Norge, Drylab, Dagslys, Sound Troop', 'https://dood.wf/e/7vq492ud1xz7s9p8qv0r7k9okxqr0cox'),
(41, 'Interstellar', 'interstellar.jpg', 'HD', 8.6, '2014-11-05', '2014', 'Adventure, Drama, Science Fiction', 'Mark Casimir Dyniewicz, Matt Damon, Liam Dickinson, Casey Affleck, Elyes Gabel', '169 min', 'United Kingdom, United States of America', 'Legendary Entertainment, Syncopy, Lynda Obst Productions', 'https://dood.wf/e/d7nlxl4frbdklrvzjj8s16b8e7tc2bpw'),
(42, 'Runway 34', 'runway.jpg', 'HD', 7.1, '2022-04-29', '2022', 'Drama, Thriller', 'Rakul Preet Singh, Amitabh Bachchan, Aakanksha Singh, Ajay Devgn, Boman Irani', '141 min', 'India', 'Ajay Devgn FFilms', 'https://dood.wf/e/ohxoaxs1rlfgjd9y1q55tubvi9rvyy12'),
(43, 'The Shawshank Redemption', 'shawshank.jpg', 'HD', 9.3, '1994-09-23', '1994', 'Drama, Crime', 'James Whitmore, William Sadler, David Proval, Rohn Thomas, Sergio Kato', '142 min', 'United States of America', 'Castle Rock Entertainment, Warner Bros. Pictures', 'https://dood.wf/e/n5vx5hyl2uk9e1dppll6h8xpi0ky99lc'),
(44, 'The Godfather', 'the-godfather.jpg', 'HD', 9.2, '1972-03-14', '1972', 'Drama, Crime', 'Richard Bright, Rudy Bond, John Marley, Robert Duvall, Al Pacino', '175 min', 'United States of America', 'Paramount, Alfran Productions', 'https://dood.wf/e/1fz99swrvuwievucf6btmz9x81d67dbm'),
(45, 'The Dark Knight', 'the-dark-knight.jpg', 'HD', 9, '2008-07-16', '2008', 'Drama, Action, Crime, Thriller', 'James Fierro, Monique Gabriela Curnen, Nydia Rodriguez Terracina, Olumiji Olawumi, Helene Wilson', '152 min', 'United Kingdom, United States of America', 'DC Entertainment, DC Comics, Legendary Entertainment, Syncopy, Warner Bros. Pictures, Warner Bros. Entertainment, Isobel Griffiths Limited', 'https://dood.wf/e/mclgvl34aywjim0whd26xfgq5ixv6ezy'),
(46, 'The Godfather: Part II', 'the-godfather-2.jpg', 'HD', 9, '1974-12-20', '1974', 'Drama, Crime', 'Al Pacino, Robert Duvall, Diane Keaton, Robert De Niro, John Cazale', '202 min', 'United States of America', 'Paramount, The Coppola Company', 'https://dood.wf/e/breup27xm5vkylzb56uk4givf68ygew4'),
(47, '12 Angry Men', 'angry-men.jpg', 'HD', 8.9, '1957-03-25', '1957', 'Drama', 'Henry Fonda, Martin Balsam, John Fiedler, Lee J. Cobb, E.G. Marshall', '97 min', 'United States of America', 'United Artists, Orion-Nova Productions', 'https://dood.wf/e/aachdds5buvm6qt12bkrywv3flv2e0to'),
(48, 'Schindler\'s List', 'schindler-list.jpg', 'HD', 8.9, '1993-11-30', '1993', 'Drama, History, War', 'Jonathan Sagall, Michael Schneider, Kamil Krawiec, Hans-Michael Rehberg, Branko Lustig', '195 min', 'United States of America', 'Universal Pictures, Amblin Entertainment', 'https://dood.wf/e/fr5c9ela0kj42zphkys1852g8le66blx'),
(49, 'The Lord of the Rings: The Return of the King', 'return-of-the-king.jpg', 'HD', 8.9, '2003-12-01', '2003', 'Adventure, Fantasy, Action', 'Liv Tyler, Miranda Otto, Sean Bean, Dominic Monaghan, Harry Sinclair', '201 min', 'New Zealand, United States of America', 'New Line Cinema, WingNut Films, The Saul Zaentz Company', 'https://dood.wf/e/xem6z5w81tq2nvniwhbjkkbbaw3h2ys2'),
(50, 'Pulp Fiction', 'pulp-fiction.jpg', 'HD', 8.8, '1994-09-10', '1994', 'Thriller, Crime', 'Jerome Patrick Hoban, Emil Sitka, Gary Shorelle, Stephen Hibbert, Laura Lovelace', '154 min', 'United States of America', 'Miramax, A Band Apart, Jersey Films', 'https://dood.wf/e/r1yqkwd1thkylff0r21q7jyi0k5glli7'),
(51, 'The Lord of the Rings: The Fellowship of the Ring', 'the-fellowship-of-the-ring.jpg', 'HD', 8.8, '2001-12-18', '2001', 'Adventure, Fantasy, Action', 'Noel Appleby, Orlando Bloom, Elijah Wood, Victoria Beynon-Cole, Chris Streeter', '178 min', 'New Zealand, United States of America', 'New Line Cinema, WingNut Films, The Saul Zaentz Company', 'https://dood.wf/e/smhjajc24r6t19ucagbgvfona970ok7o'),
(52, 'The Good, the Bad and the Ugly', 'the-good-the-bad-and-the-ugly.jpg', 'HD', 8.8, '1966-12-23', '1966', 'Western', 'Clint Eastwood, Eli Wallach, Lee Van Cleef, Aldo Giuffrè, Luigi Pistilli', '161 min', 'United States of America, Italy, Spain, Germany', 'United Artists, Constantin Film Produktion, Produzioni Europee Associati (PEA), Arturo González Producciones Cinematográficas S.A.', 'https://dood.wf/e/ky3xo0hxvbnuj3hytpr3fd1cdvdda9wm'),
(53, 'Forrest Gump', 'forrest-gump.jpg', 'HD', 8.8, '1994-07-06', '1994', 'Comedy, Drama, Romance', 'George Kelly, Mark Matheisen, Tom Hanks, Michael Conner Humphreys, Mykelti Williamson', '142 min', 'United States of America', 'Paramount', 'https://dood.wf/e/h91j7yrfq2xkbtmwe88ty3fr25za5h3o'),
(54, 'Fight Club', 'fight-club.jpg', 'HD', 8.7, '1999-10-15', '1999', 'Drama', 'Dierdre Downing-Jackson, Paul Carafotes, Stuart Blumberg, Holt McCallany, Lauren Sánchez', '139 min', 'Germany, United States of America', 'Regency Enterprises, Fox 2000 Pictures, Taurus Film, Atman Entertainment, Knickerbocker Films, 20th Century Fox, The Linson Company', 'https://dood.wf/e/28ny0slrzfzbqkbemhtmjc2xm9do5xsg'),
(55, 'Inception', 'inception.jpg', 'HD', 8.7, '2010-07-15', '2010', 'Action, Thriller, Science Fiction, Mystery, Adventure', 'Joseph Gordon-Levitt, Marc Raducci, Miranda Nolan, Marion Cotillard, Cillian Murphy', '148 min', 'United Kingdom, United States of America', 'Legendary Entertainment, Syncopy, Warner Bros. Pictures', 'https://dood.wf/e/n99yn2kv7swxub3epuwakqlj5jslr1h0'),
(56, 'The Lord of the Rings: The Two Towers', 'the-two-towers.jpg', 'HD', 8.7, '2002-12-18', '2002', 'Adventure, Fantasy, Action', 'Miranda Otto, Sean Astin, Alistair Browning, Billy Boyd, Nathaniel Lees', '179 min', 'New Zealand, United States of America', 'New Line Cinema, WingNut Films, The Saul Zaentz Company', 'https://dood.wf/e/p09uchk6vsub4mc24w56l8anqz0tgvkx'),
(57, 'The Empire Strikes Back', 'the-empire-strikes-back.jpg', 'HD', 8.7, '1980-05-20', '1980', 'Adventure, Action, Science Fiction', 'Mark Hamill, Kenny Baker, John Morton, Robin Scobey, Jeremy Bulloch', '124 min', 'United States of America', 'Lucasfilm, 20th Century Fox', 'https://dood.wf/e/sgwwehfp74bhk0m9i0zbglla7milyq3f'),
(58, 'The Matrix', 'matrix.jpg', 'HD', 8.7, '1999-03-30', '1999', 'Action, Science Fiction', 'Marcus Chong, Rowan Witt, Robert Taylor, Paul Goddard, Janaya Pender', '136 min', 'Australia, United States of America', 'Village Roadshow Pictures, Groucho II Film Partnership, Silver Pictures, Warner Bros. Pictures', 'https://dood.wf/e/0sgphxk56yl4fyk3flhgi1907146y74g'),
(59, 'GoodFellas', 'goodfellas.jpg', 'HD', 8.7, '1990-09-12', '1990', 'Drama, Crime', 'Ray Liotta, Robert De Niro, Joe Pesci, Lorraine Bracco, Paul Sorvino', '145 min', 'United States of America', 'Winkler Films', 'https://dood.wf/e/zkw9krba3snc8f60blr6ntbmk29s0ugs'),
(60, 'One Flew Over the Cuckoo\'s Nest', 'one-flew-over.jpg', 'HD', 8.6, '1975-11-18', '1975', 'Drama', 'Jack Nicholson, Louise Fletcher, Danny DeVito, William Redfield, Scatman Crothers', '133 min', 'United States of America', 'United Artists, Fantasy Films, Warner Bros. Pictures', 'https://dood.wf/e/brk18baxhtlq636y97kzw17rklyqkjm5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movieinfo`
--
ALTER TABLE `movieinfo`
  ADD PRIMARY KEY (`S.N`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
