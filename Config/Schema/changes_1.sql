/* 11:13:35 Localhost e-commerce */ ALTER TABLE `items` CHANGE `start` `stars` INT(11)  NULL  DEFAULT NULL;
/* 11:17:07 Localhost e-commerce */ ALTER TABLE `items` ADD `type_id` INT  NULL  DEFAULT NULL  AFTER `stars`;
/* 11:24:01 Localhost e-commerce */ ALTER TABLE `items` DROP `color`;
