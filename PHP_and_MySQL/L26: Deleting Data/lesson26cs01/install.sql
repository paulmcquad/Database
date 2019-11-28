DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `first_name` VARCHAR(50) NOT NULL,
  `last_name` VARCHAR(50) NOT NULL,
  `position` VARCHAR(50) DEFAULT NULL,
  `email` VARCHAR(255) DEFAULT NULL,
  `phone` VARCHAR(20) DEFAULT NULL
) ENGINE=MyISAM;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `cat_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `cat_name` VARCHAR(50) NOT NULL,
  `cat_description` TEXT NULL,
  `cat_image` VARCHAR(255) NULL
) ENGINE = MYISAM;

DROP TABLE IF EXISTS `lots`;
CREATE TABLE `lots` (
  `lot_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `lot_name` varchar(50) NOT NULL,
  `lot_description` TEXT NULL,
  `lot_image` VARCHAR(255) NULL,
  `lot_number` INT(11) UNSIGNED NULL,
  `lot_price` DECIMAL(10,2) DEFAULT '0' NULL,
  `cat_id` INT(11) UNSIGNED NULL
) ENGINE=MyISAM;

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `position`, `email`, `phone`) VALUES
(1, 'Martha', 'Smith', 'none', 'martha@example.com', NULL),
(2, 'George', 'Smith', 'none', 'george@example.com', '515-555-1236'),
(3, 'Jeff', 'Meyers', 'hip hop expert for shure', 'jeff@example.com', NULL),
(4, 'Peter', 'Meyers', 'none', 'peter@example.com', '515-555-1237'),
(5, 'Sally', 'Smith', 'none', 'sally@example.com', '515-555-1235'),
(6, 'Sarah', 'Finder', 'Lost Soul', 'finder@a.com', '555-123-5555');

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`, `cat_image`) VALUES
(1, 'Women', 'Women''s Clothing from the 18th century to modern times', 'gernreich-10-26.jpg'),
(2, 'Gents', 'Gents'' clothing from the 18th century to modern times', 'tophat-8-63.jpg'),
(3, 'Sporting', 'Sporting clothing and gear', 'wool-6-171.jpg');
