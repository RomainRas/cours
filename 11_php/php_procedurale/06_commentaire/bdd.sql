CREATE DATABASE commentaires;
USE commentaires;
CREATE TABLE commentaire (
    id_commentaire INT AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
    date_heure_message DATETIME NOT NULL
);
