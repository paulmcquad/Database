SELECT * FROM `table1`;

SELECT `id`, `description` FROM `table1`;

SELECT `description`, `id` FROM `table1`;

SELECT `id` AS `myid`, `description` FROM `table1`;

SELECT CONCAT( CONVERT(`id` USING utf8) , ':', `description` ) AS `item`
FROM `table1`;

SELECT CONCAT( `description`, ', ', SUBSTRING(`description`,1,1 )) AS `item`
FROM `table1`;

SELECT COUNT(*) FROM `table1`;

SELECT COUNT(DISTINCT `description`) FROM `table1`;

SELECT * FROM `table1` LIMIT 5;
SELECT * FROM `table1` LIMIT 0, 5;
SELECT * FROM `table1` LIMIT 5 OFFSET 0;

SELECT * FROM `table1` LIMIT 5, 5;
SELECT * FROM `table1` LIMIT 5 OFFSET 5;

SELECT * FROM `table1` ORDER BY `description` ASC

SELECT * FROM `table1` ORDER BY `code` DESC, `description` ASC

SELECT * FROM `table1` WHERE `id` = 105;
