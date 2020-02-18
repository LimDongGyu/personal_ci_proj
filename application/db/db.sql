CREATE TABLE `tbl_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(25) DEFAULT NULL,
  `firstName` varchar(25) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `contactNo` int(15) DEFAULT NULL,
  `bio` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COMMENT='user auth database';

CREATE TABLE `auth` (
  `id_key` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` text NOT NULL,
  `id` text NOT NULL,
  `pw` text NOT NULL,
  PRIMARY KEY (`id_key`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COMMENT='user auth database';

CREATE TABLE `comment` (
  `id_key` int(11) NOT NULL AUTO_INCREMENT,
  `id_key_join` int(11) NOT NULL,
  `uploader_id` text NOT NULL,
  `uploader_nickname` text NOT NULL,
  `time` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_key`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

CREATE TABLE `posts` (
  `id_key` int(11) NOT NULL AUTO_INCREMENT,
  `uploader_id` text NOT NULL,
  `uploader_nickname` text NOT NULL,
  `time` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_key`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='ckeditor uploaded database table';