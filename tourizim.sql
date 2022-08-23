-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 03:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourizim`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com'),
(2, 'ad1', 'ad1', 'ad1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(20) NOT NULL,
  `name` varchar(120) NOT NULL,
  `location` varchar(100) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amenity_1` varchar(50) DEFAULT NULL,
  `amenity_2` varchar(50) DEFAULT NULL,
  `amenity_3` varchar(50) DEFAULT NULL,
  `amenity_4` varchar(50) DEFAULT NULL,
  `amenity_5` varchar(50) DEFAULT NULL,
  `act_1` varchar(50) DEFAULT NULL,
  `act_2` varchar(50) DEFAULT NULL,
  `act_3` varchar(50) DEFAULT NULL,
  `act_4` varchar(50) DEFAULT NULL,
  `act_5` varchar(50) DEFAULT NULL,
  `link` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `name`, `location`, `price`, `property_type`, `image`, `description`, `amenity_1`, `amenity_2`, `amenity_3`, `amenity_4`, `amenity_5`, `act_1`, `act_2`, `act_3`, `act_4`, `act_5`, `link`, `status`) VALUES
(1, 'Dzimbahwe Guest Lodge', 'Victoria Falls', '79.00', 'Lodge', 'Dzimbahwe.png', 'Located in Victoria Falls, within 2.7 km of Elephant\'s Walk Shopping & Artist Village and 3.3 km of The Big Tree at Victoria Falls, Dzimbahwe Guest Lodge offers accommodation with free WiFi. The falls are 5 km away.', 'Swimming Pool', 'Free Wi_fi', 'Free Parking', 'Tv or Cable', 'Non-smoking Room', 'Playground Site', 'Walking Trails', 'Victoria Falls National Park', 'Garden VIew', 'Zipline', 'Dzimbahwe.php', '1'),
(2, 'Bayete Guest Lodge', 'Victoria Falls', '230.00', 'Lodge', 'Bayete.png', 'Bayete Guest Lodge is a family run lodge which offers 30 rooms set in a lush tropical garden. Central to the lodge is the large teardrop swimming pool, which is hugged by the Dining Boma and Bar. The Tavern is steeped in history and character', 'Swimming Pool', 'Free Wi_fi', 'Breakfast Included', 'Accessible to Disabled', 'Non-smoking Room', 'Museum', 'Boat Rides', 'Victoria Falls National Park', 'Garden VIew', 'Zipline', '404.html', '1'),
(3, 'Troutbeck Resort', 'Nyanga', '192.00', 'Resort', 'Troutbeck.png', 'Set in Nyanga, 34 km from Rhodes Nyanga National Park, Troutbeck Resort offers accommodation with a restaurant, free private parking, an outdoor swimming pool and a bar. Among the various facilities', 'Swimming Pool', 'Bar', 'Free Parking', 'Tv or Cable', 'Restaurant/Food', 'Kayaking', 'Fishing', 'Hiking', 'Mountain Views', 'Horse Riding ', '404.html', '1'),
(4, 'Masvingo Boutique Hotel', 'Masvingo', '80.00', 'Hotel', 'MasBo.png', 'The perfect place to lose yourself in a book or watch the sun set as you feel the strength of its glow on your cheeks. We have the perfect landscape for hiking, from short walks around the property to climbing the highest mountain in Zimbabwe', 'Swimming Pool', 'Free Wi_fi', 'Free Parking', 'Tv or Cable', 'Non-smoking Room', 'Playground Site', 'Walking Trails', 'Garden VIew', 'Relaxing', 'Town', '404.html', '1'),
(6, 'Bulawayo\'s Best Spot', 'Bulawayo', '55.00', 'Home', 'BestSpot.png', 'Bulawayo\'s best spot just got better. A bigger version of our already popular \'Bulawayo\'s Best Spot\'. It is super close to town and has a huge garden and swimming pool, with your own private entrance. Equippped with solar lights and gas stove in the event', 'Swimming Pool', 'Free Wi_fi', 'Pet-Allowed', 'Tv or Cable', 'Restaurant/Food', 'Museum', 'Playground Site', 'Garden VIew', 'Relaxing', 'Town', '404.html', '1'),
(7, 'Zumbane Lodge', 'Nyanga', '180.00', 'Lodge', 'Zumbane.png', 'Overlooking a typical rural African landscape and hazy blue mountains, lies a place so calm and so filled with peace With a rustic yet modern setting it sleep four people and provides a sense of being in the wild but has your modern conveniences.', 'Private patio or balcony', 'Free Wi_fi', 'Free Parking', 'Indoor Fireplace', 'Kitchen', 'Valley View', 'Walking Trails', 'Garden VIew', 'Valley View', 'Horse Riding ', '404.html', '1'),
(8, 'Singita Pamushana Lodge', 'Masvingo', '133.00', 'Lodge', 'Singita.png', 'Nestled in a forest overlooking a spectacular dam in south-eastern Zimbabwe\'s Malilangwe Wildlife Reserve, the all-inclusive Singita Pamushana Lodge offers secluded luxury amid breathtaking views.', 'Swimming Pool', 'Bar', 'Spa', 'Hot Tub', 'Restaurant/Food', 'Valley View', 'Fishing', 'Hiking', 'Mountain Views', 'Horse Riding ', '404.html', '1'),
(9, 'The Victoria Falls Hotel', 'Victoria Falls ', '374.00', 'Hotel', 'VicFalls.png', 'Victoria Falls Hotel’s charming Edwardian-style building transports guests back in time to an era of ageless elegance and grandeur. A member of the exclusive group of the globe’s top-tier hotels.', 'Swimming Pool', 'Free Wi_fi', 'Spa', 'Accessible to Disabled', 'Restaurant/Food', 'Valley View', 'Fishing', 'Victoria Falls National Park', 'Mountain Views', 'Bungee Jumping', '404.html', '1'),
(10, 'Old Drift Lodge', 'Victoria Falls', '550.00', 'Lodge', 'OldDrift.png', 'The elegant Old Drift Lodge sits on the lip of the mighty Zambezi River, offering a luxury safari getaway that will delight avid and first-time safari-goers alike', 'Swimming Pool', 'Free Wi_fi', 'Spa', 'Indoor Fireplace', 'Restaurant/Food', 'Safari', 'Boat Rides', 'Hiking', 'Valley View', 'Scenic helicopter flights', '404.html', '1'),
(11, 'Chundu Island', 'Victoria Falls', '880.00', 'Resort', 'Chundu.png', 'Private and peaceful, a birdlover’s paradise bounded by wildlife, here you will find the best of Africa’s natural offerings from a seasonal beach and flooded marshes to lush wetlands and open grasslands', 'Swimming Pool', 'Free Wi_fi', 'Breakfast Included', 'Free Parking', 'Bar', 'Playground Site', 'Fishing', 'Hiking', 'Valley View', 'Canoeing', '404.html', '1'),
(12, 'Amanzi Lodge', 'Harare', '215.00', 'Lodge', 'Amanzi.png', 'A stay in Amanzi Lodge, with its stunning waterfalls, spectacular landscaped gardens and rare cycad collection is truly a memorable African experience.', 'Swimming Pool', 'Free Wi_fi', 'Free Parking', 'Tv or Cable', 'Restaurant/Food', 'Bar', 'Playground Site', 'Garden VIew', 'Relaxing', 'Town', '404.html', '1'),
(13, 'Matobo Hills Lodge', 'Matobo National Park ', '290.00', 'Lodge', 'Matobo.png', 'The Matobo Hills are renowned not only for their beauty and abundant flora and fauna but also for their unique historical, cultural and spiritual significance', 'Swimming Pool', 'Bar', 'Free Parking', 'Breakfast Included', 'Non-smoking Room', 'Valley View', 'Walking Trails', 'Hiking', 'Relaxing', 'Canoeing', '404.html', '1'),
(14, 'Amalinda Lodge', 'Matobo National Park', '936.00', 'Lodge', 'Amalinda.png', 'Driving over the magnificent granite whale-back dwalas famous to the UNESCO World Heritage Site of Matobo Hills brings you to the stunning Amalinda Lodge.', 'Swimming Pool', 'Bar', 'Pet-Allowed', 'Indoor Fireplace', 'Non-smoking Room', 'Safari', 'Playground Site', 'Hiking', 'Mountain Views', 'Other', '404.html', '1'),
(15, 'York Lodge', 'Harare', '168.00', 'Resort', 'York.png', 'York Lodge offers 18 elegant, spacious rooms with large verandas overlooking a lush garden oasis to guests all year round', 'Swimming Pool', 'Free Wi_fi', 'Breakfast Included', 'Tv or Cable', 'Bar', 'Playground Site', 'Other', 'Garden VIew', 'Relaxing', 'Town', '404.html', '1'),
(16, 'Livingstone Lodge', 'Victoria Falls', '79.00', 'Lodge', 'Living.png', 'Located in Victoria Falls, within a 5-minute drive of the town centre, Livingstone Lodge offers accommodation with free WiFi. The property features a swimming pool.', 'Swimming Pool', 'Free Wi_fi', 'Free Parking', 'Tv or Cable', 'Bar', 'Museum', 'Victoria Falls National Park', 'Garden VIew', 'Relaxing', 'Town', '404.html', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `verify_token` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `name`, `email`, `verify_token`, `is_verified`, `created`, `modified`, `status`) VALUES
(2, 'Aamilah Dawood', 'H200108W@hit.ac.zw', '8f446a0b561da781e100aa8335b9622d', 0, '0000-00-00 00:00:00', '2022-03-27 20:44:01', 1),
(3, 'Aamilah Dawood', 'aamilahdawood65@gmail.com', '824cb53fb00009dcf75c43ea873d8590', 0, '0000-00-00 00:00:00', '2022-03-27 20:47:44', 1),
(5, 'Emily', 'tourizimnow@gmail.com', 'b6b2e1cc46bb8ce43804c3abdce55493', 0, '0000-00-00 00:00:00', '2022-04-03 13:07:17', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
