-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 11:38 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'maulik', 'maulik@emil.com', '123'),
(2, 'maulik', 'maulik@emil.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `slidertitel` varchar(255) NOT NULL,
  `sliderimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `slidertitel`, `sliderimg`) VALUES
(1, 'banner1', 'upload/banner1.jpg'),
(2, 'banner2', 'upload/banner2.jpg'),
(3, 'banner3', 'upload/banner3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blogtitle` varchar(255) NOT NULL,
  `blogdescription` text NOT NULL,
  `blogimg` varchar(255) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blogtitle`, `blogdescription`, `blogimg`, `create_date`) VALUES
(1, 'testing purpose ', 'this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.this is  a testing purpose blog.', 'upload/blog/pani puri.webp', '2022-02-01'),
(2, 'this is second blog', 'Gol gappa (also known as pani puri) is a popular bite-size chaat consisting of a hollow, crispy-fried puffed ball that is filled with potato, chickpeas, onions, spices, and flavoured water, usually tamarind or mint, and popped into one’s mouth whole.Gol gappa (also known as pani puri) is a popular bite-size chaat consisting of a hollow, crispy-fried puffed ball that is filled with potato, chickpeas, onions, spices, and flavoured water, usually tamarind or mint, and popped into one’s mouth whole.Gol gappa (also known as pani puri) is a popular bite-size chaat consisting of a hollow, crispy-fried puffed ball that is filled with potato, chickpeas, onions, spices, and flavoured water, usually tamarind or mint, and popped into one’s mouth whole.Gol gappa (also known as pani puri) is a popular bite-size chaat consisting of a hollow, crispy-fried puffed ball that is filled with potato, chickpeas, onions, spices, and flavoured water, usually tamarind or mint, and popped into one’s mouth whole.Gol gappa (also known as pani puri) is a popular bite-size chaat consisting of a hollow, crispy-fried puffed ball that is filled with potato, chickpeas, onions, spices, and flavoured water, usually tamarind or mint, and popped into one’s mouth whole.Gol gappa (also known as pani puri) is a popular bite-size chaat consisting of a hollow, crispy-fried puffed ball that is filled with potato, chickpeas, onions, spices, and flavoured water, usually tamarind or mint, and popped into one’s mouth whole.', 'upload/blog/Bhel-Puri.jpg', '2022-02-02'),
(3, 'jfsfhgsdjfhsjdfhg', 'testing testing', 'upload/blog/Dosa.jpg', '2022-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` varchar(255) NOT NULL,
  `pro_qty` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`id`, `user_id`, `pro_id`, `pro_img`, `pro_name`, `pro_price`, `pro_qty`, `total`) VALUES
