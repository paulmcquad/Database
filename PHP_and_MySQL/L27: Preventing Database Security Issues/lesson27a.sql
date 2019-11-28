DELETE FROM authors WHERE id=4;

DELETE FROM authors WHERE id=4 OR 1=1;

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
(3, 'Nancy', 'Misson'),
(4, 'Paddy', 'O''Brian');