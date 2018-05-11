CREATE TABLE `php-mvc`.`URLs` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `long_url` varchar(255) NOT NULL,
 `short_url` varchar(255) DEFAULT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `long_url` (`long_url`),
 UNIQUE KEY `short_url` (`short_url`)
) ENGINE=InnoDB AUTO_INCREMENT=100001 DEFAULT CHARSET=latin1
