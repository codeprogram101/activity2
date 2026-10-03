-- SimplePOS database export
-- Database: act2sapnu
-- Generated: 2026-10-03

CREATE DATABASE IF NOT EXISTS `act2sapnu`
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE `act2sapnu`;

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `full_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20),
  `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
  (1, 'LeBron James', 'lebron.james@example.com', '0917 555 0101', '2026-10-03 00:00:00'),
  (2, 'Stephen Curry', 'stephen.curry@example.com', '0918 555 0102', '2026-10-03 00:00:00'),
  (3, 'Kevin Durant', 'kevin.durant@example.com', '0919 555 0103', '2026-10-03 00:00:00'),
  (4, 'Giannis Antetokounmpo', 'giannis.antetokounmpo@example.com', '0920 555 0104', '2026-10-03 00:00:00'),
  (5, 'Nikola Jokic', 'nikola.jokic@example.com', '0921 555 0105', '2026-10-03 00:00:00');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `full_name` VARCHAR(100) NOT NULL,
  `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `username`, `full_name`, `created_at`) VALUES
  (1, 'luka77', 'Luka Doncic', '2026-10-03 00:00:00'),
  (2, 'tatum0', 'Jayson Tatum', '2026-10-03 00:00:00'),
  (3, 'sgalex', 'Shai Gilgeous-Alexander', '2026-10-03 00:00:00'),
  (4, 'embiid21', 'Joel Embiid', '2026-10-03 00:00:00'),
  (5, 'wemby1', 'Victor Wembanyama', '2026-10-03 00:00:00');
