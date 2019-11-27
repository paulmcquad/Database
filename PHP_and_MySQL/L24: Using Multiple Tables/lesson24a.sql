DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

INSERT INTO `authors` (`id`, `first_name`, `last_name`) VALUES
(1, 'Sally', 'Meyers'),
(2, 'George', 'Smith'),
(3, 'Peter', 'Gabriel'),
(4, 'Dale', 'Mercer');

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(20) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

INSERT INTO `types` (`type_id`, `type_name`) VALUES
(1, 'History'),
(2, 'Suspense'),
(3, 'Science Fiction');

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

INSERT INTO `books` (`id`, `title`, `author`, `type_id`) VALUES
(1, 'A Long Day in Spring', 3, 1),
(2, 'Fifteen Hours in March', 2, 2),
(3, 'Green Trees Go Wild', 1, 3),
(4, 'And Then It Happened', 1, 1),
(5, 'Missing in Action', 5, 2),
(6, 'Fourteen Days in February', 2, 2);