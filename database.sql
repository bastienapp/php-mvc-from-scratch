CREATE DATABASE  IF NOT EXISTS `games_library`;
USE `games_library`;

DROP TABLE IF EXISTS `game`;
CREATE TABLE `game` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `game` VALUES (null,'Portal 2','Best game ever qui contient peut-être un gâteau et un portal gun','https://s2.gaming-cdn.com/images/products/220/orig/game-steam-portal-2-cover.jpg',10),(null,'Limbo','Plate-forme et dépression','https://s3.gaming-cdn.com/images/products/1292/orig/limbo-pc-mac-jeu-steam-cover.jpg',9),(null,'Crazy Frog Racer','Mario Kart sous acide','https://www.mobygames.com/images/covers/l/335526-crazy-frog-racer-playstation-2-manual.jpg',2),(null,'Metroid Dread','Another Metroid in 2.5D','https://m.media-amazon.com/images/I/81ygZZVdUvS._AC_SL1500_.jpg',9);
