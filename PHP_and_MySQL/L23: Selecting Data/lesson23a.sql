CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `description` text,
  `code` int(11) NOT NULL DEFAULT '42'
) ENGINE=MyISAM;

INSERT INTO `table1` (`id`, `description`, `code`) VALUES
(101, 'abc', 99),
(102, 'a''bc', 15),
(103, 'a''bc', 15),
(104, 'a''bc', 15),
(105, 'def', 23),
(106, 'ghi', 23),
(107, 'jkl', 15),
(108, 'mno', 15),
(109, 'pqr', 23),
(110, 'stu', 42),
(111, 'vwx', 42),
(112, 'yza', 42),
(118, 'efg', 99);