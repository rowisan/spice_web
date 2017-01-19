-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for spice
DROP DATABASE IF EXISTS `spice`;
CREATE DATABASE IF NOT EXISTS `spice` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `spice`;


-- Dumping structure for table spice.contact
DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `streat_1` varchar(60) DEFAULT NULL,
  `streat_2` varchar(60) DEFAULT NULL,
  `city` varchar(60) DEFAULT NULL,
  `state` varchar(60) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `status` enum('A','I','D') DEFAULT 'A' COMMENT 'A:ACTIVE\nI:INACTIVE\nD:DELETE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table spice.contact: ~0 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;


-- Dumping structure for table spice.customer
DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `status` enum('A','I','D') DEFAULT 'A' COMMENT 'A:ACTIVE\nI:INACTIVE\nD:DELETE',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table spice.customer: ~0 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;


-- Dumping structure for table spice.inquiry
DROP TABLE IF EXISTS `inquiry`;
CREATE TABLE IF NOT EXISTS `inquiry` (
  `index_no` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(50) DEFAULT '0',
  `customer_name` varchar(120) DEFAULT '0',
  `phone` varchar(20) DEFAULT '0',
  `email` varchar(60) DEFAULT '0',
  `message` text NOT NULL,
  `date_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('P','A','C','E','F') DEFAULT 'P' COMMENT 'P : PENDING; A: AUTO REPLY; C : CONTACT OVER PHONE;  E :CONTACT OVER EMAIL; F:FAILL TO CONTACT',
  `inform_customer` enum('P','I') DEFAULT 'P' COMMENT 'P : PENDING; I : INFORM',
  `inform_officer` enum('P','I') DEFAULT 'P' COMMENT 'P : PENDING; I : INFORM',
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB AUTO_INCREMENT=10005 DEFAULT CHARSET=utf8;

-- Dumping data for table spice.inquiry: ~4 rows (approximately)
/*!40000 ALTER TABLE `inquiry` DISABLE KEYS */;
INSERT INTO `inquiry` (`index_no`, `item_code`, `customer_name`, `phone`, `email`, `message`, `date_time`, `last_update_time`, `status`, `inform_customer`, `inform_officer`) VALUES
	(10000, 'c', 'CC', 'p', 'e', '', '2016-12-31 02:14:03', '2016-12-31 02:14:05', 'P', 'P', 'P'),
	(10001, 'cinnamon', 'Roshan Wijendra', '0775749849', 'Test Inquiry', 'Test Inquiry', '2016-12-31 02:21:15', '2016-12-31 03:03:20', 'P', 'P', 'P'),
	(10002, 'clove', 'Roshan Wijendra', '0775749849', 'roshan2signup@gmail.com', 'Test Inquiry Black Pepper', '2016-12-31 02:25:08', '2016-12-31 02:25:08', 'P', 'P', 'P'),
	(10003, 'cinnamon', 'Roshan Wijendra', '0775749849', 'wijendra.sped@gmail.com', 'sdfgsd', '2016-12-31 04:03:38', '2017-01-01 01:45:17', 'P', 'I', 'I'),
	(10004, 'nutmeg', 'Roshan Wijendra', '0775749849', 'roshan2signup@gmail.com', 'adwd wwdwd wewe wewe wewew sds a awd wdwa wdwe wewe', '2017-01-02 09:55:09', '2017-01-02 09:55:09', 'P', 'P', 'P');
/*!40000 ALTER TABLE `inquiry` ENABLE KEYS */;


-- Dumping structure for table spice.item
DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `index_no` int(11) NOT NULL AUTO_INCREMENT,
  `item_code` varchar(30) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `short_description` varchar(250) DEFAULT NULL,
  `description` text,
  `history` text,
  `product` text,
  `category` int(11) DEFAULT '1',
  `sub_category` int(11) DEFAULT '1',
  `family` varchar(65) DEFAULT NULL,
  `species` varchar(65) DEFAULT NULL,
  `common_name` varchar(65) DEFAULT NULL,
  `botanical_name` varchar(65) DEFAULT NULL,
  `status` enum('A','D','I') DEFAULT 'A' COMMENT 'A - Active; D - Delete; I - Inactive',
  PRIMARY KEY (`index_no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table spice.item: ~5 rows (approximately)
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` (`index_no`, `item_code`, `name`, `short_description`, `description`, `history`, `product`, `category`, `sub_category`, `family`, `species`, `common_name`, `botanical_name`, `status`) VALUES
	(1, 'cinnamon', 'Cinnamon', 'The Ceylon cinnamon or true cinnamon, is the dried bark of Cinnamomum zealanicum,  belongs to the family Lauraceae. It is indigenous to Sri Lanka.', '<p>The Ceylon cinnamon or true cinnamon, is the dried bark of Cinnamomum zealanicum,\r\n                                                belongs to the family Lauraceae. It is indigenous to Sri Lanka. \r\n                                                Cinnamomum zealanicum is an evergreen perenial plant with spirally arranged, \r\n                                                broad laminated dark green leaves having palmate venation.</p>\r\n\r\n                                            <p>Under natural conditions, the plant grows to a height of 10 - 15m with the girth of 30-50cm. \r\n                                                When coppiced from time to time it could be maintained as bush of 2-2.5m height \r\n                                                with multiple stems arising from its base. The flowers are small, \r\n                                                creamy and inconspicuous developing into dark purple ovoid one seeded berries, \r\n                                                about 1.5 - 2.5cm long. </p>\r\n\r\n                                            <p>\r\n                                                In Sri Lanka, cinnamon seems to have originated in the central hills where several species \r\n                                                of cinnamon occur sporadically in places such as Kandy, Matale, Belihull Oya, \r\n                                                Haputale and the Sinharaja forest range. Although cinnamon cultivation is \r\n                                                presently concentrated along the coastal belt stretching along from Kaluthara \r\n                                                to Mathara, it has also made inroads to the inland \r\n                                            </p>\r\n\r\n                                            <p>\r\n                                                of Kalutara, Ambalangoda, Matara and Ratnapura. \r\n                                                The extent under cinnamon in Sri Lanka is 25,500ha. \r\n                                                Although, the bulk of cinnamon plantations are about 70 - 80 years old, \r\n                                                the size of holdings has been diminishing and only about 5-10% of \r\n                                                the plantations are of sizeable extent ranging from 8 - 10ha.\r\n                                            </p>\r\n', '<p>\r\nCinnamon is the dried bark of the perennial tree of C.zeylanicum of the Lauraceae family. True cinnamon is native to Sri Lanka. Cinnamon is originally grown wild in central hill country of Sri Lanka. The history of cinnamon dates back to about 2800 B.C where it can be found referenced as ”kwai” in Chinese writings. Cinnamon is even mentioned in the Bible when Moses used it as an ingredient for his anointing oil in ancient Rome. It was burned in Roman funerals perhaps partly as a way forward to off the odor of dead bodies. Emperor Nero is said to have burned a years’ worth of the dry supply of cinnamon at the funeral of his wife Poppaea Sabina. Ancient Egyptians used it in embalming mummies because of pleasant odors and its preservative qualities.\r\n</p>\r\n<p>\r\nCinnamon was a precious spice in the west during 14th -15th centuries and its’ primary use was to preserve meat and to retard the growth of bacteria.   The quest for cinnamon was a major factor which led to exploration of the world in 15th century. By that time the real cinnamon was produced in only one place, namely in Ceylon or Sri Lanka. Anyone who had the control of the supply flow would have made profits immensely. Portuguese traders made their way to Ceylon in the 15th century, enslaved the natives and had the control of the trade from Arabs. Soon the Dutch displaced the Portuguese and gained the control of the cinnamon monopoly. It was the Dutch who took a massive effort to boost the production by domestication of crop and expanding extent in the areas they had the control. Because of that effort cinnamon cultivations were moved to Western and Southern coastal belts of the island. Since 1815 the British took the control of the island and cinnamon trade too was moved to their hands. By this time the relative importance of spices in the world market had been declining due to the emerging plantation crop sector of tea and rubber, which restricted the further expansion of cinnamon.\r\nThe best historical evidence about the cinnamon trade in Sri Lanka is found in Up country-Dutch agreement (Hanguranketha agreement) signed in 14th February 1766 between the Sri Lankan king Sri Keerthi Sri Rajasinghe and the Dutch government.\r\nBy this agreement King had permitted the Dutch to cut and peel cinnamon in certain forest areas of Sri Lanka and Dutch agreed to protect the Kingdom from foreign invasion. </p>', '<p>\r\nCinnamon bark is largely available in the form of quills and making quills is unique to Sri Lanka. Quills are made by rolling the pealed bark and join several of them together to get a pipe like structure in the required length. Other than that pieces of bark are available as chips, quillings or featherings. Cinnamon is unique plant which has essential oil in leaves, bark and roots but chemical composition of them are completely different from each other. Essential oils are produced from both bark and leaves; major chemical in bark oil is Cinnamaldehyde and in leaf oil Euginol. Cinnamon is also available in pure ground form or as n ingredient in curry mixtures and pelleted form too.\r\n</p>\r\n<p>\r\nCinnamon is mostly used in cooking and baking. Cinnamon is a versatile spice which can be added to any food item such as salads, confectionaries, beverages, soups, stews and sauces. Cinnamon drink made by immersing pieces of bark in hot water is popular among Latin American countries. Cinnamon flavored tea is becoming popular. It is also used as a common ingredient in Chinese ad Aurvedic medicine. Cinnamon leaf and bark oils are used to flavor food products, in perfumery industry and in pharmaceutical industry.\r\n </p>\r\n', 1, 1, 'Lauraceae', 'Cinnamomum zealanicum Blum', NULL, NULL, 'A'),
	(2, 'black_pepper', 'Black Pepper', 'Pepper, popularly known as the "King of spices" and it accounts for  ….occupies largest percentage in the international spice trade. It is most widely used spice all over the world.', '<p>Pepper, popularly known as the <b>"King of spices"</b> and it accounts for  ….occupies largest percentage in the international spice trade. It is most widely used spice all over the world. \r\nBlack pepper of commerce is the mature dried berries of the woody perennial evergreen climbing vine, Piper nigrum. \r\nPepper is cultivated over an area of 32,800 ha of Sri Lanka and Matale, Kandy, Kegalle, Kurunegala and Nuwara Eliya are accounted as major districts of cultivation.\r\n</p>\r\n<p>\r\nIt can be grown either as a mono crop or as a mixed crop in the coconut and tea plantations using live and dead standards as support. Pepper is an ideal crop for home gardens where it can be trained on the existing tree species as well.\r\nSri Lankan black pepper has higher piperine content which conduces to fetch a premium price in international spice trade. \r\n</p>', '<p>\r\nPepper is the most widely used spice in the world and known as “King of the Spices”. Pepper crop is native to South Asia and historical records reveal that pepper is originated in South India.  Peppercorns were a much prized trade good often referred also as “black gold” and used by as a form of commodity money. Until well after the Middle age, virtually all of the black pepper found in Europe, the Middle East and the North Africa traveled there from India’s Malabar region. It was some part of the preciousness of these spices that led to the European efforts to find a sea route to India and consequently to the European Colonial occupation of the country as well as European discovery and colonization of America/s. Vietnam, Indonesia, Malaysia, India and Brazil are the main pepper producers in the world.\r\n</p>\r\n', '<p>\r\nPepper is largely produces as black pepper which is the dried whole fruit. White pepper is produced by removing outer pericarp and pepper is also available in crushed and ground forms. Small amount of green and ripened pepper is pickled in brine and dehydrated green pepper and preserved red pepper also traded. Pepper oil and oleoresins are also extracted marketed as value added products.\r\n</p>\r\n<p>\r\nPepper is mainly used as a spice and flavoring agent in food industry. It also has industrial uses in perfumery and pharmaceutical industries.\r\n</p>', 1, 1, 'Piperaceae', NULL, 'Pepper', 'Piper nigrum', 'A'),
	(3, 'nutmeg ', 'Nutmeg and Mace', 'Nutmeg (Myristica fragrans) is native of Moluccas in East Indonesia. It has been reported that the plants have been introduced into Sri Lanka in the beginning of nineteenth century.', '<p>\r\nNutmeg (Myristica fragrans) is native of Moluccas in East Indonesia. It has been reported that the plants have been introduced into Sri Lanka in the beginning of nineteenth century.\r\n</p>\r\n<p>\r\nNutmeg plant is a spreading evergreen tree reaches up to 15-20 m height. The leaves are alternate, dark green, pinnatinerved. Flowers are generally unisexual and dioecious. However, bisexual flowers of varying sexual composition can also be found. Occasional trees with male and female flowers are also seen in the plantations. Fruits are fleshy drupes, broadly pyriform, drooping with a circumferential longitudinal ridge. Fruit colour turns into yellow during the ripening and the pericarp splits into 2 halves exposing purplish-brown, shiny seed surrounded by a net like red aril. Indonesia, Grenada, Sri Lanka, Trinidad, China and India are the major countries producing nutmeg and mace. The world trade of these two spices is in the range of 8,000 -10,000 MT\r\n</p>\r\n<p>\r\nNutmeg tree yield two spices, nutmeg, which is the kernel of the seed and mace, which is the net-like crimson colored leathery out growth (aril) covering the shell of the seed\r\n</p>\r\n', '<p>\r\nNutmeg is a perennial ever green spice tree and a native of Molluccas in East Indonesia.  There is some evidence to suggest that the Roman priests may have burned nutmeg as a form of incense. It is also known to have been used as a prized and costly spice in medieval cuisine, used as flavorings, medicines, preserving agents and that were at the time highly valued in the European markets. Nutmeg is reported to have been introduced to Sri Lanka in the beginning of the 19th centaury but there are evidences that the crop had been brought here even before that by merchants who were traveling on the Silk Road. \r\n</p>\r\n', '<p>\r\nNutmeg and mace are the main two products. Oils are extracted from both nutmeg and mace. Powdered nutmeg and mace is used in curry powders.\r\n</p>\r\n<p>\r\nNutmeg and mace are mainly used for culinary purposes to flavor curries and other food products, confectionaries and bakery products. It is also used in preparation of beverages and drinks. Nutmeg is used as an ingredient in Ayurvedeic and Chinese medicine. \r\n</p>\r\n', 1, 1, 'Myristicaceae', 'Myristica Fragrans ', NULL, NULL, 'A'),
	(4, 'cardamom', 'Cardamom', 'Cardamom, known as the “Queen of Spices” is a perennial herbaceous plant with a pseudo stem and thick irregular shaped rhizomes. Cardamom grows wild in the Western Ghats of Southern India.', '<p>\r\nCardamom, known as the <b>“Queen of Spices”</b>  is a perennial herbaceous plant with a pseudo stem and thick irregular shaped rhizomes. Cardamom grows wild in the Western Ghats of Southern India.\r\n Dried fruit or Cardamom capsule is traded as a spice.\r\n There are several commercial grades of cardamom including whole cardamom as primary products in spice trade, \r\nground form as secondary processed products and in the form of extractions of oil and oleoresin as value added products. \r\nCardamom is mainly used in the food industry as a flavoring agent.  Cardamom Oil is used for flavoring of beverages and drinks such as coffee and tea.\r\n</p>\r\n', '<p>\r\nCardamom, known as the “Queen of Spices” is a perennial herbaceous plant with a pseudo stem and thick irregular shaped rhizomes. Cardamom grows wild in the Western Ghats of Southern India. Many historical texts mention cardamom as a flavouring and medicinal crop. The medical compendium Charaka Sanhita written between the 2nd century A.D. refers to it as an ingredient in some drug preparations. Cardamom is also mentioned in Sanskrit texts of the 4th century B.C. in a treatise on politics called Kautilaya’s Arthasashasthra and in Taitirriya Samhitha where it is used in offering during ceremonies. In the 11th century in Indian cardamom was included in the list of ingredients for panchasugandha-thambula or five-fragrance betel chew in the Monasollasa or book of Splendour. It was also included in recipes from the court of Sultan of Mandu dating from about 1500 A.D. Cardamom was brought to an article of international trade by Arab traders and according to the Portuguese traveler Barbosa, in 1524 the international trade of cardamom was well developed.   \r\n</p>\r\n', '<p>\r\nDried fruit or Cardamom capsule is the commodity of trade. Cardamom can be found as whole cardamom or in the ground form. It is also used in the extraction of oil and oleoresin. Cardamom is mainly used in the food industry as a flavoring agent in curry or meat dishes, sweets, confectionaries, in bakery products, and as an ingredient of curry (masala) powder. Cardamom Oil is used for flavoring of beverages and drinks such as coffee and tea. \r\n</p>\r\n<p>\r\nIt is also used in Ayurveda and Chinese medicine as a powerful aromatic, stimulant, carminative, stomachic, and diuretic.\r\n</p>\r\n', 1, 1, 'Zingiberaceae', 'Elettaria cardamom', 'Cardamom', NULL, 'A'),
	(5, 'clove', 'Clove (Eugenia caryophyllus) ', 'Clove of commerce is the dried, fully grown but still unopened flower buds of the evergreen tree Eugenia caryophyllus of the family Myrtaceae. \r\nClove oil obtained by the distillation of flower buds, inflorescence branches left after the buds have be', '<p>\r\nClove of commerce is the dried, fully grown but still unopened flower buds of the evergreen tree Eugenia caryophyllus of the family Myrtaceae. \r\nClove oil obtained by the distillation of flower buds, inflorescence branches left after the buds have been removed, and the leaves is the other product of commercial value.\r\n It is a colourless or slightly yellowish liquid, becoming darker with age and exposure to the light. The clove tree is a medium sized symmetrically shaped tree with smooth grey bark.\r\n Fully grown trees are usually 15 - 20m tall. \r\n</p>\r\n', '<p>\r\nThe clove tree is a medium sized symmetrically shaped tree with smooth grey bark. It is believed to be originated in Maluku Islands in Indonesia. Clove along with nutmeg and pepper were highly prized in Roman Era. Cloves were traded by Arabs in the Middle ages but in the 15th century Portugal took over the trade. The Portuguese brought large quantities of cloves to Europe mainly from Malku Islands and valued it at seven grams of gold per kg. Later the Spanish then the Dutch dominated the trade till the seventeenth century.  The French introduced clove to Mauritius in the year 1770 subsequently the cultivations were introduced to Guiana, Zanzibar, West Indies and most of the Brazil.  It is not known how and when clove was introduced to Sri Lanka but may be the Arab traders or Colonial rulers may have brought the plant to the country as Sri Lanka was a major trading hub for spices during that time. \r\n</p>\r\n', NULL, 1, 1, 'Myrtaceae', NULL, 'Clove', NULL, 'A');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;


-- Dumping structure for table spice.item_all
DROP TABLE IF EXISTS `item_all`;
CREATE TABLE IF NOT EXISTS `item_all` (
  `item_code` varchar(30) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `short_description` varchar(90) DEFAULT NULL,
  `description` text,
  `category` int(11) DEFAULT NULL,
  `sub_category` int(11) DEFAULT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `condition` varchar(45) DEFAULT NULL,
  `availability` varchar(45) DEFAULT NULL,
  `shipping_status` enum('Y','N') DEFAULT NULL COMMENT 'Y - Yes; N- No (Free)',
  `old_price` decimal(12,2) DEFAULT NULL,
  `new_price` decimal(12,2) DEFAULT NULL,
  `discount_amount` decimal(12,2) DEFAULT NULL,
  `discount_rate` decimal(5,2) DEFAULT NULL,
  `status` enum('A','D','S') DEFAULT NULL COMMENT 'A - Active; D - Delete; S - Suspend',
  PRIMARY KEY (`item_code`),
  KEY `fk_item_item_category_idx` (`category`),
  KEY `fk_item_item_sub_category1_idx` (`sub_category`),
  CONSTRAINT `fk_item_item_category` FOREIGN KEY (`category`) REFERENCES `item_category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_item_sub_category1` FOREIGN KEY (`sub_category`) REFERENCES `item_sub_category` (`sub_category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table spice.item_all: ~0 rows (approximately)
/*!40000 ALTER TABLE `item_all` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_all` ENABLE KEYS */;


-- Dumping structure for table spice.item_category
DROP TABLE IF EXISTS `item_category`;
CREATE TABLE IF NOT EXISTS `item_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_code` varchar(25) DEFAULT NULL,
  `category_name` varchar(45) DEFAULT NULL,
  `categoryc_description` varchar(200) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table spice.item_category: ~0 rows (approximately)
/*!40000 ALTER TABLE `item_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_category` ENABLE KEYS */;


-- Dumping structure for table spice.item_grade
DROP TABLE IF EXISTS `item_grade`;
CREATE TABLE IF NOT EXISTS `item_grade` (
  `grade_id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(45) DEFAULT NULL,
  `grade_code` varchar(25) DEFAULT NULL,
  `grade_name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`grade_id`),
  KEY `fk_item_grade_item1_idx` (`item`),
  CONSTRAINT `fk_item_grade_item1` FOREIGN KEY (`item`) REFERENCES `item_all` (`item_code`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table spice.item_grade: ~0 rows (approximately)
/*!40000 ALTER TABLE `item_grade` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_grade` ENABLE KEYS */;


-- Dumping structure for table spice.item_sub_category
DROP TABLE IF EXISTS `item_sub_category`;
CREATE TABLE IF NOT EXISTS `item_sub_category` (
  `sub_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_category_name` varchar(45) DEFAULT NULL,
  `sub_category_description` varchar(200) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sub_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table spice.item_sub_category: ~0 rows (approximately)
/*!40000 ALTER TABLE `item_sub_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_sub_category` ENABLE KEYS */;


-- Dumping structure for table spice.order
DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `shipping_address` int(11) DEFAULT NULL,
  `billing_address` int(11) DEFAULT NULL,
  `grand_total` decimal(15,2) DEFAULT NULL,
  `total_discount` decimal(15,2) DEFAULT NULL,
  `shipping` decimal(15,2) DEFAULT NULL,
  `net_amount` decimal(15,2) DEFAULT NULL,
  `status` enum('A','I','D') DEFAULT NULL,
  `date_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `current_status` enum('P','R','S','C') DEFAULT NULL,
  `updated_date_time` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `fk_order_customer1_idx` (`customer_id`),
  KEY `fk_order_contact1_idx` (`shipping_address`),
  KEY `fk_order_contact2_idx` (`billing_address`),
  CONSTRAINT `fk_order_contact1` FOREIGN KEY (`shipping_address`) REFERENCES `contact` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_contact2` FOREIGN KEY (`billing_address`) REFERENCES `contact` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table spice.order: ~0 rows (approximately)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;


-- Dumping structure for table spice.order_item
DROP TABLE IF EXISTS `order_item`;
CREATE TABLE IF NOT EXISTS `order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `item_code` varchar(30) DEFAULT NULL,
  `sample_id` int(11) DEFAULT NULL,
  `sample_price` decimal(15,2) DEFAULT NULL,
  `shipping_rate` decimal(15,2) DEFAULT NULL,
  `qty` decimal(6,2) DEFAULT NULL,
  `total_amount` decimal(15,2) DEFAULT NULL,
  `total_shipping` decimal(15,2) DEFAULT NULL,
  `discount` decimal(15,2) DEFAULT NULL,
  `net_amount` decimal(15,2) DEFAULT NULL,
  `status` enum('A','I','D') DEFAULT 'A' COMMENT 'A:ACTIVE\nI:INACTIVE\nD:DELETE',
  PRIMARY KEY (`id`),
  KEY `fk_order_item_order1_idx` (`order_id`),
  KEY `fk_order_item_item1_idx` (`item_code`),
  KEY `fk_order_item_sample1_idx` (`sample_id`),
  CONSTRAINT `fk_order_item_item1` FOREIGN KEY (`item_code`) REFERENCES `item_all` (`item_code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_item_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_item_sample1` FOREIGN KEY (`sample_id`) REFERENCES `sample` (`sample_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table spice.order_item: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item` ENABLE KEYS */;


-- Dumping structure for table spice.order_status
DROP TABLE IF EXISTS `order_status`;
CREATE TABLE IF NOT EXISTS `order_status` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `status` enum('P','R','S','C') DEFAULT 'P' COMMENT 'P:PENDINGH\nR:READY_TO_SHIP\nS:SHIPED\nC:CONFERM',
  `date_time` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table spice.order_status: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_status` ENABLE KEYS */;


-- Dumping structure for table spice.sample
DROP TABLE IF EXISTS `sample`;
CREATE TABLE IF NOT EXISTS `sample` (
  `sample_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_grade` int(11) DEFAULT NULL,
  `sample_description` varchar(45) DEFAULT NULL,
  `sample_size` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `shipping_status` varchar(45) DEFAULT NULL,
  `shipping_amount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sample_id`),
  KEY `fk_sample_item_grade1_idx` (`item_grade`),
  CONSTRAINT `fk_sample_item_grade1` FOREIGN KEY (`item_grade`) REFERENCES `item_grade` (`grade_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table spice.sample: ~0 rows (approximately)
/*!40000 ALTER TABLE `sample` DISABLE KEYS */;
/*!40000 ALTER TABLE `sample` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
