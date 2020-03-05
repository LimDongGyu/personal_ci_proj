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

CREATE TABLE `testi_card` (
  `testi_id` int NOT NULL AUTO_INCREMENT,
  `testi_context` text,
  `testi_title` text,
  `testi_description` text,
  `testi_regist_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `testi_img` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`testi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

CREATE TABLE `chatbot_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `block_id` varchar(30) DEFAULT NULL,
  `block_name` varchar(100) DEFAULT NULL,
  `utterance` varchar(300) DEFAULT NULL,
  `registed_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci


CREATE TABLE testdb.chatbot_custominfo (
	id INT auto_increment NOT NULL,
	custom_name varchar(20) null,
	custom_phone varchar(30) null,
	custom_car TINYINT(1) null,
	custom_memo varchar(300) null,
	primary key(id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;