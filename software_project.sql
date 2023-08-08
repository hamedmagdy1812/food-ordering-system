-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 05:08 PM
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
-- Database: `software_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `Total price` int(11) NOT NULL,
  `Order details` varchar(100) NOT NULL,
  `Product ID` varchar(100) NOT NULL,
  `Product Name` varchar(100) NOT NULL,
  `Order Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Type` varchar(30) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Price` int(30) NOT NULL,
  `Description` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Type`, `Name`, `Price`, `Description`, `Image`) VALUES
('Pasta', 'Mac and Cheese', 165, 'it is a combination of cheeses, layered in the dish as well as melted into a rich and creamy cheese sauce with pasta and chicken pieces, for the ultimate in cheesy deliciousness!	', 'images/mac_and_cheese.jpg'),
('Pasta', 'Fettuccine Alfredo', 150, 'Fettuccine Alfredo with Romano and Parmesan cheeses, cream, and butter. This delicious sauce for fettuccine pasta is rich in taste!	', 'images/Fettuccine_Alfredo.jpg'),
('Pasta', 'pasta seafood', 200, 'This seafood pasta is a mix of shrimp, clams, mussels and scallops, all tossed together with spaghetti in a homemade tomato sauce.', 'images/pasta_seafood.jpg'),
('Beef', 'Twin grilled steak', 353, '250 grams of Marinated Grilled Twin Steak Served With Your Choice Of Sauce, grilled zucchini and summer squash, thick fries. The juicy dish perfect for dinner.', 'images/Twin_grilled_steak.png'),
('Beef', 'Grilled Piccata Creamy Mushroom Sauce', 342, '230 Grams Grilled Marinated Beef Piccata topped with mushroom sauce with the side of your choice.', 'images/Grilled_Piccata_Creamy_Mushroom_Sauce.jpg'),
('Beef', 'Grilled Piccata Sun Dried Tomatoes with Spinach Sauce', 370, '230 Grams Grilled Marinated Beef Piccata with sun dried tomatoes and spinach sauce with the side of your liking.', 'images/Grilled_Piccata_Sun_Dried_Tomatoes_With_Spinach_Sauce.jpg'),
('Chicken', 'Grilled Cordon Bleu Chicken', 297, 'Juicy Chicken stuffed with ham and cheese, coated with crunchy golden breadcrumbs. You\'d swear it\'s fried – but it\'s Grilled.', 'images/Cordon_Bleu.jpg'),
('Chicken', 'Monterey Chicken', 311, 'Monterey chicken is a Chili\'s copycat that features seasoned chicken breasts smothered in barbecue sauce, cheese, bacon and tomatoes with the side of your liking.', 'images/monterey_chicken.png'),
('Chicken', 'italian chicken marinade', 350, 'The marinade is a balanced tangy, savory blend of olive oil, red wine vinegar, balsamic vinegar, lemon juice, pantry Italian herbs and spices.', 'images/Italian-Chicken-Marinade.jpg'),
('Appetizers', 'Santa Fe Chicken Rolls', 210, 'Delicious hand-rolled wraps filled with chicken, corn, black beans and chunks of peppers that give an authentic southwestern flavor. Served with cheese sauce.', 'images/santa-fe-chicken-rolls.jpg'),
('Appetizers', 'Fried Mozzarella', 114, 'Delicious Fried Mozzarella served with Ranch and Marinara sauce. The best starter to begin your meal with.', 'images/Fried-Mozzarella.png'),
('Appetizers', 'Beef Nachos', 205, 'Tortilla bread nachos topped with sour cream, butter and beef with the deliciousness of red, american and parmesan cheese and veggies.', 'images/Beef-Nachos.png'),
('Pizza', 'Pizza Seafood', 360, 'seafood and ranch, what better pizza combo can you find?', 'images/Pizza_seafood.jpg'),
('Pizza', 'Hawaiian Pizza', 342, 'This crowd-pleasing Classic Hawaiian Pizza combines pizza sauce, cheese, cooked ham, and pineapple.', 'images/Hawaian_pizza.jpg'),
('Pizza', 'Pizza Quattro Fromaggi', 299, 'Italian pizza topped with a variety of combination of four kinds of cheese mozzarella, Fontina, Parmesan, and Roquefort.', 'images/Quattro_fromaggi.jpg'),
('Sandwiches', 'Salmon Sandwich', 270, 'Fresh salmon fillets are smoked to juicy perfection and then tucked into a brioche bun with tartar sauce, arugula, and pickles.', 'images/Salmon_Sandwich.jpg'),
('Sandwiches', 'Tuna Sandwich', 230, 'A sandwich made with tuna salad, a salad made with canned tuna, mayo, and optionally hard boiled eggs, pickles, onions.', 'images/Tuna_Sandwich.jpg'),
('Sandwiches', 'Roast Beef Sandwich', 210, 'This Roast Beef Sandwich Recipe is loaded up with thinly sliced roast beef, vegetables, and creamy horseradish sauce on a Kaiser Bun.', 'images/roast-beef_sandwich.jpg'),
('Drinks', 'Blue Hawaii', 150, 'The Blue Hawaii is a tropical cocktail made of pineapple juice, Blue Curaçao, sweet and sour mix. Very refreshing for the weekend!', 'images/Blue_Hawai.jpg'),
('Drinks', 'Pina Colada', 165, 'It\'s a refreshing and tropical drink made with fresh pineapple, coconut milk, and water.', 'images/pina_colada.png'),
('Drinks', 'Coca Cola', 95, 'Refreshing soft coca cola drink served with ice Cubes.', 'images/Cola.jpg'),
('Dessert', 'Red Velvet', 250, 'Red velvet cake is, at its core, a cocoa-based cake in which using vinegar, baking soda, and buttermilk gives the cake a smooth, tightly crumbed.', 'images/Red_Velvet.jpg'),
('Dessert', 'Tiramisu', 245, 'cake infused with a liquid such as coffee, layered with mascarpone cheese, and topped with cocoa.', 'images/tiramisu-cake.jpg'),
('Dessert', 'Pan Cakes', 285, 'These Pancakes are light and fluffy with a soft crust and spongy texture. Delicious when served with butter and lots of pure maple syrup.', 'images/Pan_cake.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `customer_email` varchar(100) NOT NULL,
  `items` text NOT NULL,
  `total_amount` int(100) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`customer_email`, `items`, `total_amount`, `payment`) VALUES
('ahmed@gmail.com', '  Pina Colada', 165, 'visa'),
('nezar@gmail.com', '  Mac and Cheese  Salmon Sandwich  Coca Cola', 530, 'visa'),
('nezar@gmail.com', '  Coca Cola', 95, 'visa'),
('nezar@gmail.com', '  Grilled Cordon Bleu Chicken  Tuna Sandwich  Pina Colada', 692, 'visa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `contact`, `email`, `password`, `type`) VALUES
('Mohamed', 'Hisham', '01151191112', 'mohamed@gmail.com', 'mohamedh', 'admin'),
('nezar', 'ahmed', '01156673301', 'nezar@gmail.com', 'nezara', 'customer'),
('hamed', 'magdy', '01021222030', 'hamed@gmail.com', 'hamedm', 'customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
