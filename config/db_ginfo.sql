CREATE DATABASE IF NOT EXISTS gerenciador_info;
USE gerenciador_info;

CREATE TABLE IF NOT EXISTS informacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dado TEXT NOT NULL
);
