CREATE TABLE `content` (
	`id` int NOT NULL AUTO_INCREMENT,
	`title` varchar(100) NOT NULL,
	`description` varchar(1000) NOT NULL,
	`date` DATE NOT NULL,
	`category` int NOT NULL,
	`launchYear` bigint NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `category` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `links` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`url` varchar(1000) NOT NULL,
	`content` varchar(1000) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `message` (
	`id` int NOT NULL AUTO_INCREMENT,
	`email` varchar(100) NOT NULL,
	`message` varchar(1000) NOT NULL,
	`timeStamp` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `tags` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `contentTags` (
	`id` int NOT NULL AUTO_INCREMENT,
	`content` int NOT NULL,
	`tag` int NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `content` ADD CONSTRAINT `content_fk0` FOREIGN KEY (`category`) REFERENCES `category`(`id`);

ALTER TABLE `links` ADD CONSTRAINT `links_fk0` FOREIGN KEY (`content`) REFERENCES `content`(`id`);

ALTER TABLE `contentTags` ADD CONSTRAINT `contentTags_fk0` FOREIGN KEY (`content`) REFERENCES `content`(`id`);

ALTER TABLE `contentTags` ADD CONSTRAINT `contentTags_fk1` FOREIGN KEY (`tag`) REFERENCES `tags`(`id`);

