-- creation of the DB
CREATE DATABASE sabores_db;
USE sabores_db;

-- creation of the table that will store each reservations
CREATE TABLE reservations (
    reservation_id   INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    customer_name    VARCHAR(50)  NOT NULL,
    phone            VARCHAR(20)  NOT NULL,
    email            VARCHAR(100),
    reservation_date DATE         NOT NULL,
    reservation_time TIME         NOT NULL,
    guests           INT UNSIGNED NOT NULL,
    special_request  VARCHAR(255)
);
-- making one user that can only read and add reservations
CREATE USER 'sabores_user'@'localhost' IDENTIFIED BY 'sabores123'
GRANT SELECT, INSERT
ON sabores_db.*
TO 'sabores_user'@'localhost';