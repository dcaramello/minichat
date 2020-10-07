DROP DATABASE IF EXISTS minichat_php;
CREATE DATABASE minichat_php;
USE minichat_php;


CREATE USER 'dim'@'localhost';
GRANT ALL PRIVILEGES ON minichat_php.* TO 'dim'@'localhost' IDENTIFIED BY 'dim';

CREATE TABLE minichat_table (
  id int NOT NULL AUTO_INCREMENT,
  pseudo varchar(255) NOT NULL,
  message TEXT NOT NULL,
  PRIMARY KEY (id)
)
ENGINE=innoDB;
