ALTER TABLE `contacts` 
  ADD `user_name` varchar(15) NOT NULL,
  ADD `password` varchar(128) NOT NULL,
  ADD `access` varchar(10) NOT NULL;  

ALTER TABLE `contacts` ADD UNIQUE (
`user_name`
)