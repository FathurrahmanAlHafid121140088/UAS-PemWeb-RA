SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `nama_tabel_pengguna`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR (30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `data_player` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nickname VARCHAR(30) NOT NULL,
    uid INT NOT NULL,
    level INT NOT NULL,
    device VARCHAR(30) NOT NULL,
    character_name VARCHAR(30) NOT NULL,
    weapon VARCHAR(30) NOT NULL,
    element VARCHAR(30) NOT NULL
);