(38, 1, 2, 'upload/product/pani puri.webp', 'panipuri', '20', '2', '40'),
(39, 1, 3, 'upload/product/aloo-tikki.jpg', 'Aloo Tikki ', '50', '2', '100'),
(40, 0, 9, 'upload/product/bread-pakoda-.jpg', 'Bread Pakoda', '20', '2', '40'),
(41, 1, 11, 'upload/product/Dosa.jpg', 'Dosa ', '80', '1', '80'),
(42, 1, 8, 'upload/product/Dabeli.jpg', 'Dabeli', '30', '1', '30'),
(43, 1, 5, 'upload/product/Bhel-Puri.jpg', 'Bhel Puri ', '40', '1', '40'),
(44, 1, 12, 'upload/product/Manchurian.jpeg', 'Manchurian ', '120', '1', '120'),
(45, 1, 7, 'upload/product/Vada Pav.jpg', 'Vada Pav', '30', '2', '60');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `price` int(11) NOT NULL,
  `productimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `discription`, `price`, `productimg`) VALUES
(2, 'panipuri', 'Gol gappa (also known as pani puri) is a popular bite-size chaat consisting of a hollow, crispy-fried puffed ball that is filled with potato, chickpeas, onions, spices, and flavoured water, usually tamarind or mint, and popped into one’s mouth whole.', 20, 'upload/product/pani puri.webp'),
(3, 'Aloo Tikki ', 'Aloo tikki is a popular Indian street food snack made with boiled potatoes, aromatic spices and herbs. Aloo is the Hindi name for potatoes and tikki is a patty. So aloo tikki literally translates to potato patties. These Indian style potato patties are delicious, crisp and flavorful as a good amount of spices and herbs are used. They are eaten as a snack.', 50, 'upload/product/aloo-tikki.jpg'),
(4, 'Sev Puri', 'Sev puri recipe is a canape like snack – where crispy fried flour discs are topped with flavorful condiments, veggies, herbs, ground spices and more. Spicy, sweet, tangy, savory, salty, crunchy flavors – all bursting in your mouth in each bite. Learn to make this evergreen popular chaat snack with my authentic Mumbai style recipe. ', 30, 'upload/product/sev-puri.jpg'),
(5, 'Bhel Puri ', 'Bhel Puri is a very popular Mumbai street food snack made with puffed rice, puri, boiled potatoes, onions, various chutneys, herbs, ground spices and sev (fried gram flour vermicelli). This dish is easy to make at home. It is a tasty snack having a lot of flavors and textures – sour, tangy, crispy, sweet, salty, crunchy. This bhel recipe comes together in under 45 minutes with three real quick chutney recipes.', 40, 'upload/product/Bhel-Puri.jpg'),
(6, 'Samosa', 'A samosa is a fried or baked pastry with a savory filling, including ingredients such as spiced potatoes, onions, peas, chicken and/or other meats. It may take different forms, including triangular, cone, or half-moon shapes, depending on the region', 20, 'upload/product/somaso.jpg'),
(7, 'Vada Pav', 'Vada pav, alternatively spelt wada pao, ( listen) is a vegetarian fast food dish native to the state of Maharashtra. The dish consists of a deep fried potato dumpling placed inside a bread bun (pav) sliced almost in half through the middle. It is generally accompanied with one or more chutneys and a green chili pepper.', 30, 'upload/product/Vada Pav.jpg'),
(8, 'Dabeli', 'Dabeli, kutchi dabeli or double roti is a popular snack food of India, originating in the Kutch or Kachchh region of Gujarat. It is a sweet snack made by mixing boiled potatoes with a special dabeli masala, putting the mixture in a ladi pav (burger bun), and serving it with chutneys made from tamarind, date, garlic, red chilies and other ingredients. It is garnished with pomegranate and roasted peanuts.', 30, 'upload/product/Dabeli.jpg'),
(9, 'Bread Pakoda', 'Bread pakoda is an Indian fried snack (pakoda or fritter). It is also known as bread bhaji . A common street food, it is made from bread slices, gram flour, and spices among other ingredients.', 20, 'upload/product/bread-pakoda-.jpg'),
(10, 'Pav Bhaji ', 'Pav bhaji (Marathi : पाव भाजी) is a fast food dish from India consisting of a thick vegetable curry (bhaji) served with a soft bread roll (pav). Its origins are in the state of Maharashtra.', 80, 'upload/product/Pav-Bhaji.jpg'),
(11, 'Dosa ', 'A dosa is a thin pancake or crepe originating from South India, made from a fermented batter predominantly consisting of lentils and rice. ... Its main ingredients are rice and black gram, ground together in a fine, smooth batter with a dash of salt, then fermented.', 80, 'upload/product/Dosa.jpg'),
(12, 'Manchurian ', 'Manchurian is a class of Indian Chinese dishes made by roughly chopping and deep-frying ingredient such as chicken, cauliflower (gobi), prawns, fish, mutton, and paneer, and then sautéeing it in a sauce flavored with soy sauce. ... It has become a staple of Indian Chinese cuisine.', 120, 'upload/product/Manchurian.jpeg'),
(13, 'Burger ', 'A hamburger (or burger for short) is a food, typically considered a sandwich, consisting of one or more cooked patties—usually ground meat, typically beef—placed inside a sliced bread roll or bun. The patty may be pan fried, grilled, smoked or flame broiled. ... A hamburger topped with cheese is called a cheeseburger.', 50, 'upload/product/Burger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'maulik', 'maulikkapupara2805@email.com', '123'),
(2, 'abcd', 'abc@gmail.com', 'ancd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
