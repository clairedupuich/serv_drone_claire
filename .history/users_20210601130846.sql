CREATE TABLE IF NOT EXISTS users 
(
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) UNIQUE NOT NULL,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    password VARCHAR(255) NOT NULL,
        ON DELETE CASCADE
) ENGINE=INNODB;