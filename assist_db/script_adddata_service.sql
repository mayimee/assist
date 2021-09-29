-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2021 at 10:35 AM
-- Server version: 8.0.26
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assist_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_type` varchar(45) NOT NULL,
  `service_description` varchar(5000) NOT NULL,
  `service_price` varchar(45) NOT NULL,
  `service_companyName` varchar(100) NOT NULL,
  `service_image` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_type`, `service_description`, `service_price`, `service_companyName`, `service_image`, `date_created`, `date_updated`) VALUES
(1, 'House Keeping', 'Cleaning and Maintenance', 'We clean deeply so you can rest easy. We are a professional home services company that is dedicated to helping un-mess people’s lives and delivering with happiness. We believe there’s nothing like coming home to a clean place, and that a tidy and well-ordered home is a setting that allows for good health and happiness to happen. Leave it all to our team of Happy Helpers so you can spend time on what matters most to you.', '500.00', 'Happy Helpers', '../assets/products/1.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(2, 'Aircon Cleaning', 'Cleaning and Maintenance', 'Have your air conditioning unit professionally cleaned by well-trained technicians. CleanSource Solutions Philippines is a one-stop shop for your aircon cleaning services needs. Our cleaning process includes pressure washing as well as drain & filter cleaning to ensure that  deep-seated grime will be removed. We also do Freon (refrigerant) charging to keep the efficiency of your aircon\'s cooling system. Do you also require aircon check up & fixing? Our team can assess your unit and conduct aircon repair at a very competitive price. Feel free to contact us and inquire about our affordable rates.', '1500.00', 'Clean Source Solutions', '../assets/products/2.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(3, 'Manicure', 'Wellness and Personal Grooming', 'The Manicure Company professional nail and Manicure products have been meticulously formulated to the highest standards. Tested and approved by nail professionals, our range has quickly been adopted by some of the country\'s top nail salons. Designed for the professional environment our products ensure a smooth, strong and beautiful nail enhancement is created each and every time. Gel nail polish or Shellac has fast become the most widely used gel nail product in the industry. The Manicure Company professional gel nail polish collection consists of over 150 stunning, richly pigmented, smooth and opaque colours. Each shades formulation is designed to apply with ease, self-level, cure under both UV and LED light and last for a minimum of 14 days.', '100.00', 'The Manicure Company', '../assets/products/3.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(4, 'Massage', 'Wellness and Personal Grooming', 'At Elements Massage we do one thing: massage, and we are proud of our high client satisfaction scores. Experience the difference with our month-to-month membership program, the Elements Wellness Program, and our guarantee, The Elements Promise— all built around our therapeutic, handcrafted, and personalized approach to massage that we call The Elements Way.', '500.00', 'Elements Massage', '../assets/products/4.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(5, 'Massage', 'Wellness and Personal Grooming', 'At Elements Massage we do one thing: massage, and we are proud of our high client satisfaction scores. Experience the difference with our month-to-month membership program, the Elements Wellness Program, and our guarantee, The Elements Promise— all built around our therapeutic, handcrafted, and personalized approach to massage that we call The Elements Way.', '500.00', 'Elements Massage', '../assets/products/5.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(6, 'Van Rental', 'Transport', 'Airport Van Rental is a family-owned company and we are active in the community. We have been in the vehicle rental business for over 12 years, renting all types of vehicles, and now specializing in Vans. We decided to become a van rental company because we felt it was an area we could do better in than any other company.\r \r We are the recognized industry leader in Van Rentals. We know from our years of experience and customer feedback, that the typical car rental company does not offer our specialized van rental personal service. When you rent a regular car, most people have a general idea of its features. But getting the exact van rentals for their special needs often requires a phone call or two to make certain that you get the perfect van. And our customer agents welcome your phone calls and are thoroughly knowledgeable about all of the features of our extensive airport van rental fleet.', '4000.00', 'Airport Van Rental', '../assets/products/6.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(7, 'Paint Works', 'Construction', 'Welcome Home! Those may be the two most powerful words in the English language.  As residential painting specialists, we know that your home is not just where you live, but your sanctuary, the place where you define who you are, or who you can become. Your home deserves to be as unique as you are.', '1500.00', 'Cloudland Paintworks', '../assets/products/7.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(8, 'Gardening', 'Cleaning and Maintenance', 'Gardener\'s Supply was founded in 1983 by a handful of enthusiastic Vermont gardeners. Today, we serve millions of gardeners nationwide, offering everything from seed-starting supplies, and garden furniture to flower supports and garden carts. Though our company has grown, we remain passionately committed to providing garden-tested, earth-friendly products that will help our customers have more fun and success in their gardens.\n\nGardener\'s Supply is proud to be employee-owned. We are gardeners ourselves and have earned our customers\' trust by providing high-quality products, expert information, and friendly, personalized service.\n\nWe understand the products we sell because we use them in our own gardens. Regular product training sessions and a gardening certification program for our staff help us provide the best service and support in the business.', '1000.00', 'Gardeners', '../assets/products/8.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(9, 'Plumbing', 'Construction', 'At Aqueduct Plumbing Company, LLC we provide the full range of plumbing services. No matter how big or small the job we are eager to help you to have a properly designed and functioning plumbing system. Plumbing leaks, under slab copper pipe leaks, slow drains, broken drains and sewer issues are some of the most common and nerve racking issues that confront homeowners at one time or another. We are able to pinpoint seemingly hidden and hard to find leaks through our experience with camera inspection, leak detection, isolation and hydrostatic testing. We try to use the least invasive method when tackling some of these larger jobs and are proficient at tunneling, re-routing, re-piping.', '3000.00', 'Aqueduct Plumbing', '../assets/products/9.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(10, 'Photography', 'Events', 'We specialize in wedding photography, corporate, family and senior portraits, often traveling to your destination to capture the perfect moment in the perfect place. From the shores here in Lake Geneva to the beaches of Lake Michigan in Milwaukee and Chicago and beyond. We will be there with you every step of the way to guarantee your special moments are captured for all time.\n\nTo us photography is about people being real and then letting us paint a picture of that moment to remember it forever. This is the story that matters most: real people, real stories, real moments.\n\nWe are incredibly blessed to have a team of photographers who work with us on any given weekend. Please take a few minutes to get to know us.', '10000.00', 'Matt Mason Photography', '../assets/products/10.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(11, 'Haircut', 'Wellness and Personal Grooming', 'The Haircut Company offers great hairstyles for the entire family at practical prices.\n\nOur team of stylists are passionate about their work because of their love for the professional beauty industry.\n\nWe consistently exceed our client\'s expectations by providing a warm greeting, exceptional service, and a sincere thank you. The Haircut Company is a Full-Service Salon offering a wide range of services including men\'s, women\'s, and kid\'s haircuts, perms, coloring, and highlights. The salon provides a casual, comfortable, and friendly atmosphere perfect for the entire family.', '200.00', 'The Hair Cut Company', '../assets/products/11.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(12, 'Laundry', 'Cleaning and Maintenance', 'We’re working to disrupt and rewrite the poisonous standards of dry cleaning & wash-and-fold, keeping your laundry clean, and you and our environment healthy . . . ', '400.00', 'The Eco Laundry Company', '../assets/products/12.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(13, 'Carpentry', 'Construction', 'Carpentry Contractors Company has been providing carpentry labor to the residential professional home builders since 1980. We are dedicated to having the safest working conditions possible and producing the highest quality end product. We provide an industry leading safety program along with skills training for one of the largest and most experienced group of professional carpenters in the country.', '5000.00', 'Carpentry Contractors Company', '../assets/products/13.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(14, 'Engine Overhaul', 'Vehicle Repair', 'Our Name Says It All! The Car Repair Company!Started in 1980, The Car Repair Company has become one of the longest operating AUTO REPAIR Facilities in the country. Fast forward to now, we are still an AWARD WINNING AAA APPROVED Facility.  Done Right, And On Time.  Book the vehicle repair experience you deserve with us.', '8000.00', 'Car Repair Company', '../assets/products/14.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22'),
(15, 'Ironing', 'Cleaning and Maintenance', 'Providing first class ironing, laundry, dry cleaning, alteration & repair services \nin Hemel Hempstead, Berkhamsted, Tring and surrounding areas.', '400.00', 'The Ironing Co', '../assets/products/15.png', '2021-09-28 11:28:50', '2021-09-29 11:36:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
