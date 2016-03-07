SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id`         INT(10)     NOT NULL,
  `name`       VARCHAR(50) NOT NULL,
  `slug`       VARCHAR(50) NOT NULL,
  `post_count` VARCHAR(50) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id`       INT(10)      NOT NULL,
  `post_id`  INT(10)      NOT NULL,
  `username` VARCHAR(255) NOT NULL,
  `mail`     VARCHAR(255) NOT NULL,
  `content`  MEDIUMTEXT   NOT NULL,
  `created`  DATETIME     NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id`          INT(10)      NOT NULL,
  `category_id` INT(10)      NOT NULL,
  `user_id`     INT(10)      NOT NULL,
  `name`        VARCHAR(255) NOT NULL,
  `slug`        VARCHAR(255) NOT NULL,
  `content`     LONGTEXT     NOT NULL,
  `created`     DATETIME     NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id`       INT(10)      NOT NULL,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

ALTER TABLE `categories`
ADD PRIMARY KEY (`id`),
ADD KEY `id` (`id`),
ADD KEY `name` (`name`);

ALTER TABLE `comments`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_comments_posts1_idx` (`post_id`),
ADD KEY `username` (`username`);

ALTER TABLE `posts`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_posts_categories_idx` (`category_id`),
ADD KEY `fk_posts_users1_idx` (`user_id`),
ADD KEY `id` (`id`);

ALTER TABLE `users`
ADD PRIMARY KEY (`id`),
ADD KEY `id` (`id`);

ALTER TABLE `categories`
MODIFY `id` INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 4;

ALTER TABLE `comments`
MODIFY `id` INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 6;

ALTER TABLE `posts`
MODIFY `id` INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 8;

ALTER TABLE `users`
MODIFY `id` INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

ALTER TABLE `comments`
ADD CONSTRAINT `fk_comments_posts1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `posts`
ADD CONSTRAINT `fk_posts_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_posts_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
