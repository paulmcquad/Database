CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `description` text,
  `code` int(11) NOT NULL DEFAULT '42'
) ENGINE=MyISAM;

INSERT INTO `table1` VALUES ('101','abc','15');

INSERT INTO `table1` VALUES ("102","a'bc","15");
INSERT INTO `table1` VALUES ('103','a''bc','15');
INSERT INTO `table1` VALUES ('104','a\'bc','15');

INSERT INTO `table1` VALUES ('105','def','23'), ('106', 'ghi','23'), ('107', 'jkl','15');

INSERT INTO `table1` VALUES ('0','mno','15'), ('', 'pqr','23'), (NULL, 'stu','42');

INSERT INTO `table1` VALUES (NULL,'vwx',DEFAULT);

INSERT INTO `table1` (`description`) VALUES ('yza');

INSERT IGNORE INTO `table1` VALUES ('101','bcd','15'), ('118','efg','23');

INSERT INTO `table1` VALUES ('101','bcd','15'), ('118','efg','23') ON DUPLICATE KEY UPDATE code = '99';
