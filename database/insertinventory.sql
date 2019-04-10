



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";





-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

/* CREATE TABLE `inventory` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` float NOT NULL,
  `product_desc` varchar(70) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 */
--
-- Dumping data for table `inventory`

INSERT INTO `inventory` (`product_id`, `product_name`, `product_image`, `product_price`, `product_desc`, `product_quantity`) VALUES
(1, 'Protien', 'protien.jpg', 9.99, 'Satisfy your hunger and stay energized with the power of protein! Add Protein Drink Mix to your favorite Formula 1 shake to boost your protein intake to 24 g (without the addition of milk) or mix with water for a nutritious protein snack.', 20),
(2, 'Shakes', 'shake.jpg', 19.99, 'reat your body to a healthy, balanced meal in no time! Not only are these shakes easy to make, they’re also delicious. With up to 21 essential vitamins and minerals – and in a variety of flavors – weight management never tasted so good! Part of the Herbalife Nutrition.
', 25),
(3, 'Nutrition Bars', 'bars.jpg', 5.89, 'Protein Bars give you a protein boost and satisfy hunger. These delicious snacks support your weight management and healthy, active lifestyle goals.', 15),
(4, 'Health Management', 'health.jpg', 21.99, 'A daily multivitamin in tablet form with 21 essential micronutrients, including folic acid, calcium and iron, and antioxidant Vitamins A (as beta-carotene), C and E.', 35),
(5, 'Starter Packs', 'starter.jpg', 3.99, 'Get on the path to a healthy lifestyle with this easy-to-follow program. The Quickstart program can help you achieve healthy weight management‡ and Cellular Nutrition.', 40),
(6, 'Shakers', 'shakers.jpg', 7.99, 'Herbalife’s enhancers are designed to help accelerate your weight management goals. Whether you struggle with snacking, energy, fluid retention or digestion, we have all your bases covered.', 42),
(7, 'Herbalife 24', '24.jpg', 39.99, 'Balanced with carbohydrates, proteins, vitamins and minerals, Formula 1 Sport provides a healthy meal for athletes.', 50),
(8, 'Outer Nutrition', 'outer.jpg', 40.79, 'Suited for normal to dry skin, this program is the perfect start for everyone looking for a smooth, glowing complexion.', 30),
(9, 'Heart Health', 'lifeline.jpg', 89.59, 'Herbalifeline® is a specially formulated blend of highly refined marine lipids with high quality omega-3 fatty acids, eicosapentaenoic acid (EPA) and docosahexaenoic acid (DHA), which help to maintain a healthy cardiovascular system.*', 45),
(10, 'Weight Management Kit', 'weight.jpg', 79.99, 'Enhance your weight management‡ efforts with the Advanced program.', 34);


ALTER TABLE `inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

