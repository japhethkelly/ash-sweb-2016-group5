CREATE TABLE upload 
(
name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
researchtitle VARCHAR(100) NOT NULL,
researchtype ENUM ('M', 'F'),
description VARCHAR(10000) NOT NULL,
subdate DATE NOT NULL,
content MEDIUMBLOB NOT NULL
);