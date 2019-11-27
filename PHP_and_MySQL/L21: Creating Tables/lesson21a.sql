'2013-01-08 08:30:00'
'13-01-08 08:30:00' # two digit year is fine
'13-1-8 8:30' # you do not need leading zeros
'13^1+8 8/30' # any punctuation works
'130108083000' # no delimiters is fine
'13.01.08' # just the date, if that's all you need
'13/01/00' # you can use 00 for a missing part (not TIMESTAMP)

'0830' # is an elapse time of 8 mins, 30 secs
'08:30' # is 8:30 am

ENUM('small', 'medium', 'large')

SET('a','b','c','d')

`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
...
PRIMARY KEY (`id`)'

`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,


`dept` VARCHAR(20) NOT NULL DEFAULT 'Office',
`startdate` DATE NOT NULL DEFAULT '0000-00-00'

CREATE [TEMPORARY] TABLE [IF NOT EXISTS] tbl_name (
    col_name data_type [NOT NULL | NULL] [DEFAULT default_value]
      [AUTO_INCREMENT] [UNIQUE [KEY] | [PRIMARY] KEY]
      [COMMENT 'string'],
    col_name data_type [NOT NULL | NULL] [DEFAULT default_value]
      [AUTO_INCREMENT] [UNIQUE [KEY] | [PRIMARY] KEY]
      [COMMENT 'string']
) ENGINE [=] engine_name 
  | AUTO_INCREMENT [=] value
  | [DEFAULT] COLLATE [=] collation_name
  
CREATE [TEMPORARY] TABLE [IF NOT EXISTS] tbl_name (
    col_name data_type [NOT NULL | NULL] [DEFAULT default_value]
      [AUTO_INCREMENT] [UNIQUE [KEY] | [PRIMARY] KEY]
      [COMMENT 'string'],
    col_name data_type [NOT NULL | NULL] [DEFAULT default_value]
      [AUTO_INCREMENT] [UNIQUE [KEY] | [PRIMARY] KEY]
      [COMMENT 'string']
) table_options;

Here are the valid data_types:
    BIT[(length)]
  | TINYINT[(length)] [UNSIGNED] [ZEROFILL]
  | SMALLINT[(length)] [UNSIGNED] [ZEROFILL]
  | MEDIUMINT[(length)] [UNSIGNED] [ZEROFILL]
  | INT[(length)] [UNSIGNED] [ZEROFILL]
  | INTEGER[(length)] [UNSIGNED] [ZEROFILL]
  | BIGINT[(length)] [UNSIGNED] [ZEROFILL]
  | REAL[(length,decimals)] [UNSIGNED] [ZEROFILL]
  | DOUBLE[(length,decimals)] [UNSIGNED] [ZEROFILL]
  | FLOAT[(length,decimals)] [UNSIGNED] [ZEROFILL]
  | DECIMAL[(length[,decimals])] [UNSIGNED] [ZEROFILL]
  | NUMERIC[(length[,decimals])] [UNSIGNED] [ZEROFILL]
  | DATE
  | TIME
  | TIMESTAMP
  | DATETIME
  | YEAR
  | CHAR[(length)]
      [CHARACTER SET charset_name] [COLLATE collation_name]
  | VARCHAR(length)
      [CHARACTER SET charset_name] [COLLATE collation_name]
  | BINARY[(length)]
  | VARBINARY(length)
  | TINYBLOB
  | BLOB
  | MEDIUMBLOB
  | LONGBLOB
  | TINYTEXT [BINARY]
      [CHARACTER SET charset_name] [COLLATE collation_name]
  | TEXT [BINARY]
      [CHARACTER SET charset_name] [COLLATE collation_name]
  | MEDIUMTEXT [BINARY]
      [CHARACTER SET charset_name] [COLLATE collation_name]
  | LONGTEXT [BINARY]
      [CHARACTER SET charset_name] [COLLATE collation_name]
  | ENUM(value1,value2,value3,...)
      [CHARACTER SET charset_name] [COLLATE collation_name]
  | SET(value1,value2,value3,...)
      [CHARACTER SET charset_name] [COLLATE collation_name]
  | spatial_type


Here are some common table options:
ENGINE [=] engine_name 
AUTO_INCREMENT [=] value
[DEFAULT] CHARACTER SET [=] charset_name
[DEFAULT] COLLATE [=] collation_name;

  
ALTER TABLE tbl_name
    alter_specification [, alter_specification] ...
    [partition_options]
  