Blog Yii 2 Basic Project Template
============================

db connection properties - in config/db

after db creation execute follow:

CREATE TABLE `blog`.`blog_data` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `author` VARCHAR(255) NOT NULL,
  `text` TEXT NOT NULL,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`id`));
